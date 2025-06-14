<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create([
            'title' => 'Khám Phá Vịnh Hạ Long',
            'youtube_url' => 'https://youtu.be/vt9OL_sJ5gA?si=WNrobfIcmDMEQVKK',
            'description' => 'Video giới thiệu vẻ đẹp hùng vĩ của Vịnh Hạ Long.',
        ]);
        Video::create([
            'title' => 'Ẩm Thực Huế',
            'youtube_url' => 'https://youtu.be/n2icxQPTcBk?si=Z3XStNZgwN8gYjh5',
            'description' => 'Trải nghiệm các món ăn đặc sắc của cố đô Huế.',
        ]);
        Video::create([
            'title' => 'Kinh nghiệm săn mây tại Sapa',
            'youtube_url' => 'https://youtu.be/fKi5wsF5RkA?si=2w19_WGXTevmf9KC',
            'description' => 'Bật mí những điểm săn mây Sapa tuyệt đẹp nhất định phải tới.',
        ]);
    }
}
