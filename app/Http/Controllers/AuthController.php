<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function login(LoginRequest $request) {
       $fields = $request->validated();

        if (Auth::attempt($fields)) {
            $request->session()->regenerate();
            return to_route("dashboard");
        }

        return back();

    }

    public function logout(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        Session::flush();

        Auth::logout();

        return to_route("login");
    }

}
