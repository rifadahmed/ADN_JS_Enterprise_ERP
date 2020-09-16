
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

            @foreach($divisions as $division)
                        <option value={{$division->id}} @if(old('supplier_division_id', (isset($data ) && $data->supplier_division_id == $division->id))) selected @endif>{{$division->name}}</option>
            @endforeach
        </select>
        <label for="supplier_division_id">Division *</label>
    </div>

     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_district_id" id="supplier_district_id" required="" >
            <option value="" disabled selected> - Select District - </option>
                @foreach($districts as $district)
                    <option value={{$district->id}} @if(old('supplier_district_id', (isset($data ) && $data->supplier_division_id == $district->id))) selected @endif>{{$district->name}}</option>
                @endforeach
        </select>
        <label for="supplier_district_id">District *</label>
    </div>
    
     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="supplier_area_id" id="supplier_area_id" required="" >
            <option value="" disabled selected> - Select Upazila - </option>
                @foreach($areas as $area)
                        <option value={{$area->id}} @if(old('supplier_area_id', (isset($data ) && $data->supplier_area_id == $area->id))) selected @endif>{{$area->name}}</option>
                @endforeach
        </select>
        <label for="supplier_area_id">Upazila *</label>
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
    
       $('#supplier_division_id').on('change',function(e) {
           var div_id = e.target.value;
           $.post('{{ route('district.ajaxcall') }}', {_token:'{{ csrf_token() }}', div_id: div_id}, function(data){
               //$(".loader2").hide();
               $('#supplier_district_id').html(data);
           });
       });

       $('#supplier_district_id').on('change',function(e) {
           var dis_id = e.target.value;
           $.post('{{ route('upazila.ajaxcall') }}', {_token:'{{ csrf_token() }}', dis_id: dis_id}, function(data){
               //$(".loader2").hide();
               $('#supplier_area_id').html(data);
           });
       });

});
</script>