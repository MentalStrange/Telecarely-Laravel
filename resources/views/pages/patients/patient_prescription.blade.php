<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information</title>
    <link rel="stylesheet" type="text/css" href="../css/all_doctor.css">
    <link rel="stylesheet" type="text/css" href="../css/patient_profile.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">


</head>

<body>
    @include('componanets.navbar')
    <div class="menu">
        <div class="doctor-profile">
            <img src="{{ asset(session('user')->image) }}" alt="Doctor Image" class="w-100 rounded-full">
            <h2>
                <h2> {{ session('user')->name }} </h2>

            </h2>
        </div>
        <ul>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li><a href="{{ route('Doctors') }}">All Doctors</a></li>
            <li><a href="{{ route('prescription') }}">Your Prescriptions</a></li>
            <li><a href="{{ route('logout') }}">logout</a></li>

        </ul>
    </div>
    <main>
        @foreach ($prescriptions as $prescription)
            <section>
                <h2>Prescription</h2>
                <p><strong>Doctor ID:</strong> {{ $prescription->doctor_id }}</p>
                <p><strong>Drug Name:</strong> {{ $prescription->drug_name }}</p>
                <p><strong>Drug Amount:</strong> {{ $prescription->drug_amount }}</p>
            </section>
        @endforeach

        @include('sweetalert::alert')

</body>

</html>
