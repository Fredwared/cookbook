<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::query()->insert([
            [
                "name" => "Internet access"
            ],

            [
                "name" => "Parking"
            ],
            [
                "name" => "Language"
            ],
            [
                "name" => "Breakfast"
            ],
            [
                "name" => "Facilities"
            ],

            [
                "name"  => "Internet access place"
            ],
        ]);
    }
}
