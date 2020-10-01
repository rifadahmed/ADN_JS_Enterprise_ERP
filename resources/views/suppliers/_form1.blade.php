
<div class="row">
    
    <div class="input-field col s12 m6">
        <label for="supplier_name">Supplier Name * @if ($errors->has('supplier_name')) <small class="red-text"> [ {{ $errors->first('supplier_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="supplier_name" name="supplier_name" value="{{ old('supplier_name',isset($data) ? $data->supplier_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="supplier_email"> Email @if ($errors->has('supplier_email')) <small class="red-text"> [ {{ $errors->first('supplier_email') }} ] </small> @endif</label>
        <input class="validate" id="supplier_email" name="supplier_email" value="{{ old('supplier_email',isset($data) ? $data->supplier_email : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="supplier_phone"> Phone @if ($errors->has('supplier_phone')) <small class="red-text"> [ {{ $errors->first('supplier_phone') }} ] </small> @endif</label>
        <input class="validate" id="supplier_phone" name="supplier_phone" value="{{ old('supplier_phone',isset($data) ? $data->supplier_phone : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="supplier_company"> Company @if ($errors->has('supplier_company')) <small class="red-text"> [ {{ $errors->first('supplier_company') }} ] </small> @endif</label>
        <input class="validate" id="supplier_company" name="supplier_company" value="{{ old('supplier_company',isset($data) ? $data->supplier_company : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="supplier_opening_balance"> Opening Balance @if ($errors->has('supplier_opening_balance')) <small class="red-text"> [ {{ $errors->first('supplier_opening_balance') }} ] </small> @endif</label>
        <input class="validate"  required="" id="supplier_opening_balance" name="supplier_opening_balance" value="{{ old('supplier_opening_balance',isset($data) ? $data->supplier_opening_balance : null ) }}" type="text">
    </div>

      
 

    
    <div class="input-field col s12 " style="width: 50%">
        <textarea id="supplier_address" class="materialize-textarea" name="supplier_address" value="{{ old('supplier_address',isset($data) ? $data->supplier_address : null ) }}">@if(isset($data)){{$data->supplier_address}}@endif</textarea>
        <label for="supplier_address">Address @if ($errors->has('supplier_address')) <small class="red-text"> [ {{ $errors->first('supplier_address') }} ] </small> @endif</label>
    </div>

</div>

{{-- <div class="row">

</div> --}}
 <div class="row">

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_status" id="supplier_status" required="" >
            <option value="" disabled selected> - Select Supplier Status - </option>
            <option value="Active" @if(old('supplier_status', (isset($data ) && $data->supplier_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('supplier_status', (isset($data ) && $data->supplier_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="supplier_status">Supplier type Status *</label>
    </div>
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_division_id" id="supplier_division_id" required="" >
            <option value="" disabled selected> - Select Division - </option>

            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Division')
                        <option value={{$location->id}} @if(old('supplier_division_id', (isset($data ) && $data->supplier_division_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="supplier_division_id">Division *</label>
    </div>

     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_district_id" id="supplier_district_id" required="" >
            <option value="" disabled selected> - Select District - </option>

            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'District')
                        <option value={{$location->id}} @if(old('supplier_district_id', (isset($data ) && $data->supplier_district_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="supplier_district_id">District *</label>
    </div>
    
     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_area_id" id="supplier_area_id" required="" >
            <option value="" disabled selected> - Select Area - </option>
            @foreach($locations as $location)
                @if($location->locationType)
                    @if($location->locationType->location_type_name == 'Area')
                        <option value={{$location->id}} @if(old('supplier_area_id', (isset($data ) && $data->supplier_area_id == $location->id))) selected @endif>{{$location->location_name}}</option>
                    @endif
                @endif
            @endforeach
        </select>
        <label for="supplier_area_id">Area *</label>
    </div>


</div>