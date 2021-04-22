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

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyAfT2jIJNhJ1iwlIRE63waq2QP0vkhgGWI",
        authDomain: "thepassenger-82cd5.firebaseapp.com",
        projectId: "thepassenger-82cd5",
        storageBucket: "thepassenger-82cd5.appspot.com",
        messagingSenderId: "489159858478",
        appId: "1:489159858478:web:9abb09fb102aa278fc02bf",
        measurementId: "G-VZ8FBXX79H"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>


</html>