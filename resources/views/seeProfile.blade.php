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

<input type="hidden" name="salon" id="salon" value="{{ $profile['salon_id'] }}">

        <!-- Start salon name with background -->
        <section class="hero-wrap hero-wrap-2" style="margin-top: 70px;background-image: url( {{ $cover_P['preview_img'] }} )"; data-stellar-background-ratio="0.5">
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
                                @foreach ($time as $data) 
                            @php

                            $date = (!empty($data['date']))? $data['date'] :'';
                            $open_time = (!empty($data['open_time']))? $data['open_time'] :'';
                            $close_time = (!empty($data['close_time']))? $data['close_time'] :'';

                            @endphp
                            <tr>
                                <td>{{ $date }}</td>
                                @if(($open_time == NULL) && ($close_time == NULL))
                                <td style="Color: red; font-weight: bold;">Closed</td>
                                @else
                                <td>{{ $open_time }} - {{ $close_time }}</td>
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-8 col-md-6 col-sm-4 col-xs-12 d-flex align-items-stretch marginTop">
                        <div class="offer-deal px-2 px-lg-5">
                            <h1 class="mb-3 bread text-center" style="font-family: Bernard MT Condensed; font-size: 4.5em;">WELCOME</h1>
                            <div class="" style="border-radius: 18px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background: rgba(255, 255, 255, 0.1); max-width: 100%">

                                <div class="treatment w-100 ftco-animate p-3 py-4">

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-phone"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">MOBILE NO</h3>
                                                <p style="color: black">{{ $profile['profile_details']['phone1'] }}</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-envelope"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">EMAIL</h3>
                                                <p style="color: black">{{ $profile['profile_details']['email'] }}</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" style="margin: 10px 10px">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span style="color: #e9ecef" class="icon icon-map-marker"></span>
                                            </div>
                                            <div class="text mt-2 text-center">
                                                <h3 style="font-family: Prata serif;">CITY</h3>
                                                <p style="color: black">{{ $profile['profile_details']['city'] }}</p>
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
        <section class="ftco-section ftco-intro" style="background-image: url( {{ $cover_P['preview_img'] }} );">
            <div class="container">
                <div class="row justify-content-end">

                    @foreach ($alldata as $data) 
                    @php

                    $description = (!empty($data['description']))? $data['description'] :'';
                    $vision = (!empty($data['vision']))? $data['vision'] :'';
                    $mission = (!empty($data['mission']))? $data['mission'] :'';
                    @endphp

                    <div class="col-md-6" style="background: #f2f2f2;border-radius: 18px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="heading-section ftco-animate">
                            <h2 class="mb-4">Who we are?</h2>
                        </div>
                        <p>{{ $description }}</p>
                        <ul class="mt-5 do-list">
                            <li>
                                <h3>VISION</h3>
                                <p style=" font-size: 20px; ">{{ $vision }}</p></li>
                            <li>
                                <h3>Mission</h3>
                                <p style=" font-size: 20px;">{{ $mission }}</p></li>

                        </ul>
                    </div>
                     @endforeach
                </div>
            </div>
        </section>
        <!-- End Benefits of Doing Facial -->



<!--Customer Comments-->
        <section class="ftco-section testimony-section" style="background: #f2f2f2">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                  <div class="col-md-10 heading-section ftco-animate text-center">
                    <h3 class="subheading">Comments</h3>
                    <h2 class="mb-1">Successful Stories</h2>
                  </div>
                </div>
                <div class="row ftco-animate">
                  <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($Comment as $data)
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="text">
                            <div class="line pl-5">
                                <p class="mb-4 pb-1">{{ $data['message'] }}</p>
                                <span class="quote d-flex align-items-center justify-content-center">
                                  <i class="icon-quote-left"></i>
                                </span>
                              </div>
                            <div class="d-flex align-items-center">
                               
                                  <div class="ml-4">
                                    <p class="name">{{ $data['name'] }}</p>
                                    <span class="position">Customer</span>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
            </div>
         </section>
