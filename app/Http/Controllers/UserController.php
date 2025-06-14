<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //API quản lý người dùng    
    //Khóa/mở khóa user:
    //Mục đích: Admin vô hiệu hóa hoặc kích hoạt tài khoản user.
    public function toggleActive(User $user)
    {
        $user->update(['is_active' => !$user->is_active]);
        return response()->json(['message' => $user->is_active ? 'User activated' : 'User deactivated']);
    }
}
