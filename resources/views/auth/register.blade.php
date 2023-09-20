<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Register">
    <meta http-equiv="X-UA-Compatible" content="Register">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/encyclopedia.png') }}" type="image/x-icon">
    <title>Register</title>
</head>

<body>
    <div class="wrapper">
        <span class="triangle1"></span>

        <div class="register-box">
            <h1><a href="{{ route('register') }}">Sign Up</a></h1>
            <form action="{{ route('register-proses') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="name" id="name" placeholder="Username">
                    @error('name')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="Email Address">
                    @error('email')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password">
                    @error('password')
                        <small style="color: red;">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="login">
                    <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
