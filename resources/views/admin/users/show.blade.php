@extends('layouts.app') {{-- Assuming you have a master layout called 'app.blade.php' --}}

@section('content')
    <div class="container">
        <h1>User Details</h1>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>ID:</strong> {{ $user->id }}
                    </li>
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ $user->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ $user->email }}
                    </li>
                    {{-- Add more user details as needed --}}
                </ul>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users List</a>
        </div>
    </div>
@endsection
