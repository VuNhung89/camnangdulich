<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Post $post)
    {
        //gọi quan hệ comments() trong model  ($post->comments())
        //lấy thêm thông tin người dùng đã bình luận(with('user))
        $comments = $post->comments()->with('user')->get();
        return response()->json($comments);
    }

    public function store(Request $request, Post $post)
    {
        //xác thực, bình luận ko để trống và phải là chuỗi
        $data = $request->validate([
            'content' => 'required|string',
        ]);

        //Tạo một comment mới liên kết với bài viết với user_id là user đang đăng nhập
        $comment = $post->comments()->create([
            'user_id' => Auth::id(),
            'content' => $data['content'],
        ]);

        //Tải thêm thông tin người dùng (user) cho bình luận vừa tạo
        $comment->load('user');
        return response()->json($comment, 201);
    }

    public function destroy(Comment $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $comment->delete();
        return response()->json(['message' => 'Comment deleted']);
    }

    //admin xóa bình luận bất kì
    public function adminDestroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['message' => 'Comment deleted by admin']);
    }

    //admin chỉnh sửa nội dung bình luận hoặc kiểm duyệt
    public function adminUpdate(Request $request, Comment $comment)
    {
        $data = $request->validate(['content' => 'required|string']);
        $comment->update($data);
        $comment->load('user');
        return response()->json($comment);
    }
}
