@extends('adminDash')

@section('content')

<style type="text/css">
    img{ width:100px; height:100px; padding: 10px; margin: 10px } 
</style>


<section class="content">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Edit Sub Services</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/updateSubservice', ['sub_service_id' => $data['sub_service_id']] ) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="sub_service">{{ __('Service Name') }}</label>
                            <input id="sub_service" type="text" class="form-control" name="sub_service" value="{{ $data['sub_service'] }}">

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

</section>

@endsection

