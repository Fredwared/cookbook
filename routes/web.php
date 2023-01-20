<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\ResetPasswordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware("auth")->group(function () {

    Route::view('/', "dashboard")->name("dashboard")->middleware("auth");

    Route::get("{user}/edit",[EditProfileController::class,"edit"])->name("edit");
    Route::patch("{user}/edit",[EditProfileController::class,"update"])->name("update");

    Route::get("{user}/reset-password",[ResetPasswordController::class,"showPasswordResetForm"])->name("edit-password");
    Route::post("{user}/reset-password",[ResetPasswordController::class,"updatePassword"])->name("update-password");

    Route::post("/logout",[AuthController::class,"logout"])->name("logout");


});


Route::middleware("guest")->group(function () {

     //LOGIN AND REGISTER VIEWS
    Route::view("/register","auth.register");
    Route::view("/login","auth.login")->name("login");
    //LOGIN AND REGISTER VIEWS


    Route::controller(AuthController::class,)->group(function () {
        Route::post("/register","register")->name("register");
        Route::post("/login","login")->name("login");
    });


});



