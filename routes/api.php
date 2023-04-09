<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Products\CategoryController;
use App\Http\Controllers\Api\V1\Products\CurrencyController;
use App\Http\Controllers\Api\V1\Products\ProductController;
use App\Http\Controllers\Api\V1\Products\ReviewController;
use Illuminate\Support\Facades\Route;


Route::patch("/products/{product}/{media}", [ProductController::class, "updateMainImage"]);
Route::apiResource("products", ProductController::class);

Route::apiResource("categories", CategoryController::class);
Route::apiResource("reviews", ReviewController::class);

Route::get("/currencies/list", [CurrencyController::class, "list"]);
Route::apiResource("currencies", CurrencyController::class);


Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register")->name("register");
    Route::post("/verify", "verify")->name("verify");
    Route::post("/resend-code", "resend")->name("resend");
    Route::post("/login", "login")->name("login");
    Route::post("/logout", "logout")->middleware("auth:sanctum")->name("logout");
});
