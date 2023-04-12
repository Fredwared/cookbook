<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::query()->insert([
            [
                "name" => "Uzbekistan"
            ],
            [
                "name" => "Russia"
            ],
            [
                "name"  => "Kazakhstan"
            ],
            [
                "name" => "Tajikistan"
            ],
            [
                "name" => "Turkey"
            ],
            [
                "name" => "Armenia"
            ]
        ]);
    }
}
