<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'user_id' => 6,
            'post_id' => 3,
            'content' => 'Bài viết rất hay, mình cũng muốn đi Nha Trang!'
        ]);
        Comment::create([
            'user_id' => 4,
            'post_id' => 5,
            'content' => 'Mình từng đi Hạ Long, trải nghiệm đúng như bạn nói.'
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 3,
            'content' => 'Có khách sạn nào gần biển không bạn?'
        ]);
        Comment::create([
            'user_id' => 4,
            'post_id' => 3,
            'content' => 'Mình nghĩ nên thêm thông tin về chi phí.'
        ]);
        Comment::create([
            'user_id' => 5,
            'post_id' => 6,
            'content' => 'Hội An đúng là tuyệt đẹp ban đêm.'
        ]);
        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'content' => 'Cảm ơn bạn đã chia sẻ trải nghiệm chi tiết!'
        ]);
    }
}
