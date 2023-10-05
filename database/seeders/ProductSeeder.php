<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Products::create([
                'name' => 'Ürün ' . ($i + 1),
                'description' => 'Açıklama ' . ($i + 1),
                'image' => 'image_' . ($i + 1) . '.jpg',
                'price' => rand(10, 100),
                'stock' => rand(0, 100),
                'status' => rand(0, 1) ? 'active' : 'inactive',
            ]);
        }
    }
}
