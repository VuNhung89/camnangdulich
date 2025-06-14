<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::create([
            'user_id' => 6,
            'post_id' => 6,
            'rating' => 5 // 5 sao
        ]);
        Rating::create([
            'user_id' => 4,
            'post_id' => 5,
            'rating' => 4
        ]);
        Rating::create([
            'user_id' => 3,
            'post_id' => 2,
            'rating' => 4
        ]);
        Rating::create([
            'user_id' => 2,
            'post_id' => 4,
            'rating' => 5
        ]);
        Rating::create([
            'user_id' => 5,
            'post_id' => 1,
            'rating' => 5
        ]);
        Rating::create([
            'user_id' => 1,
            'post_id' => 3,
            'rating' => 4
        ]);
    }
}
