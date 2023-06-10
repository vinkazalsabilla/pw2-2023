<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $movies = Movie::all();
        return view("movies.index", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $genres = Genre::all();
        return view("movies.create", compact("genres"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            "judul" => "required",
            "poster" => "required",
            "genre_id" => "required",
            "negara" => "required",
            "tahun" => "required|integer",
            "rating" => "required|numeric"
        ]);

        Movie::create($validatedData);

        return redirect("/movies")->with("success", "Movie added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie) {
        $genres = Genre::all();
        return view("movies.edit", compact("movie", "genres"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie) {
        $validatedData = $request->validate([
            "judul" => "required",
            "poster" => "required",
            "genre_id" => "required",
            "negara" => "required",
            "tahun" => "required|integer",
            "rating" => "required|numeric"
        ]);

        $movie->update($validatedData);

        return redirect("/movies")->with("success", "Movie updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie) {
        $movie->delete();
        return redirect("/movies")->with("success", "Movie delete successfully!");
    }
}
