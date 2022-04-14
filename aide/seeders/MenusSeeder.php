<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //On compte le nombre de restaurants
        $restos_count = DB::table('menus')->count();
        DB::table('menus')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => rand(0, 1000) / 10,
            //Le restaurants_id de test sera donc forcément un id d'un des restaurants de la table restaurants
            'restaurants_id' => rand(1, $restos_count)
        ]);
    }
}
