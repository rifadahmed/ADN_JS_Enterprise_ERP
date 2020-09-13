<div class="row">
    <div class="input-field col s12 m6">
        <label for="purchase_name">Purchase Name *</label>
        <input class="validate" required="" id="purchase_name" name="purchase_name" value="{{ old('purchase_name',isset($data) ? $data->purchase_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="purchase_order">Purchase Order </label>
        <input class="validate" id="purchase_order" name="purchase_order" value="{{ old('purchase_order',isset($data) ? $data->purchase_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="purchase_status" id="status" required="" >
            <option value="" disabled selected> - Select Purchase Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Purchase Status *</label>
    </div>
</div>







