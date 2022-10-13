
@extends('salonDash')

@section('content')

<style type="text/css">

    .v {

        background-color: #555;
        color: white;
        font-size: 16px;
        padding: 10px 10px;
        border: none;
        cursor: pointer;
        border-radius: 15px;
        text-align: center;transform: translate(3000%, -400%);
        -ms-transform: translate(-50%, -50%);
    }
    .image-upload>input {
        display: none;
    }

    .sName{
        font-family: Prata serif;
        letter-spacing: 15px;
        text-transform: uppercase;
        font-size:2rem;
        text-align: center;transform: translate(-2%, -500%);
    }


</style>


<section class="hero-wrap hero-wrap-2" style="padding-top: 10px;padding-bottom: 25px;" data-stellar-background-ratio="0.5">

    <div class="col-lg-12 ftco-animate"> 

        <form action="{{ url('/updateCover_photo', ['id' => $alldata['id']] ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <img style="border: 3px solid #adb5bd;padding: 3px;width:100%;height: 700px;" class="img-fluid" src="{{ url($cover_P['preview_img']) }}" alt="User profile picture" id="image">

            </div>

            <div class="image-upload">
                <label for="file-input">
                    <i type="file" class="fas fa-camera v"></i>
                </label>

                <input name="file-input" id="file-input" type="file" />
            </div>

            <div class="form-group row" style="margin-top: 15px;padding-bottom: 25px;">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Update Your Cover Photo') }}
                    </button>
                </div>
            </div>
        </form>

</section>



<script>
    document.getElementById("file-input").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>

@endsection
