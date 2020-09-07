<div class="row">
    <div class="input-field col s12 m6">
        <label for="subcategory_name">SubCategory Name *</label>
        <input class="validate" required="" id="subcategory_name" name="subcategory_name" value="{{ old('subcategory_name',isset($data) ? $data->subcategory_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="subcategory_order">SubCategory Order </label>
        <input class="validate" id="subcategory_order" name="subcategory_order" value="{{ old('subcategory_order',isset($data) ? $data->subcategory_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="subcategory_status" id="status" required="" >
            <option value="" disabled selected> - Select SubCategory Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">SubCategory Status *</label>
    </div>
</div>







