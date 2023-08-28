<link rel="stylesheet" href="{{ asset('css/patient_profile.css') }}">

<body>
    <div class="menu">
        <div class="doctor-profile">
            <img src="{{ asset(session('user')->image) }}" alt="Doctor Image">
            <h2>
                <h2> {{ session('user')->name }} </h2>
            </h2>
        </div>
        <ul>
            <li><a href="{{ route('/') }}" class="{{ Request::is('/') ? 'active-side-bar' : '' }}">Home</a></li>
            <li><a href="{{ route('Doctors') }}"
                    class="{{ Request::is('/patient/allDoctors') ? 'active-side-bar' : '' }}">All
                    Doctors</a></li>
            <li><a href="{{ route('prescription') }}"
                    class="{{ Request::is('prescription') ? 'active-side-bar' : '' }}">Your Prescriptions</a></li>
            <li><a href="{{ route('logout') }}" class="{{ Request::is('logout') ? 'active-side-bar' : '' }}">logout</a>
            </li>
        </ul>
    </div>
    <main>
        @yield('patient-content')
    </main>
    @include('sweetalert::alert')
</body>
