@extends('templete_two.layouts.app')



@section('head')



@php

$string = strip_tags($product->description);

$string = str_replace('&nbsp;', ' ', $string);

$string = str_replace('&amp;', ' ', $string);

$string = str_replace('&reg;', ' ', $string);

$string = preg_replace('/[^A-Za-z0-9\-.]/', ' ', $string); // Removes special chars.

$string = trim($string); 



if(!empty($product->discount_price)){

    $offer_price = $product->discount_price;

}elseif(!empty($product->offer_price)){

    $offer_price = $product->offer_price;

}elseif(!empty($product->special_price)){

    $offer_price = $product->special_price;

}elseif(!empty($product->regular_price)){

    $offer_price = $product->regular_price;

}else{

    $offer_price = 0;

}



if($product->stock_status == "in_stock"){

    $stock_display = "In Stock";

}elseif($product->stock_status == "out_of_stock"){

    $stock_display = "Out of Stock";

}elseif($product->stock_status == "limited"){

    $stock_display = "Limited";

}elseif($product->stock_status == "coming"){

    $stock_display = "Coming Soon";

}else{

    $stock_display = "";

}



@endphp



<title>{{$product->meta_title ?? $product->name}}</title>

<meta name="robots" content="index,allow" />

<meta name="author" content="Binary Logic" />

<meta name="publisher" content="Crenotive">

<meta name="title" content="{{$product->meta_title ?? $product->name}}">

<meta name="description" content="{{$product->meta_des ?? $product->name}}">

<meta name="keywords" content="{{$product->meta_keywords ?? $product->name}}" />

<link rel="canonical" href="{{'http://www.beboybd.com/'.$product->slug ?? '' }}" />

<meta property="image" content="{{ 'http://www.beboybd.com/'.$product->image ?? ''}}" />

<meta property="type" content="{{$product->name ?? ''}} :Product" />

<meta property="site_name" content="Binarylogic" />

<meta property="slug" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}" />

<meta property="product:brand" content="{{$ProductBrands[0]->brand->name ?? 'Binary Logic'}}" />

<meta property="product:availability" content="{{$stock_display}}" />

<meta property="product:condition" content="new" />

<meta property="product:price:amount" content="{{$offer_price}}" />

<meta property="product:price:currency" content="BDT" />

<meta property="product:retailer_item_id" content="{{$product->id}}" />

@php
    if(!empty($ProductSocial)){
        $social_title = $ProductSocial->socialTitle;
        $social_description = $ProductSocial->socialDescription;
        $social_image = 'https://binarylogic.com.bd/images/social_image/'.$ProductSocial->socialImage;
    }
@endphp
<meta name="image" property="og:image" content="{{ $social_image ?? 'http://www.beboybd.com/'.$product->image ?? ''}}">
<meta property="og:title" content="{{$social_title ?? $product->name ?? ''}}">
<meta property="og:type" content="product">
<meta property="og:url" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}">
<meta property="og:description" content="{{$social_description ?? $product->meta_des ?? $product->name}}">
<meta property="og:site_name" content="Binarylogic - Make Your Own PC">
<meta property="og:product:brand" content="{{$ProductBrands[0]->brand->name ?? 'Binary Logic'}}">
<meta property="og:product:availability" content="{{$stock_display}}">
<meta property="og:product:price:amount" content="{{$offer_price}}">
<meta property="og:product:price:currency" content="BDT">
<meta property="og:product:retailer_item_id" content="{{$product->id}}">

@if(!empty($product->product_image_large))
    <meta property="og:image" content="{{ $social_image ?? 'http://www.beboybd.com/'.$product->product_image_large ?? ''}}">
    <meta property="twitter:image" content="{{ $social_image ?? 'http://www.beboybd.com/'.$product->product_image_large ?? ''}}">
@else
    <meta property="og:image" content="{{ $social_image ?? 'http://www.beboybd.com/'.$product->image ?? ''}}">
    <meta property="twitter:image" content="{{ $social_image ?? 'http://www.beboybd.com/'.$product->image ?? ''}}">
@endif


<meta property="og:image:width" content="1200" />

<meta property="og:image:height" content="630" />



<meta property="og:url" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}">

<meta property="article:published_time" content="{{$product->created_at ?? ''}}" />

<meta property="og:image:alt" content="{{$product->image_alt}}" />

<meta property="ia:markup_url" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}">

<meta property="ia:rules_url" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}">





<meta name=twitter:card content=summary_large_image />

<meta name=twitter:site content="@Binarylogic" />

<meta name=twitter:creator content="@Binarylogic" />

<meta name=twitter:url content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}" />

<meta name=twitter:title content="{{$social_title ?? $product->meta_title ?? $product->name}}" />

<meta name=twitter:description content="{{$social_description ?? $product->meta_des ?? $product->name}}" />




<script type="application/ld+json">

