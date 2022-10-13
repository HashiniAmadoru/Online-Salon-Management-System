
<div class="modal-dialog  modal-xl modal-dialog-scrollable">
    <div class="modal-content">

    <div class="modal-header">
      <h1 class="modal-title">{{ $data[0]->product_type }}</h1>
      <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
   
    <div class="modal-body">
        <div class="container">
            <div class="row">
                @foreach ($data as $Pdata)

                <div class="col-12 col-sm-8 col-md-6 col-lg-4" style="margin-bottom: 15px;margin: 0 auto;">
                    <img class="card-img-top" src="{{ url($Pdata->preview_img) }}" alt="preview receipt" style="border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);height: 250px;">
                    <div class="text mt-4 text-center" style="font-family: Times New Roman;">
                        <h3>{{ $Pdata->product_name }}</h3>
                    </div>
                </div>

                @endforeach 
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

    </div>
</div>

 
  