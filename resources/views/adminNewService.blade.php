@extends('adminDash')

@section('content')

<style type="text/css">
    img{ width:100px; height:100px; padding: 10px; margin: 10px } 
</style>




<!--Start ALL service-->
<section class="content">
    <div class="col-md-12" style="padding-top: 50px;">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
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

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Services</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
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

                            <td> <p>
                                    <a href="{{ route('NewService_approve', ['service_id' => $data->service_id ]) }}" class="btn btn-primary"> Accept</a> &nbsp<a href="{{ route('NewService_delete', ['service_id' => $data->service_id ]) }}" class="btn btn-danger"> Reject</a></p></td>
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

//get all sub services
    $(document).on('change', '#main_service_id_3rdform', function () {
        document.getElementById('sub_service_3form').disabled = false;
    });

});


$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });

});


</script>

@endpush