{

  "@context" : "http://schema.org",

  "@type" : "Product",

  "name" : "{{$product->name}}",

  "image" : [

    "{{ 'http://www.beboybd.com/'.$product->image }}",

    "{{ 'http://www.beboybd.com/'.$product->product_image_large ?? $product->image}}",

    "{{ 'http://www.beboybd.com/'.$product->product_image_medium ?? $product->image}}",

    "{{ 'http://www.beboybd.com/'.$product->product_image_small ?? $product->image}}",

    "{{ 'http://www.beboybd.com/'.$product->product_image_thumb ?? $product->image}}"

    ],

  "description" : "{{ $product->meta_des ?? $product->name }}",

  "sku": "{{$product->sku ?? $product->id}}",

  "url" : "{{ 'http://www.beboybd.com/'.$product->slug ?? 'http://www.beboybd.com/'}}",

  "brand": {

     "@type": "Brand",

     "name": "{{$ProductBrands[0]->brand->name ?? 'Binary Logic'}}"

    },

  "offers" : {

    "@type" : "Offer",

    "url" : "{{ 'http://www.beboybd.com/'.$product->slug ?? 'http://www.beboybd.com/'}}",

    "priceCurrency": "BDT",

    "price" : "{{$offer_price}}",

    "priceValidUntil" : "{{date('Y-m-d', strtotime('+2 months'))}}",

    "itemCondition": "https://schema.org/NewCondition",

    "availability": "https://schema.org/InStock",

    "seller": {

      "@type": "Organization",

       "name": "Binary Logic"

    }

  }

}

</script>






@endsection



@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Single Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                       
                                          
                                            <a href="{{asset($product->product_image_medium)}}" class="gimg" alt="{{$image->product_image_alt ?? $product->name}}">
                                             
                                                <img src="{{asset($product->product_image_small)}}"
                                                    alt="">
                                              
                                            </a>
                                            {{-- <a href="{{asset($product->product_image_medium)}}"  class="new_image gimg" title="{{ $product->name }}" data-image="{{asset($product->product_image_medium)}}" alt="{{$image->product_image_alt ?? $product->name}}"><img class="width_image" src="{{asset($product->product_image_medium ?? $product->image)}}" width="400" height="400" title="{{ $product->name }}"> </a>   --}}
                                       
                                        {{-- <div class="single-nav-thumb">
                                          @foreach($productImages as $image)
                                            <div class="single-slide">
                                             
                                                <img class="img-responsive" src="{{asset($image->product_image_small)}}"
                                                    alt="">
                                             
                                            </div>
                                            @endforeach
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $product->name }}</h5>
                                       
                                        <div class="ec-single-desc">{{ $product->title }}</div>

                                       
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="new-price"> TK {{ $product->regular_price }}</span>
                                            </div>
                                
                                            <div class="ec-single-stoke">
                                                <span class="ec-single-ps-title" style="color: #15a915"> <b> IN STOCK </b></span>
                                            </div>
                                   
                                            </div>

                                
                                        <div class="ec-single-qty">
                                            @include('templete_two.homepage.components.action_links')
                                             </div>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="#"><i
                                                            class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i
                                                            class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i
                                                            class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i
                                                            class="ecicon eci-youtube-play"></i></a></li>
                                            </ul>
                                        </div>

                                        @if(count($ProductHighlights)>0 || $product->product_highlights)
                                        <h4 class="mt-3">Product Highlights</h4>
                                        <div class="product_desc">
                                            @if(count($ProductHighlights)>0)
                                                @foreach($ProductHighlights as $ProductHighlight)
                                                <p style="margin: 0"> * {{$ProductHighlight->highlights}}</p>                                    
                                                @endforeach
                                            @endif
                                        </div>                         
                                 @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                            role="tablist">More Information</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                       @if (!empty($product->description))
                                           {!! $product->description !!}
                                       @endif
                                    </div>
                                </div>
                                <div id="ec-spt-nav-info" class="tab-pane fade">
                                    <div class="ec-single-pro-tab-moreinfo">
                                        <ul>
                                                @if (!empty($product->product_summery))
                                                  {!! $product->product_summery !!}
                                                 @endif                                       
                                        </ul>
                                    </div>
                                </div>

                              
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category</h3>
                            </div>
                            
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>

                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                @foreach($relatedProducts as $product)
                <!-- Related Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="{{route('/', $product->slug)}}" class="image">
                                    <img class="main-image"
                                        src="{{asset($product->product_image_medium ?? $product->image)}}" alt="{{ $product->name }}" height="320px;" />
                                </a>
                                @if($product->stock_status == "in_stock")
                                <div class="percentage" style="background: #15a915">
                                    <a class="text-white" >IN STOCK</a>
                                </div>
                                @endif
                                @if($product->stock_status == "out_of_stock")   
                                    <div class="percentage" style="background: red">
                                        <a class="text-white">OUT Of STOCK</a>
                                    </div>      
                                @endif
                                @include('templete_two.homepage.components.action_links')
                                
                                <div class="ec-pro-actions">
                                    <a href="{{route('/', $product->slug)}}" class="quickview" data-link-action="quickview"
                                        title="Quick view"
                                        data-bs-target="#ec_quickview_modal"><img
                                            src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                            alt="{{ $product->name }}" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="{{route('/', $product->slug)}}">{{$product->name}}</a></h5>
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
    
            $('.gimg').magnificPopup({
             type:'image',
             gallery:{
                 enabled:true
                },
            image: {
                markup: '<div class="mfp-figure">'+
                '<div class="mfp-close"></div>'+
                '<div class="mfp-img"></div>'+
                '<div class="mfp-bottom-bar">'+
                  '<div class="mfp-title"></div>'+
                  '<div class="mfp-counter"></div>'+
                '</div>'+
              '</div>',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
           
        });
    });
    </script>


@endsection

