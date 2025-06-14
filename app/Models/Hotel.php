<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị
    protected $fillable = ['location_id', 'name', 'address', 'price', 'image', 'description'];

    // 1 khách sạn thuộc về một địa điểm
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    //1 khách sạn có nhiều booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
