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
<link rel="stylesheet" href="{{url('assets/modules/datatables/datatables.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

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
                 <div class="bullet"></div>  <a href="#">ADC</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{url('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{url('js/CodiePie.js')}}"></script>

<!-- JS Libraies -->
<script src="{{url('assets/modules/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{url('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
<script src="{{url('assets/modules/datatables/datatables.min.js')}}"></script>
<script src="{{url('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
<script src="{{url('assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{url('js/page/index-0.js')}}"></script>

<!-- Template JS File -->
<script src="{{url('js/scripts.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
</body>
</html>