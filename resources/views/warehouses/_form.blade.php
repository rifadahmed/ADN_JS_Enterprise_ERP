
<div class="row">
    <div class="input-field col s12 m6">
    <label for="warehouse_name">Warehouse Name * @if ($errors->has('warehouse_name')) <small class="red-text">[{{$errors->first('warehouse_name')}}]</small>@endif</label>
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
        <select class="validate js-example-basic-single" name="warehouse_status" id="warehouse_status" >
            <option value="" disabled selected> - Select warehouse Status - </option>
            <option value="Active" @if(old('warehouse_status', (isset($data ) && $data->warehouse_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('warehouse_status', (isset($data ) && $data->warehouse_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Warehouse type Status * @if ($errors->has('warehouse_status')) <small class="red-text">[{{$errors->first('warehouse_status')}}]</small>@endif </label>
    </div>
</div>







