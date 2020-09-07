<div class="row">
    <div class="input-field col s12 m6">
        <label for="sale_name">Sale Name *</label>
        <input class="validate" required="" id="sale_name" name="sale_name" value="{{ old('sale_name',isset($data) ? $data->sale_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="sale_order">Sale Order </label>
        <input class="validate" id="sale_order" name="sale_order" value="{{ old('sale_order',isset($data) ? $data->sale_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="status" id="status" required="" >
            <option value="" disabled selected> - Select Sale Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Sale Status *</label>
    </div>
</div>







