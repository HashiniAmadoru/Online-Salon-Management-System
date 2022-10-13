@extends('salonDash')

@section('content') 




<div class="row">
    <div class="col-md-8">

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
        <div class="card card-primary" style="margin-top: 50px;">
            <div class="card-header">
                <h3 class="card-title">Add Services</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('add_service') }}" method="POST">
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


                    <div id="Servces"></div>



                    <div class="form-group row mb-0" style="margin-top: 15px;">
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

    <div class="col-lg-4"  style="margin-top: 50px;">
        <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4" style="background: #e0ebeb">
            <div>
                <h3>Your Services</h3>
            </div>

            @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @php
            $show = '';
            $expanded = 'false';
            $collapsed = 'collapsed';



            @endphp




            @foreach ($data as $key => $mainData)

            <div class="card">

                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapse{{ $mainData['main_service_id'] }}"  aria-controls="collapse{{ $mainData['main_service_id'] }}">
                            {{ $mainData['main_service'] }}
                            <i class="fa" aria-hidden="true"></i>
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $mainData['main_service_id'] }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="text-left">
                        <ul>
                            @foreach ($mainData['sub'] as $key_sub => $sub_data)
                            <li class="d-flex">

                                <a href="#" target="_self" class="loadData" data-serviceid="{{$sub_data['sub_service_id']}}" style="color: black; font-size: 17px; font-weight: 500;">{{ $sub_data['sub_service'] }}</a>

                                @foreach ($sub_data['service'] as $key_service => $service_data)
                            <li class="d-flex">
                                <a href="#" target="_self" data-serviceid="" style="color: black; font-size: 17px; font-weight: 500;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $service_data }}</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('deleteAddservice', ['id' => $key_service]) }}"><i class="fas fa-trash-alt"></i></a>
                            </li>

                            @endforeach

                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>


</div>


@endsection

@push('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<script>

$(document).ready(function () {

//get all sub services
    $(document).on('change', '#main_service_id_3rdform', function () {
        document.getElementById('sub_service_3form').disabled = false;
    });

    $("#main_service_id_3rdform").change(function (event) {

        var ajax_url_subservice = "{{ url('allSubService') }}/" + $('#main_service_id_3rdform').val();

        loadDropDownData(ajax_url_subservice);
    });

//service part

    $("#sub_service_3form").change(function (event) {

        var ajax_url_services = "{{ url('allServices') }}/" + $('#sub_service_3form').val();

        loadDropDownData2(ajax_url_services);
    });

    $("#Servces").on('change', '.inputCheck', function () {
        var checkId = $(this).data(checkId);
        if ($(this).is(':checked')) {
            // $(checkId).prop('disabled',true)
            document.getElementById(checkId).disabled = true;
        }
        // console.log($(this).is(':checked'));
    })


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

                selected_ser = $('#sub_service_3form option:selected').val();

                var ajax_url_services = "{{ url('allServices') }}/" + selected_ser;


                loadDropDownData2(ajax_url_services);

            }
        }
    });
}

function loadDropDownData2(ajax_url_services) {

    $.ajax({

        url: ajax_url_services,

        method: 'GET',

        success: function (data) {



            $('#Servces').html(data);

        }
    });
}



</script>

@endpush