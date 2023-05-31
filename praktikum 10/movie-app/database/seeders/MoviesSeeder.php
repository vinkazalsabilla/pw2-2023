<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Movie::create([
            "judul" => "The Shawshank Redemption",
            "poster" => "image.png",
            "genre_id" => '1',
            "negara" => "USA",
            "tahun" => 1994,
            "rating" => 9.8
        ]);

        Movie::create([
            "judul" => "The Godfather",
            "poster" => "image.png",
            "genre_id" => '3',
            "negara" => "USA",
            "tahun" => 1992,
            "rating" => 8.0
        ]);

        Movie::create([
            "judul" => "The Dark Knight",
            "poster" => "image.png",
            "genre_id" => '2',
            "negara" => "USA",
            "tahun" => 2008,
            "rating" => 9.0
        ]);

        Movie::create([
            "judul" => "Avatar: The Way of Water",
            "poster" => "image.png",
            "genre_id" => '5',
            "negara" => "USA",
            "tahun" => 2022,
            "rating" => 7.7
        ]);

        Movie::create([
            "judul" => "Seven Samurai",
            "poster" => "image.png",
            "genre_id" => '2',
            "negara" => "Japan",
            "tahun" => 1954,
            "rating" => 8.6
        ]);

        Movie::create([
            "judul" => "Parasite",
            "poster" => "image.png",
            "genre_id" => '1',
            "negara" => "South Korea",
            "tahun" => 2019,
            "rating" => 8.5
        ]);

        Movie::create([
            "judul" => "Inception",
            "poster" => "image.png",
            "genre_id" => '2',
            "negara" => "USA",
            "tahun" => 2010,
            "rating" => 8.8
        ]);
    }
}
