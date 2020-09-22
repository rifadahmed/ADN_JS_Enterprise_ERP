<!-- BEGIN: SideNav-->

<aside class="sidenav-main nav-expanded nav-lock nav-collapsible {{$menu_dark==1?'sidenav-light':'sidenav-dark'}} sidenav-active-square" >
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('dashboard') }}">
                <img class="hide-on-med-and-down" src={{asset("app-assets/images/logo/js-enterprise-logo.png")}} alt="logo">
                <img class="show-on-medium-and-down hide-on-med-and-up" src={{asset("app-assets/images/logo/js-enterprise-logo.png")}} alt="logo">
            <span class="logo-text hide-on-med-and-down">Enterprise </span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <!-- ** Dashboard -->
        <li class="bold">
             
            <a class=" @if(Request::segment(1) == '') {{$menu_color}} active @endif" href="{{ route('dashboard') }}" id="dash" style="background: none; box-shadow: none;"> 

            <i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Mail">Dashboard</span>
            </a>
        </li>

        <!-- ** Locations -->
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">Manage Location</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    {{-- <li class="">
                        <a class="@if(Request::segment(1) == 'location' && Request::segment(2) == 'list' || Request::segment(1) == 'location' && Request::segment(2) == 'edit' && Request::segment(3) ==Request::segment(3)|| Request::segment(1) == 'location' && Request::segment(2) == 'show' && Request::segment(3) ==Request::segment(3)) active @endif" href="{{route('location.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Locations List</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'create') active @endif" href="{{route('location.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Location</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'types' &&  Request::segment(3) == 'list' || Request::segment(1) == 'location' && Request::segment(2) == 'types' && Request::segment(3) =="edit" && Request::segment(4) ==Request::segment(4) || Request::segment(1) == 'location' && Request::segment(2) == 'types' && Request::segment(3) =="show" && Request::segment(4) ==Request::segment(4)) active @endif" href="{{route('location.types.list')}}"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Location Types List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'types' &&  Request::segment(3) == 'create') active @endif" href="{{route('location.types.create')}}"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Add New Location Type</span>
                        </a>
                    </li> --}}

                    <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">Division</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li>
                                <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'division' &&  Request::segment(3) == 'list' ||Request::segment(1) == 'location' &&  Request::segment(2) == 'division' &&  Request::segment(3) == 'show' &&  Request::segment(4) == Request::segment(4) ||Request::segment(1) == 'location' &&  Request::segment(2) == 'division' &&  Request::segment(3) == 'edit' &&  Request::segment(4) == Request::segment(4) ) {{$menu_color}}   active @endif" href="{{route('location.division.list')}}" style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">Division List </span>
                                    </a>
                                </li>
                                <li>
                                    <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'division' &&  Request::segment(3) == 'create' ) {{$menu_color}} active @endif" href="{{route('location.division.create')}}" style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">Add Division</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    
                    <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">District</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li>
                                    <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'district' &&  Request::segment(3) == 'list' ||Request::segment(1) == 'location' &&  Request::segment(2) == 'district' &&  Request::segment(3) == 'show' &&  Request::segment(4) == Request::segment(4) ||Request::segment(1) == 'location' &&  Request::segment(2) == 'district' &&  Request::segment(3) == 'edit' &&  Request::segment(4) == Request::segment(4)) {{$menu_color}} active @endif" href="{{route('location.district.list')}}" style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">District List</span>
                                    </a>
                                </li>
                                 <li>
                                 <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'district' &&  Request::segment(3) == 'create' ) {{$menu_color}} active @endif" href="{{route('location.district.create')}}" style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">Add District</span>
                                    </a>
                                </li>
                    
                        </ul>
                        </div>
                    </li>

                    <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">Upazila</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li>
                                    <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'upazila' &&  Request::segment(3) == 'list' ||Request::segment(1) == 'location' &&  Request::segment(2) == 'upazila' &&  Request::segment(3) == 'show' &&  Request::segment(4) == Request::segment(4) ||Request::segment(1) == 'location' &&  Request::segment(2) == 'upazila' &&  Request::segment(3) == 'edit' &&  Request::segment(4) == Request::segment(4)) {{$menu_color}} active @endif" href="{{route('location.upazila.list')}} " style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">Upazila List</span>
                                    </a>
                                </li>
                                <li>
                                    <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'upazila' &&  Request::segment(3) == 'create' ) {{$menu_color}} active @endif" href="{{route('location.upazila.create')}}" style="background: none; box-shadow: none;"><i class="material-icons">radio_button_unchecked</i>
                                        <span data-i18n="Analytics">Add Upazila</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <!-- ** Buyers -->
        <li class="@if(Request::segment(1) == 'buyer') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">person</i><span class="menu-title" data-i18n="Dashboard">Manage Buyer</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'edit' &&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'show' &&  Request::segment(3) == Request::segment(3)) {{$menu_color}} active @endif" href="{{route('buyer.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Buyer List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('buyer.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Buyer</span>
                        </a>
                    </li>
                    <li >
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'list'||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'edit'&&  Request::segment(4) == Request::segment(4)||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'show'&&  Request::segment(4) == Request::segment(4)) {{$menu_color}} active @endif" href="{{route('buyer.type.list')}}" style="background: none; box-shadow: none;">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Modern">Buyer Types List</span>
                            </a>
                        </li>
                        <li>
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'create') {{$menu_color}} active @endif" href="{{route('buyer.type.create')}}" style="background: none; box-shadow: none;">

                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="eCommerce">Add New Buyer Type</span>
                            </a>
                        </li>


                </ul>
            </div>
        </li>

        <!-- ** Suuplier -->
        <li class="@if(Request::segment(1) == 'supplier') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Dashboard">Manage Supplier</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'supplier' &&  Request::segment(2) == 'list'||Request::segment(1) == 'supplier' &&  Request::segment(2) == 'edit'&&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'supplier' &&  Request::segment(2) == 'show'&&  Request::segment(3) == Request::segment(3)) {{$menu_color}} active @endif" href="{{route('supplier.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Supplier List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'supplier' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('supplier.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Supplier</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>
        
        <!-- ** Users -->
        <li class="@if(Request::segment(1) == 'user') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">verified_user</i><span class="menu-title" data-i18n="Dashboard">Manage User</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'user' &&  Request::segment(2) == 'list'||Request::segment(1) == 'user' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'user' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3)) {{$menu_color}} active @endif" href="{{route('user.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">User List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'user' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('user.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        

        <!-- ** Category -->
        <li class="@if(Request::segment(1) == 'category' || Request::segment(1) == 'subcategory') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">grain</i><span class="menu-title" data-i18n="Dashboard">Manage Category</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'category' &&  Request::segment(2) == 'list'||Request::segment(1) == 'category' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'category' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) {{$menu_color}} active @endif" href="{{route('category.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Category List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'category' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('category.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Category</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) {{$menu_color}} active @endif" href="{{route('subcategory.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sub Category List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('subcategory.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Sub Category</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ** Brand -->
        <li class="@if(Request::segment(1) == 'brand') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">filter_vintage</i><span class="menu-title" data-i18n="Dashboard">Manage Brand</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'brand' &&  Request::segment(2) == 'list'||Request::segment(1) == 'brand' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'brand' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) {{$menu_color}} active @endif" href="{{route('brand.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Brand List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'brand' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('brand.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Brand</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ** Product -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">card_giftcard</i><span class="menu-title" data-i18n="Dashboard">Manage Product</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'product' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'product' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'product' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3)) {{$menu_color}} active @endif" href="{{route('product.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>

                            <span data-i18n="Modern">Product List</span>

                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'product' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('product.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Product</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Purchase -->
        <li class="@if(Request::segment(1) == 'purchase') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_photos</i><span class="menu-title" data-i18n="Dashboard">Manage Purchase</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'purchase' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'purchase' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'purchase' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) {{$menu_color}} active @endif" href="{{route('purchase.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Purchase List</span>

                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'purchase' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('purchase.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Purchase</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Sales -->
        <li class="@if(Request::segment(1) == 'sale') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">local_mall</i><span class="menu-title" data-i18n="Dashboard">Manage Sale</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'sale' &&  Request::segment(2) == 'list'||Request::segment(1) == 'sale' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'sale' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) {{$menu_color}} active @endif" href="{{route('sale.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'sale' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('sale.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Sales</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Warehouse -->
        <li class="@if(Request::segment(1) == 'warehouse') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Dashboard">Manage Warehouse</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'list'||Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'edit'&&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'show'&&  Request::segment(3) == Request::segment(3)) {{$menu_color}} active @endif" href="{{route('warehouse.list')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Warehouse List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'create') {{$menu_color}} active @endif" href="{{route('warehouse.create')}}" style="background: none; box-shadow: none;">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New warehouse</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>
        <!-- ** Reports -->
        <li class="@if(Request::segment(1) == 'report') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">insert_chart_outline</i><span class="menu-title" data-i18n="Dashboard">Reports</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales Report</span>

                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Purchase Report</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        

        <!-- ** Settings -->
        <li class="@if(Request::segment(1) == 'setting') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
            <i class="material-icons">settings</i><span class="menu-title" data-i18n="Dashboard">General Settings</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">UI Adjustment</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Admin Adjustment</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $.ajaxSetup({
                   beforeSend: function(xhr, type) {
                       if (!type.crossDomain) {
                           xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                       }
                   },
           });

$(document).ready(function () {
    

                // value 
            $( ".menu-color-option" ).click(function() {
                var menuClassName=$(this).attr('data-color');
                
                $.post('{{ route('menu.class.name') }}', {_token:'{{ csrf_token() }}', menuClassName: menuClassName}, function(data){
                        //$(".loader2").hide();
                    });
            });
            
            // value1 
            $( "#menuDark" ).click(function() {
                $.post('{{ route('dark.menu') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    //alert(data)
                    });
            });


            // value2
            $( "#menuCollapse" ).click(function() {
                $.post('{{ route('collapse.menu') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    });
            });
            
            // value3
            $( ".menuSelect" ).click(function() {
                var menuSelection=this.value;
                $.post('{{ route('selection.menu') }}', {_token:'{{ csrf_token() }}', menuSelection: menuSelection}, function(data){
                        //$(".loader2").hide();
                    // alert(data)
                    });
            });

            // value4
            $( ".navbar-color-option").click(function() {
                var navClassName=this.className;
                $.post('{{ route('nav.class.name') }}', {_token:'{{ csrf_token() }}', navClassName: navClassName}, function(data){
                        //$(".loader2").hide();
                    // alert(data)
                    });
               
            });

            // value5 
            $( "#navDark" ).click(function() {
                $.post('{{ route('dark.nav') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    });
            });
            
            $( "#navFix" ).click(function() {
                $.post('{{ route('fix.nav') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    });
            });
            
            $( "#footerDark" ).click(function() {
                $.post('{{ route('dark.footer') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    });
            });
            
            $( "#footerFix" ).click(function() {
                $.post('{{ route('fix.footer') }}', {_token:'{{ csrf_token() }}'}, function(data){
                        //$(".loader2").hide();
                    });
            });
});
</script>