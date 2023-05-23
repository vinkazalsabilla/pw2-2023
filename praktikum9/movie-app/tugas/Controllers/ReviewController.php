<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        $review = new Review;
        $reviews = $review->getAllReviews();

        return view("reviews.index", ["reviews" => $reviews]);
    }
}
