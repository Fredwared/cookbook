<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            "product_uuid" => Product::query()->inRandomOrder()->first()->uuid,
            "content" => $this->faker->paragraph(5)
        ];
    }
}
