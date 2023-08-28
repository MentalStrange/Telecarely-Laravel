@extends('main-templete')
@extends('pages.doctors.doctor-main-templete')

@section('write_prescription.css')
    <title>Send Prescription</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/inquiry.css')}}">
@endsection

@section('doctor-content')
@section('content')
    <body>
            <h1>Send Prescription</h1>
            <form action="{{route('sendPrescription')}}" method="post" style="width: 70%; margin:auto">
                @csrf
                <label for="drug_name">Drug Name:</label>
                <textarea id="drug_name" name="drug_name" rows="5" required ></textarea>
                <label for="drug_amount">Drug Amount:</label>
                <input class="drug_amount" type="number" id="drug_amount" name="drug_amount" rows="1" required
                    value="">
                <input type="submit" value="Send Prescription" name="submit">
            </form>
        </div>
    </body>
    <script>
        // Prevent resubmission the from everytime
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
@endsection
@endsection
