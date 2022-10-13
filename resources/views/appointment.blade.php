<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SALON</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"/></script>
    <link rel="stylesheet" ref="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />

    <style>

        .ui-datepicker-calendar, .ui-datepicker-title, .ui-datepicker-header {
            background: #333;
            border: 1px solid #555;

        }
        .ui-icon{
            background-color: #a3a375;
            border: none;
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px
        }

        body{
            background-image: url('../assets/images/offer-deal-3.jpg'); max-width: 100%;
            height: 100%;background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

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
                    <li class="nav-item active"><a href="/salon" class="nav-link">Salons</a></li>
                    <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                    <li class="nav-item"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                <div class="row justify-content-center">
                    
                        
                    <div class="card" style="margin-top:50px;margin-bottom:50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);">
                        
                <div class="row">

                        <div class="col-md-6">
                        <img class="card-img-bottom" src="{{ url('assets/images/appointment1.jpg') }}" alt="preview receipt" style="  height: 100%;
                          /* Center and scale the image nicely */
                          background-position: center;
                          background-repeat: no-repeat;
                          background-size: cover;">
                        </div>
                     <div class="col-md-6">
                        <form method="POST" class="contact-form" action="{{ route('appointment') }}">
                            @csrf 
                                <input type="hidden" name="salon" value="{{ $salon_id }}">

                            <div class="row" style="padding: 15px 15px;">
                                <div class="col-md-6">
                                   
                                    <div class="form-group">
                                    <input placeholder="Customer Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>


               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Your Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        

                                  <div class="form-group" style="padding: 15px 15px;">
                                        <input placeholder="Service" id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" value="{{ old('service') }}" required autocomplete="service" autofocus>
                                        @error('service')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                        <div class="row" style="padding: 15px 15px;">
                                <div class="col-md-6">


                                   
                                    <div class="form-group">
                                    <input placeholder="Phone Number" id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                </div>

               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="Date" id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date">
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" style="padding: 15px 15px;color: rgba(0, 0, 0, 0.9) !important;font-size: 13px;">
                                   
                                    <div class="col-md-12">
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="radio1">
                                                <input type="radio" class="form-check-input" name="time" id="radio1" value="Morning" checked>Morning
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="radio2">
                                                <input type="radio" class="form-check-input" name="time" id="radio2" value="Afternoon">Afternoon
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="radio3">
                                                <input type="radio" class="form-check-input" name="time" id="radio3" value="Evening">Evening
                                            </label>
                                        </div>
                                        @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            

                            <div style="padding: 15px 15px;margin-top: 30px;" class="form-group">
                                <input type="submit" value="Send" class="btn btn-secondary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script type="text/javascript">

// Get today's date
    var today = new Date();

    $("#date").datepicker({
        // clearBtn: true,
        minDate: 0,
        maxDate: "+1M +10D",
        // daysOfWeekDisabled: "0,6"
    });


    selectDate = $('#date').val();
    ChangeTime(selectDate);  

    $('#date').change(function (){
        selectDate = $('#date').val();
        ChangeTime(selectDate);    
    })

    function ChangeTime(selectDate){


        var dt = new Date();
        var currentTime = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        var currentDate = String(dt.getMonth()+1). padStart(2, '0')+'/'+String(dt.getDate()). padStart(2, '0')+'/'+dt.getFullYear();
        
                $('#radio1').prop( "disabled", false );
                $('#radio2').prop( "disabled", false );
                $('#radio3').prop( "disabled", false );

                $('#btnsend').prop( "disabled", false );
            
        if(selectDate == currentDate){

            if('10:00' < currentTime  && currentTime < '12:00'){

                $('#radio1').prop( "disabled", true );
                 $('#btnsend').prop( "disabled", true );
            }
             if('12:00' < currentTime  && currentTime < '17:00'){
                $('#radio1').prop( "disabled", true );
                $('#radio2').prop( "disabled", true );
                 $('#btnsend').prop( "disabled", true );
            }
            if('17:00' < currentTime  && currentTime < '24:00'){
                $('#radio1').prop( "disabled", true );
                $('#radio2').prop( "disabled", true );
                $('#radio3').prop( "disabled", true );
                 $('#btnsend').prop( "disabled", true );
            }


        }


    }

    
    </script>

</body>
</html