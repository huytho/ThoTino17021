<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => str_replace(public_path('upload') .'\\',''  , fake()->image(public_path('upload'), 480,480)),
            'price' => fake()->randomNumber(3),
            'sale_price' => fake()->randomNumber(2),
            'description' =>  fake(1)->text(),
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
    
}
