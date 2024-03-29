<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductContact>
 */
class ProductContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "product_id" =>Product::query()->inRandomOrder()->first()->id,
            "name" => $this->faker->name(),
            "phone_number"=> str_replace('+', '', $this->faker->unique()->e164PhoneNumber())
        ];
    }
}
