@extends('salonDash')

@section('content')


<div style="padding-top: 50px; padding-bottom: 50px;">
    <div class="col-md-6 card card-primary card-outline" style="margin: 0 auto;">
        <div class="card-body box-profile">

            <div class="text-center" style="padding-bottom: 10px;">
                <img style="border: 3px solid #adb5bd;margin: 0 auto;padding: 3px;width: 100px;height:100px;" class="img-fluid img-circle" src="{{ url($profile['preview_img']) }}" alt="User profile picture">
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <h3 class="profile-username text-center"> {{ $profile['name'] }} </h3>

            <p class="text-muted text-center"> {{ $profile['city'] }} </p>

            <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                    <b>Salon Name</b> <a class="float-right">{{ $profile['myprofile']['salon_name'] }}</a>
                </li>

                <li class="list-group-item">
                    <b>Salon Address</b> <a class="float-right">{{ $profile['myprofile']['salon_address'] }}</a>
                </li>

                <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{ $profile['email'] }}</a>
                </li>

                <li class="list-group-item">
                    <b>NIC</b> <a class="float-right">{{ $profile['nic'] }}</a>
                </li>

                <li class="list-group-item">
                    <b>City</b> <a class="float-right">{{ $profile['city'] }}</a>
                </li>

                <li class="list-group-item">
                    <b>Phone Number</b> <a class="float-right">{{ $profile['phone1'] }}</a>
                </li>

            </ul>


            <a class="btn btn-primary btn-block" href="{{ url('/viewMyprofile', ['reg_id' => $profile['reg_id']] ) }}" role="button">EDIT</a>

        </div>
    </div>

</div>

@endsection

