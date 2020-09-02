@extends('layouts.master')

@section('content')

    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">{{ isset($title) ? $title : "Title Not Found" }}</h5>
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12 active" id="account">
                        <form method="POST" action="">
                            @csrf
                            @include('locations._form')
                            <div class="col s12 display-flex justify-content-end mt-3">
                                <button type="submit" class="btn indigo">Save changes</button> &nbsp;
                                <button type="button" class="btn btn-light">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
