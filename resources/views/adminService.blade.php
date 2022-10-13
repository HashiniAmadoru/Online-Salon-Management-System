@extends('adminDash')

@section('content')

<style type="text/css">
    img{ width:100px; height:100px; padding: 10px; margin: 10px } 
</style>

<!--Start Main service-->
<section class="content">
    <div class="row">
        <div class="col-md-4">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif


            @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Add Main Services</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('main_service_reg') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="main_service">{{ __('Service Name') }}</label>

                            <input id="main_service" type="text" class="form-control @error('main_service') is-invalid @enderror" name="main_service" value="{{ old('main_service') }}" required autocomplete="main_service" autofocus>

                            @error('main_service')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                         <div class="form-group">
                            <label for="image2">{{ __('Image') }}</label>

                            <input type="file" id="profileImage2" value="{{ old('image2') }}" name="image2" class="form-control" required autocomplete="image2" autofocus>
                            <div class="row" id="preview_img2">
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

        <div class="col-md-8">
            <div class="card card-secondary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Main Services</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Main Service Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($main_Services as $data) 
                            <tr>
                                <td>{{ $data['main_service'] }}</td>
                                <td> <p><a href="{{ route('deleteMainservice', ['main_service_id' => $data['main_service_id']]) }}" class="btn btn-danger"> Delete</a> &nbsp<a href="{{ url('/editMainservice', ['main_service_id' => $data['main_service_id']] ) }}" class="btn btn-success"> Edit</a></p></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Main Service Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Main service-->

<!--Start Sub service-->
<section class="content">
    <div class="row">
        <div class="col-md-4">

            @if ($message = Session::get('success2'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('warning2'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('danger2'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Add Sub Services</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('sub_service_reg') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="sub_service">{{ __('Service Name') }}</label>

                            <input id="sub_service" type="text" class="form-control @error('sub_service') is-invalid @enderror" name="sub_service" value="{{ old('sub_service') }}" required autocomplete="sub_service" autofocus>

                            @error('sub_service')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="main_service_id">{{ __('Main Service') }}</label>

                            <select class="form-control" name="main_service_id" id="main_service_id" required>
                                <option selected="selected" value="">Select Main Service</option>

                                @foreach($main_Services as $mainData) )
                                <option value="{{ $mainData['main_service_id'] }}">{{ $mainData['main_service'] }}</option>

                                @endforeach
                            </select>
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

        <div class="col-md-8">
            <div class="card card-secondary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Sub Services</h3>
                </div>
                <div class="card-body">
                    <table id="2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Main Service Name</th>
                                <th>Sub Service</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub_service as $data) 
                            <tr>
                                <td>{{ $data['sub_service_details']['main_service'] }}</td>
                                <td>{{ $data['sub_service'] }}</td>

                                <td> <p><a href="{{ route('deleteSubservice', ['sub_service_id' => $data['sub_service_id']]) }}" class="btn btn-danger"> Delete</a> &nbsp<a href="{{ url('/editSubsService', ['sub_service_id' => $data['sub_service_id']] ) }}" class="btn btn-success"> Edit</a></p></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Main Service Name</th>
                                <th>Sub Service</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Sub service-->

<!--Start ALL service-->
<section class="content">
    <div class="row">
        <div class="col-md-8">



            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Add Services</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin_service_reg') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="main_service_id_3rdform">{{ __('Main Service') }}</label>

                            <select class="form-control" name="main_service_id_3rdform" id="main_service_id_3rdform" required>
                                <option selected="selected" value="">Select Main Service</option>

                                @foreach($main_Services as $mainData) )
                                <option value="{{ $mainData['main_service_id'] }}">{{ $mainData['main_service'] }}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sub_service_3form">{{ __('Sub Service Name') }}</label>

                            <select class="form-control" name="sub_service_3form" id="sub_service_3form" required disabled>

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="service_name">{{ __('Service Name') }}</label>

                            <input id="service_name" type="text" class="form-control @error('service_name') is-invalid @enderror" name="service_name" value="{{ old('service_name') }}" required autocomplete="service_name" autofocus>

                            @error('service_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>

                            <input type="file" id="profileImage" value="{{ old('image') }}" name="image" class="form-control" required autocomplete="image" autofocus>
                            <div class="row" id="preview_img">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="time">{{ __('Allocate Approx Time') }}</label>

                            <select class="form-control" name="time" id="time" required>
                                <option selected="selected" value="">Select Approx Time</option>
                                <option value="15 minutes">15 minute</option>
                                <option value="30 minutes">30 minute</option>
                                <option value="1 hour">1 hour</option>
                                <option value="1 and half hour">1 and half hour</option>
                                <option value="2 hours">2 hours</option>
                                <option value="2 and half hours">2 and half hours</option>
                                <option value="3 hours">3 hours</option>
                            </select>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
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
    <div class="col-md-12">
        <div class="card card-secondary" style="margin-top: 50px;">
            <div class="card-header">
                <h3 class="card-title">Services</h3>
            </div>
            <div class="card-body">

                @if ($message = Session::get('success3'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('warning3'))
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('danger3'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <table id="4" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Main Service Name</th>
                            <th>Sub Service</th>
                            <th>Service Name</th>
                            <th>Image</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($withimg as $data)
                        <tr>
                            <td>{{ $data->main_service }}</td>
                            <td>{{ $data->sub_service }}</td>
                            <td>{{ $data->service_name }}</td>
                            <td> <img style="width: 100px; height:100px;" class="img-fluid" src="{{ url($data->preview_img) }}" alt="Photo"></td>
                            <td>{{ $data->time }}</td>

                            <td> <p><a href="{{ route('deleteservice', ['service_id' => $data->service_id]) }}" class="btn btn-danger"> Delete</a> &nbsp<a href="{{ route('viewservice', ['service_id' => $data->service_id]) }}" class="btn btn-success"> Edit</a></p></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Main Service Name</th>
                            <th>Sub Service</th>
                            <th>Service Name</th>
                            <th>Image</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
<!--End ALL service-->



@endsection

@push('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<script>

$(document).ready(function () {



    $('#profileImage').on('change', function () { //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
            $.each(data, function (index, file) { //loop though each file

                var fRead = new FileReader(); //new filereader
                fRead.onload = (function (file) { //trigger function on successful read
                    return function (e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.

            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });

    $('#profileImage2').on('change', function () { //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
            $.each(data, function (index, file) { //loop though each file

                var fRead = new FileReader(); //new filereader
                fRead.onload = (function (file) { //trigger function on successful read
                    return function (e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        $('#preview_img2').append(img); //append image to output element
                    };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.

            });

        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });


//get all sub services
    $(document).on('change', '#main_service_id_3rdform', function () {
        document.getElementById('sub_service_3form').disabled = false;
    });

    $("#main_service_id_3rdform").change(function (event) {

        var ajax_url_subservice = "{{ url('allSubService') }}/" + $('#main_service_id_3rdform').val();

        loadDropDownData(ajax_url_subservice);
    });
});




function loadDropDownData(ajax_url_subservice) {

    $.ajax({

        url: ajax_url_subservice,

        method: 'GET',

        success: function (data) {

            if (data == 'false') {

                $('#sub_service_3form').append($("<option> choose your option </option>"));

            } else {

                $('#sub_service_3form').empty();
                $.each(data, function (key, value) {

                    $('#sub_service_3form').append($("<option></option>").attr("value", value.sub_service_id).text(value.sub_service));
                });
            }
        }
    });
}


$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });
    $("#2").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });
    $("#example3").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });
    $("#4").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });
    // $('#example').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
});

</script>

@endpush