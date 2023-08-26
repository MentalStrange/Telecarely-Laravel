<!DOCTYPE html>
<html>

<head>
    <title>Patient</title>
    <link rel="stylesheet" href="../css/patient_profile.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">

</head>

<body>
    @include('componanets.navbar')
    <div class="menu">
        <div class="doctor-profile">
            <img src="{{asset(session('user')->image)}}" alt="Doctor Image" class="w-100 rounded-full">
            <h2>
                <h2> {{session('user')->name}} </h2>

            </h2>
        </div>
        <ul>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li><a href="{{ route('Doctors') }}">All Doctors</a></li>
            <li><a href="{{route('prescription')}}">Your Prescriptions</a></li>
            <li><a href="{{route('logout')}}">logout</a></li>
        </ul>
    </div>
    <div class="main-section">
        <h1>Welcome to <a href="../index.html" class="logo">TELE<span>Carely.</span></a>
            <div class="center-container">
                <h3>Welcome!</h3>
                <h1>
                    <span>
                        {{session('user')->name}}
                    </span>
                </h1>

                {{-- <h3>Channel a Doctor Here</h3>
                <form class="search-form" action="patient_Index.php" method="get">
                    <input type="search" name="search_for" class="input-text"
                        placeholder="Search Doctor and We will Find The Session Available">
                    <input type="Submit" value="Search" class="btn-primary btn">
                </form>
                <table>
                    <tr>doctor name</tr>
                </table> --}}

            </div>
    </div>

    <!-- ********************************* -->
    <!-- start the dashbord of the patient -->
    <!-- ********************************* -->
    <div class="dashboard">
        <div class="dashboard-filter">
            <p class="dashboard-filter-label">Status</p>
        </div>
        <div class="dashboard-items">
            <div class="dashboard-item">
                <div class="dashboard-item-number">0</div>
                <div class="dashboard-item-label">All Doctors</div>
            </div>
            <div class="dashboard-item">
                <div class="dashboard-item-number">0</div>
                <div class="dashboard-item-label">All Patients</div>
            </div>
            <div class="dashboard-item">
                <div class="dashboard-item-number">0</div>
                <div class="dashboard-item-label">All Nurse</div>
            </div>
            <div class="dashboard-item">
                <div class="dashboard-item-number">0</div>
                <div class="dashboard-item-label">Today Sessions</div>
            </div>
        </div>
    </div>
    <!-- ********************************* -->
    <!-- end the dashbord of the patient -->
    <!-- ********************************* -->

@include('sweetalert::alert')
</body>

</html>
