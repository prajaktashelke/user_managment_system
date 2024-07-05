<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Home Page</h1>

        @if(Auth::check())
            <p>Hello, {{ Auth::user()->name }}!</p>
        
            <p> Please <a href="{{ route('login') }}">login</a> to access this page.</p>
        @endif

        <hr>
    </div>
</body>
</html>
