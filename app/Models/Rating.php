<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị
    protected $fillable = ['user_id', 'post_id', 'rating'];

    //1 đánh giá thuộc về 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 đánh giá thuộc về 1 bài viết
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
