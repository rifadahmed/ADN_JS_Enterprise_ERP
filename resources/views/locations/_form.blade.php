
@extends('layouts.master')

@section('content')

    <div class="col s12 m6 l6">
      <div id="prefixes" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">@yield('content-title')</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="location_name" type="text">
                <label for="location_name">Location Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="location_order" type="email">
                <label for="location_order">Location order</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <select>
                  <option value="" disabled selected>Location status</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
                <label>Select Profile</label>
              </div>
            </div>
            <div class="row">

              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">@yield('content-button')
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
@endsection



