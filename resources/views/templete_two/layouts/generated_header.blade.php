<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');

$SiteSetting = App\Models\SiteSetting::where('status', 1)->first();

$contents = Cart::content();

$subtotal = Cart::subtotal();

$cart = Cart::content()->count();

if ($user_id) {

    $total_wishlist = App\Models\Wishlist::where('user_id', $user_id)->count();

}



?>
<style type="text/css">
div#loadWebMenu {
    height: 56px;
   
}
 a, button, img, input, span{
    transition: none !important;
}
.new_mobile_search{
    display: none;
}
.fa-search{
    display:none;
}


@media only screen and (max-width: 991px) {
  .new_mobile_search {
    display: block;
  }
  .fa-search{
    display:block;
}
.fa-search{
    margin-left: -15px;
    color: #0063d1;
}
  .new_searchbar{
    margin-left: 22px;
    font-size: 18px;
    margin-top: 4px;
  }
  .search_box {
    margin-bottom: 0px !important;
    margin-top:5px;
}
}

@media only screen and (max-width: 600px) {
            .countDown{
               position: static;
               margin-bottom: 7px;
             
            }
            .box{
                padding-right: 6px !important;
                padding-left: 6px !important;
            }
            .animated-button1 {
                    padding: 1px 5px 0px 5px;
                }
                
            } 
</style>

    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">

                                 @if(!empty($SiteSetting->phone))
                                        @php
                                        $phone = explode(' ',$SiteSetting->phone);  
                                        @endphp                  
                                    @for($i=0;$i<sizeof($phone);$i++)
                                        <a class="tphone" href="tel:{{$phone[$i]}}" title="phone"><span>{{$phone[$i]}}</span></a>
                                    @endfor                  
                                @endif
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                   <a href="http://www.beboybd.com/offer" class="animated-button1" title="hot deal">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                         <b>Hot Deal</b>
                                    </a>
                                    @if($user_id)
                                        <li><a class="tphone" href="{{route('profile')}}" title="account">Account</a></li>
                                        <li><a class="tphone" href="{{route('logout')}}" title="logout">Logout</a></li>
                                    @else
                                        <li><a class="tphone" href="{{route('customerLogin')}}" title="log in">Log In</a></li>
                                        <li><a class="tphone" href="{{route('customerLogin')}}" title= "register">Register</a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="{{URL::to('/')}}" title="Binary Logic">
                                    
                                    <span class="homepage_two__log">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500.000000 373.000000" preserveAspectRatio="xMidYMid meet">
                                            <g transform="translate(0.000000,373.000000) scale(0.100000,-0.100000)" fill="#0101c1" stroke="none">
                                            <path d="M0 1870 l0 -1860 1638 1 c1628 1 1636 1 1521 19 -550 88 -995 373 -1296 832 -471 717 -378 1680 221 2297 302 310 661 493 1090 556 78 11 -142  13 -1541 14 l-1633 1 0 -1860z"></path>
                                            <path d="M3081 3409 c-260 -55 -535 -201 -737 -392 -257 -243 -416 -542 -476  -891 -26 -158 -22 -427 11 -577 187 -863 1025 -1406 1881 -1219 549 119 998  530 1165 1065 228 729 -91 1508 -765 1868 -134 71 -333 139 -477 162 l-43 7 0 -586 0 -586 -217 2 -218 3 -3 583 c-2 456 -5 582 -15 581 -6 0 -54 -9 -106 -20z"></path>
                                            </g>
                                            </svg>
                                            <span class="logo-text">Binary Logic
                                              
                                            </span>
                                        </a>
                                            <span class="btn new_searchbar" data-toggle="collapse" data-target=".search-input"><i class="fa fa-search"></i></span>
                                    </span> 


                                
                                
                                <!--<div class="container collapse search-input">-->
                                <!--    <div class="search-margin">-->
                                <!--        <form action="{{route('products-search')}}" method="post" >-->
                                <!--            @csrf-->
                                <!--            <div class="search_box">-->
                                <!--                <input placeholder="Search product..." type="text" name="product_name">-->
                                <!--                <button type="submit">Search</button>-->
                                <!--            </div>-->
                                <!--        </form>-->
                                <!--    </div>-->
                                <!--</div>-->

                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container_form">
                                    <div class="search_box new_m_searchbox">
                                        
                                        <input id="searchInput" placeholder="Search product..."  type="text"  onkeyup="ProductSearch(this)"  name="product_name" required="required">

                                        <button onclick="return mySubmitFunction(event)">Search</button>

                                        <div style="background: #fff; display: none; max-height: 400px; overflow-y: auto; margin-top: 5px; padding: 1rem 0; position: absolute; top: 100%; left: 0; right: 0; z-index: 1000000;text-align: left;" class="ShowProduct" id="show-preloader">
                                        </div>

                                        
                                    </div>
                                </div>

                                <div class="pc_builder_button d-none d-md-block" >
                                    <a href="{{ route('tools/pc_builder') }}" title="pc builder"><button type="button">BUILD PC </button></a>
                                </div>

                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        @if($user_id)
                                            <a href="{{route('wishlist')}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            <span class="wishlist_quantity">{{$total_wishlist ?? '0'}}</span>
                                        @else
                                            <a href="{{route('customerLogin')}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            <span class="wishlist_quantity">{{$total_wishlist ?? '0'}}</span>
                                        @endif
                                    </div>

                                    <div class="cart_components">
                                        @include('templete_two.homepage.components.cart')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
  
            <!--header bottom satrt-->
            <div id="loadWebMenu">
                <div class="main_menu_area">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="main_menu menu_position">
                                @include('html/menu')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                
            </div>
            
            
            
            
            
            
            
            
            
            
            <!--header bottom end-->
        </div>
    </header>
    <!--header area end-->


