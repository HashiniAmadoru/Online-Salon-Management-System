@extends('adminDash')

@section('content')

<style type="text/css">
    img{ width:100px; height:100px; padding: 10px; margin: 10px } 
</style>

<!--Start Main product-->
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
                    <h3 class="card-title">Add Main Products</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('main_product_reg') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="product_type">{{ __('Product Type') }}</label>

                            <input id="product_type" type="text" class="form-control @error('product_type') is-invalid @enderror" name="product_type" value="{{ old('product_type') }}" required autocomplete="product_type" autofocus>

                            @error('product_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

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
                    <h3 class="card-title">Main Product</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Main Product Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($main_Products as $data) 
                            <tr>
                                <td>{{ $data['product_type'] }}</td>
                                <td> <p><a href="{{ route('editMainProduct', ['product_type_id' => $data['product_type_id']]) }}" class="btn btn-success"> Edit</a>&nbsp<a href="{{ route('deleteMainProduct', ['product_type_id' => $data['product_type_id']]) }}" class="btn btn-danger"> Delete</a> </p></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Main Product Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Main product-->

<!--Start ALL product-->
<section class="content" style="padding-bottom: 25px;">
    <div class="row">
        <div class="col-md-4">

            @if ($message = Session::get('success2'))
            <div class="alert alert-success alert-dismissible">
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

            @if ($message = Session::get('warning2'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Add Sub Products</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('product_reg') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="main_Product">{{ __('Main Product Name') }}</label>

                            <select class="form-control" name="main_Product" id="main_Product" required>
                                <option selected="selected" value="">Select Main Product </option>

                                @foreach($main_Products as $mainData) )
                                <option value="{{ $mainData['product_type_id'] }}">{{ $mainData['product_type'] }}</option>

                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="product_name">{{ __('Product Name') }}</label>

                            <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>

                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <!-- @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif -->

                        <div class="form-group">
                            <label for="image">{{ __('Image') }}</label>

                            <input type="file" id="profileImage" value="{{ old('image') }}" name="image" class="form-control" required autocomplete="image" autofocus>
                            <div class="row" id="preview_img">
                            </div>

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

        <div class="col-md-8">
            <div class="card card-secondary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>
                </div>
                <div class="card-body">
                    <table id="4" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Main Service Name</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($withimg as $data) 
                            <tr>

                                <td>{{ $data->product_type }}</td>
                                <td>{{ $data->product_name }}</td>

                                <td> <img style="width: 100px; height:100px;" class="img-fluid" src="{{ url($data->preview_img) }}" alt="Photo"></td>


                                <td> <p><a href="{{ route('editSubProduct', ['product_id' => $data->product_id]) }}" class="btn btn-success"> Edit</a>&nbsp<a href="{{ route('deleteSubProduct', ['product_id' => $data->product_id]) }}" class="btn btn-danger"> Delete</a> </p></td>
                            </tr>

                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Main Product Name</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End ALL product-->



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


});

$(function () {
    $("#example1").DataTable({
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
});

</script>

@endpush