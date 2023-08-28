@extends('main-templete')
@extends('pages.doctors.doctor-main-templete')
@section('doctor_patient.css')
    <title>Patient Information</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/all_doctor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/patient_profile.css')}}">
@endsection
@section('doctor-content')
@section('content')

    <body>
        <h1>Patient Information</h1>
        <table>
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Message</th>
                    <th>Send prescription</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td> {{ $patient->message }}</td>
                        <td>
                            <a href="{{route('showPatientPrescription',["patientId"=>$patient->patient_id])}}">
                                <button>
                                    Send
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection
@endsection
