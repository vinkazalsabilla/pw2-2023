<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User route
Route::get('/', [HomeController::class, "index"]);

// Admin route
Route::group(["middleware" => "auth"], function() {
    Route::resource("/movies", MovieController::class);
    Route::resource("/genres", GenreController::class);
    Route::resource("/reviews", ReviewController::class);
});

// Auth route
Route::get("/login", [AuthController::class, "showLoginForm"])->name("login");
Route::post("/login", [AuthController::class, "login"]);

Route::get("/register", [AuthController::class, "showRegistrationForm"]);
Route::post("/register", [AuthController::class, "register"]);

