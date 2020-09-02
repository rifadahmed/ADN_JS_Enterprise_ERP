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
                            <h1 class="">{{__('500')}}</h1>
                            <h5 class="">{{__('OOPS!')}}</h5>
                            <div class="">
                                {{__('Something went wrong. Looks like server failed to load your request.')}}
                            </div>
                            <br>
                            <div class=""><a class="btn btn-primary" href="{{env('APP_URL')}}">{{__('Return To Dashboard')}}</a></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

