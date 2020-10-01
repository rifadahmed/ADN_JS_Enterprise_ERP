<option value="" disabled selected> - Select Upazila - </option>
@if(isset($upazilas))
    @foreach($upazilas as $upazila)
        <option value="{{ $upazila->id }}" @if(isset(Request()->upazila) && Request()->upazila == $upazila->id) selected @endif >{{ $upazila->name }}</option>
    @endforeach
@endif
