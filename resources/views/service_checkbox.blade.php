<div class="form-group">
    <label for="Servces">{{ __('Services') }}</label>
    <div class="row">

        @foreach ($subSer->toArray() as $key => $data)

        <div class="col-md-3">
            <div class="form-check">
                <label class="form-check-label" for="Servces">
                    <input type="checkbox" name="services[{{ $data['service_id'] }}][service_id]" class="form-check-input inputCheck" data-checkId="{{ $data['service_id'] }}" value="1">{{ $data['service_name'] }}
                </label>
            </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 5px;">
            <input type="text" id="{{ $data['service_id'] }}" name="services[{{ $data['service_id'] }}][price]" class="form-control" placeholder="Type Your Price">                   
        </div>

        @endforeach 

    </div>
</div>