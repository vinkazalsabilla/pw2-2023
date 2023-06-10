<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Movie;

class ReviewController extends Controller {
    public function index() {
        $reviews = Review::all();
        return view("reviews.index", compact("reviews"));
    }

    public function create() {
        $movies = Movie::all();
        return view("reviews.create", compact("movies"));
    }

    public function store(Request $request) {
    $validatedData = $request->validate([
        "movie_id" => "required",
        "user" => "required",
        "rating" => "required|numeric",
        "review" => "required",
        "tanggal" => "required"
    ]);

    Review::create($validatedData);

    return redirect("/reviews")->with("success", "Review added successfully!");
}


    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review) {
        $movies = Movie::all();
        return view("reviews.edit", compact("review", "movies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review) {
        $validatedData = $request->validate([
            "movie_id" => "required",
            "user" => "required",
            "rating" => "required|numeric",
            "review" => "required",
            "tanggal" => "required"
        ]);
    
        $review->update($validatedData);
    
        return redirect("/reviews")->with("success", "Review updated successfully!");
    }

    public function destroy(Review $review) {
        $review->delete();
        return redirect("/reviews")->with("success", "Review deleted successfully!");
    }
}
