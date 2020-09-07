<div class="row">
    <div class="input-field col s12 m6">
        <label for="location_name">Location Name *</label>
        <input class="validate" required="" id="location_name" name="location_name" value="{{ old('location_name',isset($data) ? $data->location_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="location_order">Location order </label>
        <input class="validate" id="location_order" name="location_order" value="{{ old('location_order',isset($data) ? $data->location_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="location_status" id="status" required="" >
            <option value="" disabled selected> - Select Location status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Location Status *</label>
    </div>
</div>







