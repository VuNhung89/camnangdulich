<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Nguyễn Văn A',
            'email' => 'nguyenvana@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar.jpg',
            'role' => 'user'
        ]);
        User::firstOrCreate([
            'name' => 'Trần Thị B',
            'email' => 'tranthib@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar.jpeg',
            'role' => 'admin'
        ]);
        User::firstOrCreate([
            'name' => 'Lê Văn C',
            'email' => 'levanc@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar1.jpg',
            'role' => 'user'
        ]);
        User::firstOrCreate([
            'name' => 'Phạm Văn D',
            'email' => 'phamvand@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar.jpg',
            'role' => 'admin'
        ]);
        User::firstOrCreate([
            'name' => 'Hoàng Thị E',
            'email' => 'hoangthie@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar.jpeg',
            'role' => 'user'
        ]);
        User::firstOrCreate([
            'name' => 'Vũ Minh F',
            'email' => 'vuminhf@gmail.com',
            'bio' => 'Nhận chạy quảng cáo, booking du lịch',
            'dob' => '09-07-2000',
            'password' => Hash::make('matkhau123'),
            'avatar' => '/image/avatar1.jpg',
            'role' => 'admin'
        ]);
    }
}
