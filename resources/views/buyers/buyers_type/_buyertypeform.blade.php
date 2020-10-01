<div class="row">
    <div class="input-field col s12 m6">
        <label for="buyer_type_name">Buyer Type Name *</label>
        <input class="validate" required="" id="buyer_type_name" name="buyer_type_name" value="{{ old('buyer_type_name',isset($data) ? $data->buyer_type_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_type_order">Buyer Type Order </label>
        <input class="validate" id="buyer_type_order" name="buyer_type_order" value="{{ old('buyer_type_order',isset($data) ? $data->buyer_type_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_type_status" id="status"  >
            <option value="" disabled selected> - Select buyer Type Status - </option>
            <option value="Active" @if(old('buyer_type_status', (isset($data ) && $data->buyer_type_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('buyer_type_status', (isset($data ) && $data->buyer_type_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer type Status *  @if ($errors->has('buyer_type_status')) <small class="red-text"> [ {{ $errors->first('buyer_type_status') }} ] </small> @endif</label>
    </div>
</div>







