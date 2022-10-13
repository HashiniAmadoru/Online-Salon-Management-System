<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SALON</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">



        <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">



        <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">



        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="flaticon-lotus"></span>SALON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu">&nbsp;&nbsp;</span>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="treatments.html" class="nav-link">Salons</a></li>
                        <li class="nav-item"><a href="specialists.html" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="pricing.html" class="nav-link">About US</a></li>
                        <li class="nav-item"><a href="blog.html" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </body>
</html>



