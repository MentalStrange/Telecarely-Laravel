<head>
    <title>Doctor</title>
        <link rel="stylesheet" href="{{asset('css/patient_profile.css')}}">
</head>

<body>
    <div class="menu">
        <div class="doctor-profile">
            <img src="{{ asset(session('user')->image) }}" alt="Doctor Image">
            <h2>
                {{ session('user')->name }}
            </h2>
        </div>
        <ul>
            <li>
                <a href="{{ route('/') }}" class="{{ Request::is('/') ? 'active-side-bar' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('patients') }}"class="{{ Request::is('/doctor/patient') ? 'active-side-bar' : '' }}">
                    My Patients
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="{{ Request::is('logout') ? 'active-side-bar' : '' }}">
                    logout
                </a>
            </li>
        </ul>
    </div>

    <main>
        @yield('doctor-content')
    </main>
    @include('sweetalert::alert')

</body>
