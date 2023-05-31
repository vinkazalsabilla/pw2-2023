<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller {
    public function index() {
        $reviews = Review::all();

        return view("reviews.index", compact("reviews"));
    }
}
