<!DOCTYPE html>
<!--
Author: ADN Digital
Website: http://adndigital.com.bd
-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="ADN ERP Solution">
    <meta name="keywords" content="">
    <meta name="author" content="ADN Digital">
    <title>{{ config('app.name', 'JS ERP') }}</title>
    <link rel="apple-touch-icon" href={{asset("app-assets/images/favicon/apple-touch-icon-152x152.png")}}>
    <link rel="shortcut icon" type="image/x-icon" href={{asset("app-assets/images/favicon/favicon-32x32.png")}}>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/vendors/vendors.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/vendors/animate-css/animate.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/vendors/chartist-js/chartist.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/vendors/chartist-js/chartist-plugin-tooltip.css")}}>
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/css/themes/vertical-modern-menu-template/materialize.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/css/themes/vertical-modern-menu-template/style.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/css/pages/dashboard-modern.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/css/pages/intro.css")}}>
    <!-- END: Page Level CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset("app-assets/css/custom/custom.css")}}>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href={{asset("css/select_2.css")}}>

    @stack('css')
    <!-- END: Custom CSS-->

     <!-- BEGIN: Bootsrap -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
    <!-- END: Bootstrap-->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" /> --}}

  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('includes.header')
    <!-- END: Header-->

    <!-- BEGIN: Header-->
    @include('includes.left_nav')
    <!-- END: Header-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
              <!-- STAET : FLASH MESSAGE RK -->
              @include('includes.flash_message')
              <!-- STAET : FLASH MESSAGE RK -->
              @yield('content')
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Start : Intro -->
    {{--@include('includes.intro')--}}
    <!-- End : Intro -->

    <!-- START RIGHT SIDEBAR NAV -->
    @include('includes.right_nav')
    <!-- END RIGHT SIDEBAR NAV -->

    <!-- Theme Customizer -->
    @include('includes.settings')
    <!--/ Theme Customizer -->

    <!-- BEGIN: Footer-->
    @include('includes.footer')
    <!-- END: Footer-->

    <!-- BEGIN VENDOR JS-->
    <script src={{asset("app-assets/js/vendors.min.js")}}></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src={{asset("app-assets/vendors/chartjs/chart.min.js")}}></script>
    <script src={{asset("app-assets/vendors/chartist-js/chartist.min.js")}}></script>
    <script src={{asset("app-assets/vendors/chartist-js/chartist-plugin-tooltip.js")}}></script>
    <script src={{asset("app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js")}}></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src={{asset("app-assets/js/plugins.js")}}></script>
    <script src={{asset("app-assets/js/search.js")}}></script>
    <script src={{asset("app-assets/js/custom/custom-script.js")}}></script>
    <script src={{asset("app-assets/js/scripts/customizer.js")}}></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    {{--<script src={{asset("app-assets/js/scripts/dashboard-modern.js")}}></script>--}}
    {{--<script src={{asset("app-assets/js/scripts/intro.js")}}></script>--}}
    <script src={{asset("app-assets/js/scripts/ui-alerts.js")}}></script>
    <!-- END PAGE LEVEL JS-->
   
    

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script>
      $(document).ready(function() {
    
        $('.js-example-basic-single').select2();

        
      });
      </script>
    @stack('script')

  </body>
</html>
