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

        <!-- Start salon name with background -->
        <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_2.jpg')"; data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        
                        <h1 class="mb-3 bread">{{ $profile['salon_name'] }}</h1>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->


        <!-- Opening and closing time -->
        <section class="ftco-no-pb">
            <div class="container-fluid openingBGcolor">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 d-flex align-items-stretch marginTop">
                        <table class="seeProfile table table-dark">
                            <thead>
                                <tr>
                                    <th>Day</th>
                                    <th>Opening & Closing Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sunday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Monday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>09.00am - 07.00pm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-8 col-md-6 col-sm-4 col-xs-12 d-flex align-items-stretch marginTop">
                        <div class="offer-deal px-2 px-lg-5">
                            <h1 class="mb-3 bread text-center" style="font-family: Bernard MT Condensed; font-size: 4.5em;">WELCOME</h1>
                            <div class="" style="background: rgba(255, 255, 255, 0.1); max-width: 100%">

                                <div class="treatment w-100 ftco-animate p-3 py-4">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-phone"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">MOBILE NO</h3>
                                                <p style="color: black">0710123456</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-envelope"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">EMAIL</h3>
                                                <p style="color: black">hashini@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-map-marker"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">CITY</h3>
                                                <p style="color: black">MATARA</p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->


        <!-- Benefits of Doing Facial -->
        <section class="ftco-section ftco-intro" style="background-image: url(assets/images/intro.jpg);">
            <div class="container">
                <div class="row justify-content-end">

                    <div class="col-md-6">
                        <div class="heading-section ftco-animate">
                            <h2 class="mb-4">Who we are?</h2>
                        </div>
                        <p>The most exclusive unisex salon and beauty spa in Negombo, takes the center stage of beauty culture in Sri Lanka. we bring the world of bridal arts, hair styles, and beauty treatments on a perfect ambiance using the state of the art technology and a little bit of secrets.</p>
                        <ul class="mt-5 do-list">
                            <li>
                                <h3>VISION</h3>
                                <p style=" font-size: 20px; ">we are at Julia's closet will change the way you think about bridal dressing,hair care, skin care and hand and foot care ,friendly staff, a luxury relaxing atmosphere and the best prices in town give you an experience that will leave you both inside and out</p></li>
                            <li>
                                <h3>Mission</h3>
                                <p style=" font-size: 20px;">To make your salon experience as unique and memorable as you are.our mission is to consistently bring you the freshest styles and ideas, by keeping up with the current trends and consistently educating ourselves about the best practice.</p></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Benefits of Doing Facial -->



        <!-- Start successful stories -->
        <section class="ftco-section testimony-section" style="background: #f2f2f2">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-10 heading-section ftco-animate text-center">
                        <h2 class="mb-1">Successful Stories</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text">
                                        <div class="line pl-5">
                                            <p>Service is good</p>
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text">
                                        <div class="line pl-5">
                                            <p>The class .active makes a button appear pressed, and the disabled attribute makes a button unclickabl</p>
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="text">
                                        <div class="line pl-5">
                                            <p>do not support the disabled attribute and must therefore use the .disabled class to make it visually appear disabled.</p>
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->



        <!-- Start our product -->
        <section class="ftco-section" style="background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-image: url('assets/images/bg1.jpg');" data-stellar-background-ratio="0.5">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-12 heading-section ftco-animate text-center">
                        <h3 class="subheading">Services</h3>
                        <h2 class="mb-1">Our Products</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="row no-gutters">

                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="treatment w-100 text-center ftco-animate p-3 py-4">
                                    <div class="offer-deal text-center px-2 px-lg-5" data-toggle="modal" data-target="#myModal">
                                        <img style="cursor: pointer;" class="product" class="img-circle" src="{{ url('assets/images/fs.png') }}" alt="Photo">
                                        <div class="text mt-4" style="font-family: impact;">
                                            <h3>MAKEUP</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="treatment w-100 text-center ftco-animate p-3 py-4">
                                    <div class="offer-deal text-center px-2 px-lg-5" data-toggle="modal" data-target="#myModal">
                                        <img style="cursor: pointer;" class="product" class="img-circle" src="{{ url('assets/images/h.png') }}" alt="Photo">
                                        <div class="text mt-4" style="font-family: impact;">
                                            <h3>HAIR</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="treatment w-100 text-center ftco-animate p-3 py-4">
                                    <div class="offer-deal text-center px-2 px-lg-5" data-toggle="modal" data-target="#myModal">
                                        <img style="cursor: pointer;" class="product" class="img-circle" src="{{ url('assets/images/ss.png') }}" alt="Photo">
                                        <div class="text mt-4" style="font-family: impact;">
                                            <h3>SKIN</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="treatment w-100 text-center ftco-animate p-3 py-4">
                                    <div class="offer-deal text-center px-2 px-lg-5" data-toggle="modal" data-target="#myModal">
                                        <img style="cursor: pointer;" class="product" class="img-circle" src="{{ url('assets/images/n.png') }}" alt="Photo">
                                        <div class="text mt-4" style="font-family: impact;">
                                            <h3>NAILS</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <!--Model-->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog  modal-xl modal-dialog-scrollable">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h1 class="modal-title">NAILS</h1>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/gallery-1.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/f2.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/gallery-3.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/gallery-4.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/gallery-3.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-3 ftco-animate">
                                                <div class="gallery img d-flex align-items-center" style="margin-top:15px;background-image: url(assets/images/gallery-4.jpg);">
                                                </div>
                                                <div class="text">
                                                    <h3 style="text-align: center;">NAILS</h3>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end model-->

                </div>
            </div>
        </section>
        <!-- End production -->



        <!-- Start Gallery -->
        <section class="ftco-gallery ftco-section" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h3 class="subheading">Gallery</h3>
                        <h2 class="mb-1">See the latest photos</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 ftco-animate" style="margin-bottom: 15px;">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
                        </div>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
                        </div>
                    </div>
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
        <!-- End Gallery -->




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
       
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>