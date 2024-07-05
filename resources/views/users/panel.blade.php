<!-- resources/views/users/panel.blade.php -->

@extends('layouts.app') <!-- Assuming 'layouts.app' is your master layout -->

@section('content')
    <div class="container">
        <h2>User Panel</h2>
        <p>Welcome, {{ $user->name }}!</p>
        
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.update', $user) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="{{ route('user.destroy', $user) }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                    @csrf
                    @method('DELETE')

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
