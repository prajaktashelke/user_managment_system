@extends('layouts.app') {{-- Assuming you have a master layout called 'app.blade.php' --}}

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>

            {{-- Add more fields as needed for editing user details --}}

            <button type="submit" class="btn btn-primary">Update User</button>
            <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
