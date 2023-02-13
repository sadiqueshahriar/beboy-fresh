<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');

//$SiteSetting = App\Models\SiteSetting::where('status', 1)->first();

$contents = Cart::content();

$subtotal = Cart::subtotal();

$cart = Cart::content()->count();

if ($user_id) {

    $total_wishlist = App\Models\Wishlist::where('user_id', $user_id)->count();

}



?>
   
      <!--Cart Start -->
      <div class="ec-side-cart-overlay"></div>
      <div id="ec-side-cart" class="ec-side-cart">
          <div class="ec-cart-inner">
              <div class="ec-cart-top">
                  <div class="ec-cart-title">
                      <span class="cart_title">My Cart</span>
                      <button class="ec-close">×</button>
                  </div>
                  <ul class="eccart-pro-items">
  
  
  
                  </ul>
              </div>
  
              <div class="ec-cart-bottom">
                  <div class="cart-sub-total">
                      <table class="table cart-table">
                          <tbody>
                              <tr>
                                  <td class="text-left">Sub-Total :</td>
                                  <td class="text-right">$300.00</td>
                              </tr>
                              <tr>
                                  <td class="text-left">VAT (20%) :</td>
                                  <td class="text-right">$60.00</td>
                              </tr>
                              <tr>
                                  <td class="text-left">Total :</td>
                                  <td class="text-right primary-color">$360.00</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="cart_btn">
                      <a href="{{route('/', 'cart')}}" class="btn btn-primary">View Cart</a>
                      <a href="{{route('/', 'checkout')}}" class="btn btn-secondary">Checkout</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- ekka Cart End -->
   
   <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="https://www.facebook.com/profile.php?id=100087643580123&mibextid=ZbWKwL"><i class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="https://www.youtube.com/channel/UCM9aCKefDY0eW1glXDcIIsA"><i class="ecicon eci-youtube"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="https://www.instagram.com/beboybangladesh/"><i class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href=" https://www.linkedin.com/company/beboy-bangladesh/"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <span>Free Shipping</span>This Week Order Over - 5000
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                          
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                       
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="header-logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" alt="Site Logo" /><img
                                        class="dark-logo" src="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" alt="Site Logo"
                                        style="display: none;" />
                                </a>
                            </div>
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="{{route('/', 'checkout')}}">Checkout</a></li>
                                    @if($user_id)
                                    <li><a class="dropdown-item" href="{{route('profile')}}">Account</a></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                    @else
                                    
                                    <li><a class="dropdown-item" href="{{route('customerLogin')}}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{route('customerLogin')}}">Register</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="{{route('/', 'cart')}}" class="ec-header-btn">
                                <div class="header-icon"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                
                            </a>
                            <!-- Header Cart End -->
                            
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" alt="Site Logo" /><img
                                        class="dark-logo" src="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
          
						 <div class="search_container_form">
                                    <div class="search_box new_m_searchbox">
                                        
                                        <input id="searchInput" placeholder="Search product..."  type="text"  onkeyup="ProductSearch(this)"  name="product_name" required="required">

                                        <button onclick="return mySubmitFunction(event)">Search</button>

                                        <div style="background: #fff; display: none; max-height: 400px; overflow-y: auto; margin-top: 5px; padding: 1rem 0; position: absolute; top: 100%; left: 0; right: 0; z-index: 1000000;text-align: left;" class="ShowProduct" id="show-preloader">
                                        </div>

                                        
                                    </div>
                                </div>
						
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                       
                                        <li><a class="dropdown-item" href="{{route('/', 'checkout')}}">Checkout</a></li>
                                        @if($user_id)
                                        <li><a class="dropdown-item" href="{{route('profile')}}">Account</a></li>
                                        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                        @else
                                        
                                        <li><a class="dropdown-item" href="{{route('customerLogin')}}">Login</a></li>
                                        <li><a class="dropdown-item" href="{{route('customerLogin')}}">Register</a></li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="#" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div>
                            
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="{{route('/', 'cart')}}" class="ec-header-btn">
                                    <div class="header-icon"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">
                    <!-- Ec Header Logo Start -->
                    
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/search.svg"
                                        class="svg_img header_svg" alt="icon" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                                <img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <ul>
                                <?php 
                                        $categories = App\Models\Category::where('status', 1)->orderBy('position_id','ASC')->get(); 
                                    ?>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                @foreach($categories as $category)
                                <?php 
                                $subCategories = App\Models\Subcategory::where('category_id', $category['id'])->where('status', 1)->get();
                                ?>
                                <li class="dropdown position-static"><a href="{{route('/', $category['slug'])}}">{{$category['name']}}</a>
                                    @if(count($subCategories) > 0)
                                    <ul class="mega-menu d-block">
                                        @foreach($subCategories as $sub_category)
                                        <?php 
                                        $proSubCategories = App\Models\Prosubcategory::where('subcategory_id', $sub_category->id)->where('status', 1)->get();
                                      ?>
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="{{route('/', $sub_category['slug'])}}">
                                                    {{$sub_category['name']}}</a></li>
                                                
                                            </ul>
                
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                    @endif
                                </li>
                              @endforeach
                                <li class="dropdown"><a href="{{URL::to('/blog')}}">Blog</a>    
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('/', $category['slug'])}}">{{$category['name']}}</a>         
                                </li>
                                @endforeach
                            </ul>
                        </li>
                      
                        <li class="dropdown"><a href="{{URL::to('/blog')}}">Blog</a>
                            
                        </li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="https://www.facebook.com/profile.php?id=100087643580123&mibextid=ZbWKwL"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="https://www.youtube.com/channel/UCM9aCKefDY0eW1glXDcIIsA"><i class="ecicon eci-youtube"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="https://www.instagram.com/beboybangladesh/"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href=" https://www.linkedin.com/company/beboy-bangladesh/"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <div class="ec-side-cat-overlay"></div>
    <div class="col-lg-3 category-sidebar" data-animation="fadeIn">
            <div class="cat-sidebar">
                <div class="cat-sidebar-box">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                            </div>
                            
                            
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/perfume-8.svg" class="svg_img" alt="drink" />Main Category</div>
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Category 1<span title="Available Stock">- 2 pcs</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Category 2 <span title="Available Stock">- 4 pcs</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Category 3 <span title="Available Stock">- 10pack</span></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Category 4<span title="Available Stock">- 12 pack</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
                <div class="ec-sidebar-slider-cat">
                    <div class="ec-sb-slider-title">Best Sellers</div>
                    @php
                         $best_sellers =DB::table('products')->where('status',1)->latest()->take(5)->get();
                    @endphp
                    @foreach ($best_sellers as $product)
                            <div class="ec-sb-pro-sl">
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="{{route('/', $product->slug)}}" class="sidekka_pro_img"><img
                                                src="{{asset($product->product_image_small ?? '')}}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{route('/', $product->slug)}}">{{ $product->name}}</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">
                                                    @if (!empty($product->regular_price))
                                                    ৳ {{ $product->regular_price }}
                                                    @endif
                                                    
                                                </span>
                                                <span class="new-price">
                                                    @if (!empty($product->offer_price))
                                                    ৳ {{ $product->offer_price }}
                                                @endif
                                                </span>
                                            </span>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div>
    </div>
