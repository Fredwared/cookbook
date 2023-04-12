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
                "name" => "Hotel",
                "parent_id" => null
            ],
            [
                "name" => "Houses and cottage",
                "parent_id" => null
            ],

            [
                "name" => "Condominium",
                "parent_id" => 2
            ],
            [
                "name" => "Single-family home",
                "parent_id" => 2
            ],
            [
                "name" => "Multifamily",
                "parent_id" => 2
            ],
            [
                "name" => "Townhouse",
                "parent_id" => 2
            ],
            [
                "name" => "Motel",
                "parent_id" => 1
            ],

            [
                "name" => "Resort",
                "parent_id" => 1

            ],
            [
                "name" => "Boutique hotels",
                "parent_id" => 1
            ],
            [
                "name" => " Extended stay hotel",
                "parent_id" => 1

            ],
            [
                "name" => "Hostel",
                "parent_id" => 1

            ],
        ]);


    }
}
