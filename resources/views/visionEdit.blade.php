
@extends('salonDash')

@section('content')







<section class="ftco-no-pb">
    <div class="container-fluid"  style="">

        <div class="col-lg-8" style="padding-top: 20px;margin: 0 auto">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Your Description</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/updateVision', ['id' => $alldata['id']] ) }}" method="POST">
                        @csrf




                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>

                            <textarea id="description" rows="4" class="form-control" name="description">{{ $alldata['description'] }}</textarea>

                        </div>

                        <div class="form-group">
                            <label for="vision">{{ __('Vision') }}</label>

                            <textarea id="vision" rows="4" class="form-control" name="vision">{{ $alldata['vision'] }}</textarea>

                        </div>


                        <div class="form-group">
                            <label for="mission">{{ __('Mission') }}</label>

                            <textarea id="mission" rows="4" class="form-control" name="mission">{{ $alldata['mission'] }}</textarea>

                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection