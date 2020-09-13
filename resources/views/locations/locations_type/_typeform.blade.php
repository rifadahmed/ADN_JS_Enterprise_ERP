
<div class="row">
    <div class="input-field col s12 m6">
        <label for="location_type_name">Location Type Name *</label>
        <input class="validate" required="" id="location_type_name" name="location_type_name" value="{{ old('location_type_name',isset($data) ? $data->location_type_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="location_type_order">Location Type Order </label>
        <input class="validate" id="location_type_order" name="location_type_order" value="{{ old('location_type_order',isset($data) ? $data->location_type_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
 <div class="input-field col s12 m6 ">
    <br>
        <select class="validate js-example-basic-single" name="location_type_status" id="status" required="" >
            <option value="" disabled selected> - Select Location Type Status - </option>
            <option value="Active" @if(old('location_type_status', (isset($data ) && $data->location_type_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('location_type_status', (isset($data ) && $data->location_type_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        
        <label for="status">Location type Status *</label> 
    </div> 
    
</div>







