@extends('salonDash')

@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">{{ __('Contact') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('S_CustomerContactform') }}">
                            @csrf
                            @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <!-- email -->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end email -->

                            <!-- title -->
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end title -->

                            <div class="form-group row">
                                <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>
                                <div class="col-md-6">
                                    <textarea rows="4" id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus>
                                    </textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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

@endsection