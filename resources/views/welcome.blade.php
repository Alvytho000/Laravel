@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- HERO SECTION --}}

    <section class="home" id="home" style="background-image: url('{{ asset('images/logic.jpg') }}');">
        <div class="home-content">
            <div class="content">
                <h1>SEKAI<span>PEDIA</span></h1>
                <h3>Encyclopedia Of World</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis incidunt asperiores, consectetur
                    fuga dicta temporibus. Unde tempora eius distinctio repellendus?</p>
                @guest
                    <form action="{{ route('login') }}" method="POST">
                        <button type="submit" class="login">GET STARTED</button>
                    </form>
                @else
                    <form action="{{ route('encyclopedia') }}" method="GET">
                        <button type="submit" class="pedia">ENCYCLOPEDIA</button>
                    </form>
                @endguest
            </div>
            <div class="empty-slot"></div>
        </div>
    </section>

    @auth
        <section class="encyclopedia" id="encyclopedia">
            <div class="pedia-content">
                <h1>SEKAI<span>PEDIA</span></h1>
                <h4>Cari tahu tentang dunia dengan SEKAI<span>PEDIA</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ratione tempore maxime eligendi enim earum
                    cumque facilis, repellendus, esse fuga saepe explicabo blanditiis obcaecati voluptates in tenetur placeat
                    sit veritatis!</p>
            </div>
            <div class="pedia-topic">
                <h3>Pilih Topic Yang Anda Mau</h3>
                <div class="topic-box">
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/world.jpg') }}" alt="" srcset="">
                            </div>
                            <h3>World</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/country.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="cards-content">
                                <h3>Country</h3>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/panda.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="cards-content">
                                <h3>Animals</h3>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/plant.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="cards-content">
                                <h3>Plants</h3>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/foods.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="cards-content">
                                <h3>Foods</h3>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="topic-cards">
                            <div class="topic-img">
                                <img src="{{ asset('images/things.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="cards-content">
                                <h3>Thing</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="about" id="about">

        </section>

        <section class="contact" id="contact">

        </section>

        <script src="{{ asset('js/script.js') }}"></script>
    @endauth
@endsection
