
@extends('salonDash')

@section('content')


<style type="text/css">

    .v {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #555;
        color: white;
        font-size: 16px;
        padding: 5px 5px;
        border: none;
        cursor: pointer;
        border-radius: 15px;
        text-align: center;
    }
    .image-upload>input {
        display: none;
    }

</style>

<div style="padding-top: 50px; padding-bottom: 20px;">
    <div class="col-md-6 card card-primary card-outline" style="margin: 0 auto;">
        <div class="card-header">
            <h3 class="text-center" style="font-size: 1.5rem;">Edit Your Profile Details</h3>
        </div>

        <!-- form start -->
        <form role="form" method="POST" action="{{ url('/editmyprofile', ['reg_id' => $profile['reg_id']] ) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="text-center">
                    <img style="border: 3px solid #adb5bd;margin: 0 auto;padding: 3px;width: 100px;height:100px;" class="img-fluid img-circle" src="{{ url($profile['preview_img']) }}" alt="User profile picture" id="image">

                </div>

                <div class="image-upload">
                    <label for="file-input">
                        <i type="file" class="fas fa-camera v"></i>
                    </label>

                    <input name="file-input" id="file-input" type="file" />
                </div>



                <div class="form-group">
                    <label for="Ownername">Salon Owner Name</label>
                    <input type="text" class="form-control" name="Ownername" id="Ownername" value="{{ $profile['name'] }}">
                </div>
                <div class="form-group">
                    <label for="Sname">Salon Name</label>
                    <input type="text" class="form-control" name="Sname" id="Sname"  value="{{ $profile['myprofile']['salon_name'] }}">
                </div>
                <div class="form-group">
                    <label for="Saddress">Salon Address</label>
                    <input type="text" class="form-control" name="Saddress" id="Saddress" value="{{ $profile['myprofile']['salon_address'] }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $profile['address'] }}">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" value="{{ $profile['city'] }}">
                </div>
                <div class="form-group">
                    <label for="nic">NIC</label>
                    <input type="text" class="form-control" name="nic" value="{{ $profile['nic'] }}">
                </div>
                <div class="form-group">
                    <label for="phone1">Phone No</label>
                    <input type="text" class="form-control" name="phone1" value="{{ $profile['phone1'] }}">
                </div>




                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Update') }}
                </button>


            </div>
            <!-- /.card-body -->


        </form>
    </div>
    <!-- /.card -->

</div>


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

