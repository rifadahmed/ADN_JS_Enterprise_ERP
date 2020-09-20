
<div class="row">
    <div class="input-field col s12 m6">
        <label for="name">Name * </label>

        <input class="validate" required="" id="name" name="name" value="{{ old('name',isset($data) ? $data->name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="bn_name">BN Name * @if ($errors->has('bn_name')) <small class="red-text"> [ {{ $errors->first('bn_name') }} ] </small> @endif</label> 
        <input class="validate" required="" id="bn_name" name="bn_name" value="{{ old('bn_name',isset($data) ? $data->bn_name : null ) }}" type="text">
    </div>

    <div class="input-field col s12 m6">
      
        <select class="validate js-example-basic-single" name="district_id" id="district_id"  >
            <option value="" disabled selected> - Select District - </option>


            @foreach($districts as $district)
                    <option value={{$district->id}} @if(old('district_id', (isset($data ) && $data->district_id == $district->id))) selected @endif>{{$district->name}}</option>       

            @endforeach

        </select>
        <label for="district_id">District * @if ($errors->has('district_id')) <small class="red-text"> [ {{ $errors->first('district_id') }} ] </small> @endif</label>
    </div>


    
    <div class="input-field col s12 m6 ">
        
        <select class="validate js-example-basic-single" name="status" id="status">
            <option value="" disabled selected> - Select Upzaila Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        
        <label for="status">Upzaila Status * @if ($errors->has('status')) <small class="red-text"> [ {{ $errors->first('status') }} ] </small> @endif</label> 
    </div> 
</div>










