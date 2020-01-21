<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chiketto</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('base/chiketto.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    
    <!-- Bootstrap Core Css -->
    <link href="{{asset('base/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    
    <!-- Waves Effect Css -->
    <link href="{{asset('base/plugins/node-waves/waves.css')}}" rel="stylesheet" />
    
    <!-- Animation Css -->
    <link href="{{asset('base/plugins/animate-css/animate.css')}}" rel="stylesheet" />
    
    <!-- Morris Chart Css-->
    <link href="{{asset('base/plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    
    @yield('stylesheets')
    
    <!-- Custom Css -->
    <link href="{{asset('base/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('base/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    
    <!-- Jquery Core Js -->
    <script src="{{asset('base/plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{asset('base/plugins/bootstrap/js/bootstrap.js')}}"></script>
    
    <!-- Select Plugin Js -->
    <script src="{{asset('base/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('base/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('base/plugins/node-waves/waves.js')}}"></script>
    
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('base/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    
    <!-- Custom Js -->
    <script src="{{asset('base/js/admin.js')}}"></script>
    {{-- <script src="{{asset('base/js/pages/index.js')}}"></script> --}}
    
    @yield('scripts')
    
    <!-- Demo Js -->
    <script src="{{asset('base/js/demo.js')}}"></script>
    

</body>

</html>