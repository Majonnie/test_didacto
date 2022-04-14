<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurants')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'grade' => rand(0, 100) / 10,
            'localization' => Str::random(10),
            'phone_number' => Str::random(10),
            'website' => 'www' . Str::random(10) . 'com',
            'hours' => Str::random(10)
        ]);
    }
}
