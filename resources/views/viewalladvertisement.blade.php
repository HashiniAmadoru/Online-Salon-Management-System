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
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


        <style type="text/css">
            .offer-deal1 {
                width: 100%;
                padding-bottom: 1em;
            } 
        </style>
    </head>
    <body style="background-image: url('../assets/images/bg_3.jpg'); max-width: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;">

        <!--Nav bar-->
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
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
                        <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item active"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

         <section class="content" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <input type="hidden" name="adView" value="s">
                                <h3 class="profile-username">{{ $profile['topic'] }}</h3>
                                <h6>Posted on {{ $profile['updated_at'] }} </h6>
                               
                                <div>
                                    <img style="border: 2px solid #cccccc;border-radius: 8px; margin-bottom: 15px;" class="img-fluid" src="{{ url($profile['images'][0]['preview_img']) }}" alt="Photo">
                                    <img style="width: 350px; height:300px;border: 2px solid #cccccc;border-radius: 8px;" class="img-fluid" src="{{ url($profile['images'][1]['preview_img']) }}" alt="Photo">
                                    <img style="width: 350px; height:300px;border: 2px solid #cccccc;border-radius: 8px;" class="img-fluid" src="{{ url($profile['images'][2]['preview_img']) }}" alt="Photo">
                                </div>
                            </div>
                        </div>
                         
                    </div>

                    <div class="col-md-4">
                         <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
 <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>POST BY</b> <a class="float-right">{{ $profile['name'] }}</a>
                                    </li>
                                     <li class="list-group-item">
                                        <b>Price</b> <a class="float-right">RS.{{ $profile['price'] }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $profile['email'] }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone No</b> <a class="float-right">{{ $profile['phone1'] }}</a>
                                    </li>
                                     <li class="list-group-item">
                                        <b>Address</b> <a class="float-right">{{ $profile['address'] }}</a>
                                    </li>
                                     <li class="list-group-item">
                                        <b>Description</b> <a class="float-right">{{ $profile['description'] }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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