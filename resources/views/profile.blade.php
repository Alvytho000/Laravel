@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <section class="profile">
        <div class="profile-card">
            <h1>My Profile</h1>
            <div class="profile-img">
                <div class="img-box">
                    <img src="{{ asset('images/user.png') }}" alt="" srcset="">
                </div>
                <form method="POST" action="" class="change-img">
                    @csrf
                    <button type="submit" class="btn"><i class='bx bxs-pencil'></i></button>
                </form>
            </div>
        </div>
    </section>
@endsection
