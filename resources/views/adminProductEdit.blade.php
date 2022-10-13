@extends('adminDash')

@section('content')




<section class="content">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Edit Products</h3>


                </div>
                <div class="card-body">
                    <form action="{{ url('/updateProduct', ['product_type_id' => $data['product_type_id']] ) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="product_type">{{ __('Main Product Name') }}</label>


                            <input id="product_type" type="text" class="form-control" name="product_type" value="{{ $data['product_type'] }}">



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


@endsection

