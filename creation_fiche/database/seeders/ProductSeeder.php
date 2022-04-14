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
            'description' => Str::random(20),
            'reference' => Str::random(10),
            'image' => "[image_path]",
            'quantity' => rand(0, 100),
            'category' => Str::random(10),
            'price' => rand(0, 1000) / 10,
            'is_on_sale' => rand(0, 1),
            'is_visible' => rand(0, 1)
        ]);
    }
}
