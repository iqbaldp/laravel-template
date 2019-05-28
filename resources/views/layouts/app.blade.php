<!DOCTYPE html>
<!-- 
Template Name: Griffin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Griffin I Basic Table</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap table CSS -->
    <link href="{{url('assets/vendors/bootstrap-table/dist/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Toggles CSS -->
    <link href="{{url('assets/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{url('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css">

    @section('css')
    @show

</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
   <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        

    </div>
    <!-- HK Wrapper -->

    <!-- jQuery -->
    <script src="{{url('assets/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{url('assets/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{url('assets/dist/js/feather.min.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{url('assets/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Bootstrap-table JavaScript -->
    <script src="{{url('assets/vendors/bootstrap-table/dist/bootstrap-table.min.js')}}"></script>
    <script src="{{url('assets/dist/js/bootstrap-table-data.js')}}"></script>

    <!-- Peity JavaScript -->
    <script src="{{url('assets/vendors/peity/jquery.peity.min.js')}}"></script>
    <script src="{{url('assets/dist/js/peity-data.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{url('assets/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{url('assets/dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{url('assets/dist/js/init.js')}}"></script>

    @section('js')
 
    @show

</body>

</html>