<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeValue::query()->insert(
            [
                [
                    "attribute_id" => 1,
                    "value" => "Yes,free"
                ],
                [
                    "attribute_id" => 1,
                    "value" => "No,paid"
                ],
                [
                    "attribute_id" => 2,
                    "value" => "No parking space"
                ],
                [
                    "attribute_id" => 2,
                    "value" => "Parking is included"
                ],
                [
                    "attribute_id" => 3,
                    "value" => "English"
                ],
                [
                    "attribute_id" => 3,
                    "value" => "Russian"
                ],
                [
                    "attribute_id"  =>4 ,
                    "value" => "restaurant"
                ],
                [
                    "attribute_id" => 4,
                    "value" => "beach"
                ],
                [
                    "attribute_id" => 4,
                    "value" => "gym"
                ],
                [
                    "attribute_id" => 4,
                    "value" => "Rooms for non smokers"
                ],
                [
                    "attribute_id" => 5,
                    "value" => "Inside of hotel"
                ],
                [
                    "attribute_id" => 5,
                    "value" => "In restaurant"
                ]


            ]
        );
    }
}
