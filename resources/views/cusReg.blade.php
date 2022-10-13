<html>
    <head>
        <style>

            body{
                background-image: url('assets/images/bg_2.jpg'); max-width: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

        </style>
    </head>
    <body>

        <section>

            @extends('layouts.auth')

            @section('content')

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-5" style="text-align: center;">
                        <a href="/customerReg" class="btn btn-primary btn-md" role="button">Customer Register</a>
                        <a href="/salonOwnerReg" class="btn btn-primary btn-md" role="button">Salon Register</a>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <div class="card" style="margin-top: 20px;">
                            <div class="card-header">{{ __('Customer Register') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register_cus') }}">
                                    @csrf

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

                                    <!--Address-->
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="adress" autofocus>
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--End Address-->

                                    <!-- email -->
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            <span id="error_email"></span>

                                        </div>
                                    </div>
                                    <!-- end email -->

                                    <!-- city -->
                                    <div class="form-group row">
                                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                                        <div class="col-md-6">
                                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city">
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- end city -->

                                    <!--NIC-->
                                    <div class="form-group row">
                                        <label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }}</label>
                                        <div class="col-md-6">
                                            <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>
                                            @error('nic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--NIC-->

                                    <!--Phone Number-->
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
                                    <!--End Phone Number-->

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" id="register" class="btn btn-primary">
                                                {{ __('Register') }}
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

        @endsection

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


        <script type="text/javascript">

$(document).ready(function () {

    $('#email').blur(function () {
        $('#error_email').empty();
        // var error_email = '';
        var email = $('#email').val();
        var _token = $('input[name="_token"]').val();
        var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
// console.log(!filter.test(email));
        if (!filter.test(email)) {
            // $('#error').addClass('has-error');
            $('#error_email').append('<label class="text-danger"> Invalide Email</label>');
            $('#register').attr('disabled', 'disable');
        } else {

            $.ajax({
                url: "{{ route('email_available.check') }}",
                method: "POST",
                data: {email: email, _token: _token},
                success: function (result) {
                    if (result == 'unique') {
                        $('#error_email').html('<label class="text-success">Email Can Use</label>');
                        $('#email').removeClass('has-error');
                        $('#register').attr('disabled', false);

                    } else {
                        $('#error_email').html('<label class="text-danger">Email Already Exists</label>');
                        $('#email').addClass('has-error');
                        $('#register').attr('disabled', 'disabled');
                    }
                }
            })
        }
    });
});

        </script>

    </body>
</html>