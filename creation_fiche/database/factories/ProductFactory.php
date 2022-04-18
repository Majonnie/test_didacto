<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'description' => Str::random(20),
            'reference' => Str::random(10),
            'image' => "img_product_temp",
            'quantity' => rand(0, 100),
            'category' => Str::random(10),
            'price' => rand(0, 10000) / 100,
            'is_on_sale' => rand(0, 1),
            'is_visible' => rand(0, 1)
        ];
    }
}
