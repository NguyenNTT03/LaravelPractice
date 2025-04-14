<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserDetail;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserDetail::create([
            'user_id' => 2, // Chắc chắn user_id này tồn tại
            'address' => '123 Đường ABC, Hà Nội',
            'phone' => '0123456789',
            'date_of_birth' => '2002-08-17',
            'gender' => 1, // 1 = Nam, 0 = Nữ
        ]);
    }
}