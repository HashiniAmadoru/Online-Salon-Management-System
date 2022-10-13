@extends('salonDash')

@section('content')



<div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 50px;">
            <div class="card-header">
                <h3 class="card-title">Appointment</h3>
            </div>
            
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Phone No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

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

                    @foreach ($appointmentDetails as $data) 
                    <tr>
                        <td>{{ $data['Cus_name'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data['service'] }}</td>
                        <td>{{ $data['phone'] }}</td>
                        <td> {{ $data['date'] }}</td>
                        <td> {{ $data['time'] }}</td> 
                        <td> <p>@if($data['status']=='n')


                                <a href="{{ route('appointment_approve', ['app_id' => $data['app_id'], 'email' => $data['email'] ]) }}" class="btn btn-primary"> Accpet</a>

                                @else

                                <a class="btn btn-info"> Accpeted</a>
                                @endif


                                &nbsp<a href="{{ route('deleteappointment', ['app_id' => $data['app_id'], 'email' => $data['email'] ]) }}" class="btn btn-danger"> Reject</a> &nbsp<a href="{{ route('S_customer_contact', ['email' => $data['email']])}}" class="btn btn-success"> Contact</a></p></td>

                    </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Phone No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection

