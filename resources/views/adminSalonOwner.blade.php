@extends('adminDash')

@section('content')


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header">
                        <h3 class="card-title">Salon Owner Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
                        @if ($message = Session::get('danger'))

                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <th>Customer Name</th>
                                    <th>Salon Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>NIC</th>
                                    <th>City</th>
                                    <th>Phone NO</th>
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody>

                                @foreach ($alldata as $data) 
                                <tr>

                                    <td>{{ $data['name'] }}</td>
                                    <td>{{ $data['salon']['salon_name'] }}</td> 
                                    <td>{{ $data['address'] }}</td>
                                    <td>{{ $data['email'] }}</td>
                                    <td> {{ $data['nic'] }}</td>
                                    <td> {{ $data['city'] }}</td>
                                    <td>{{ $data['phone1'] }}</td>


                                    <td> <p><a href="{{ route('deletesalonowner', ['email' => $data['email'] ,'reg_id' => $data['reg_id'],'salon_id' => $data['salon']['salon_id'] ]) }}" class="btn btn-danger" style="margin-bottom: 5px;"> Delete</a>&nbsp<a href="{{ route('salon_contact', ['email' => $data['email']])}}" class="btn btn-success" style="margin-bottom: 5px;"> Contact</a></p></td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Salon Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>NIC</th>
                                    <th>City</th>
                                    <th>Phone NO</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->



    </div>
</section>


@endsection

