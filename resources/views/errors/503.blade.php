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
                            <h5 class="">{{__('OOPS!')}}</h5>
                            <div class="">
                                {{__('This site is under developement. We will be back soon!!')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
