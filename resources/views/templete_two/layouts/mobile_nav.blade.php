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

$pages = App\Models\Page::where('status', 1)->get();

// $categories = Cache::get('categories');

// $categories = json_decode($categories, true);

$categories = App\Models\Category::where('status', 1)->orderBy('position_id','ASC')->get(); 

?>

<style>

</style>


<div class="Offcanvas_menu_wrapper">
    <div class="canvas_close">
        <span>
            <svg width="20" height="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 371.23 371.23" style="enable-background:new 0 0 371.23 371.23;" xml:space="preserve">
            <polygon points="371.23,21.213 350.018,0 185.615,164.402 21.213,0 0,21.213 164.402,185.615 0,350.018 21.213,371.23 
           185.615,206.828 350.018,371.23 371.23,350.018 206.828,185.615 "/>
            </svg>
        </span>
    </div>
    <div class="support_info">
        {{-- @if(!empty($SiteSetting->phone))
            @php
            $phone = explode(' ',$SiteSetting->phone);  
            @endphp                  
            @for($i=0;$i<sizeof($phone);$i++)
                <a class="tphone" href="tel:{{$phone[$i]}}"><span>{{$phone[$i]}}</span></a>
            @endfor                  
        @endif --}}
        @include('html/phone_number')
    </div>
    <div class="top_right text-right">
        <ul>
            <li><a href="https://supporttickets.intel.com/warrantyinfo">Intel Warranty</a></li>
            @if($user_id)
                <li><a class="tphone" href="{{route('profile')}}">Account</a></li>
                <li><a class="tphone" href="{{route('logout')}}">Logout</a></li>
            @else
                <li><a class="tphone" href="{{route('customerLogin')}}">Log In</a></li>
                <li><a class="tphone" href="{{route('customerRegister')}}">Register</a></li>
            @endif
        </ul>
    </div>
    <div class="search_container">
        <form action="{{route('products-search')}}" method="post" >
            @csrf
            <div class="search_box">
                <input placeholder="Search product..." type="text" name="product_name">
                <button type="submit">Search</button>
            </div>
        </form>
    </div>

    <div class="middel_right_info">
        <div class="header_wishlist">
            @if($user_id)
                <a href="{{route('wishlist')}}"><img style="height:27px;" src="images/heart.png" alt=""></a>
                <span class="wishlist_quantity">{{$total_wishlist ?? '0'}}</span>
            @else
                <a href="{{route('customerLogin')}}"><img style="height:27px;" src="images/heart.png" alt=""></a>
                <span class="wishlist_quantity">{{$total_wishlist ?? '0'}}</span>
            @endif
        </div>
        <div class="cart_components">
            @include('templete_two.homepage.components.cart')
        </div>
    </div>

    @include('html/mobile_menu')
    {{-- <div id="menu" class="text-left ">
        <ul class="offcanvas_main_menu">
            <li class="menu-item-has-children active">
                <a href="{{ URL::to('/') }}">Home</a>
            </li>
            <li class="menu-item-has-children">
                <a href="{{ URL::to('/offer') }}">Offer</a>
            </li>
            @if(count($categories) > 0) 
            @foreach($categories as $category)
            <?php 
                $subCategories = App\Models\Subcategory::where('category_id', $category['id'])->where('status', 1)->get();
            ?>
            <li class="menu-item-has-children">
                <a href="{{route('/', $category['slug'])}}">{{$category['name']}}</a>
                <ul class="sub-menu">

                    @foreach($subCategories as $sub_category)

                    <?php 
                        $proSubCategories = App\Models\Prosubcategory::where('subcategory_id', $sub_category->id)->where('status', 1)->get();
                    ?>
                    <li class="menu-item-has-children">
                        <a href="{{route('/', $sub_category['slug'])}}"> {{$sub_category['name']}}</a>
                        <ul class="sub-menu">
                            @foreach($proSubCategories as $proSubCategory)
                                <li><a href="{{route('/', $proSubCategory->slug)}}">{{$proSubCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
            @endif
            

            @foreach($pages as $page)
            <li class="menu-item-has-children">
                <a href="{{route('page', [$page->slug])}}">{{$page->title}}</a>
            </li>
            @endforeach
            <li class="menu-item-has-children">
                <a href="{{route('/', 'contact-us')}}"> Contact Us</a>
            </li>
            <li><a href="https://supporttickets.intel.com/warrantyinfo"> Check Intel CPU Warranty </a></li>
        </ul>
    </div> --}}

    <div class="Offcanvas_footer">
        <!-- <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span> -->
        <ul>
            <li>
                <a class="facebook" target="_blank" href="https://www.facebook.com/binarylogic.com.bd">
                    <?xml version="1.0" encoding="UTF-8"?>
                        <svg enable-background="new 0 0 408.788 408.788" version="1.1" viewBox="0 0 408.79 408.79" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path d="m353.7 0h-298.61c-30.422 0-55.085 24.662-55.085 55.085v298.62c0 30.423 24.662 55.085 55.085 55.085h147.28l0.251-146.08h-37.951c-4.932 0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959 3.996-8.989 8.955-8.989h37.882v-45.498c0-52.8 32.247-81.55 79.348-81.55h38.65c4.945 0 8.955 4.009 8.955 8.955v39.704c0 4.944-4.007 8.952-8.95 8.955l-23.719 0.011c-25.615 0-30.575 12.172-30.575 30.035v39.389h56.285c5.363 0 9.524 4.683 8.892 10.009l-5.581 47.087c-0.534 4.506-4.355 7.901-8.892 7.901h-50.453l-0.251 146.08h87.631c30.422 0 55.084-24.662 55.084-55.084v-298.62c-1e-3 -30.423-24.663-55.085-55.086-55.085z" fill="#475993"/>
                        </svg>
                 </a>
              </li>
            <li><a target="_blank" class="twitter" href="https://twitter.com/binarylogic_bd">
                <svg enable-background="new 0 0 455.731 455.731" version="1.1" viewBox="0 0 455.73 455.73" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">  
                    <rect width="455.73" height="455.73" fill="#50ABF1"/>
                    <path d="m60.377 337.82c30.33 19.236 66.308 30.368 104.88 30.368 108.35 0 196.18-87.841 196.18-196.18 0-2.705-0.057-5.39-0.161-8.067 3.919-3.084 28.157-22.511 34.098-35 0 0-19.683 8.18-38.947 10.107-0.038 0-0.085 9e-3 -0.123 9e-3 0 0 0.038-0.019 0.104-0.066 1.775-1.186 26.591-18.079 29.951-38.207 0 0-13.922 7.431-33.415 13.932-3.227 1.072-6.605 2.126-10.088 3.103-12.565-13.41-30.425-21.78-50.25-21.78-38.027 0-68.841 30.805-68.841 68.803 0 5.362 0.617 10.581 1.784 15.592-5.314-0.218-86.237-4.755-141.29-71.423 0 0-32.902 44.917 19.607 91.105 0 0-15.962-0.636-29.733-8.864 0 0-5.058 54.416 54.407 68.329 0 0-11.701 4.432-30.368 1.272 0 0 10.439 43.968 63.271 48.077 0 0-41.777 37.74-101.08 28.885l0.019 5e-3z" fill="#fff"/>
                </svg>                
            </a>
        </li>
            <li>
                <a target="_blank" class="pinterest" href="https://www.pinterest.com/binarylogicdigital">
                    <svg enable-background="new 0 0 455.731 455.731" version="1.1" viewBox="0 0 455.73 455.73" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <rect width="455.73" height="455.73" fill="#C9353D"/>
                        <path d="m160.6 382c-74.378-31.081-122.79-119.66-92.003-209.62 30.459-88.991 128.99-135.59 217.71-102.65 88.972 33.04 132.98 131.21 98.486 219.22-35.709 91.112-131.44 123.35-203.22 100.62 5.366-13.253 11.472-26.33 15.945-39.943 4.492-13.672 7.356-27.878 10.725-41.037 2.9 2.44 5.814 5.027 8.866 7.439 15.861 12.535 33.805 13.752 52.605 9.232 19.977-4.803 35.764-16.13 47.455-32.78 19.773-28.16 26.751-60.019 21.972-93.546-4.942-34.668-25.469-59.756-57.65-72.389-48.487-19.034-94.453-12.626-134.27 22.259-30.622 26.83-40.916 72.314-26.187 107.72 5.105 12.274 13.173 21.907 25.379 27.695 6.186 2.933 8.812 1.737 10.602-4.724 0.133-0.481 0.295-0.955 0.471-1.422 3.428-9.04 2.628-16.472-3.473-25.199-11.118-15.906-9.135-34.319-3.771-51.961 10.172-33.455 40.062-55.777 75.116-56.101 9.39-0.087 19.056 0.718 28.15 2.937 27.049 6.599 44.514 27.518 46.264 55.253 1.404 22.242-2.072 43.849-11.742 64.159-4.788 10.055-11.107 18.996-20.512 25.325-8.835 5.945-18.496 8.341-28.979 5.602-14.443-3.774-22.642-16.95-18.989-31.407 3.786-14.985 8.685-29.69 12.399-44.69 1.57-6.344 2.395-13.234 1.751-19.696-1.757-17.601-18.387-25.809-33.933-17.216-10.889 6.019-16.132 16.079-18.564 27.719-2.505 11.992-1.292 23.811 2.61 35.439 0.784 2.337 0.9 5.224 0.347 7.634-7.063 30.799-14.617 61.49-21.306 92.369-1.952 9.011-1.59 18.527-2.239 27.815-0.123 1.778-0.017 3.574-0.017 5.939z" fill="#fff"/>
                    </svg>
                </a>
            </li>
                    <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/company/binarylogicbd">
                        <svg enable-background="new 0 0 382 382" version="1.1" viewBox="0 0 382 382" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <path d="m347.44 0h-312.89c-19.084 0-34.555 15.471-34.555 34.555v312.89c0 19.085 15.471 34.556 34.555 34.556h312.89c19.085 0 34.556-15.471 34.556-34.556v-312.89c0-19.084-15.471-34.555-34.555-34.555zm-229.24 329.84c0 5.554-4.502 10.056-10.056 10.056h-42.806c-5.554 0-10.056-4.502-10.056-10.056v-179.44c0-5.554 4.502-10.056 10.056-10.056h42.806c5.554 0 10.056 4.502 10.056 10.056v179.44zm-31.459-206.41c-22.459 0-40.666-18.207-40.666-40.666s18.207-40.666 40.666-40.666 40.666 18.207 40.666 40.666-18.206 40.666-40.666 40.666zm255.16 207.22c0 5.106-4.14 9.246-9.246 9.246h-45.934c-5.106 0-9.246-4.14-9.246-9.246v-84.168c0-12.556 3.683-55.021-32.813-55.021-28.309 0-34.051 29.066-35.204 42.11v97.079c0 5.106-4.139 9.246-9.246 9.246h-44.426c-5.106 0-9.246-4.14-9.246-9.246v-181.06c0-5.106 4.14-9.246 9.246-9.246h44.426c5.106 0 9.246 4.14 9.246 9.246v15.655c10.497-15.753 26.097-27.912 59.312-27.912 73.552 0 73.131 68.716 73.131 106.47v86.846z" fill="#0077B7"/>
                        </svg>
                    </a>
                </li>
             </ul>
    </div>
</div>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> --}}