<?php

namespace Database\Seeders;

use App\Models\ProductEntity;
use Illuminate\Database\Seeder;

class ProductEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductEntity::factory(40)->create();
    }
}
