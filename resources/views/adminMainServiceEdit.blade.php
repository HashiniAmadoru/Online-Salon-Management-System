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
                    <h3 class="card-title">Edit Main Services</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/updateMainservice', ['main_service_id' => $data['main_service_id']] ) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="main_service">{{ __('Service Name') }}</label>
                            <input id="main_service" type="text" class="form-control" name="main_service" value="{{ $data['main_service'] }}">

                        </div>

                         <div class="form-group">
                            <label for="image2">{{ __('Image') }}</label>


                            <div class="text-center">
                                <img style="width: 100px;height:100px;" class="img-fluid" src="{{ url($data['preview_img']) }}" alt="User profile picture" id="image2">

                            </div>

                            <div class="image-upload">
                                <label for="file-input">

                                </label>

                                <input name="file-input" id="file-input" type="file" />
                            </div>  


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

<script>
    document.getElementById("file-input").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image2").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>


@endsection

