<div class="row">
    <div class="input-field col s12 m6">
        <label for="brand_name">Brand Name *</label>
        <input class="validate" required="" id="brand_name" name="brand_name" value="{{ old('brand_name',isset($data) ? $data->category_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="brand_order">Brand Order </label>
        <input class="validate" id="brand_order" name="brand_order" value="{{ old('brand_order',isset($data) ? $data->brand_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="status" id="status" required="" >
            <option value="" disabled selected> - Select Brand Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Brand Status *</label>
    </div>
</div>







