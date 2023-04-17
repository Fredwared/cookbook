<?php

use App\Http\Controllers\V1\Auth\LoginController;
use App\Http\Controllers\V1\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::controller(RegisterController::class)->group(function () {
    Route::post("/register", "register")->name("register");
    Route::post("/verify", "verify")->name("verify");
    Route::post("/resend-code", "resend")->name("resend");
});

Route::controller(LoginController::class)->group(function () {
    Route::post("/login", "login")->name("login");
    Route::post("/logout", "logout")->middleware("auth:sanctum")->name("logout");
});