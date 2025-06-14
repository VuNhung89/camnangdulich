<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị
    protected $fillable = ['user_id', 'post_id', 'content'];

    //1 bình luận thuộc về một user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 bình luận thuộc về một bài viết
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
