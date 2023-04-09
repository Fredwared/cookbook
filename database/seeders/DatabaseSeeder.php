<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ProductContactSeeder::class,
            ProductEntitySeeder::class,
            ReviewSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductAttributeSeeder::class,

        ]);
    }
}
