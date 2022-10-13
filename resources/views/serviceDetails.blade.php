
<div class="col-lg-12 d-flex align-items-stretch">
    <div id="accordion" class="myaccordion w-100 text-center px-1 px-md-4" style="background: #e0ebeb;border-radius: 18px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding-top: 30px;">
            @foreach ($detailSub as $Sdata)
                <div class="col-md-4" style=" margin: auto;margin-bottom: 30px;">
                    <h2 class="h4" style="font-family: Prata, serif;font-weight:900;letter-spacing: 3px;">{{ $Sdata->sub_service }}</h2>
                </div>
            @endforeach

        <div class="container">
            <div class="row">
            @foreach ($withimg as $data)
                <div class="col-12 col-sm-8 col-md-6 col-lg-4" style="margin-bottom: 15px;margin: 0 auto;">
                    <img class="card-img-top" src="{{ url($data->preview_img) }}" alt="preview receipt" style="border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:150px;height: 150px;">
                    <div class="text mt-4 text-center" style="font-family: Times New Roman;">
                        <h3 style="font-size: 21px;">{{ $data->service_name }}</h3>
                        {{ $data->time }}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div> 