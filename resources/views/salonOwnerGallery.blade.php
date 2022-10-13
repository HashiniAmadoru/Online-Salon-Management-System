@extends('salonDash')

@section('content')


<style type="text/css">
    img{ width:100px; height:100px; padding: 10px; margin: 10px } 

    .ftco-section {
        padding: 2em 0;
        position: relative; }
    @media (max-width: 767.98px) {
        .ftco-section {
            padding: 4em 0; } }


    .ftco-no-pt {
        padding-top: 4em !important; }

    .ftco-no-pb {
        padding-bottom: 0 !important; }
    .ftco-counter {
        padding: 7em 0; }
    @media (max-width: 1199.98px) {
        .ftco-counter {
            background-position: center center !important; } }
    .ftco-counter .icon {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        position: relative;
        margin-bottom: 20px;
        z-index: 0; }
    .ftco-counter .icon:after {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        bordeR: 1px solid #d9bf77;
        z-index: -1;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease; }
    .ftco-counter .icon span {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #d9bf77; }
    .ftco-counter .text strong.number {
        font-weight: 500;
        font-size: 50px;
        color: #d9bf77; }
    .ftco-counter .text span {
        font-weight: 600;
        font-size: 14px;
        color: #d9bf77;
        text-transform: uppercase;
        letter-spacing: 3px; }
    .ftco-counter .text:hover .icon span, .ftco-counter .text:focus .icon span {
        color: #000; }
    .ftco-counter .text:hover .icon:after, .ftco-counter .text:focus .icon:after {
        -webkit-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        transform: rotate(135deg);
        background: #d9bf77; }
    @media (max-width: 991.98px) {
        .ftco-counter .counter-wrap {
            margin-bottom: 40px !important; } }
    .ftco-counter .ftco-number {
        display: block;
        color: #fff; }
    .ftco-counter .ftco-label {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .1em; }

    #section-counter {
        position: relative;
        z-index: 0; }
    #section-counter .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #d9bf77;
        opacity: 0; }

    .no-gutters {
        margin-right: 0;
        margin-left: 0; }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0; }

    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }

    @media (min-width: 768px) {

        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
    }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important; }

    .offer-deal {
        width: 100%;
        padding-top: 1em;
        padding-bottom: 1em; }
    .offer-deal.active {
        background: #faf7ef; }
    .offer-deal .img {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%; }
    @media (max-width: 991.98px) {
        .offer-deal .img {
            width: 150px;
            height: 150px; } }
    .offer-deal .text h3 {
        font-size: 24px; }
    .salon-outline{

        margin: 1em;
        border-radius: 50px 50px 50px 50px;
        border: 1px solid #808080;

    }

    .text-center {
        text-align: center !important; }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important; }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important; }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important; }
    .pr-lg-5,
    .px-lg-5 {
        padding-right: 3rem !important; }
    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 3rem !important; }
    .pl-lg-5,
    .px-lg-5 {
        padding-left: 3rem !important; }
    .v {
        position: absolute;
        top: 90%;
        left: 140%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #555;
        color: white;
        font-size: 16px;
        padding: 5px 5px;
        border: none;
        cursor: pointer;
        border-radius: 15px;
        text-align: center;
    }
</style>

<div class="col-md-8" style="padding-top: 50px;margin:0 auto;">
    <div class="card card-primary">
        <div class="card-header">{{ __('Gallery') }}</div>
        <div class="card-body">
            <form action="{{ url('SalonOwnerGalleryReg') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if ($message = Session::get('success'))

                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif


                @if (count($errors) > 0)
                <div class="alert alert-warning">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for="image">{{ __('Image') }}</label>
                    <input type="file" id="profileImage" value="{{ old('image') }}" name="image[]" class="form-control" multiple/ required autocomplete="image" autofocus>
                           <div class="row" id="preview_img">
                    </div>
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




<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="row no-gutters">
            @foreach ($alldata as $data)
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="offer-deal text-center px-2">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="offer-deal text-center px-2">
                            <img style=" margin: 0 auto; padding: 3px; width: 200px; height:200px;"  src="{{ url($data['preview_img']) }}" alt="Photo"> 

                            <a href="{{ route('deleteGallery', ['id' => $data['id']]) }}" class="btn btn-danger v"> Delete</a>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach



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

<!-- Page specific script -->


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






</script>

@endpush