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
                            <h1 class="">{{__('Opps')}}</h1>
                            <h5 class="">{{__('Due to Inactivity Your Login Session has Expired')}}</h5>
                            <div class="">
                                {{__('Please click the below button to login once again')}}
                            </div>
                            <br>
                            <div class=""><a class="btn btn-primary" href="{{env('APP_URL').'/login'}}">{{__('Login Again')}}</a></div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

