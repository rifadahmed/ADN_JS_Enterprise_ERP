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
        <li class="bold">
            <a class="waves-effect waves-cyan @if(Request::segment(1) == '') active @endif" href="{{ route('dashboard') }}">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Mail">Dashboard</span>
            </a>
        </li>

        {{-- manage Location --}}
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Manage Location</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
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

        {{-- Warehouse --}}
        <li class="@if(Request::segment(1) == 'location') active @endif bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Warehouse</span>{{--<span class="badge badge pill orange float-right mr-10">3</span>--}}</a>
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

    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
