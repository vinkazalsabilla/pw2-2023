<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Genre::create([
            "nama" => "Drama",
            "deskripsi" => "Genre of movies with emotional and serious themes"
        ]);

        Genre::create([
            "nama" => "Action",
            "deskripsi" => "Genre about action-packed movies"
        ]);

        Genre::create([
            "nama" => "Crime",
            "deskripsi" => "Genre about crime-based movies"
        ]);

        Genre::create([
            "nama" => "Romance",
            "deskripsi" => "Genre of movies with romance themes"
        ]);

        Genre::create([
            "nama" => "Adventure",
            "deskripsi" => "Genre about adventure-based movies"
        ]);
    }
}
