<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductAttribute>
 */
class ProductAttributeFactory extends Factory
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
            "attribute_id" => Attribute::query()->inRandomOrder()->first()->id,
        ];
    }
}
