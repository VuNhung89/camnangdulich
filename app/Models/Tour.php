<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị
    protected $fillable = ['location_id', 'title', 'description', 'price', 'start_date', 'end_date', 'image'];

    //1 tour thuộc về một địa điểm
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    //1 tour có nhiều bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
