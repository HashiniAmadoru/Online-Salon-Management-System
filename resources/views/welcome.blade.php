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

        <!--Nav bar-->
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
                        <li class="nav-item"><a href="/salon" class="nav-link">Salons</a></li>
                        <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <!-- Login and Registration part -->
        <section class="hero-wrap js-fullheight" style="background-image: url('assets/images/image_3.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-10 ftco-animate text-center">
                        <div class="icon">
                            <span class="flaticon-lotus"></span>
                        </div>
                        <h1>&nbsp; Beauty Center</h1>
                        <p>
                            <a href="{{ url('login') }}" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Login</a>
                            <a href="{{ url('customerReg') }}" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">REGISTER</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End login & registration part -->

        <!--Service part-->
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal text-center px-2 px-lg-5">
                            <div class="img" style="background-image: url('assets/images/mkup1.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Make Up</h3>
                                <p class="mb-5">With a good makeup brush, every women can be an artist. My makeup makes me happy.</p>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal active text-center px-2 px-lg-5">
                            <div class="img" style="background-image: url('assets/images/f2.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Facial</h3>
                                <p class="mb-5">Be good to your skin. You'll wear it every day for the rest of your life</p>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal text-center px-2 px-lg-5">
                            <div class="img" style="background-image: url('assets/images/c1.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Hair Color</h3>
                                <p class="mb-5">Don't just live a life of black & white when there's a spectrum of colors available for you.</p>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End service part-->

        <!--Salon part-->
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal salon-outline text-center px-2 px-lg-5" style="background-image: url('assets/images/bg_2.jpg')";>
                            <div class="img" style="background-image: url('assets/images/b1.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Salon Sara</h3>
                                <p class="mb-5">Gandara</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal salon-outline text-center px-2 px-lg-5" style="background-image: url('assets/images/bg_2.jpg')";>
                            <div class="img" style="background-image: url('assets/images/b2.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Salon Hasini</h3>
                                <p class="mb-5">Matara</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal salon-outline text-center px-2 px-lg-5" style="background-image: url('assets/images/bg_2.jpg')";>
                            <div class="img" style="background-image: url('assets/images/b3.jpg');"></div>
                            <div class="text mt-4">
                                <h3 class="mb-4">Salon Misha</h3>
                                <p class="mb-5">Kottagoda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End salon part-->

        <!-- Benefits of Doing Facial -->
        <section class="ftco-section ftco-intro" style="background-image: url(assets/images/intro.jpg);">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="heading-section ftco-animate">
                            <h2 class="mb-4">Benefits of Doing Facial</h2>
                        </div>
                        <p class="ftco-animate">Taking care of your skin is a major investment that pays off in dividends later on in life. So many models insist on daily cleansers, exfoliants, and moisturizers.</p>
                        <ul class="mt-5 do-list">
                            <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>It's linked to lower stress levels.</a></li>
                            <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>They also allow you to say goodbye to acne marks.</a></li>
                            <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Monthly facials shrink pores.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Benefits of Doing Facial -->

        <!-- Extra details -->
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="block-20" style="background-image: url('assets/images/f3.jpg');"></div>
                            <div class="text p-4 float-right d-block">

                                <p>Getting a facial is way better for you than you thought, especially if you make it a monthly occurrence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="block-20" style="background-image: url('assets/images/m2.jpg');"></div>
                            <div class="text p-4 float-right d-block">

                                <p>Cosmetics are products used to enhance or change the appearance of the face, fragrance or the texture of the body.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <div class="block-20" style="background-image: url('assets/images/gallery-2.jpg');"></div>
                            <div class="text p-4 float-right d-block">

                                <p>The high frequency facial is a skin care treatment used by professionals to help treat and prevent stubborn acne.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Extra details -->

        <!-- Images -->
        <section class="ftco-gallery ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ftco-animate">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/f2.jpg);">
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-3.jpg);">
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-4.jpg);">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Images -->

        <!-- Footer -->
        <footer class="ftco-footer ftco-section">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Beauty Center</h2>
                            <p style="color:black;">A beauty salon is an establishment that offers a variety of cosmetic treatments and cosmetic services for women. Beauty salons may offer a variety of services including professional hair cutting and styling, manicures and pedicures, and often cosmetics, makeup and makeovers.</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4 ml-md-4">
                            <h2 class="ftco-heading-2">Popular Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="/salon" style="color:black;">Salons</a></li>
                                <li><a href="/service" style="color:black;">Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2" style="color:black;">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="/contactus" style="color:black;">Contact Us</a></li>
                                <li><a href="/login" style="color:black;">Login</a></li>
                                <li><a href="/customerReg" style="color:black;">Registration</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span style="color:black;">ERAMUDU GAHA WATTA, GANDARA.</span></li>
                                    <li><span class="icon icon-phone"></span><span style="color:black;">+94 71 0 136 124</span></li>
                                    <li><span class="icon icon-envelope"></span><span style="color:black;">hashiniamadoru9@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
        <!-- End loader -->

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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('assets/js/google-map.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>