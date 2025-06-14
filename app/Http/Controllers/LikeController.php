<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    //Nếu người dùng đã like bài viết → sẽ unlike (xóa like).
    //Nếu chưa like → sẽ like bài viết đó.

    public function toggle(Request $request, Post $post)
    {
        $userId = Auth::id(); //lấy id của người dùng đang đăng nhập
        //gọi quan hệ like từ model Post để lấy tất cả lượt like bài post này($post->likes)
        //thêm điều kiện lọc: chỉ lấy like nào có user_id = người đang đăng nhập (where)('user_id', $userId)
        //lấy like đầu tiên nếu có (nếu không có thì trả về null) (first())
        $existingLike = $post->likes()->where('user_id', $userId)->first();

        if ($existingLike) {
            $existingLike->delete(); //nếu tìm thấy like đó thì xóa, trả về Unliked
            return response()->json(['message' => 'Unliked']);
        }

        //còn không thì tạo like mới, user_id = userId đang đăng nhập gắn với bài post
        $post->likes()->create(['user_id' => $userId]);
        return response()->json(['message' => 'Liked'], 201);
    }
}
