<div class="row">
    <div class="input-field col s12 m6">
        <label for="user_name">User Name *</label>
        <input class="validate" required="" id="user_name" name="user_name" value="{{ old('user_name',isset($data) ? $data->user_name : null ) }}" type="text">
    </div>

</div>








