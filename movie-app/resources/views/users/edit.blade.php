@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Users Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
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
            Edit User
        </div>
        <div class="card-body">
            <form method="POST" action="/users/{{ $user->id }}">
                @csrf
                @method('PUT')
                <div class="form-inline mb-3">
                    <label for="nama">Name</label>
                    <input class="form-control" type="text" id="nama" name="nama" value="{{ $user->nama }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" id="username" name="username" value="{{ $user->username }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" value="{{ $user->password }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" id="role">
                        <option selected>Choose Role...</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="User">User</option>
                        <option value="Guest">Guest</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Update User</button>
            </form>
        </div>
    </div>
@endsection