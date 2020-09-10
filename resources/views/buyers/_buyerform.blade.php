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
        <select class="validate" name="buyer_status" id="status" required="" >
            <option value="" disabled selected> - Select Buyer Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer type Status *</label>
    </div>
    <div class="input-field col s12 m6">
        <select class="validate" name="buyer_division_id" id="buyer_division_id" required="" >
            <option value="" disabled selected> - Select Division - </option>
            {{-- @foreach ($division_locations as $division_location)
        <option value={{$division_location->id}} >{{$division_location->location_name}}</option>
            @endforeach --}}
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Division')
                        <option value={{$location->id}} >{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_division_id">Buyer type division *</label>
    </div>
     <div class="input-field col s12 m6">
        <select class="validate" name="buyer_district_id" id="buyer_district_id" required="" >
            <option value="" disabled selected> - Select District - </option>
            {{-- @foreach ($district_locations as $district_location)
            <option value={{$district_location->id}}>{{$district_location->location_name}}</option>
            @endforeach --}}
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'District')
                        <option value={{$location->id}} >{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_district_id">Buyer type District *</label>
    </div>
    
     <div class="input-field col s12 m6">
        <select class="validate" name="buyer_area_id" id="buyer_area_id" required="" >
            <option value="" disabled selected> - Select Area - </option>
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Area')
                        <option value={{$location->id}} >{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="buyer_area_id">Buyer type Area *</label>
    </div>

    
    <div class="input-field col s12 m6">
        <select class="validate" name="buyer_type_id" id="buyer_type_id" required="" >
            <option value="" disabled selected> - Select Buyer Type - </option>
            @foreach ($buyer_types as $buyer_type)
            <option value={{$buyer_type->id}} >{{$buyer_type->buyer_type_name}}</option>
            @endforeach
        </select>
        <label for="buyer_type_id">Buyer type  *</label>
    </div>  
</div>







