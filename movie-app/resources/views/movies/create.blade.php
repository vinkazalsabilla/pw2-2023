@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies">
                @csrf
                <div class="form-inline mb-3">
                    <label for="judul">Title</label>
                    <input class="form-control" type="text" id="judul" name="judul">
                </div>
                <div class="form-inline mb-3">
                    <label for="poster">Poster</label>
                    <input class="form-control" type="text" id="poster" name="poster">
                </div>
                <div class="form-inline mb-3">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre" name="genre_id">
                        <option selected>Choose Genre...</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="negara">Country</label>
                    <input class="form-control" type="text" id="negara" name="negara">
                </div>
                <div class="form-inline mb-3">
                    <label for="tahun">Year</label>
                    <input class="form-control" type="number" id="tahun" name="tahun" min="1900" max="2099" step="1">
                </div>
                <div class="form-inline mb-3">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" id="rating" name="rating" min="0.1" max="10" step="0.1">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Add Movie</button>
            </form>
        </div>
    </div>
@endsection