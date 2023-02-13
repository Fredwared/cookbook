<?php

namespace Products;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReviewTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * Test To Create New Review.
     *
     *
     */

    public function testToCreateNewReview()
    {
        $data = [
            "id" => $this->faker->randomDigit(),
            "content" => $this->faker->paragraph(10),
            "product_id" => Product::query()->inRandomOrder()->first()->id
        ];

        $this->postJson(route("reviews.store"), $data, ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data",
                "message"
            ]);

        $review = Review::query()->where("id", "=", $data["id"])->exists();

        $this->assertTrue($review);
    }

    /**
     * Test To Update Existing review
     *
     *
     */

    public function testToUpdateExistingReview()
    {
        $reviews = Review::query()->create([
            "content" => $this->faker->paragraph(6),
            "product_id" => Product::query()->inRandomOrder()->first()->id
        ]);

        $reviews->content = "Review updated";

        $this->patchJson(route("reviews.update", $reviews->id), $reviews->toArray(), ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data",
                "message"
            ]);

        $review = Review::query()->where("id", "=", $reviews->id)->exists();

        $this->assertTrue($review);

    }

    /**
     * Test To Delete Existing Review
     *
     *
     */

    public function testToDeleteExistingReview()
    {
        $data = Review::query()->create([
            "content" => $this->faker->paragraph(6),
            "product_id" => Product::query()->inRandomOrder()->first()->id
        ]);

        $this->deleteJson(route("reviews.destroy", $data->id), $data->toArray())
            ->assertOk()
            ->assertJsonStructure([
                "message"
            ]);

        $review = Review::query()->where("id", "=", $data->id)->doesntExist();

        $this->assertTrue($review);
    }

}
