@extends('adminDash')

@section('content')


<section class="content">
    <div class="container-fluid">


        <div class="row" style="padding-top: 30px;">

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Customers</span>
                        <span class="info-box-number">{{$data['customer'] }}</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-shield"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Salon Owners</span>
                        <span class="info-box-number">{{$data['owners'] }}</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-check"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Appointment</span>
                        <span class="info-box-number">{{$data['Appointment'] }}</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-ad"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Advertisement</span>
                        <span class="info-box-number">{{$data['Advertisement'] }}</span>
                    </div>
                </div>
            </div>

        </div>


        <div class="row" style="padding-top: 30px;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Salon with high number of appointments</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">

                                @foreach ($App_data as $data) 
                                <div style="margin-bottom: 15px;">
                                    <a style="color: #007bff;" class="product-title">{{ $data['all'] }}
                                        <span class="badge badge-warning float-right">{{ $data['count'] }}</span></a>

                                </div>
                                @endforeach

                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Customer with high number of appointments</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">

                                @foreach ($Cus_data as $data) 
                                <div style="margin-bottom: 15px;">
                                    <a style="color: #007bff;" class="product-title">{{ $data['all'] }}
                                        <span class="badge badge-warning float-right">{{ $data['count'] }}</span></a>

                                </div>
                                @endforeach

                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Customer with high number of advertisements</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">

                                @foreach ($adata as $data) 
                                <div style="margin-bottom: 15px;">
                                    <a style="color: #007bff;" class="product-title">{{ $data['name'] }}
                                        <span class="badge badge-warning float-right">{{ $data['count'] }}</span></a>
                                    <span class="product-description">
                                        {{ $data['email'] }}
                                    </span>
                                </div>
                                @endforeach

                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection

