@extends('main-templete')
@extends('pages.patients.patient-main-templete')
@section('inquiry.css')
    <title>Inquiry</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/inquiry.css')}}">
@endsection
@section('patient-content')
@section('content')

    <body>
        <div class="container">
            <h1>Send Inquiry to Doctor</h1>
            <form action="{{route('inquiry')}}" method="post">
                @csrf
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <input type="submit" value="Send Inquiry" name="submit">
            </form>
        </div>
    </body>
@endsection
@endsection
