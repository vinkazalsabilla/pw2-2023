<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model {
    use HasFactory;

    protected $reviews = [
        [
            "no"=> 1,
            "film" => "The Shawshank Redemtion",
            "user" => "John Doe",
            "rating" => "9.5",
            "review" => "This movie is a masterpiece. The acting, the storyline, and the ending are all fantastic.",
            "tanggal" => "22-03-12"
        ],
        [
            "no"=> 2,
            "film" => "Parasite",
            "user" => "Mark Johnson",
            "rating" => "9.0",
            "review" => "This movie is a gripping social commentary that is humorous and thought-provoking. Highly recommended.",
            "tanggal" => "22-05-01"
        ],
        [
            "no"=> 3,
            "film" => "Inception",
            "user" => "Jane Smith",
            "rating" => "8.5",
            "review" => "The concept of this movie is mind-bending and the special effect is incredible. However, I felt the plot was a bit convoluted at times",
            "tanggal" => "22-04-23"
        ],
    ];

    public function getAllReviews() {
        return $this->reviews;
    }
}
