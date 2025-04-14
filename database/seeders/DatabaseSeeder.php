<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        UserDetail::create([
            'user_id' => 2, 
            'address' => '123 Đường ABC, Hà Nội',
            'phone' => '0123456789',
            'date_of_birth' => '2002-08-17',
            'gender' => 1, 
        ]);

        Product::create([
            'id' => 1,
            'name' => 'Kính mắt thời trang',
            'description' => 'Kính mắt phong cách hiện đại',
            'price' => 500000,
            'label' => 'Fashion',
        ]);

        Order::create([
            'user_id' => 2,
            'product_id' => 1,
            'quantity' => 2,
            'order_date' => now(),
        ]);

    }
}