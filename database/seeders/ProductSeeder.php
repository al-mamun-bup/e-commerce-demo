<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Product 1', 'price' => 10.00]);
        Product::create(['name' => 'Product 2', 'price' => 20.00]);
        Product::create(['name' => 'Product 3', 'price' => 30.00]);
        Product::create(['name' => 'Product 4', 'price' => 40.00]);
    }
}

