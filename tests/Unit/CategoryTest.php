<?php

namespace Tests\Unit;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class CategoryTest extends TestCase
{
    use DatabaseTransactions, WithFaker;


    /**
     * Test To See collection of categories
     *
     *
     */
    public function testToSeeCollectionOfCategories()
    {
        $this->getJson(route("products.categories.index"))->assertOk();


    }

    /**
     * Test To See Each individual category
     *
     *
     */
    public function testToSeeEachIndividualCategory()
    {
        $data = Category::query()->create([
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);
        $this->getJson(route("products.categories.show", $data->id))->assertOk();


        $category = Category::query()->where("name", "=", $data->name)->exists();

        $this->assertTrue($category);


    }


    /**
     * Test To Create New Category
     *
     *
     */

    public function testToCreateNewCategory()
    {
        $data = [
            "name" => $this->faker->word(),
        ];

        $this->postJson(route("products.categories.store"), $data, ["Accept" => "Application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data" => [
                    "id",
                    "name",
                ],
                "message"
            ]);

        $category = Category::query()->where("name", "=", $data["name"])->exists();

        $this->assertTrue($category);

    }

    /**
     * Test To Update Category
     *
     *
     */
    public function testToUpdateCategory()
    {

        $data = Category::query()->create([
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);



        $this->patchJson(route("products.categories.update", $data->id), $data->toArray(), ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data" => [
                    "id",
                    "name"
                ],
                "message",
            ]);
    }


    /**
     * Test To Delete Category
     *
     *
     */

    public function testToDestroyCategory()
    {
        $data = Category::query()->create([
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);

        $this->deleteJson(route("products.categories.destroy", $data->id), $data->toArray())
            ->assertOk()
            ->assertJsonStructure([
                "message"
            ]);

        $category = Category::query()->where("name","=",$data->name)->doesntExist();

        $this->assertTrue($category);

    }
}
