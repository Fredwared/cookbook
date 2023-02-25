<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                "name" => "gaming",
                "parent_id" => null
            ],
            [
                "name" => "laptop",
                "parent_id" => 1
            ],
            [
                "name" => "pc",
                "parent_id" => 1
            ],
            [
                "name" => "headset",
                "parent_id" => 3
            ],
            [
                "name" => "keyboard",
                "parent_id" => 3
            ],
        ]);

        Category::factory(5)->create();


    }
}
