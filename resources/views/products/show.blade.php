
@extends('layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <div class="section users-edit">
        <div class="card">
            <div class="card-content">
            <h5 class="card-title">{{ isset($title) ? $title : "Title Not Found" }} <a href="{{route('product.list')}}" class="btn btn-primary float-right">Back</a></h5>
                
                <div class="divider mb-3"></div>
                <div class="row">
                    <div class="col s12">
                        <div class="container" style="margin-left: -10px">
                            <!-- users view start -->
                            <div class="section users-view">
                                <!-- users view media object start -->
                                <!-- users view media object ends -->
                                <!-- users view card data start -->
                                <div class="card" id="location_card" >
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <table class="striped">
                                                    <tbody>

                                                        <tr>
                                                            <td>Name:</td>
                                                        <td class="product_name">{{$product->product_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Category:</td>
                                                            <td class="product_name">{{$product->category->category_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sub Category:</td>
                                                            <td class="product_name">{{$product->subcategory->sub_category_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brand:</td>
                                                            <td class="product_name">{{$product->brand->brand_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sku:</td>
                                                            <td class="product_name">{{$product->product_sku}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Retail Price:</td>
                                                            <td class="product_name">{{$product->product_retail_price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wholesale Price:</td>
                                                            <td class="product_name">{{$product->product_wholesale_price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Details:</td>
                                                            <td class="product_name">{{$product->product_description}}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Status:</td>
                                                        <td><span class="{{$product->product_status=="Active" ?'green-text' : 'red-text'}}">{{$product->product_status}}</span></td>
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
                            <!-- START RIGHT SIDEBAR NAV -->

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