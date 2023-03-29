<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            "name" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(7),
            "price" => $this->faker->randomFloat(2, 10, 1000),
            "category_id" => Category::query()->inRandomOrder()->first()->id,
        ];
    }
}
