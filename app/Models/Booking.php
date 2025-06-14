<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    //các cột có thể gán giá trị
    protected $fillable = ['user_id', 'tour_id', 'hotel_id', 'status', 'booking_date', 'total_price'];

    //1 booking thuộc về 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //1 booking thuộc về một tour
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    //1 booking thuộc về 1 khách sạn
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
