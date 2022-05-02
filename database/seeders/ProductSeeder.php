<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'brand_id' => 1,
            'title' => 'Shoes',
            'price' => 100
        ]);

        Product::create([
            'brand_id' => 2,
            'title' => 'Shoes',
            'price' => 50
        ]);

        Product::create([
            'brand_id' => 1,
            'title' => 'T-Shirt',
            'price' => 15
        ]);

        Product::create([
            'brand_id' => 2,
            'title' => 'Pants',
            'price' => 89
        ]);
    }
}
