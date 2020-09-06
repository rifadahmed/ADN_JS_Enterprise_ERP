<div class="row">
    <div class="input-field col s12 m6">
        <label for="category_name">Category Name *</label>
        <input class="validate" required="" id="category_name" name="category_name" value="{{ old('category_name',isset($data) ? $data->category_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="category_order">Category Order </label>
        <input class="validate" id="category_order" name="category_order" value="{{ old('category_order',isset($data) ? $data->category_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <select class="validate" name="status" id="status" required="" >
            <option value="" disabled selected> - Select Category Status - </option>
            <option value="Active" @if(old('status', (isset($data ) && $data->status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('status', (isset($data ) && $data->status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Category Status *</label>
    </div>
</div>







