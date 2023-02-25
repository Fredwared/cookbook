<?php

namespace Products;

use App\Http\Controllers\Api\V1\Products\CategoryController;
use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use DatabaseTransactions, WithFaker;


    /**
     * Test To See collection of categories
     *
     * @see CategoryController::index()
     */
    public function testToSeeCollectionOfCategories()
    {
        $this->getJson(route("categories.index"))->assertOk();
    }

    /**
     * Test To See Each individual category
     *
     * @see CategoryController::show()
     */
    public function testToSeeEachIndividualCategory()
    {
        $data = Category::query()->create([
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);
        $this->getJson(route("categories.show", $data->id))->assertOk();


        $category = Category::query()->where("name", "=", $data->name)->exists();

        $this->assertTrue($category);


    }


    /**
     * Test To Create New Category
     *
     * @see CategoryController::create()
     */

    public function testToCreateNewCategory()
    {
        $data = [
            "name" => "new category",
        ];

        $this->postJson(route("categories.store"), $data, ["Accept" => "Application/json"])
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
     * @see CategoryController::update()
     */
    public function testToUpdateCategory()
    {

        $data = Category::query()->create([
            "id" => 58,
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);

        $data->name = "Something new";


        $this->json("PUT", route("categories.update", $data->id), $data->toArray(), ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data" => [
                    "id",
                    "name"
                ],
                "message",
            ]);

        $category = Category::query()->where("id", "=", $data->id)->exists();

        $this->assertTrue($category);
    }


    /**
     * Test To Delete Category
     *
     * @see CategoryController::destroy()
     */

    public function testToDestroyCategory()
    {
        $data = Category::query()->create([
            "name" => $this->faker->word(),
            "parent_id" => $this->faker->randomNumber()
        ]);

        $this->deleteJson(route("categories.destroy", $data->id), $data->toArray())
            ->assertOk()
            ->assertJsonStructure([
                "message"
            ]);

        $category = Category::query()->where("name", "=", $data->name)->doesntExist();

        $this->assertTrue($category);

    }
}
