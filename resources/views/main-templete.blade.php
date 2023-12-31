<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="shortcut icon" href="{{asset('images/telecarely.png')}}" type="image/x-icon">
    @yield('index.css')
    @yield('signup.css')
    @yield('all_doctors.css')
    @yield('patient_index.css')
    @yield('patient_prescription.css')
    @yield('login.css')
    @yield('doc_index.css')
    @yield('doctor_patient.css')
    @yield('inquiry.css')
    @yield('write_prescription.css')
</head>

<body>
    <header class="header-area">
        <div class="logo">
            <a href="{{ route('/') }}"><img src="{{ asset('images/telecarely2.png') }}" alt=""></a>
        </div>
        @if (!session('loggedIn'))
            <ul class="links">
                <li><a href="{{ route('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="#about" class="{{ Request::is('/#about') ? 'active' : '' }}">About</a></li>
                <li><a href="#service" class="{{ Request::is('#service') ? 'active' : '' }}">Service</a></li>
                <li><a href="#contact" class="{{ Request::is('#contact') ? 'active' : '' }}"> Contact</a></li>
                <li>
                    <span class="login-signup">
                <li> <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}"> Login</a>
                <li> <a href="/signup" class="{{ Request::is('signup') ? 'active' : '' }}">Sing Up</a></li>
                </span>
                </li>
            </ul>
        @elseif(session('loggedIn'))
            <ul class="links">
                <li>
                    <a href="{{ route('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ session('user')->role == 'doctor' ? route('doctor') : route('patient') }}"
                        class="{{ !Request::is('/') ? 'active' : '' }}"> Dashboard</a>
                </li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        @endif
    </header>
    <main>
        @yield('content')
    </main>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    @include('sweetalert::alert')
</body>

</html>
