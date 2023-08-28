@extends('main-templete')
@extends('pages.patients.patient-main-templete')
@section('all_doctors.css')
    <title>Doctor Information</title>
    <link rel="stylesheet" type="text/css" href="../css/all_doctor.css">
    <link rel="stylesheet" type="text/css" href="../css/patient_profile.css">
@endsection
@section('patient-content')
@section('content')

    <body>
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
                    <tr>
                        <td>
                            {{ $doctor->name }}
                        </td>
                        <td>
                            {{ $doctor->specialty }}
                        </td>
                        <td>
                            Email: {{ $doctor->email }}<br>Phone: {{ $doctor->phone }}
                        </td>
                        <td>
                            <a href="{{route('showInquiry',['id'=> $doctor->id])}}">
                                <button class="inquiry" style="width:200px;">
                                    Send Now
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
