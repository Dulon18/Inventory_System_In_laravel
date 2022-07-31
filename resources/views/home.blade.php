<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Inventory &mdash; System</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{url('assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/fontawesome-free/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{url('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/summernote/summernote-bs4.css')}}">
<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" r
el="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
<!-- Template CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/components.min.css')}}">
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
    
     @include('fixed.nav')

        <!-- Start main left sidebar menu -->
    @include('fixed.sidebar')

        <!-- Start app main Content -->
        <div class="main-content">
         @yield('content')
        </div>
        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/apexcharts/apexcharts.min.js"></script>
<script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/index-0.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>