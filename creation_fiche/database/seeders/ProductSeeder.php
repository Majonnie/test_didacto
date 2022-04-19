<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'reference' => Str::random(10),
            //Image par défaut : "img_product_temp" (image rouge)
            'image' => "img_product_temp",
            'quantity' => rand(0, 100),
            'category' => Str::random(10),
            'price' => rand(0, 10000) / 100,
            'is_on_sale' => rand(0, 1),
            'is_visible' => rand(0, 1)
        ]);
    }
}
