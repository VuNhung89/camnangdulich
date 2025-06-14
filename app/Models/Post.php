<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị 
    protected $fillable = ['user_id', 'location_id', 'title', 'content', 'status', 'image'];

    //1 bài viết thuộc về một user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 bài viết thuộc về một địa điểm
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    //1 bài viết có nhiều đánh giá
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    //1 bài viết có nhiều bình luận
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //1 bài post có nhiều user thích
    public function likes()
    {
        // return $this->belongsToMany(User::class, 'likes', 'user_id', 'post_id');
        return $this->hasMany(Like::class); // Sửa từ belongsToMany thành hasMany

    }
}
