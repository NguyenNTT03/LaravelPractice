<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Kính mắt thời trang',
            'description' => 'Kính mắt phong cách hiện đại',
            'price' => 500000,
            'label' => 'Fashion',
        ]);
    }
}