<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>


<script>
    document.getElementById('registrationForm').onsubmit = function(event) {
        var name = document.getElementById('name').value.trim();
        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value.trim();
        var password_confirmation = document.getElementById('password_confirmation').value.trim();
        var valid = true;

        // Reset error messages
        document.getElementById('name-error').textContent = '';
        document.getElementById('email-error').textContent = '';
        document.getElementById('password-error').textContent = '';

        // Validate Name
        if (name === '') {
            valid = false;
            document.getElementById('name-error').textContent = 'Name is required.';
        }

        // Validate Email
        if (email === '') {
            valid = false;
            document.getElementById('email-error').textContent = 'Email is required.';
        } else if (!validateEmail(email)) {
            valid = false;
            document.getElementById('email-error').textContent = 'Enter a valid email address.';
        }

        // Validate Password
        if (password === '') {
            valid = false;
            document.getElementById('password-error').textContent = 'Password is required.';
        } else if (password.length < 6) {
            valid = false;
            document.getElementById('password-error').textContent = 'Password must be at least 6 characters.';
        }

        // Validate Password Confirmation
        if (password_confirmation === '') {
            valid = false;
            document.getElementById('password-error').textContent = 'Please confirm your password.';
        } else if (password_confirmation !== password) {
            valid = false;
            document.getElementById('password-error').textContent = 'Passwords do not match.';
        }

        // Prevent form submission if validation fails
        if (!valid) {
            event.preventDefault();
        }
    };

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

</script>
