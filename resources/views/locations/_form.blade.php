<div class="row">
    <div class="input-field col s12 m6">
        <label for="location_name">Location Name * @if ($errors->has('location_name')) <small class="red-text"> [ {{ $errors->first('location_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="location_name" name="location_name" value="{{ old('location_name',isset($data) ? $data->location_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="location_order">Location order  @if ($errors->has('location_order')) <small class="red-text"> [ {{ $errors->first('location_order') }} ] </small> @endif</label>
        <input class="validate" id="location_order" name="location_order" value="{{ old('location_order',isset($data) ? $data->location_order : null ) }}" type="text">
    </div>
</div>
<div class="row">

    <div class="input-field col s12 m6">
        <select class="validate" name="location_type_id" id="status" required="" >
                @foreach($location_types as $location_type)
                         <option value="{{$location_type->id}}">{{$location_type->location_type_name}}</option>       
                @endforeach
        </select>
        <label for="status">Select Location Type * @if ($errors->has('category')) <small class="red-text"> [ {{ $errors->first('sub_category_status') }} ] </small> @endif</label>
    </div>
    <div class="input-field col s12 m6">
        <select class="validate" name="location_status" id="status" required="" >
            <option value="" disabled selected> - Select Location status - </option>
            <option value="Active" @if(old('location_status', (isset($data ) && $data->location_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('location_status', (isset($data ) && $data->location_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Location Status *</label>
    </div>
</div>







