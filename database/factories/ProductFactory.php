<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            "uuid" => Str::uuid(),
            "name" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(7),
            "category_id" => Category::query()->inRandomOrder()->first()->id,
            "location" =>$this->faker->sentence(),
            "city_id" => City::query()->inRandomOrder()->first()->id,
        ];
    }
}
