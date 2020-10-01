<option value="" disabled selected> - Select Sub Category - </option>
@if(isset($subcategories))
    @foreach($subcategories as $subcategory)
        <option value="{{ $subcategory->id }}" @if(isset(Request()->subcategory) && Request()->id == $subcategory->id) selected @endif >{{ $subcategory->sub_category_name }}</option>
    @endforeach
@endif