

@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
@endpush


@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- BEGIN: Page Main-->
        <div class="row" style="margin-top: -20px;">
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ isset($title) ? $title : "Title Not Found" }}</span></h5>
                            <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('product.list') }}">Manage Product</a>
                                </li>
                                <li class="breadcrumb-item active">Product List
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6">
                            <a href="{{ route('product.create') }}" class="btn indigo waves-effect waves-light breadcrumbs-btn right"> Create New Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="row">
                        <!-- users list start -->
                        <section class="users-list-wrapper section">
                            <div class="users-list-filter">
                                <div class="card-panel">
                                    <div class="row">
                                        <form method="GET" action="">
                                            <div class="col s12 m6 l3">
                                                <label for="users-list-verified">Product Name</label>
                                                <div class="input-field">
                                                    <input type="text" name="search" value="{{ (Request::get('search')) ? Request::get('search') : null }}">
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3 dropdownbar">
                                                <label for="users-list-role">Product Type</label>
                                                <div class="input-field">
                                                    <br>
                                                    <select class="js-example-basic-single" id="users-list-role">
                                                        <option value="">Any</option>
                                                        <option value="X">X</option>
                                                        <option value="Y">Y</option>
                                                        <option value="z">Z</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3 dropdownbar">
                                                <label for="users-list-status ">Status</label>
                                                <div class="input-field">
                                                    <br>
                                                    <select class="js-example-basic-single" id="users-list-status" name="status">
                                                        <option value="" selected >Any</option>
                                                        <option value="Active" @if(Request::get('status') == 'Active') selected @endif>Active</option>
                                                        <option value="Inactive" @if(Request::get('status') == 'Inactive') selected @endif>Inactive</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                                                <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="users-list-table">
                                <div class="card">
                                    <div class="card-content">
                                        <!-- datatable start -->
                                        <div class="responsive-table">
                                            <table id="users-list-datatable" class="table">
                                                <thead>
                                                <tr>
                                                    
                                                    <th>SL</th>
                                                    <th>Name</th>   
                                                    <th>Category</th> 
                                                    <th>Sub Category</th> 
                                                    <th>Brand</th>                                                  
                                                    <th>Sku</th> 
                                                    <th>Retail Price</th> 
                                                    <th>Wholesale Price</th> 
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                    <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$product->category->category_name}}</td>
                                                    <td>{{$product->subcategory->sub_category_name}}</td>
                                                    <td>{{$product->brand->brand_name}}</td>
                                                    <td>{{$product->product_sku}}</td>
                                                    <td>{{$product->product_retail_price}}</td>
                                                    <td>{{$product->product_wholesale_price}}</td>

                                                    
                                                    <td><span class="chip green lighten-5">
                                                    <span class="{{$product->product_status=="Active"? 'green-text' : 'red-text'}}">{{$product->product_status}}</span>
                                                          </span>
                                                    </td>
                                                    <td><a class="border-primary" href="{{ route('product.edit', $product->id)}}"><i class="material-icons  edit-icon">edit</i></a><a href="{{ route('product.show', $product->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
       
                                                    </tr> 
                                                    @endforeach
                                               

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- datatable ends -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- users list ends -->

                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    <!-- END: Page Main-->
@endsection

@push('script')
    <script src="{{ asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }} "></script>
    <script src="{{ asset('app-assets/js/scripts/page-users.js') }}"></script>
@endpush
