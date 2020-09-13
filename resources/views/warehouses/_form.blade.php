<div class="row">
    <div class="input-field col s12 m6">
        <label for="warehouse_name">Warehouse Name *</label>
        <input class="validate" required="" id="warehouse_name" name="warehouse_name" value="{{ old('warehouse_name',isset($data) ? $data->warehouse_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="warehouse_order">Warehouse Order </label>
        <input class="validate" id="warehouse_order" name="warehouse_order" value="{{ old('warehouse_order',isset($data) ? $data->warehouse_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="status" id="status" required="" >
            <option value="" disabled selected> - Select warehouse Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Warehouse type Status *</label>
    </div>
</div>







