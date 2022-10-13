 
 <input type="hidden" name="salon" id="salon" value="{{ $salon_id }}">

 @foreach ($data as $key => $serData)




 <div class="modal-dialog  modal-xl modal-dialog-scrollable">
                        <div class="modal-content">

    <div class="modal-header">
      <h1 class="modal-title">{{ $serData['main_service'] }}</h1>
      <button type="button" class="close" data-dismiss="modal">×</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div style="background: #e0ebeb;" id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="d-flex align-items-center justify-content-between btn btn-link">
                            <ul>

                            @if(!empty($serData['sub']))
                           <input type="hidden" name="salon" id="S_SubSer" value="{{ $serData['sub'][0]['sub_service_id'] }}">
                           @endif

                            @foreach ($serData['sub'] as $key_sub => $sub_data)
                            <button type="button" class="btn btn-outline-info" style="padding: 5px 5px;">
                            <!-- <li class="d-flex"> -->
                                <a target="_self" class="changesubser" data-subserid="{{ $sub_data['sub_service_id'] }}" style="color: black; font-size: 17px; font-weight: 500;">{{ $sub_data['sub_service'] }}</a>
                            <!-- </li> -->
                        </button>
                            @endforeach             
                            
                            </ul>
                            </button>
                            </h2>
                        </div>
                    </div>       
                </div>
            </div>
                                          
            <div class="col-lg-8 d-flex align-items-stretch">
                                               
                <div class="col-lg-12 d-flex align-items-stretch" id="result_SubSer"></div>
            </div>
        </div>
    </div>
    </div>
     <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
@endforeach
   
                               
   <script type="text/javascript">

$(document).ready(function () {

    serSalonData = $('#salon').val();
    //serData - sub service id
    serData = $('#S_SubSer').val();

    dataurl = "{{ url('seeProfileWithSubSer') }}/" + serSalonData + "/" + serData;
    getsubSer(dataurl);

    $(".changesubser").click(function (event) {

        serData = $(this).data('subserid');
        dataurl = "{{ url('seeProfileWithSubSer') }}/" + serSalonData + "/" + serData;
        getsubSer(dataurl);
    });

    function getsubSer(dataurl) {
        $.get(dataurl, function (data) {
            $('#result_SubSer').html(data);
        })
    }

    });

    </script>       