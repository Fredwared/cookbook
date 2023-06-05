<?php


use App\Http\Controllers\V1\Products\CategoryController;
use App\Http\Controllers\V1\Products\CurrencyController;
use App\Http\Controllers\V1\Products\ProductController;
use App\Http\Controllers\V1\Products\ReviewController;
use App\Http\Controllers\V1\Wizard\WizardController;
use Illuminate\Support\Facades\Route;


Route::prefix("wizard")->group(function () {
    Route::post("setup", [WizardController::class, "setup"]);
    Route::post("{product}/services", [WizardController::class, "services"]);
    Route::post("{product}/living", [WizardController::class, "living"]);
    Route::post("{product}/payment", [WizardController::class, "payment"]);
    Route::post("{product}/rooms", [WizardController::class, "rooms"]);
});


Route::apiResource("products", ProductController::class)->only("index", "show");


Route::apiResource("categories", CategoryController::class);
Route::apiResource("reviews", ReviewController::class);

Route::get("/currencies/list", [CurrencyController::class, "list"]);
Route::apiResource("currencies", CurrencyController::class);


require __DIR__ . '/auth.php';



