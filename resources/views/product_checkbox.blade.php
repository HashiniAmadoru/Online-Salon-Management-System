<div class="form-group">
    <label for="products">{{ __('Products') }}</label>
    <div class="row">

        @foreach ($products->toArray() as $key => $data)

        <div class="col-md-3">
            <div class="form-check">
                <label class="form-check-label" for="products">
                    <input type="checkbox" name="products[{{ $data['product_id'] }}][product_id]" class="form-check-input inputCheck" data-checkId="{{ $data['product_id'] }}" value="1">{{ $data['product_name'] }}
                </label>
            </div>
        </div>
        @endforeach 

    </div>
</div>