@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div class="form-inline mb-3">
                    <label for="movie_id">Film</label>
                    <select class="form-control" type="text" id="movie_id" name="movie_id">
                        <option selected>Choose Film...</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->judul }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="user">User</label>
                    <input class="form-control" type="text" id="user" name="user">
                </div>
                <div class="form-inline mb-3">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" step="0.1" min="0.1" max="10" id="rating" name="rating" placeholder="0.1 to 10">
                </div>
                <div class="form-inline mb-3">
                    <label for="review">Review</label>
                    <input class="form-control" type="text" id="review" name="review">
                </div>
                <div class="form-inline mb-3">
                    <label for="tanggal">Date</label>
                    <input class="form-control" type="text" id="tanggal" name="tanggal" value="{{ now()->toDateString() }}" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Add Review</button>
            </form>
        </div>
    </div>
@endsection