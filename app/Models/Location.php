<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị 
    protected $fillable = ['name', 'image', 'description', 'transportation', 'booking_info'];

    //1 địa điểm có nhiều khách sạn
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    //1 địa điểm có nhiều tours
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    //1 địa điểm có nhiều bài viết
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
