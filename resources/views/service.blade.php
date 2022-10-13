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

        <style type="text/css">
            .collapse-content .fa.fa-heart:hover {
  color: #f44336 !important;
}
.collapse-content .fa.fa-share-alt:hover {
  color: #0d47a1 !important;
}


        </style>
    </head>
    <body style="background-image: url('assets/images/bg_2.jpg'); max-width: 100%;
          background-position: center center;
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
                        <li class="nav-item active"><a href="/service" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="/salon" class="nav-link">Salons</a></li>
                        <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 30px;margin-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" style="margin-top: 10px;">
                        <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4" style="background: #e0ebeb;border-radius: 18px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div>
                                <h3 style="font-family: Prata, serif;">Services</h3>
                            </div>

                            @foreach ($main_Services as $key => $mainData)
                            @php
                            $show = '';
                            $expanded = 'false';
                            $collapsed = 'collapsed';

                            if($key == 0){
                            $show = 'show';
                            $expanded = 'true';
                            $collapsed = '';
                            }

                            @endphp
                            <div class="card">

                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="d-flex align-items-center justify-content-between btn btn-link {{ $collapsed }}" data-toggle="collapse" data-target="#collapse{{ $mainData['main_service_id'] }}" aria-expanded="{{ $expanded }}" aria-controls="collapse{{ $mainData['main_service_id'] }}">
                                            <a style="font-family: Prata, serif;">{{ $mainData['main_service'] }}</a>
                                            <i class="fa" aria-hidden="true"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $mainData['main_service_id'] }}" class="collapse {{ $show }}" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="text-left">
                                        <ul>

                                            @foreach ($sub_service as $key_sub => $data)
                                            @if($data['main_service_id'] == $mainData['main_service_id'])

                                            <li class="d-flex">

                                                <a href="#" target="_self" class="loadData" data-serviceid="{{$data['sub_service_id']}}" style="font-family: Prata, serif;color: black; font-size: 17px; font-weight: 500;">{{ $data['sub_service'] }}</a>

                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-8 d-flex align-items-stretch" id="result_content"></div>

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

        <script type="text/javascript">

$(document).ready(function () {

    // serData = $('#first_sub_serv').val();
    dataurl = "{{ url('allSub_Ser') }}/" + 1;
    getdata(dataurl);

    $(".loadData").click(function (event) {

        serData = $(this).data('serviceid');
        // $(this).css({'color': 'red'});
        dataurl = "{{ url('allSub_Ser') }}/" + serData;
        getdata(dataurl);

    });

});

function getdata(dataurl) {
    $.get(dataurl, function (data) {
        $('#result_content').html(data);
    })
}

        </script>


    </body>
</html>
