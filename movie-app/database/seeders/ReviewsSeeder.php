<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Review::create([
            "movie_id" => '1',
            "user" => "John Doe",
            "rating" => 9.5,
            "review" => "This movie is a masterpiece. The acting, the storyline, and the ending are all fantastic.",
            "tanggal" => "2022-03-12"
        ]);

        Review::create([
            "movie_id" => '6',
            "user" => "Mark Johnson",
            "rating" => 9.7,
            "review" => "This movie is a gripping social commentary that is humorous and thought-provoking. Highly recommended.",
            "tanggal" => "2022-05-01"
        ]);

        Review::create([
            "movie_id" => '7',
            "user" => "Jane Smith",
            "rating" => 8.5,
            "review" => "The concept of this movie is mind-bending and the special effect is incredible. However, I felt the plot was a bit convoluted at times",
            "tanggal" => "2022-04-23"
        ]);

        Review::create([
            "movie_id" => '3',
            "user" => "James Lough",
            "rating" => 9.1,
            "review" => "The Dark Knight is Christopher Nolan's magnum opus and a gripping, unforgettable thrill ride from start to finish.",
            "tanggal" => "2023-02-28"
        ]);

        Review::create([
            "movie_id" => '4',
            "user" => "Raghav Tandon",
            "rating" => 9.8,
            "review" => "After a decade long wait, to say I was excited to watch Avatar: The Way of the Water is an understatement. Being a huge fan of the original Avatar and contributing to its success by watching it three times in the cinema",
            "tanggal" => "2023-01-23"
        ]);
    }
}
