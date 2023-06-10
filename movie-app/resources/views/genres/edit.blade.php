@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
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
            Edit Genre
        </div>
        <div class="card-body">
            <form method="POST" action="/genres/{{ $genre->id }}">
                @csrf
                @method('PUT')
                <div class="form-inline mb-3">
                    <label for="nama">Genre</label>
                    <input class="form-control" type="text" id="nama" name="nama" value="{{ $genre->nama }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" id="deskripsi" name="deskripsi" value="{{ $genre->deskripsi }}">
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Update Genre</button>
            </form>
        </div>
    </div>
@endsection