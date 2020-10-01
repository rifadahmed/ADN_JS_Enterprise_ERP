<option value="" disabled selected> - Select District - </option>
@if(isset($districts))
    @foreach($districts as $district)
        <option value="{{ $district->id }}" @if(isset(Request()->district) && Request()->id == $district->id) selected @endif >{{ $district->name }}</option>
    @endforeach
@endif
