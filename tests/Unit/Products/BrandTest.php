<?php

namespace Products;

use App\Http\Controllers\Api\V1\Products\BrandController;
use App\Models\Brand;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BrandTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    /**
     * Test To Create New Brand
     *
     * @see BrandController::create()
     */

    public function testToCreateNewBrand()
    {
        $data = [
            "name" => $this->faker->word()
        ];

        $this->postJson(route("brands.store"), $data, ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data",
                "message"
            ]);

        $brand = Brand::query()->where("name", "=", $data["name"])->exists();

        $this->assertTrue($brand);
    }

    /**
     * Test To Update Existing Brand
     *
     * @see BrandController::update()
     */

    public function testToUpdateExistingBrand()
    {
        $brands = Brand::query()->create([
            "name" => $this->faker->word()
        ]);

        $brands->name = "newbrandname";

        $this->patchJson(route("brands.update", $brands->id), $brands->toArray(), ["Accept" => "application/json"])
            ->assertOk()
            ->assertJsonStructure([
                "data",
                "message",
            ]);

        $brand = Brand::query()->where("id", "=", $brands->id)->exists();

        $this->assertTrue($brand);
    }


    /**
     * Test To Delete Existing Brand
     *
     * @see BrandController::destroy()
     */

    public function testDeleteExistingBrand()
    {
        $data = Brand::query()->create([
            "name" => $this->faker->word()
        ]);

        $this->deleteJson(route("brands.destroy", $data->id), $data->toArray())
            ->assertOk()
            ->assertJsonStructure(["message"]);

        $brand = Brand::query()->where("name","=",$data->name)->doesntExist();

        $this->assertTrue($brand);
    }

}
