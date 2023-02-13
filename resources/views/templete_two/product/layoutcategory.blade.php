@extends('templete_two.layouts.app')
@section('head')

<title>{{$cat_own->meta_title ??  $cat_own->name}}</title>

<meta name="robots" content="index,allow" />

<meta name="author" content="Binary Logic" />

<meta name="publisher" content="Crenotive">

<meta name="title" content="{{$cat_own->meta_title ?? $cat_own->name}}">

<meta name="description" content="{{$cat_own->meta_des ??  $cat_own->name}}">

<meta name="keywords" content="{{$cat_own->meta_keywords ??  $cat_own->name}}" />

<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}">
<link rel="canonical" href="{{'http://www.beboybd.com/'.$cat_own->slug ?? ''}}" />
<meta property="og:url"  content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />
<meta property="og:type"  content="category" />
<meta property="og:title"  content="{{$cat_own->meta_title ??  $cat_own->name}}" />
<meta property="og:description" content="{{$cat_own->meta_des ??  $cat_own->name}} " />
<meta property="og:keywords"  content="{{$cat_own->meta_keywords ??  $cat_own->name}} " />
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@BinaryLogic" />
<meta name="twitter:creator" content="@BinaryLogic" />
<meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />
<meta property="twitter:title" content="{{$cat_own->meta_title ??  $cat_own->name}}" />
<meta property="twitter:description" content="{{$cat_own->meta_des ??  $cat_own->name}}" />
<meta property="og:keywords"   content="{{$cat_own->meta_keywords ??  $cat_own->name}} " />
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}" />
@php
$string = strip_tags($cat_own->description);
$string = str_replace('&nbsp;', ' ', $string);
$string = str_replace('&amp;', ' ', $string);
$string = str_replace('&reg;', ' ', $string);
$string = preg_replace('/[^A-Za-z0-9\-.]/', ' ', $string); // Removes special chars. 
$string = trim($string);
@endphp

<script type="application/ld+json">
@php 

    $categories = Cache::get('categories');

    $categories = json_decode($categories,true);

    $i=1; 

@endphp

{

  "@context": "http://schema.org/",
  "@type": "BreadcrumbList",
  "name" : "{{$cat_own->name}}",
  "image" : "{{ 'http://www.beboybd.com/'.$cat_own->image}}",
  "description" : "{{$cat_own->meta_des}}",
  "url" : "{{ 'http://www.beboybd.com/'.$cat_own->slug ?? ''}}"
  @if($cat_own->slug != 'offer')
  ,"itemListElement": [

    @if(!empty($cat_parent))

        {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $cat_parent->name }}",

            "item": "http://www.beboybd.com/{{ $cat_parent->slug }}"

        }

        @if(!empty($cat_child) && sizeof($cat_child) > 0)

            ,

        @endif

    @endif

    

    @if(!empty($cat_child) && sizeof($cat_child) > 0)

        @foreach ($cat_child as $cat_sub)

            @php

                if($i<sizeof($cat_child)){$ext_comm = ",";} else {$ext_comm = "";}

            @endphp

            {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $cat_sub->name }}",

            "item": "http://www.beboybd.com/{{ $cat_sub->slug }}"

            }{{$ext_comm}}

            @php

                $i++;

            @endphp

        @endforeach

    @endif

  ]

  @else

  ,"itemListElement": [

    @foreach ($categories as $category)

    

            @php

                if($i<sizeof($categories)){$ext_comm = ",";} else {$ext_comm = "";}

            @endphp

            {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $category['name'] }}",

            "item": "http://www.beboybd.com/{{ $category['slug'] }}"

            }{{$ext_comm}}

            @php

                $i++;

            @endphp

        @endforeach

    ]

  @endif

}
</script>


@endsection

@section('content')
<link rel="stylesheet" href="{{asset('public/frontend/homepage_three')}}/assets/css/plugins/nouislider.css" />

<?php

$user_id = Session::get('user_id');
$user_name = Session::get('name');
$user_type = Session::get('user_type');
$Cart = Cart::content()->count();

?>
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
        <!-- Ec Shop page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-shop-rightside col-lg-10 order-lg-last col-md-12 order-md-first margin-b-30">
                        <!-- Shop Top Start -->
                        <div class="ec-pro-list-top d-flex">
                            <div class="col-md-6 ec-grid-list">
                               
                            </div>
                            <div class="col-md-6 ec-sort-select">
                                <span class="sort-by">Sort by</span>
                                <div class="ec-select-inner">
                                    <select name="ec-select" id="ec-select">
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Top End -->
    
                        <!-- Shop content Start -->
                        <div class="shop-pro-content">
                            <div class="shop-pro-inner">


                                
                                    <div class="p-items-wrap">
                                    <!-- New Product Content -->
                                    @foreach ($products as $product)
                                        @include('templete_two.homepage.components.common_product_cart')    
                                   @endforeach
                                    </div>
                                 
                                {{-- <div class="row">

                                @forelse ($products as $product)                         
                                   <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{route('/', $product->slug)}}" class="image">
                                                        <img class="main-image"
                                                            src="{{asset($product->product_image_small ?? '')}}" alt="Product" height="320px;" />
                                                    </a>

                                                    @include('templete_two.homepage.components.stock_status')
                                                    @include('templete_two.homepage.components.action_links')
                                                    <div class="ec-pro-actions">
                                                        <a href="{{route('/', $product->slug)}}" class="quickview" data-link-action="quickview"
                                                        title="Quick view"
                                                        data-bs-target="#ec_quickview_modal"><img
                                                            src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                            alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="{{route('/', $product->slug)}}">{{ $product->name }}</a></h5>                                               
                                                @include('templete_two.homepage.components.product_price') 
                                            </div>
                                        </div>
                                    </div>

                                    @empty
                                       product not found 
                                    @endforelse


                                </div> --}}
                            </div>
                            <!-- Ec Pagination Start -->
                            <div class="ec-pro-pagination">
                                {{$products->appends(request()->query())->links()}}
                            </div>
                            <!-- Ec Pagination End -->
                        </div>
                        <!--Shop content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-shop-leftside col-lg-2 order-lg-first col-md-12 order-md-last">
                        <div id="shop_sidebar">
                            <div class="ec-sidebar-heading">
                                <h1>Filter Products By</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop page -->



@endsection