<!--End customer comments-->



        <!-- Start our service -->
        <section class="ftco-section ftco-intro" style="background-image: url( {{ $cover_P['preview_img'] }} );" data-stellar-background-ratio="0.5">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-12 heading-section ftco-animate text-center">
                        <h3 class="subheading">Services</h3>
                        <h2 class="mb-1">Our Services</h2>
                    </div>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="row no-gutters">

                         @foreach($mainSerWithimg as $mainData)
                        <div class="col-sm-3 d-flex align-items-stretch">
                            <div class="treatment w-100 text-center ftco-animate p-3 py-4">
                                <div class="offer-deal text-center px-2 px-lg-5 serviceModel" data-toggle="modal" data-service="{{ $mainData['main_service_id'] }}" data-target="#myModal">
                                    <img style="cursor: pointer;" class="product" class="img-circle" src="{{ url($mainData['preview_img']) }}" alt="Photo">
                                    <div class="text mt-4" style="font-family: impact;">
                                        <h3>{{ $mainData['main_service'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>


                <!--Model-->
                <div class="modal" id="myModal">
                    <div id="result_content"></div>
                </div>
                <!--end model-->

            </div>
            </div>
        </section>
        <!-- End service -->

        <!--Product Details-->

        <section class="ftco-section ftco-intro" style="background:grey;" data-stellar-background-ratio="0.5">
            <div class="container px-md-5">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-12 heading-section ftco-animate text-center">
                        <h3 class="subheading">Products</h3>
                        <h2 class="mb-1">Our Products</h2>
                    </div>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="row">

                         @foreach($productWithimg as $mainProduct)
                       

                         <div class="col-md-3 ftco-animate" style="margin-bottom: 15px;margin: 0 auto;">
                        <div class="gallery img d-flex align-items-center productModel" data-toggle="modal" data-product="{{ $mainProduct['product_type_id'] }}" data-target="#myModal2" style="cursor: pointer;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url( {{ $mainProduct['preview_img'] }} );">
                        </div>
                         <div class="text mt-4 text-center" style="font-family: impact;">
                                        <h3>{{ $mainProduct['product_type'] }}</h3>
                                    </div>
                    </div>
                        @endforeach

                    </div>
                </div>


                <!--Model-->
                <div class="modal" id="myModal2">
                    <div id="result_product"></div>
                </div>
                <!--end model-->

            </div>
            </div>
        </section>

        <!--End Product-->

        <!-- Start Gallery -->
        <section class="ftco-gallery ftco-section" data-stellar-background-ratio="0.5" style="background: #f2f2f2">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section ftco-animate text-center">
                        <h3 class="subheading">Gallery</h3>
                        <h2 class="mb-1">See the latest photos</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($withimg as $data)
                    <div class="col-md-3 ftco-animate" style="margin-bottom: 15px;">
                        <div class="gallery img d-flex align-items-center" style="border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-image: url( {{ $data['preview_img'] }} );">
                        </div>
                    </div>
                    @endforeach
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

 <script type="text/javascript">

$(document).ready(function () {


    serVData = $('#salon').val();
    // console.log(serVData);
    // dataurl = "{{ url('allSub_Ser') }}/" + 1;
    // getdata(dataurl);

    $(".serviceModel").click(function (event) {

        serData = $(this).data('service');
        dataurl = "{{ url('seeProfileWithID') }}/" + serVData + "/" + serData;
        getdata(dataurl);
        console.log(dataurl);
        // $(this).css({'color': 'red'})
        // dataurl = "{{ url('allSub_Ser') }}/" + serData;
        // getdata(dataurl);

    });


    $(".productModel").click(function (event) {

        perData = $(this).data('product');
        dataurl = "{{ url('seeProfile_Product_WithID') }}/" + serVData + "/" + perData;
        getdataProduct(dataurl);
        console.log(dataurl);
       

    });

});


function getdata(dataurl) {
    $.get(dataurl, function (data) {
        $('#result_content').html(data);
    })
}

function getdataProduct(dataurl) {
    $.get(dataurl, function (data) {
        $('#result_product').html(data);
    })
}

        </script>

    </body>
</html>