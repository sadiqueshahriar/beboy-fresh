<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"> 
    <title>BeBoy - At Beboy, We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world.</title>
    <meta name="keywords" content="beboy,best condom,a girl condom, condom,buy condom,condom all flavours,condom banana,condom bd,condom brands in bangladesh," />
    <meta name="description" content="At Beboy, We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world">
    <meta name="author" content="beboy">
    <!-- site Favicon -->
    <link rel="icon" href="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" />
    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/vendor/ecicons.min.css" />
    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/animate.css"/>
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/jquery-ui.min.css"/>
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/countdownTimer.css"/>
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->

    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/demo1.css" />
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{asset('public/frontend/homepage_three')}}/assets/css/backgrounds/bg-4.css">
    <style>
        .ec-pro-image{
               min-height: 357px !important;
        }
    </style>
   
    <!-- All Page ld+json Code -->
    @include('layouts.layout_schema')

</head>

<body>
    @include('templete_two.layouts.header')
    @yield('content')
    @include('templete_two.layouts.footer')

    <!-- Vendor JS -->
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/jquery.notify.min.js"></script>
	<script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/jquery.bundle.notify.min.js"></script>
	
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/popper.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/countdownTimer.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/scrollup.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/slick.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/infiniteslidev2.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Google translate Js -->
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/google-translate.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/vendor/index.js"></script>
    <script src="{{asset('public/frontend/homepage_three')}}/assets/js/main.js"></script>
	
	 @include('templete_two.layouts.js_script')

    <script>
        $("#searchInput").keypress(function(event) {
            if (event.keyCode === 13) {
                mySubmitFunction()
            }
        });
        $("#searchInputLeft").keypress(function(event) {
            if (event.keyCode === 13) {
                mySubmitFunctionLeft()
            }
        });
        
        function mySubmitFunction(){
            var searchString = $("#searchInput").val();
            if(searchString !== ''){
            var nextUrl = 'http://www.beboybd.com/search/'+searchString
            window.location.href = nextUrl
            }
        }
        function mySubmitFunctionLeft(){
            var nextUrl = 'http://www.beboybd.com/search/'+$("#searchInputLeft").val()
            window.location.href = nextUrl
        }
    </script>

</body>

</html>