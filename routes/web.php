<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::view('/', "welcome")->name("dashboard")->middleware("auth");



Route::view("/register","auth.register");
Route::view("/login","auth.login");

 Route::controller(AuthController::class,)->group(function () {
     Route::post("/register","register")->name("register");
     Route::post("/login","login")->name("login");
     Route::post("/logout","logout")->name("logout");
 });