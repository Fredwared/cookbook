<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Category::query()->insert([
            [
                "name" => "Chain hotel"
            ],
            [
                "name" => "Motel"
            ],
            [
                "name" => "Resort"
            ],
            [
                "name" => "Boutique hotels"
            ],
            [
                "name" => " Bunkhouse"
            ],
            [
                "name" => " Extended stay hotel"
            ],
            [
                "name" => "Echo hotel"
            ],
            [
                "name" => "Pop-up hotel"
            ],
            [
                "name" => "Roadhouses"
            ],
            [
                "name" => "Pet-friendly hotel"
            ],
            [
                "name" => "Transit hotel"
            ],
            [
              "name" => "Heritage hotel"
            ],
            [
                "name" => "Hostel"
            ],
        ]);


    }
}
