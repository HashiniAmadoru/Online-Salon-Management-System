@extends('adminDash')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 50px;">

            <div class="card-header">
                <h3 class="card-title">Contact Us</h3>
            </div>

            <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($alldata as $data) 
                        <tr>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td>{{ $data['message'] }}</td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection

