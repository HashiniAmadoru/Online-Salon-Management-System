
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
        text-align: center;transform: translate(-50%, -400%);
        -ms-transform: translate(-50%, -50%);
    }
    .image-upload>input {
        display: none;
    }

    .sName{
        font-family: Prata serif;
        letter-spacing: 15px;
        text-transform: uppercase;
        font-size:3rem;
        color: white;
        text-align: center;transform: translate(-2%, -500%);
    }




    .bottom-right {
        position: absolute;
        bottom: 8px;
        right: 16px;
    }



</style>


<section class="hero-wrap hero-wrap-2" style="background-color: #b3b3b3;padding-top: 10px;" data-stellar-background-ratio="0.5">

    <div class="col-lg-12 ftco-animate"> 
        @if ($message = Session::get('success3'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <img style="padding: 3px;width:100%;height: 700px;"  src="{{ url($cover_P['preview_img']) }}" alt="User profile picture" id="image">



        <div class="bottom-right">
            <a class="btn btn-primary btn-block" href="{{ url('/editCoverPhoto', ['id' => $cover_P['id']] ) }}" role="button">Edit Cover Photo</a>
        </div>
    </div>
    <div class="sName" >{{ $profile['salon_name'] }}</div>



</section>



<section class="ftco-no-pb">
    <div class="container-fluid"  style="background-color: #b3b3b3">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 d-flex align-items-stretch marginTop" style="padding-top: 20px;">

                <div>
                    <div class="heading-section ftco-animate">

                        @if ($message = Session::get('success1'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        <h2 class="mb-4">Open & Close TIME</h2>
                    </div>


                    <table class="seeProfile table table-dark">



                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Opening & Closing Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($time as $data) 
                            @php

                            $date = (!empty($data['date']))? $data['date'] :'';
                            $open_time = (!empty($data['open_time']))? $data['open_time'] :'';
                            $close_time = (!empty($data['close_time']))? $data['close_time'] :'';

                            @endphp
                            <tr>
                                <td>{{ $date }}</td>
                                @if(($open_time == NULL) && ($close_time == NULL))
                                <td>Closed</td>
                                @else
                                <td>{{ $open_time }} - {{ $close_time }}</td>
                                @endif
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" style="margin: 0 auto;">  <a class="btn btn-primary btn-block" href="{{ url('/Editopen_time', ['id' => $data['id']] ) }}" role="button">EDIT</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>



            <div class="col-lg-8 col-md-6 col-sm-4 col-xs-12 d-flex align-items-stretch marginTop" style="padding-top: 20px;">
                <div class="offer-deal px-2 px-lg-5">
                    @foreach ($alldata as $data) 
                    @php

                    $description = (!empty($data['description']))? $data['description'] :'';
                    $vision = (!empty($data['vision']))? $data['vision'] :'';
                    $mission = (!empty($data['mission']))? $data['mission'] :'';
                    @endphp
                    <div class="card" style="padding: 20px 20px;">
                        <div class="heading-section ftco-animate">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <h2 class="mb-4">Who we are?</h2>
                        </div>

                        <p id="description" name="description">{{ $description }}</p>
                        <ul class="mt-5 do-list">
                            <li style="list-style: none;">
                                <h3>VISION</h3>
                                <p style=" font-size: 17px; " id="vision" name="vision">{{ $vision }}</p></li>
                            <li style="list-style: none;">
                                <h3>Mission</h3>
                                <p style=" font-size: 17px;" id="mission" name="mission">{{ $mission }}</p></li>

                        </ul>

                        <a class="btn btn-primary btn-block" href="{{ url('/editVision', ['id' => $data['id']] ) }}" role="button">EDIT</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Gallery -->
<div class="row">
    <div class="col-md-3 ftco-animate" style="margin-bottom: 15px;">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/f2.jpg);">
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-3.jpg);">
        </div>
    </div>
    <div class="col-md-3 ftco-animate">
        <div class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-4.jpg);">
        </div>
    </div>
</div>
<!-- End Gallery -->


<!-- </div> -->

<!-- End -->

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