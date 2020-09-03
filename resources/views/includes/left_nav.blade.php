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

<<<<<<< HEAD
        {{-- manage Location --}}
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_location</i><span class="menu-title" data-i18n="Dashboard">Manage Location</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
=======
        <!-- ** Locations -->
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">my_location</i><span class="menu-title" data-i18n="Dashboard">Manage Location</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="@if(Request::segment(1) == 'location' && Request::segment(2) == 'list') active @endif" href="{{route('location.list')}}">
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
                        <a href="#"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Location Types List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Analytics">Add New Location Type</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

<<<<<<< HEAD
        {{-- Warehouse --}}
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cloud_upload</i><span class="menu-title" data-i18n="Dashboard">Warehouse</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
=======
        <!-- ** Warehouse -->
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Dashboard">Manage Warehouse</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Warehouse List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New warehouse</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

<<<<<<< HEAD
        {{-- Products --}}
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">apps</i><span class="menu-title" data-i18n="Dashboard">Products</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
=======
        <!-- ** Product -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">card_giftcard</i><span class="menu-title" data-i18n="Dashboard">Manage Products</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
<<<<<<< HEAD
                            <span data-i18n="Modern">Category list</span>
=======
                            <span data-i18n="Modern">Product List</span>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
<<<<<<< HEAD
                            <span data-i18n="eCommerce">Sub category list</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New sub category</span>
=======
                            <span data-i18n="eCommerce">Add New Product</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Purchase -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_photos</i><span class="menu-title" data-i18n="Dashboard">Manage Purchase</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Purchase List</span>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
<<<<<<< HEAD
                            <span data-i18n="eCommerce">Brand list</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New brand</span>
=======
                            <span data-i18n="eCommerce">Add New Purchase</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Sales -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">local_mall</i><span class="menu-title" data-i18n="Dashboard">Manage Sales</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales List</span>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
<<<<<<< HEAD
                            <span data-i18n="eCommerce">Products list</span>
=======
                            <span data-i18n="eCommerce">Add New Sales</span>
                        </a>
                    </li>


                </ul>
            </div>
        </li>

        <!-- ** Reports -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">insert_chart_outline</i><span class="menu-title" data-i18n="Dashboard">Reports</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales List</span>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
<<<<<<< HEAD
                            <span data-i18n="eCommerce">Add New products</span>
=======
                            <span data-i18n="eCommerce">Add New Sales</span>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4
                        </a>
                    </li>


<<<<<<< HEAD
=======
                </ul>
            </div>
        </li>

        <!-- ** Settings -->
        <li class="@if(Request::segment(1) == 'product') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings</i><span class="menu-title" data-i18n="Dashboard">General Settings</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Sales List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Add New Sales</span>
                        </a>
                    </li>
>>>>>>> 7c5d759b15618873d61cb7c342cde1e8a8920cf4


                </ul>
            </div>
        </li>

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
