<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SALON</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
        <style>
            img{
                width:100px;
                height:100px;
                padding: 10px;
                margin: 10px
            }
        </style>
    </head>

    <body style="background-image: url('assets/images/offer-deal-3.jpg'); max-width: 100%;
          height: 100%;background-position: center;
          background-repeat: no-repeat;
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
                        <li class="nav-item"><a href="/salon" class="nav-link">Salons</a></li>
                        <li class="nav-item"><a href="/contactus" class="nav-link">Contact Us</a></li>
                        <li class="nav-item  active"><a href="/advertisement" class="nav-link">Advertisements</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <section >

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card" style="margin-top: 100px;margin-bottom: 45px">
                            <div class="card-header">{{ __('Advertisements Form') }}</div>
                            <div class="card-body">
                                <form action="{{ url('advertisementForm') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    @if ($message = Session::get('success'))

                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif

                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <!-- name -->
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Customer Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                              @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                              @enderror
                                        </div>
                                    </div>
                                    <!-- end name -->

                                    <!-- email -->
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                             @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                        </div>
                                    </div>
                                    <!-- end email -->

                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="topic" class="col-md-4 col-form-label text-md-right">{{ __('topic') }}</label>

                                        <div class="col-md-6">
                                            <input id="topic" type="text" class="form-control @error('topic') is-invalid @enderror" name="topic" value="{{ old('topic') }}" required autocomplete="topic" autofocus>

                                            @error('topic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                                        <div class="col-md-6">
                                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                        <div class="col-md-6">
                                             <textarea rows="4" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                            </textarea>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone1" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone1" type="text" class="form-control @error('phone1') is-invalid @enderror" name="phone1" value="{{ old('phone1') }}" required autocomplete="phone1" autofocus>

                                             @error('phone1')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                             @enderror
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                                        <div class="col-md-6">
                                            <input type="file" id="profileImage" value="{{ old('image') }}" name="image[]" class="form-control" multiple/ required autocomplete="image" autofocus>
                                                   <div class="row" id="preview_img">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>

<script>

$(document).ready(function () {
    $('#profileImage').on('change', function () { //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {

            var data = $(this)[0].files; //this file data

            $.each(data, function (index, file) { //loop though each file

                var fRead = new FileReader(); //new filereader
                fRead.onload = (function (file) { //trigger function on successful read
                    return function (e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.

            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});

</script>