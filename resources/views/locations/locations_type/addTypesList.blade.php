@extends('layouts.master')

@section('content')

    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</h5>
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12 active" id="account">
                    <form method="POST" action="{{route('location.types.store')}}">
                            @csrf
                            @include('locations.locations_type._typeform')
                            <div class="col s12 display-flex justify-content-end mt-3">
                                <button type="submit" class="btn indigo">Save</button> &nbsp;
                                <a href="{{route('location.types.list') }}" type="button" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
