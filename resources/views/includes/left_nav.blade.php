<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{ route('dashboard') }}">
                <img class="hide-on-med-and-down" src={{asset("app-assets/images/logo/js-enterprise-logo.png")}} alt="logo">
                <img class="show-on-medium-and-down hide-on-med-and-up" src={{asset("app-assets/images/logo/js-enterprise-logo.png")}} alt="logo">
                <span class="logo-text hide-on-med-and-down">Enterprise</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <!-- ** Dashboard -->
        <li class="bold">
            <a class="waves-effect waves-cyan @if(Request::segment(1) == '') active @endif" href="{{ route('dashboard') }}">
                <i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Mail">Dashboard</span>
            </a>
        </li>

        <!-- ** Locations -->
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">Manage Location</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'location' && Request::segment(2) == 'list' || Request::segment(1) == 'location' && Request::segment(2) == 'edit' && Request::segment(3) ==Request::segment(3)|| Request::segment(1) == 'location' && Request::segment(2) == 'show' && Request::segment(3) ==Request::segment(3)) active @endif" href="{{route('location.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Locations List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'create') active @endif" href="{{route('location.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Location</span>
                        </a>
                    </li>
                    <li>
                        <a  class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'types' &&  Request::segment(3) == 'list' || Request::segment(1) == 'location' && Request::segment(2) == 'types' && Request::segment(3) =="edit" && Request::segment(4) ==Request::segment(4) || Request::segment(1) == 'location' && Request::segment(2) == 'types' && Request::segment(3) =="show" && Request::segment(4) ==Request::segment(4)) active @endif" href="{{route('location.types.list')}}"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Location Types List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'location' &&  Request::segment(2) == 'types' &&  Request::segment(3) == 'create') active @endif" href="{{route('location.types.create')}}"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Add New Location Type</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- ** Buyers -->
        <li class="@if(Request::segment(1) == 'buyer') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">person</i><span class="menu-title" data-i18n="Dashboard">Manage Buyer</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'edit' &&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'show' &&  Request::segment(3) == Request::segment(3)) active @endif" href="{{route('buyer.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Buyer List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'create') active @endif" href="{{route('buyer.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Buyer</span>
                        </a>
                    </li>
                    <li >
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'list'||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'edit'&&  Request::segment(4) == Request::segment(4)||Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'show'&&  Request::segment(4) == Request::segment(4)) active @endif" href="{{route('buyer.type.list')}}">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Modern">Buyer Types List</span>
                            </a>
                        </li>
                        <li>
                        <a class="@if(Request::segment(1) == 'buyer' &&  Request::segment(2) == 'type' &&  Request::segment(3) == 'create') active @endif" href="{{route('buyer.type.create')}}">

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
                    <a class="@if(Request::segment(1) == 'supplier' &&  Request::segment(2) == 'list'||Request::segment(1) == 'supplier' &&  Request::segment(2) == 'edit'&&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'supplier' &&  Request::segment(2) == 'show'&&  Request::segment(3) == Request::segment(3)) active @endif" href="{{route('supplier.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Supplier List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'supplier' &&  Request::segment(2) == 'create') active @endif" href="{{route('supplier.create')}}">
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
                        <a class="@if(Request::segment(1) == 'user' &&  Request::segment(2) == 'list'||Request::segment(1) == 'user' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'user' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('user.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">User List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'user' &&  Request::segment(2) == 'create') active @endif" href="{{route('user.create')}}">
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
                        <a class="@if(Request::segment(1) == 'category' &&  Request::segment(2) == 'list'||Request::segment(1) == 'category' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'category' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('category.list')}} ">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Category List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'category' &&  Request::segment(2) == 'create') active @endif" href="{{route('category.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Category</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('subcategory.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sub Category List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'subcategory' &&  Request::segment(2) == 'create') active @endif" href="{{route('subcategory.create')}}">
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
                        <a class="@if(Request::segment(1) == 'brand' &&  Request::segment(2) == 'list'||Request::segment(1) == 'brand' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'brand' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('brand.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Brand List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'brand' &&  Request::segment(2) == 'create') active @endif" href="{{route('brand.create')}}">
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
                    <a class="@if(Request::segment(1) == 'product' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'product' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'product' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3)) active @endif" href="{{route('product.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>

                            <span data-i18n="Modern">Product List</span>

                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'product' &&  Request::segment(2) == 'create') active @endif" href="{{route('product.create')}}">
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
                        <a class="@if(Request::segment(1) == 'purchase' &&  Request::segment(2) == 'list' ||Request::segment(1) == 'purchase' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'purchase' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('purchase.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Purchase List</span>

                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'purchase' &&  Request::segment(2) == 'create') active @endif" href="{{route('purchase.create')}}">
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
                        <a class="@if(Request::segment(1) == 'sale' &&  Request::segment(2) == 'list'||Request::segment(1) == 'sale' &&  Request::segment(2) == 'edit'&&  Request::segment(3) ==Request::segment(3)||Request::segment(1) == 'sale' &&  Request::segment(2) == 'show'&&  Request::segment(3) ==Request::segment(3) ) active @endif" href="{{route('sale.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'sale' &&  Request::segment(2) == 'create') active @endif" href="{{route('sale.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Sales</span>
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

        <!-- ** Warehouse -->
        <li class="@if(Request::segment(1) == 'warehouse') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Dashboard">Manage Warehouse</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                    <a class="@if(Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'list'||Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'edit'&&  Request::segment(3) == Request::segment(3)||Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'show'&&  Request::segment(3) == Request::segment(3)) active @endif" href="{{route('warehouse.list')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Warehouse List</span>
                        </a>
                    </li>
                    <li>
                        <a class="@if(Request::segment(1) == 'warehouse' &&  Request::segment(2) == 'create') active @endif" href="{{route('warehouse.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New warehouse</span>
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
