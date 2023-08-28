@extends('main-templete')
@extends('pages.doctors.doctor-main-templete')
@section('doc_index.css')
    <title>Patient</title>
    <link rel="stylesheet" href="../css/patient_profile.css"> <!-- Link to the CSS file -->
@endsection

@section('doctor-content')
@section('content')

    <body>
        <div class="main-section">
            <h1>Welcome to <a href="../index.html" class="logo">TELE<span>Carely.</span></a>
                <div class="center-container">
                    <h3>Welcome!</h3>
                    <span>
                        {{ session('user')->name }}
                    </span>
            </h1>
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
                    <div class="dashboard-item-number"></div>
                    <div class="dashboard-item-label">All Doctors</div>
                </div>
                <div class="dashboard-item">
                    <div class="dashboard-item-number"></div>
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
@endsection
@endsection
