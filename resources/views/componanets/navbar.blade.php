<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecarely</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{ asset('fontawasome/fontawasome.css') }}">
    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
</head>

<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- <img src="images/telecarely.png" alt=""> -->
                <a href="/" class="logo">TELE<span>Carely.</span></a>
                <nav class="nav">
                    <a href="/">home</a>
                    <a href="#about">about</a>
                    <a href="#reviews">reviews</a>
                    <!-- <a href="#contact">contact</a> -->
                </nav>
                <a style=" margin-right: -230px;font-size: 1.7rem; color: var(--blue);" href="/login">Login</a>
                <a style=" font-size: 1.7rem; color: var(--blue);" href="/signup">Sing Up</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

</html>
