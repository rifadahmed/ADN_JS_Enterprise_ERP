
<div class="row">
    <div class="input-field col s12 m6">
        <label for="name">District Name * @if ($errors->has('name')) <small class="red-text"> [ {{ $errors->first('name') }} ] </small> @endif</label>

        <input class="validate" required="" id="name" name="name" value="{{ old('name',isset($data) ? $data->name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="bn_name">BN Name * @if ($errors->has('bn_name')) <small class="red-text"> [ {{ $errors->first('bn_name') }} ] </small> @endif</label> 
        <input class="validate" required="" id="bn_name" name="bn_name" value="{{ old('bn_name',isset($data) ? $data->bn_name : null ) }}" type="text">
    </div>

    <div class="input-field col s12 m6">
      
        <select class="validate js-example-basic-single" name="division_id" id="division_id"  >
            <option value="" disabled selected> - Select Division - </option>


            @foreach($divisions as $division)
                    <option value={{$division->id}} @if(old('division_id', (isset($data ) && $data->division_id == $division->id))) selected @endif>{{$division->name}}</option>       

            @endforeach

        </select>
        <label for="division_id">Division * @if ($errors->has('division_id')) <small class="red-text"> [ {{ $errors->first('division_id') }} ] </small> @endif</label>
    </div>
    
    <div class="input-field col s12 m6 ">
        
        <select class="validate js-example-basic-single" name="status" id="status">
            <option value="" disabled selected> - Select Division Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        
        <label for="status">Location type Status * @if ($errors->has('status')) <small class="red-text"> [ {{ $errors->first('status') }} ] </small> @endif</label> 
    </div> 
</div>








