<div class="row">
    <div class="input-field col s12 m6">
        <label for="buyer_name">Buyer Name *</label>
        <input class="validate" required="" id="buyer_name" name="buyer_name" value="{{ old('buyer_name',isset($data) ? $data->buyer_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_company">Buyer Company </label>
        <input class="validate" id="buyer_company" name="buyer_company" value="{{ old('buyer_company',isset($data) ? $data->buyer_company : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_address">Buyer Address </label>
        <input class="validate" id="buyer_address" name="buyer_address" value="{{ old('buyer_address',isset($data) ? $data->buyer_address : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_phone">Buyer Phone </label>
        <input class="validate" id="buyer_phone" name="buyer_phone" value="{{ old('buyer_phone',isset($data) ? $data->buyer_phone : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_email">Buyer Email </label>
        <input class="validate" id="buyer_email" name="buyer_email" value="{{ old('buyer_email',isset($data) ? $data->buyer_email : null ) }}" type="text">
    </div>

</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="status" id="status" required="" >
            <option value="" disabled selected> - Select Buyer Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer type Status *</label>
    </div>
</div>







