<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{


    public function test_user_can_view_a_login_form()
    {
        $response = $this->get("/login");
        $response->assertSuccessful();
        $response->assertViewIs("auth.login");
    }

    public function test_user_can_view_a_register_form()
    {
        $response = $this->get("/register");
        $response->assertSuccessful();
        $response->assertViewIs("auth.register");
    }

    public function test_auth_user_can_view_dashboard()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get("/");
        $response->assertOk();
    }


    public function test_unauthorized_user_cannot_view_dashboard()
    {
        $response = $this->get("/");
        $response->assertStatus(302);
        $response->assertRedirect("/login");
    }


    public function test_user_can_register()
    {

        User::factory()->create([
            "username" => "testusername",
            "email" => "useremail@gmail.com",
            "firstname" => "testname",
            "lastname" => "testlast",
            "password" => bcrypt("1111"),
        ]);
        $response = $this->post("/register", [
            "username" => "testusername",
            "email" => "useremail@gmail",
            "firstname" => "testname",
            "lastname" => "testlast",
            "password" => bcrypt("1111"),

        ]);

        $response->assertStatus(302);
        $response->assertRedirectToRoute("dashboard");
    }


    public function test_user_can_login()

    {
        User::factory()->create([
            "email" => "test@gmail.com",
            "password" => bcrypt("1111")
        ]);

        $response = $this->post("/login", [
            "email" => "test@gmail.com",
            "password" => "1111"
        ]);

        $response->assertStatus(302);
        $response->assertRedirectToRoute("dashboard");
    }


    public function test_user_can_logout()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->post("/logout")->assertRedirect("/login");
    }

    public function test_user_can_change_his_profile_information()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->patch(route("update", $user->id), [
            "username" => "nothing"
        ])->assertRedirectToRoute("dashboard");
    }

    public function test_user_can_change_his_password()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post(route("update-password", $user->id), [
            "password" => "something"
        ])->assertRedirectToRoute("dashboard");
    }

}
