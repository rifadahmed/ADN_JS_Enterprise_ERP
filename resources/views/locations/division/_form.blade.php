
<div class="row">
    <div class="input-field col s12 m6">
        <label for="name"> Name * @if ($errors->has('name')) <small class="red-text"> [ {{ $errors->first('name') }} ] </small> @endif</label> 
        <input class="validate" required="" id="name" name="name" value="{{ old('name',isset($data) ? $data->name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="bn_name">BN Name * @if ($errors->has('bn_name')) <small class="red-text"> [ {{ $errors->first('bn_name') }} ] </small> @endif</label> 
        <input class="validate" required="" id="bn_name" name="bn_name" value="{{ old('bn_name',isset($data) ? $data->bn_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6 ">
        <br>
            <select class="validate js-example-basic-single" name="status" id="status">
                <option value="" disabled selected> - Select Division Status - </option>
                <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
                <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
            </select>
            
            <label for="status">Location type Status * @if ($errors->has('status')) <small class="red-text"> [ {{ $errors->first('status') }} ] </small> @endif</label> 
        </div> 

    {{-- <div class="input-field col s12 m6">
        <label for="location_type_order">Location Type Order @if ($errors->has('location_type_order')) <small class="red-text"> [ {{ $errors->first('location_type_order') }} ] </small> @endif</label>
        <input class="validate" id="location_type_order" name="location_type_order" value="{{ old('location_type_order',isset($data) ? $data->location_type_order : null ) }}" type="text">
    </div> --}}
</div>
{{-- <div class="row">
 <div class="input-field col s12 m6 ">
    <br>
        <select class="validate js-example-basic-single" name="location_type_status" id="status" required="" >
            <option value="" disabled selected> - Select Location Type Status - </option>
            <option value="Active" @if(old('location_type_status', (isset($data ) && $data->location_type_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('location_type_status', (isset($data ) && $data->location_type_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        
        <label for="status">Location type Status * @if ($errors->has('location_type_status')) <small class="red-text"> [ {{ $errors->first('location_type_status') }} ] </small> @endif</label> 
    </div> 
    
</div> --}}







