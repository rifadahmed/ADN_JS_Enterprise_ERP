
@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
            <h5 class="card-title">{{ isset($title) ? $title : "Title Not Found" }} <a href="{{route('location.district.list')}}" class="btn btn-primary float-right">Back</a></h5>
                
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12">
                        <div class="container" style="margin-left: -10px">
                            <!-- users view start -->
                            <div class="section users-view">

                                <div class="card" id="location_card" >
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <table class="striped">
                                                    <tbody>

                                                        <tr>
                                                            <td>District Name:</td>
                                                            <td class="location_name">{{$district->name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>BN Name:</td>
                                                            <td class="location_type">{{$district->bn_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Division:</td>
                                                            <td class="location_type">{{$district->division->name}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Status:</td>
                                                            <td><span class="{{($district->status=="Active")?"green-text":"red-text"}}">{{$district->status}}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- users view card data ends -->

        
                            </div>

                            <!-- END RIGHT SIDEBAR NAV -->
                            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                                <ul>
                                    <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                                    <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                                    <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                                    <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection