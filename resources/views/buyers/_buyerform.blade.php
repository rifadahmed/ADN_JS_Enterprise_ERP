<div class="row">
    <div class="input-field col s12 m6">
        <label for="buyer_name"> Name * @if ($errors->has('buyer_name')) <small class="red-text"> [ {{ $errors->first('buyer_name') }} ] </small> @endif</label>
        <input class="validate"  required="" id="buyer_name" name="buyer_name" value="{{ old('buyer_name',isset($data) ? $data->buyer_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_phone"> Phone @if ($errors->has('buyer_phone')) <small class="red-text"> [ {{ $errors->first('buyer_phone') }} ] </small> @endif</label>
        <input class="validate" id="buyer_phone" name="buyer_phone" value="{{ old('buyer_phone',isset($data) ? $data->buyer_phone : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_email"> Email @if ($errors->has('buyer_email')) <small class="red-text"> [ {{ $errors->first('buyer_email') }} ] </small> @endif</label>
        <input class="validate" id="buyer_email" name="buyer_email" value="{{ old('buyer_email',isset($data) ? $data->buyer_email : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="buyer_company"> Company @if ($errors->has('buyer_company')) <small class="red-text"> [ {{ $errors->first('buyer_company') }} ] </small> @endif</label>
        <input class="validate" id="buyer_company" name="buyer_company" value="{{ old('buyer_company',isset($data) ? $data->buyer_company : null ) }}" type="text">
    </div>

    <div class="input-field col s12 m6" >
        <textarea id="buyer_address" class="materialize-textarea" name="buyer_address" value="{{ old('buyer_address',isset($data) ? $data->buyer_address : null ) }}">@if(isset($data)){{$data->buyer_address}}@endif</textarea>
        <label for="buyer_address">Address @if ($errors->has('buyer_address')) <small class="red-text"> [ {{ $errors->first('buyer_address') }} ] </small> @endif</label>
    </div>
    <div class="input-field col s12 m6" style="margin-top:8px !important;">
        <br>
        <select class="validate js-example-basic-single" name="buyer_type_id" id="buyer_type_id" >
            <option value="" disabled selected> - Select Buyer Type - </option>
            @foreach ($buyer_types as $buyer_type)
            <option value={{$buyer_type->id}} @if(old('buyer_type_id', (isset($data ) && $data->buyer_type_id == $buyer_type->id))) selected @endif>{{$buyer_type->buyer_type_name}}</option>
            @endforeach
        </select>
        <label for="buyer_type_id">Buyer Type  * @if ($errors->has('buyer_type_id')) <small class="red-text"> [ {{ $errors->first('buyer_type_id') }} ] </small> @endif</label>
    </div>  
      
    
    

</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_status" id="status"  >
            <option value="" disabled selected> - Select Buyer Status - </option>
            <option value="Active" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer Status * @if ($errors->has('buyer_status')) <small class="red-text"> [ {{ $errors->first('buyer_status') }} ] </small> @endif</label>
    </div>
    
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_division_id" id="buyer_division_id"  >
            <option value="" disabled selected> - Select Division - </option>


             @foreach($divisions as $division)
                    <option value={{$division->id}} @if(old('buyer_division_id', (isset($data ) && $data->buyer_division_id == $division->id))) selected @endif>{{$division->name}}</option>       
                    {{-- <option value={{$division->id}} >{{$division->name}}</option>        --}}

                    @endforeach

        </select>
        <label for="buyer_division_id">Division * @if ($errors->has('buyer_division_id')) <small class="red-text"> [ {{ $errors->first('buyer_division_id') }} ] </small> @endif</label>
    </div>

     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_district_id" id="buyer_district_id"  >
            <option value="" disabled selected> - Select District - </option>
                @foreach($districts as $district)
                        <option value={{$district->id}} @if(old('buyer_district_id', (isset($data ) && $data->buyer_district_id == $district->id))) selected @endif>{{$district->name}}</option>       
                @endforeach
        </select>
        <label for="buyer_district_id">District *  @if ($errors->has('buyer_district_id')) <small class="red-text"> [ {{ $errors->first('buyer_district_id') }} ] </small> @endif</label>
    </div>
    
     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_area_id" id="buyer_area_id"  >
            <option value="">- Select Upazila -</option>
                @foreach($areas as $area)
                    <option value={{$area->id}} @if(old('buyer_area_id', (isset($data ) && $data->buyer_area_id == $area->id))) selected @endif>{{$area->name}}</option>       
                @endforeach
        </select>
        <label for="buyer_area_id">Upazila *  @if ($errors->has('buyer_area_id')) <small class="red-text"> [ {{ $errors->first('buyer_area_id') }} ] </small> @endif</label>
    </div>

  
</div>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 <script type="text/javascript">
   $.ajaxSetup({
                    beforeSend: function(xhr, type) {
                        if (!type.crossDomain) {
                            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                        }
                    },
            });

    $(document).ready(function () {
     
        $('#buyer_division_id').on('change',function(e) {
            var div_id = e.target.value;
            $.post('{{ route('district.ajaxcall') }}', {_token:'{{ csrf_token() }}', div_id: div_id}, function(data){
                //$(".loader2").hide();
                $('#buyer_district_id').html(data);
            });
        });

        $('#buyer_district_id').on('change',function(e) {
            var dis_id = e.target.value;
            $.post('{{ route('upazila.ajaxcall') }}', {_token:'{{ csrf_token() }}', dis_id: dis_id}, function(data){
                //$(".loader2").hide();
                $('#buyer_area_id').html(data);
            });
        });

});
</script>


