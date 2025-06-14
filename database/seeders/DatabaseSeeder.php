<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            LocationsTableSeeder::class,
            ToursTableSeeder::class,
            HotelsTableSeeder::class,
            PostsTableSeeder::class,
            BookingsTableSeeder::class,
            CommentsTableSeeder::class,
            RatingsTableSeeder::class,
            LikesTableSeeder::class,
            EventsTableSeeder::class,
            VideosTableSeeder::class
        ]);
    }
}
