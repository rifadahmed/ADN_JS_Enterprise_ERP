<div class="row">
    <div class="input-field col s12 m6">
        <label for="buyer_name"> Name *</label>
        <input class="validate" required="" id="buyer_name" name="buyer_name" value="{{ old('buyer_name',isset($data) ? $data->buyer_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_company"> Company </label>
        <input class="validate" id="buyer_company" name="buyer_company" value="{{ old('buyer_company',isset($data) ? $data->buyer_company : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_address"> Address </label>
         <input class="validate" id="buyer_address" name="buyer_address" value="{{ old('buyer_address',isset($data) ? $data->buyer_address : null ) }}" type="text"> 
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_phone"> Phone </label>
        <input class="validate" id="buyer_phone" name="buyer_phone" value="{{ old('buyer_phone',isset($data) ? $data->buyer_phone : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_email"> Email </label>
        <input class="validate" id="buyer_email" name="buyer_email" value="{{ old('buyer_email',isset($data) ? $data->buyer_email : null ) }}" type="text">
    </div>

</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_status" id="status" required="" >
            <option value="" disabled selected> - Select Buyer Status - </option>
            <option value="Active" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer type Status *</label>
    </div>
    
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_division_id" id="buyer_division_id" required="" >
            <option value="" disabled selected> - Select Division - </option>
            {{-- @foreach ($division_locations as $division_location)
        <option value={{$division_location->id}} >{{$division_location->location_name}}</option>
            @endforeach --}}
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Division')
                        <option value={{$location->id}} @if(old('buyer_division_id', (isset($data ) && $data->buyer_division_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_division_id">Division *</label>
    </div>

     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_district_id" id="buyer_district_id" required="" >
            <option value="" disabled selected> - Select District - </option>
            {{-- @foreach ($district_locations as $district_location)
            <option value={{$district_location->id}}>{{$district_location->location_name}}</option>
            @endforeach --}}
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'District')
                        <option value={{$location->id}} @if(old('buyer_district_id', (isset($data ) && $data->buyer_district_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_district_id">District *</label>
    </div>
    
     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_area_id" id="buyer_area_id" required="" >
            <option value="" disabled selected> - Select Area - </option>
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Area')
                        <option value={{$location->id}} @if(old('buyer_area_id', (isset($data ) && $data->buyer_area_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_area_id">Area *</label>
    </div>

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_type_id" id="buyer_type_id" required="" >
            <option value="" disabled selected> - Select Buyer Type - </option>
            @foreach ($buyer_types as $buyer_type)
            <option value={{$buyer_type->id}} @if(old('buyer_type_id', (isset($data ) && $data->buyer_type_id == $buyer_type->id))) selected @endif>{{$buyer_type->buyer_type_name}}</option>
            @endforeach
        </select>
        <label for="buyer_type_id">Buyer Type  *</label>
    </div>  
</div>







