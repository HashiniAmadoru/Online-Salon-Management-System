
<section style="background-image: url('assets/images/bg_2.jpg'); max-width: 100%; height: 100%;background-position: center; background-repeat: no-repeat; background-size: cover;">

    @extends('layouts.auth')

    @section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card" style="margin-top: 80px;">

                    <div class="card-header">{{ __('LOGIN FORM') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group">
                              
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password ?') }}
                                </a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
