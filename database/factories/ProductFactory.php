<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            "category_id" => Category::query()->inRandomOrder()->first()->id,
            "brand_id" => Brand::query()->inRandomOrder()->first()->id,
            "name" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(7),
            "price" => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
