<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller {
    public function index() {
        $genres = Genre::all();
        return view("genres.index", compact("genres"));
    }

    public function create() {
        return view("genres.create");
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "nama" => "required",
            "deskripsi" => "required"
        ]);

        Genre::create($validatedData);

        return redirect("/genres")->with("success", "Genre added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre) {
        return view("genres.edit", compact("genre"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre) {
        $validatedData = $request->validate([
            "nama" => "required",
            "deskripsi" => "required"
        ]);

        $genre->update($validatedData);

        return redirect("/genres")->with("success", "Genre updated successfully!");
    }

    public function destroy(Genre $genre) {
        $genre->delete();
        return redirect("/genres")->with("success", "Genre delete successfully!");
    }
}
