<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="SEKAIPEDIA">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/encyclopedia.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>

<body>

    {{-- NAVIGATION BAR --}}

    <header class="header">
        <a href="{{ route('index') }}">
            <h1 class="logo">SEKAI<span>PEDIA</span></h1>
        </a>
        @guest
            <form action="{{ route('login') }}" method="GET">
                <button type="submit" class="login">Login | Register</button>
            </form>
        @else
            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#encyclopedia">Encyclopedia</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="social-media">
                <ul class="navbar-social-media">
                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                </ul>
            </div>
            <div class="account-dropdown">
                <a href="#" class="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-content">
                    <form action="" method="get">
                        @csrf
                        <button type="submit" class="profile">Profile</button>
                    </form>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="logout">Logout</button>
                    </form>
                </div>
            </div>
        @endguest
    </header>

    @yield('content')

    <footer class="footer">
        Copyright &copy; | 2023 V.Corp. All Rights Reserved.
        @auth
            <div class="to-top">
                <i class='bx bx-chevrons-up'></i>
            </div>
        @endauth
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
