<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    public function definition(): array
    {
        return [
            "firstname" => fake()->firstName(),
            "lastname" => fake()->lastName(),
            "country_id" => Country::query()->inRandomOrder()->first()->id,
            "primary_number" => str_replace('+', '', fake()->unique()->e164PhoneNumber()),
            "number" => str_replace('+', '', fake()->unique()->e164PhoneNumber()),
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()), // password
            "remember_token" => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
