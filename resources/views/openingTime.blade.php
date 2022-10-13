@extends('salonDash')

@section('content')

<style type="text/css">

    #hidden_div {
        display: block;
    }

</style>
<section style="background-image: url('assets/images/bg_3.jpg'); max-width: 100%;
         background-position: center center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;height: 100%">

    <div class="col-lg-8" style="margin: 0 auto;padding: 30px;">
        <div class="card card-info">

            <div class="card-header">
                <h3 class="card-title">Select Times</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/updateOpen_time') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Days</label>

                                <select class="form-control" name="date" id="date" required>
                                    <option selected="selected" value="">Select Day</option>

                                    @foreach($alldata as $data) )

                                    <option value="{{ $data['id'] }}">{{ $data['date'] }}</option>

                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_open">Open OR Close</label>
                                <select class="form-control" name="form_open" id="form_open" style="width: 100%;" onchange="showDiv('hidden_div', this)" required>
                                    <option selected="selected" value="0">Open</option>
                                    <option value="1">Close</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div id="hidden_div">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Open Time:</label>

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <input type="text" name="open_time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="col-md-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Close Time:</label>

                                        <div class="input-group date" id="timepicker2" data-target-input="nearest">
                                            <input type="text" name="close_time" class="form-control datetimepicker-input" data-target="#timepicker2"/>
                                            <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>



</section>

@endsection

@push('scripts')




<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script>
                                    $(function () {

                                        //Timepicker
                                        $('#timepicker').datetimepicker({
                                            format: 'LT'
                                        })

                                        $('#timepicker2').datetimepicker({
                                            format: 'LT'
                                        })

                                    })

                                    $(document).ready(function () {


                                    });

                                    function showDiv(divId, element)
                                    {
                                        document.getElementById(divId).style.display = element.value == 0 ? 'block' : 'none';
                                    }



</script>
@endpush



