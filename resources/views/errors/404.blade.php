@extends('layouts.blank')

@section('content')
    <div class="section">
        <!-- Current balance & total transactions cards-->
        <div class="row vertical-modern-dashboard">
            <div class="col s12 l6">
                <!-- Current Balance -->
                <div class="card animate fadeLeft">
                    <div class="card-content">
                        <div class="center-align">
                            <h1 class="">{{__('404')}}</h1>
                            <h5 class="">{{__('Page Not Found!')}}</h5>
                            <div class="">
                                {{__('Sorry, but the page you are looking for has not been found on our server.')}}
                            </div>
                            <br>
                            <div class=""><a class="btn btn-primary" href="{{route('dashboard')}}">{{__('Return To Dashboard')}}</a></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
