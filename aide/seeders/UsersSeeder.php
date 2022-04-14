<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'login' => Str::random(10),
            'name' => Str::random(10),
            'firstname' => Str::random(10),
            'age' => rand(0, 99),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
