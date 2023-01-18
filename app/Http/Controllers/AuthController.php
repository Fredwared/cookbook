<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
class AuthController extends Controller
{
    public function register(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $fields = $request->validated();

        $fields["password"] = bcrypt($fields["password"]);

        $user = User::create($fields);

        auth()->login($user);

        return to_route("dashboard");
    }

    public function login() {

    }

    public function logout() {

    }

}
