
@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
            <h5 class="card-title">{{ isset($title) ? $title : "Title Not Found" }} <a href="{{route('buyer.list')}}" class="btn btn-primary float-right">Back</a></h5>
                
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
                                                            <td>Buyer Name:</td>
                                                            <td class="location_name">{{$buyer->buyer_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Buyer Company:</td>
                                                            <td class="location_type">{{$buyer->buyer_company}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Buyer Address:</td>
                                                            <td class="location_type">{{$buyer->buyer_address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Buyer Phone:</td>
                                                            <td class="location_type">{{$buyer->buyer_phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Buyer Email:</td>
                                                            <td class="location_type">{{$buyer->buyer_email}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Status:</td>
                                                            <td><span class="chip green lighten-5">
                                                                <span class="{{$buyer->buyer_status=="Active"?"green-text": "red-text" }}">{{$buyer->buyer_status}}</span>
                                                              </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- users view card data ends -->
        

                                <!-- users view card details ends -->
        
                            </div>
                            <!-- users view ends -->

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