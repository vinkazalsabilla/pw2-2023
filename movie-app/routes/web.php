<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
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

Route::get('/', function () {
    return view("index");
});

// Movies routes
Route::get("/movies", [MovieController::class, "index"]);
Route::get("/movies/create", [MovieController::class, "create"]);
Route::post("/movies", [MovieController::class, "store"]);
Route::delete("movies/{movie}", [MovieController::class, "destroy"]);

// Genres routes
Route::get("/genres", [GenreController::class, "index"]);
Route::get("/genres/create", [GenreController::class, "create"]);
Route::post("/genres", [GenreController::class, "store"]);
Route::delete("/genres/{genre}", [GenreController::class, "destroy"]);

// Reviews route
Route::get("/reviews", [ReviewController::class, "index"]);
Route::get("/reviews/create", [ReviewController::class, "create"]);
Route::post("/reviews", [ReviewController::class, "store"]);
Route::delete("/reviews/{review}", [ReviewController::class, "destroy"]);

// Users routes
Route::get("/users", [UserController::class, "index"]);
Route::get("/users/create", [UserController::class, "create"]);
Route::post("/users", [UserController::class, "store"]);
Route::delete("/users/{user}", [UserController::class, "destroy"]);
