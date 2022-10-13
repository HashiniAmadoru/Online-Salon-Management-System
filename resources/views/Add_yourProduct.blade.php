@extends('salonDash')

@section('content') 




<div class="row">
    <div class="col-lg-8">

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
                <h3 class="card-title">Add Your Products</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('add_product') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="main_product_id">{{ __('Main Service') }}</label>

                        <select class="form-control" name="main_product_id" id="main_product_id" required>
                            <option selected="selected" value="">Select Main Service</option>

                            @foreach($main_Products as $mainData) )
                            <option value="{{ $mainData['product_type_id'] }}">{{ $mainData['product_type'] }}</option>
                            @endforeach
                        </select>
                    </div>




                    <div id="products"></div>



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
                <h3>Your Products</h3>
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
                        <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapse{{ $mainData['product_type_id'] }}"  aria-controls="collapse{{ $mainData['product_type_id'] }}">
                            {{ $mainData['product_type'] }}
                            <i class="fa" aria-hidden="true"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $mainData['product_type_id'] }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="text-left">
                        <ul>
                            @foreach ($mainData['sub'] as $key_sub => $sub_data)
                             @foreach ($sub_data['product'] as $key_product => $product_data)
                            <li class="d-flex">

                                <a href="#" target="_self" class="loadData" data-productid="{{$sub_data['product_id']}}" style="color: black; font-size: 17px; font-weight: 500;">{{ $sub_data['product_name'] }}</a>&nbsp;&nbsp;&nbsp;
                                <a href="{{ route('deleteAddProduct', ['id' => $key_product]) }}"><i class="fas fa-trash-alt"></i></a>


                            </li>
                            @endforeach
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



//service part

    $("#main_product_id").change(function (event) {

        var ajax_url_products = "{{ url('allProducts') }}/" + $('#main_product_id').val();

        loadDropDownData2(ajax_url_products);
    });

});

function loadDropDownData2(ajax_url_products) {

    $.ajax({

        url: ajax_url_products,

        method: 'GET',

        success: function (data) {



            $('#products').html(data);

        }
    });
}


</script>

@endpush