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
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/service" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="/salon" class="nav-link">Salons</a></li>
                        <li class="nav-item active"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->


        <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_3 - Copy.jpg');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-3 bread">Contact us</h1>
                <p class="breadcrumbs"> <span>Contact us</span></p>
              </div>
            </div>
          </div>
        </section>


        <section class="ftco-section contact-section" style="background: #f2f2f2;">
            <div class="container">
                <div class="row block-9">
                    <div class="col-md-4 contact-info ftco-animate bg-light p-4">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h2 class="h4">Contact Information</h2>
                            </div>
                            <div class="col-md-12 mb-3">
                              <p><span>Address:</span> ERAMUDU GAHA WATTA, GANDARA.</p>
                            </div>
                            <div class="col-md-12 mb-3">
                              <p><span>Phone:</span> <a href="tel://1234567920">+94 710136124</a></p>
                            </div>
                            <div class="col-md-12 mb-3">
                              <p><span>Email:</span> <a href="mailto:info@yoursite.com">hashiniamadoru9@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 ftco-animate">
                        <form method="POST" class="contact-form" action="{{ route('contact') }}">
                        @csrf
                        <div class="row">
                                 
                            <div class="col-md-6">
                                <div class="form-group">
                                <input placeholder="Your Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input placeholder="Your Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                         
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                             
                        <div style="margin-top: 30px;" class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-outline-info py-3 px-5">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


       

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