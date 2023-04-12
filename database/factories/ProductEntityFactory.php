<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductEntity>
 */
class ProductEntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "product_id" => Product::query()->inRandomOrder()->first()->id,
            "room_type" => $this->faker->randomElement(["king", "queen", "quad", "triple", "double", "single", "suite", "president suite", "cabana"]),
            "is_smoking_allowed" => $this->faker->randomElement([true, false]),
            "bed_type" => $this->faker->randomElement(["standard", "platform bed", "panel bed", "sofa bed"]),
            "bed_count" => $this->faker->randomElement([1, 2, 3, 4, 5]),
            "room_size" => $this->faker->biasedNumberBetween(10),
            "price" => $this->faker->numberBetween(40, 2000),
            "price_for_residents" => $this->faker->numberBetween(20, 1000),
        ];
    }
}
