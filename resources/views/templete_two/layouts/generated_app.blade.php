<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="refresh" content="900">
    @yield('head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/favicon.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS 
    ========================= -->
    
    <style>
        
    </style>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_two')}}/assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_two')}}/assets/css/style.css?v=0.0.<?= strtotime("now") ?>">
    <link rel="stylesheet" href="{{asset('public/frontend/homepage_two')}}/assets/alert.css">


    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script async type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=UA-193896597-1" type="text/javascript"></script>

    <script>

      window.dataLayer = window.dataLayer || [];

      function gtag(){dataLayer.push(arguments);}

      gtag('js', new Date());gtag('config', 'UA-193896597-1');

    </script>
    
    <!-- Meta Pixel Code include('layouts.layout_pixel') -->
    
    
    
    <!-- All Page ld+json Code -->
    @include('layouts.layout_schema')

</head>

<body>

    <!--header area start-->

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    
    
    @include('templete_two.layouts.generated_header')



    @yield('content')
    <!--<div id="subscribe" class="modal fade" style="z-index:1000000000000000000000000000;"></div>-->



    @include('templete_two.layouts.footer')





    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content quick-view">
                
            </div>
        </div>
    </div>
    <!-- modal area end-->









    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="{{asset('public/frontend/homepage_two')}}/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="{{asset('public/frontend/homepage_two')}}/assets/js/main.js"></script>


    <script src="{{asset('public/frontend/homepage_two')}}/assets/alert.js"></script>


    @include('templete_two.layouts.generated_js_script')

    <!-- include('templete_two.layouts.addtocart_wishlist_js') -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @if(Session::has('message'))
    <script>
        var type= "{{ Session::get('alert-type', 'info') }}"
        
        switch(type){
        case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
        case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
        case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
        }
    </script>
   @endif


 <script>
    // $(document).ready(function(){
    //     //cookie set for popup
    //     var ispopuploaded = getCookie('popup');
        
    //     if(ispopuploaded){

    //         // console.log('popup loaded');

    //     }else{

    //         // console.log('popup loading...');

    //         setTimeout(loadPopup, 7000);
    //     }
        
        
        
    // });
    
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
        var nextUrl = 'http://www.beboybd.com/search/'+searchString
        window.location.href = nextUrl
    }
    function mySubmitFunctionLeft(){
        var nextUrl = 'http://www.beboybd.com/search/'+$("#searchInputLeft").val()
        window.location.href = nextUrl
    }
    
    
    // function loadPopup(){
    //     getPopup();
    //     setCookie('popup',1,1);
    //     setTimeout(clearPopup, 10000);
    // }
    
    // function clearPopup(){

    //     var modal = document.getElementById("subscribe");
    //     var collection = document.getElementsByClassName("modal-backdrop");
    //     collection[0].style.display = "none";
    //     modal.style.display = "none";
        
    //     var collection_body = document.getElementsByClassName("modal-open");
    //     collection_body[0].style.removeProperty('overflow');
        
    // }
    
    // function setCookie(cname, cvalue, exdays) {

    //     const d = new Date();

    //     // d.setTime(d.getTime() + (exdays * 12 * 60 * 60 * 1000));

    //     d.setTime(d.getTime() + 1000000); // 8.33 min  = 500000; 12 hours = 43,200,000

    //     let expires = "expires="+d.toUTCString();

    //     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

    // }
    
//   function getPopup(){

//         // console.log('ajax poppup findings...');
        
//         var modalData = '<div class="modal-dialog">'+
//             '<div class="modal-content">'+
//                 '<a class="custom-close"> X </a>'+
//                 '<a href="http://www.beboybd.com/offer">'+
//                     '<img src="https://i.ibb.co/h2zrqD2/Binary-offer.webp" alt="intBinary-offer.webpel-offer">'+
//                 '</a>'+
//             '</div>'+
//         '</div>';
//         $("#subscribe").html(modalData);

//         $("#subscribe").modal('show');
        
//         $(".custom-close").click(function() {
           
//              clearPopup();
             
            

//         });

//     }
    
    function getCookie(cname) {

        let name = cname + "=";

        let ca = document.cookie.split(';');

        for(let i = 0; i < ca.length; i++) {

            let c = ca[i];

            while (c.charAt(0) == ' ') {

            c = c.substring(1);

            }

            if (c.indexOf(name) == 0) {

            return c.substring(name.length, c.length);

            }

        }

        return "";

    }

</script>

    <!-- Messenger Chat Plugin Code include('layouts.layout_fb_chat') -->
    


</body>

</html>