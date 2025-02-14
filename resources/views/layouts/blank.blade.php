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
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">


<!-- END: Header-->

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                @yield('content')
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- BEGIN VENDOR JS-->
<script src={{asset("app-assets/js/vendors.min.js")}}></script>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN THEME  JS-->
<script src={{asset("app-assets/js/plugins.js")}}></script>
<script src={{asset("app-assets/js/search.js")}}></script>
<script src={{asset("app-assets/js/custom/custom-script.js")}}></script>
<script src={{asset("app-assets/js/scripts/customizer.js")}}></script>
<!-- END THEME  JS-->

</body>
</html>
