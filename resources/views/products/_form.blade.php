<div class="row">
    <div class="input-field col s12 m6">
        <label for="product_name">Product Name *</label>
        <input class="validate" required="" id="product_name" name="product_name" value="{{ old('product_name',isset($data) ? $data->product_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="product_order">Product Order </label>
        <input class="validate" id="product_order" name="product_order" value="{{ old('product_order',isset($data) ? $data->product_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="product_status" id="status" required="" >
            <option value="" disabled selected> - Select Product Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Product Status *</label>
    </div>
</div>







