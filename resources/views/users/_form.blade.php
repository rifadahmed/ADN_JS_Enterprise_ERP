<div class="row">
    <div class="input-field col s12 m6">
        <label for="name">Name * @if ($errors->has('name')) <small class="red-text"> [ {{ $errors->first('name') }} ] </small> @endif</label>
        <input class="validate" required="" id="name" name="name" value="{{ old('name',isset($data) ? $data->name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="email">Email @if ($errors->has('email')) <small class="red-text"> [ {{ $errors->first('email') }} ] </small> @endif</label>
        <input class="validate" required="" id="email" name="email" value="{{ old('email',isset($data) ? $data->email : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="password"> Password @if ($errors->has('password')) <small class="red-text"> [ {{ $errors->first('password') }} ] </small> @endif</label>
        <input class="validate" required="" id="password" name="password" value="{{ old('password',isset($data) ? $data->password : null ) }}" type="password">
    </div>

</div>








