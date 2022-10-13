@extends('adminDash')

@section('content')




<div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 50px;">

            <div class="card-header">
                <h3 class="card-title">Appointments</h3>
            </div>

            <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Salon Name</th>
                            <th>Service</th>
                            <th>Phone No</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($alldata as $data) 
                        <tr>
                            <td>{{ $data['Cus_name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td>{{ $data['salon']['salon_name'] }}</td>
                            <td>{{ $data['service'] }}</td>
                            <td>{{ $data['phone'] }}</td>
                            <td> {{ $data['date'] }}</td>
                            <td> {{ $data['time'] }}</td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Salon Name</th>
                            <th>Service</th>
                            <th>Phone No</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection

