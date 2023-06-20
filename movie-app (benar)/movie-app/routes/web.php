<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, "index"]);

// Movies routes
Route::resource("/movies", MovieController::class);

// Genres routes
Route::resource("/genres", GenreController::class);

// Reviews route
Route::resource("/reviews", ReviewController::class);

// Users routes
Route::get("/users", [UserController::class, "index"]);
Route::get("/users/create", [UserController::class, "create"]);
Route::post("/users", [UserController::class, "store"]);
Route::delete("/users/{user}", [UserController::class, "destroy"]);
Route::get("/users/{user}/edit", [UserController::class, "edit"]);
Route::put("/users/{user}", [UserController::class, "update"]);
