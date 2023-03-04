<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            CurrencySeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductAttributeSeeder::class,

        ]);
    }
}
