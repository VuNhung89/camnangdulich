<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'user_id' => 6,
            'tour_id' => 5,
            'hotel_id' => 1,
            'status' => 'pending', // đang chờ xử lý
            'booking_date' => '2025-03-16',
            'total_price' => 1087.33
        ]);
        Booking::create([
            'user_id' => 4,
            'tour_id' => 6,
            'hotel_id' => 1,
            'status' => 'confirmed', // đã xác nhận
            'booking_date' => '2025-01-15',
            'total_price' => 957.82
        ]);
        Booking::create([
            'user_id' => 1,
            'tour_id' => 3,
            'hotel_id' => 3,
            'status' => 'confirmed',
            'booking_date' => '2025-03-01',
            'total_price' => 880.75
        ]);
        Booking::create([
            'user_id' => 2,
            'tour_id' => 2,
            'hotel_id' => 2,
            'status' => 'pending',
            'booking_date' => '2025-01-20',
            'total_price' => 725.40
        ]);
        Booking::create([
            'user_id' => 5,
            'tour_id' => 1,
            'hotel_id' => 6,
            'status' => 'cancelled',
            'booking_date' => '2025-02-15',
            'total_price' => 960.00
        ]);
        Booking::create([
            'user_id' => 3,
            'tour_id' => 4,
            'hotel_id' => 5,
            'status' => 'confirmed',
            'booking_date' => '2025-04-05',
            'total_price' => 685.20
        ]);
    }
}
