

<div class="col-lg-12 d-flex align-items-stretch">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4" style="background: #e0ebeb">
        <h4 style="font-family: Prata, serif;">{{ $withimg[0]->sub_service }}</h4>
                    <div class="card" id="opening">
                        <div class="col-md-12 mb-4" style="background: #b3cccc;padding: 10px;">
                

                       
                        @foreach ($withimg as $key => $serData)

                        
                            <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-4" >
                                <img style="border-radius: 30%;margin: 0 auto;width: 150px;height: 150px;" class="img-fluid" src="{{ url($serData->preview_img) }}" alt="Photo">
                            </div>

                            <div class="col-md-4" style=" margin: auto;">
                                <h2 class="h4">{{ $serData->service_name }}</h2>
                            </div>
                            <div class="col-md-4" style=" margin: auto;">
                                <h2 class="h4">{{ $serData->time }}</h2>
                            </div>
                            </div>
                         
                @endforeach
                        </div>
                    </div>
                </div>
                </div> 
                