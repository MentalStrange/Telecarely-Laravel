@extends('main-templete')
@extends('pages.patients.patient-main-templete')
@section('patient_prescription.css')
    <title>Doctor Information</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/patient_profile.css') }}">
@endsection
@section('patient-content')
@section('content')

    <body>
        <main>
            @foreach ($prescriptions as $prescription)
                <table class="prescription-table">
                    <h2 style="margin: 20px">Prescription</h2>
                    <tr>
                        <th>Doctor Name </th>
                        <td>{{ $prescription->doctor_id }}</td>
                    </tr>
                    <tr>
                        <th>Drug Name </th>
                        <td>{{ $prescription->drug_name }}</td>
                    </tr>
                    <tr>
                        <th>Drug Amount </th>
                        <td>{{ $prescription->drug_amount }}</td>
                    </tr>
                </table>
            @endforeach
            @include('sweetalert::alert')
    </body>
@endsection
@endsection
