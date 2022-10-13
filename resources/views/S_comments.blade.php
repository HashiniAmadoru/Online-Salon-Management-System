@extends('salonDash')

@section('content')

<style type="text/css">
    .direct-chat-text1{
        border-radius: .3rem;
        background: #d2d6de;
        border: 1px solid #d2d6de;
        color: #444;
        padding: 5px 10px;

    }

    .direct-chat-messages{
        height: 500px !important;
    }

</style>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="row" >
        <div class="col-md-7" style="margin:0 auto;padding-bottom: 15px;">
            <div class="card card-secondary" style="margin-top: 50px;">
                <div class="card-header">
                    <h3 class="card-title">Customer Comments</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-hover" style="background: #f2f2f2">
                        <thead>
                            <tr>
                                <th>Customer Comments</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($commentDetails as $data)
                            <tr>
                        <div style="margin-bottom: 10px;">
                            <td><h5 style="text-transform: capitalize;">{{ $data['name'] }}</h5>
                                <p> {{ $data['email'] }}</p>
                                {{ $data['message'] }}</td>
                        </div>

                        </tr>

                        @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Customer Comments</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>



</section>

@endsection

@push('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>

$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "aLengthMenu": [[5, 20, 35, -1], [5, 20, 35, "All"]],
        "pageLength": 5,
        "autoWidth": false,
    });

});


</script>

@endpush