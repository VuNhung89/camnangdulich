<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // các cột có thể gán giá trị
    protected $fillable = [
        'name',
        'email',
        'bio',
        'dob',
        'password',
        'avatar',
        'role',
        'is_active'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'dob' => 'date',
    ];

    //Một người dùng có nhiều bài viết
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //Một user có nhiều đánh giá
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    //Một user có nhiều bình luận
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //Một user có nhiều đặt chỗ
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    //Một user thích nhiều bài viết
    public function likes()
    {
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id');
    }
}
