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
    <body style="background-image: url('assets/images/bg_3.jpg');background-position: center center;
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="flaticon-lotus"></span>SALON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu">&nbsp;&nbsp;</span>
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
                        <li class="nav-item active"><a href="/salon" class="nav-link">Salons</a></li>
                        <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
            <div class="container">
                <div class="row no-gutters">

                    @foreach ($withimg as $data)
                    
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal salon-outline text-center px-2 px-lg-5" style="background-image: url('assets/images/bg_2.jpg')";>
                            <img style="border-radius: 50%; margin: 0 auto; padding: 3px; width: 200px; height:200px;" class="img-circle" src="{{ url($data->preview_img) }}" alt="Photo">
                            <div class="text mt-4">
                                <h3 class="mb-4">{{ $data->salon_name }}</h3>
                                <p class="mb-5">{{ $data->salon_address }}</p>
                                <a href="{{ url('seeProfile', ['salon_id' => $data->salon_id] ) }}" class="btn btn-white btn-block">See Profile</a>
                                <p><a href="{{ url('appointment_salon', ['salon_id' => $data->salon_id] ) }}" class="btn btn-white"> Appointment</a> &nbsp<a href="{{ url('saloncomment', ['salon_id' => $data->salon_id] ) }}" class="btn btn-white"> Comment</a></p>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>















        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>