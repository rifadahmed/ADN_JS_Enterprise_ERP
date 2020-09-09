<div class="row">
    <div class="input-field col s12 m6">
        <label for="brand_name">Brand Name * @if ($errors->has('brand_name')) <small class="red-text"> [ {{ $errors->first('brand_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="brand_name" name="brand_name" value="{{ old('brand_name',isset($data) ? $data->brand_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="brand_order">Brand Order  @if ($errors->has('brand_order')) <small class="red-text"> [ {{ $errors->first('brand_order') }} ] </small> @endif</label>
        <input class="validate" id="brand_order" name="brand_order" value="{{ old('brand_order',isset($data) ? $data->brand_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="brand_status" id="status" required="" >
            <option value="" disabled selected> - Select Brand Status - </option>
            <option value="Active" @if(old('brand_status', (isset($data ) && $data->brand_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('brand_status', (isset($data ) && $data->brand_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Brand Status * </label>
    </div>
</div>







