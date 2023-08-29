@extends('main-templete')
{{-- css section --}}
@section('index.css')
    <title>Telecarely</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                @if (session('success'))
                    <p> {{ session('success') }} </p>
                @endif
                <div class="content text-center text-md-left">
                    <h3>let us to Check your body</h3>
                    <p>How is health today, Sounds like not good!<br />Don't worry.
                        Find your doctor online Book as you wish with eDoc. <br />
                        We offer you a free doctor channeling service, Make your
                        appointment now.</p>
                    <a href="/signup" class="link-btn">Start your examination now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ************************************ -->
    <!-- end home section -->
    <!-- ************************************ -->
    <!-- ************************************ -->
    <!-- start about section -->
    <!-- ************************************ -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                        ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab
                        provident. Aperiam, officiis!</p>
                    <a href="signup.php" class="link-btn">Start your examination now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ************************************ -->
    <!-- end about section -->
    <!-- ************************************ -->
    <!-- ************************************ -->
    <!-- start process section -->
    <!-- ************************************ -->
    <section class="process" id="service">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Check From your Phone</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>
            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Check From your PC</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>
            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Show your prescription</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
            </div>
        </div>
    </section>
    <!-- ************************************ -->
    <!-- end process section -->
    <!-- ************************************ -->
    <!-- ************************************ -->
    <!-- start reviews section -->
    <!-- ************************************ -->
    <section class="reviews" id="contact">
        <h1 class="heading"> satisfied clients </h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum
                    id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mohamed Ramadan</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum
                    id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mohamed Ramadan</h3>
                <span>satisfied client</span>
            </div>
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum
                    id, laboriosam asperiores iure omnis alias?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Mohamed Ramadan</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>
    <!-- ************************************ -->
    <!-- end reviews section -->
    <!-- ************************************ -->
    <!-- ************************************ -->
    <!-- start footer section -->
    <!-- ************************************ -->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+201015775920</p>
                <p>+201015775920</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>BFCAI Benha</p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:07am to 10:00pm</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>Mohamed.ramadan2393@gmail.com</p>
            </div>
        </div>
        <div class="credit"> &copy; copyright @ by <span>BFCAI Team</span> </div>
    </section>
    <!-- ************************************ -->
    <!-- end footer section -->
    <!-- ************************************ -->
@endsection
