<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/encyclopedia.png') }}" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <span class="triangle1"></span>

        <div class="login-box">
            <h1><a href="{{ route('login') }}">Sign In</a></h1>
            <form action="{{ route('login-proses') }}" method="POST">
                @csrf
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
                <button type="submit" class="btn">Sign In</button>
                <div class="register">
                    <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}'
            })
        </script>
    @endif

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('failed') }}'
            })
        </script>
    @endif
</body>

</html>
