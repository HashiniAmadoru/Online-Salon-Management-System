@extends('adminDash')

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 50px;">

            <div class="card-header">
                <h3 class="card-title">Advertisements</h3>
            </div>

            <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Topic</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($alldata as $profile)
                        <tr>
                            <td>{{ $profile['name'] }}</td>
                            <td>{{ $profile['address'] }}</td>
                            <td>{{ $profile['email'] }}</td>
                            <td>{{ $profile['phone1'] }}</td>
                            <td>{{ $profile['topic'] }}</td>
                            <td>{{ $profile['price'] }}</td>
                            <td>{{ $profile['description'] }}</td>
                            <td>
                                @foreach ($profile['images'] as $data)
                                <img style="width: 50px; height:50px;" class="img-fluid" src="{{ url($data['preview_img']) }}" alt="Photo">
                                @endforeach

                            </td>
                            <td><p>@if($profile['status']=='0')
                                    <a href="{{ route('advertisement_approve', ['email' => $profile['email'] ,'ad_id' => $profile['ad_id'] ]) }}" class="btn btn-primary" style="margin-bottom: 5px;"> Accpet</a>
                                    @else
                                    <a class="btn btn-info" style="margin-bottom: 5px;"> Accpeted</a>
                                    @endif
                                    &nbsp<a href="{{ route('deleteadvertisement', ['email' => $profile['email'] ,'ad_id' => $profile['ad_id'] ]) }}" class="btn btn-danger" style="margin-bottom: 5px;"> Reject</a> &nbsp<a href="{{ route('advertisement_contact', ['email' => $profile['email']])}}" class="btn btn-success" style="margin-bottom: 5px;"> Contact</a></p></td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Topic</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection

