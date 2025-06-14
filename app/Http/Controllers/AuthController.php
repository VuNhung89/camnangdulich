<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['role'] = 'user';

        $user = User::create($data);
        $user->tokens()->delete();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            /** @var \App\Models\User $user */
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'token' => $token,
                'redirect' => $user->role === 'admin' ? '/dashboard' : '/',
            ]);
        }

        return response()->json(['error' => 'Thông tin đăng nhập không đúng'], 401);
    }

    public function user(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
        $posts_count = $user->posts()->count();

        //tính toán huy hiệu dựa trên số lượng bài viết
        $badges = [];
        if ($posts_count < 5) {
            $badges[] = ['name' => 'Tân Binh Du Lịch', 'icon' => 'star'];
        } elseif ($posts_count <= 10) {
            $badges[] = ['name' => 'Nhà Thám Hiểm', 'icon' => 'compass'];
        } else {
            $badges[] = ['name' => 'Huyền Thoại Du Lịch', 'icon' => 'trophy'];
        }

        //tính toán số lượng địa điểm đã ghé thăm
        $visited_locations_count = $user->posts()->distinct('location_id')->count('location_id');

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'role' => $user->role,
            'bio' => $user->bio,
            // 'dob' => $user->dob ? $user->dob->format('Y-m-d') : null,
            'dob' => optional($user->dob)->format('Y-m-d'),
            'created_at' => $user->created_at,
            'posts_count' => $posts_count,
            'badges' => $badges,
            'visited_locations_count' => $visited_locations_count,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Link đặt lại mật khẩu đã được gửi!'], 200)
            : response()->json(['message' => 'Không tìm thấy email.'], 400);
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:200',
            'dob' => 'nullable|date',
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = '/storage/' . $path;
        }

        $user->update($validated);

        return response()->json($user);
    }

    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = $request->user();
        if (!Hash::check($validated['current_password'], $user->password)) {
            return response()->json(['message' => 'Mật khẩu hiện tại không đúng'], 422);
        }

        $user->update(['password' => Hash::make($validated['new_password'])]);
        return response()->json(['message' => 'Đổi mật khẩu thành công']);
    }

    public function getUserPosts(Request $request)
    {
        return $request->user()->posts()->with('location')->get();
    }
}
