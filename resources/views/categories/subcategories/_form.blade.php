<div class="row">
    <div class="input-field col s12 m6">
        <label for="sub_category_name">SubCategory Name * @if ($errors->has('sub_category_name')) <small class="red-text"> [ {{ $errors->first('sub_category_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="sub_category_name" name="sub_category_name" value="{{ old('sub_category_name',isset($data) ? $data->sub_category_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="sub_category_order">SubCategory Order @if ($errors->has('sub_category_order')) <small class="red-text"> [ {{ $errors->first('sub_category_order') }} ] </small> @endif</label>
        <input class="validate" id="sub_category_order" name="sub_category_order" value="{{ old('sub_category_order',isset($data) ? $data->sub_category_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="category_id" id="status"  >
            {{-- <option value="Active" @if(old('category_name', (isset($data ) && $data->category_name == 'Active'))) selected @endif>Active</option>
            {{-- <option value="Inactive" @if(old('category_name', (isset($data ) && $data->category_name == 'Inactive'))) selected @endif>Inactive</option> --}} --}}
            <option value="" disabled selected> - Select Category - </option>

            @foreach($categories as $category)

                         <option value="{{$category->id}}" @if(isset($data) && $category->id == $data->category_id) selected @endif>{{$category->category_name}}</option>

                @endforeach
        </select>
        <label for="status">Select Category * @if ($errors->has('category_id')) <small class="red-text"> [ {{ $errors->first('category_id') }} ] </small> @endif</label>
    </div>
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="sub_category_status" id="sub_category_status"  >
            <option value="" disabled selected> - Select Category - </option>
            <option value="Active" @if(old('sub_category_status', (isset($data ) && $data->sub_category_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('sub_category_status', (isset($data ) && $data->sub_category_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">SubCategory Status * @if ($errors->has('sub_category_status')) <small class="red-text"> [ {{ $errors->first('sub_category_status') }} ] </small> @endif</label>
    </div>
</div>








