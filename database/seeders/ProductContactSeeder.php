<?php

namespace Database\Seeders;

use App\Models\ProductContact;
use Illuminate\Database\Seeder;

class ProductContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductContact::factory(20)->create();
    }
}
