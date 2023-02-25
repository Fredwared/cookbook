<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;


class AuthTest extends TestCase
{
    use DatabaseTransactions, WithFaker;


    /**
     * Test To See if user can register
     *
     *
     */
    public function testIfUserCanRegister()
    {


        $data = [
            "username" => $this->faker->userName(),
            "email" => $this->faker->email(),
            "firstname" => $this->faker->firstName(),
            "lastname" => $this->faker->lastName(),
            "password" => "2222",
            "password_confirmation" => "2222"
        ];

        $this->json("POST", route("register"), $data, ["Accept" => "application/json"])
            ->assertStatus(200)
            ->assertJsonStructure([
                "data" => [
                    "username",
                    "email",
                    "firstname",
                    "lastname"
                ],
                "message"
            ]);

        User::query()->where("email", "=", $data["email"])->exists();

    }


    /**
     * Test To See if user can log in
     *
     *
     */

    public function testIfUserCanLogin()
    {
        $user = User::query()->create([
            "username" => $this->faker->userName(),
            "email" => $this->faker->email(),
            "firstname" => $this->faker->firstName(),
            "lastname" => $this->faker->lastName(),
            "password" => bcrypt("1111"),
        ]);

        $credentials = [
            "email" => $user->email,
            "password" => "1111"
        ];

        $response = $this->json("POST", route("login"), $credentials, ["Accept" => "application/json"])
            ->assertStatus(200)
            ->assertJsonStructure([
                "token",
                "data" => [
                    "username",
                    "email",
                    "firstname",
                    "lastname"
                ],
                "message"
            ]);
        $response->assertOk();

        $this->assertArrayHasKey("token", $response->json());

        User::query()->where("email", "=", $user->email)->exists();

    }


    /**
     * Test To See if user can log out
     *
     *
     */

    public function testIfUserCanLogout()
    {
        $user = User::query()->create([
            "username" => $this->faker->userName(),
            "email" => $this->faker->email(),
            "firstname" => $this->faker->firstName(),
            "lastname" => $this->faker->lastName(),
            "password" => bcrypt("1111"),
        ]);

        $this->post(route("login"), [
            "email" => $user->email,
            "password" => "1111"
        ]);


        Sanctum::actingAs($user)->currentAccessToken()->delete();


        $response = $this->json("POST", route("logout"), [])->assertJsonStructure(["message"]);

        $response->assertStatus(200);

        $this->assertArrayNotHasKey("token", $response->json());

        $user = User::query()->where("email", "=", $user->email)->exists();

        $this->assertTrue($user);

    }

}
