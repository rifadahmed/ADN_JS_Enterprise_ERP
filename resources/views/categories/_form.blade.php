<div class="row">
    <div class="input-field col s12 m6">
        <label for="category_name">Category Name * @if ($errors->has('category_name')) <small class="red-text"> [ {{ $errors->first('category_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="category_name" name="category_name" value="{{ old('category_name',isset($data) ? $data->category_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="category_order">Category Order @if ($errors->has('category_order')) <small class="red-text"> [ {{ $errors->first('category_order') }} ] </small> @endif</label>
        <input class="validate" id="category_order" name="category_order" value="{{ old('category_order',isset($data) ? $data->category_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="category_status" id="status">
            <option value="" disabled selected> - Select Category Status - </option>
            <option value="Active" @if(old('category_status', (isset($data ) && $data->category_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('category_status', (isset($data ) && $data->category_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Category Status * @if ($errors->has('category_status')) <small class="red-text"> [ {{ $errors->first('category_status') }} ] </small> @endif</label>
    </div>
</div>








