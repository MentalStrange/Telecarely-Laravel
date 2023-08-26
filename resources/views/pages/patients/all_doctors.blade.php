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
            <li><a href="{{route('prescription')}}">Your Prescriptions</a></li>
            <li><a href="{{route('logout')}}">logout</a></li>

        </ul>
    </div>
    <h1>Doctor Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialty</th>
                <th>Contact Information</th>
                <th>Send Inquiry</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <a href="cardiology.html">
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialty }}</td>
                        <td>Email: {{ $doctor->email }}<br>Phone: {{ $doctor->phone }}</td>

                        <!--"note here" i made here a new button to access the patient to send the inquiry for the doctor but note that the update of css not reflect here in php code and i don't know where the error -->
                        <td>
                            <button class="inquiry" style="width:200px;">

                                Send Now
                </a>
                </button>
                </td>

                </tr>
                </a>
            @endforeach
        </tbody>
    </table>
</body>

</html>
