<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Passenger') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{ asset('web/css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('web/css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('web/css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('web/css/style-dark.css') }}">
        <!--=============== favicons ===============-->
        <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header start  -->
            <header class="main-header">
                <!-- logo   -->
                <a href="/" class="logo-holder"><img src="{{ asset('web/images/logo.png') }}" alt=""></a>  
                <!-- logo end  -->	
                <div class="share-btn showshare"><i class="fal fa-megaphone"></i><span>Share</span></div>
                <!-- mobile nav -->
                <div class="nav-button-wrap">
                    <div class="nav-button"><span></span><span></span><span></span></div>
                </div>
                <!-- mobile nav end-->				
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a href="#">About </a></li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->               
            </header>
            <!-- header end -->
            @yield('content')         
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('web/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('web/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('web/js/scripts.js') }}"></script>
    </body>

<!-- Mirrored from kotlis.kwst.net/dark/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 07:09:02 GMT -->
</html>