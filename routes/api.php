<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Products\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => "products", "as" => "products."], function () {

    Route::apiResource("categories", CategoryController::class);
});


Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register")->name("register");
    Route::post("/login", "login")->name("login");
    Route::post("/logout", "logout")->middleware("auth:sanctum")->name("logout");
});
