@extends('layouts.frontend.app')

@section('head')
<title>{{$product->meta_title ?? ''}}</title>
<meta name="title" content="{{$product->meta_title ?? $product->name}}">
<meta name="description" content="{{$product->meta_des ?? $product->name}}">
<meta property="keywords" content="{{$product->meta_keywords ?? $product->name}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}" />
<meta property="type" content="{{$product->name ?? ''}} :Product" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />

<meta property="og:site_name" content="Binarylogic - Make Your Own PC">
<meta property="og:title" content="{{$product->name}}">
<meta property="og:description" content="{{$product->meta_des ?? $product->name}}">
<meta property="og:type" content="article">

@if(!empty($product->product_image_large))
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}">
@else
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}">
@endif

<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<meta property="og:url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">
<meta property="article:published_time" content="{{$product->created_at ?? ''}}" />
<meta property="og:image:alt" content="{{$product->image_alt ?? $product->name}}" />
<meta property="ia:markup_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">
<meta property="ia:rules_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">


<meta name=twitter:card content=summary_large_image />
<meta name=twitter:site content="@Binarylogic" />
<meta name=twitter:creator content="@Binarylogic" />
<meta name=twitter:url content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />
<meta name=twitter:title content="{{$product->meta_title ?? ''}}" />
<meta name=twitter:description content="{{$product->meta_des ?? ''}}" />


@if(!empty($product->product_image_large))
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}">

@else
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}">

@endif


<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "{{$product->name ?? ''}}",
  "image" : "{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}",
  "description" : "{{$product->meta_des ?? ''}}",
  "url" : "{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}",
  "offer" : {
    "@type" : "Special",
    "price" : "৳ {{$product->special_price}}
  }
}
</script>

@endsection


@section('content')


<style>
    .woocommerce-product-details__short-description ul li {
        list-style-type: circle;
    }

    .color {
        color: #fff;
    }

    div#description * {
        line-height: 150%;
        letter-spacing: .2px;
    }

    .product-details-tab {
        background: #f1f1f1;
        overflow: hidden;
        border-radius: 5px;
    }
    * {
        white-space: normal !important;
    }

    table tr td:first-child {
        padding-right: 15px;
    }
    
    ul.ProductHighlight {
        font-size: 18px;
    }
    
    #product_highlights ul {
        padding-left: 2rem;
        /*font-size: 16px;*/
    }
    #product_highlights li, p {
        list-style: disc;
        font-size: 16px !important;
        font-family: 'Roboto';
    }
    
    #product_highlights tbody, p{
        font-size: 16px;
    }
    #description p{
        font-size: 16px;
    }

    nav {
        text-align: center;
        font-size: 15px;
    }
    nav span a:first-child{
        width:30px;
    }
    nav span a:last-child{
        width:30px;
    }
    nav span svg{
        width:20px;
    }
    
    /*@media (max-width: 500px) {*/
    /*    table tr td {*/
    /*        font-size: 13px !importent;*/
    /*    }*/
    /*}*/
    
</style>



<main style="background-color:{{$backgrounds->pd_body_bg ?? ''}}" itemscope itemtype="https://schema.org/Product">
    <section class="pt-4 pb-5">
        <div class="container clearfix overflow-hidden">
            <!-- Breadcrumb -->
            <div class="p-4 pb-2 bg-white mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">HOME</a></li>
                        @if(!empty($cat_own))
                        <li class="breadcrumb-item"><a href="{{$cat_own->slug}}">{{$cat_own->name}}</a></li>
                        @endif

                        @if(!empty($cat_child))
                        <li class="breadcrumb-item"><a href="{{$cat_child->slug}}">{{$cat_child->name}}</a></li>
                        @endif
                        
                        @if(!empty($cat_child_1))
                        <li class="breadcrumb-item"><a href="{{$cat_child_1->slug}}">{{$cat_child_1->name}}</a></li>
                        @endif

                        @if(!empty($cat_child_2))
                        <li class="breadcrumb-item"><a href="{{$cat_child_2->slug}}">{{$cat_child_2->name}}</a></li>
                        @endif
                        
                        
                        <li class="breadcrumb-item"><a href="{{$product->slug ?? ''}}">{{$product->name ?? ''}}</a></li>
                    </ol>
                </nav>
            </div><!-- \Breadcrumb -->
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    @include('layouts.frontend.category_sidebar')
                </div>
                <!-- end of all categories col -->

                <div class="col-lg-9">
                    <div class="product-details" style="background-color:{{$backgrounds->pd_container_bg ?? ''}};color:{{$backgrounds->pd_text_color ?? ''}}">
                        <div class="row gx-0 gy-4">
                            <div class="col-md-5 mt-0 mt-md-4">
                                <div class="product-image">
                                    <div class="product-icons">
                                        <button class="button button-icon bg-light open-share-popup"><i class="text-dark fal fa-share"></i></button>
                                        
                                    </div>

                                    <a href="{{asset($product->image)}}" class="popup-image text-center w-100 bg-light">
                                        <img src="{{asset($product->product_image_medium ?? $product->image)}}" alt=" {{$product->name}}" class="feature-image elevatezoom" itemprop="Image">
                                    </a>

                                    <div class="product-thumb-slider product-thumb">
                                        <div class="swiper-wrapper">
                                            @foreach($productImages as $image)
                                            
                                            <div class="slider-item swiper-slide border" >
                                                
                                                <img src="{{asset($image->product_image_thumb ?? $image->product_image)}}" alt="{{$image->product_image_alt ?? $product->name}}" class="w-100 h-100" data-large-image="{{asset($image->product_image)}}" longdesc="{{$image->product_image_des}}">
                                            </div>
                                            
                                            @endforeach
                                        </div>
                                        <!--/.swiper-wrapper-->
                                        <i class="arrows prev fas fa-chevron-left product-thumb-slider-prev bg-danger text-light"></i>
                                        <i class="arrows next fas fa-chevron-right product-thumb-slider-next bg-danger text-light"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- end of product image col -->
                            @if(!empty(Auth::user()->id))
                            @php $admin_user = App\Models\User::where('id',Auth::user()->id)->first() @endphp
                            
                            @endif
                            
                            <div class="col-md-7">
                                <div class="p-4 p-md-0">
                                    <h1 class="product-heading mb-0" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="name"> {{$product->name}}
                                     @if(!empty($admin_user))
                                        @if($admin_user->role_id==0)
                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt"></i></span> </a>
                                        @endif
                                        @if($admin_user->role_id==1 && $admin_user->id==$product->user_id)
                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt"></i></span> </a>
                                        @endif
                                    @endif
                                    </h1>

                                    <div class="col-lg-3 mb-2">

                
                                    @foreach($ProductStockStatuses as $status)
                                        
                                        @if($status->stock_status == "in_stock")
                                        <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2" itemprop="availability">In Stock</p>
                                        @endif
                
                                        @if($status->stock_status == "out_of_stock")
                                        <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2" itemprop="availability">Out Of Stock</p>
                                        @endif
                
                                        @if($status->stock_status == "new_arrived")
                                        <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2" itemprop="availability">New Arrived</p>
                                        @endif
                
                                        @if($status->stock_status == "limited")
                                        <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2" itemprop="availability">Limited Stock</p>
                                        @endif
                
                                        @if($status->stock_status == "upcoming")
                                        <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2" itemprop="availability">Upcoming</p>
                                        @endif
                                    @endforeach

                                    </div>





                                    @if($product->call_for_price)
                                    <h2 style="color: #fff; background: #ab2e2e;padding: 5px; text-align: center;"> {{$product->call_for_price}}</h2> <br>
                                    @else

                                    <div class="row mt-4">
                                        <div class="col-12">

                                            @if($product->regular_price > 0)

                                            <p style="font-size: 18px"><span style="color: #fff;border: 1px solid;background: #885c1d;font-weight: 600;padding: 5px 20px;"> Regular Price: ৳ <span itemprop="highPrice">{{number_format($product->regular_price)}}</span></span><br>

                                            @endif
                                            
                                            @if($product->discount_price > 0)

                                            <p style="font-size: 18px"><span style="color: #fff;border: 1px solid;background: #ff3300;font-weight: 600;padding: 5px 20px;"> Discount Price: ৳ <span itemprop="highPrice">{{number_format($product->discount_price)}}</span></span><br>

                                            @endif                                            
                                            
                                            
                                            @if($product->offer_price && $product->special_price > 0)

                                            <p style="font-size: 18px; margin-top: 19px;"><span style="color: #fff; border: 1px solid; background: #b35900;font-weight: 600;padding: 5px 20px;" > Special Price: ৳ <span itemprop="lowPrice">{{number_format($product->special_price)}}</span></span><br>

                                            @endif

                                        </div>

                                    </div>
                                        
                                        
                                        @if($product->price_highlight == 'regular_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Regular Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->regular_price)}}</span></p>
                                        @endif
                                        
                                        @if($product->price_highlight == 'special_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Special Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->special_price)}}</span></p>
                                        @endif         
                                        
                                        @if($product->price_highlight == 'offer_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}"  itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px">Offer Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number"  itemprop="price">{{number_format($product->offer_price)}}</span></p>
                                        @endif    
                                        
                                        @if($product->price_highlight == 'discount_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Discount Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->discount_price)}}</span></p>
                                        @endif       

                                    @endif


                                    @if(count($ProductHighlights)>0 || $product->product_highlights)
                                    <div class="mt-4 all-text-white" style="font-size: 14px;">
                                        <h3 class="fz-small fw-bold mb-0" style="color: #fff; background: #086f7ee0; padding: 5px 10px;">Product Highlights</h3>
                                            @if(count($ProductHighlights)>0)
                                                <ul class="ProductHighlight mt-4">
                                                    @foreach($ProductHighlights as $ProductHighlight)
                                                    <li>{{$ProductHighlight->highlights}}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p class="product_highlights text-light">{!!$product->product_highlights !!}</p>
                                            @endif
                                    </div>
                                    
                                    @endif

                                    <?php
                                    $ProductEmis = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_month', 'desc')->get();
                                    ?>

                                    @if(count($ProductEmis) > 1)
                                    <div class="mt-4">
                                        <h4 class="fz-small fw-bold mb-4" style="color: #fff; background-color: var(--bs-success); padding: 5px 10px;">Monthly EMI</h4>
                                        <ul class="ml-25 fz-small">
                                            @foreach($ProductEmis as $ProductEmi)
                                            <li>{{$ProductEmi->emi_month}} Months EMI - ৳ {{$ProductEmi->emi_price}} Taka</li>
                                            @endforeach
                                            <li class="text-danger">Note: Only Available In Branches</li>
                                        </ul>
                                    </div>
                                    @endif
                                    @if(!empty($product->warranty))
                                    <div class="mt-4" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                        <h4 class="fz-small fw-bold mb-0" style="color: #fff; background: #326e9f; padding: 5px">Warranty </h4>
                                        <p class="text-light fz-small mt-3">{{$product->warranty ?? ''}}</p>
                                    </div>
                                    @endif
                                    
                                    
                                    @if($product->home_delivery==1)
                                    <div class="mt-4" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                        <h4 class="fz-small fw-bold mb-0" style="color: #fff; background: var(--bs-success); padding: 5px">Home Delivery : @if($product->home_delivery==1)Available @endif</h4>
                                    </div>
                                    @endif

                                    
                                    
                                    <div class="mt-4 all-text-white" style="font-size: 14px;">
                                        
                                            @if(count($ProductTerms)>0)
                                            <p class="fz-small fw-bold mb-0" style="color: #fff; background: #086f7ee0; padding: 5px 10px;"> Terms & Conditions</p>
                                                <ul class="ProductHighlight mt-4">
                                                    @foreach($ProductTerms as $ProductTerm)
                                                    <li>{{$ProductTerm->terms}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif  
                                    </div>                                    
                                    
                            
                                  
                                    
                                    <?php 
                                                    $ProductStockStatuse = App\Models\ProductStockStatus::where('product_id', $product->id)->where('stock_status','upcoming')->first();
                                                    
                                                ?>
                                    @if($product->call_for_price)
                                    
                                    
                                    <div class="mb-4">
                                         <!--<p class="fz-small fw-bold mb-0 mt-4" style="color: #fff; background: #7a1515; padding: 5px">Call For Price </p>-->
                                        <span class="text-light" style="font-size:18px"><?php if(!empty($siteSetting->phone)){echo $siteSetting->phone;}?></span>
                                    </div>

                                    @elseif($ProductStockStatuse)
                                             
                                        
                                        @else
                                        <div class="my-25 d-flex flex-wrap">
                                            <form action="{{route('add-to-cart')}}" method="POST" class="mx-2 d-flex my-2">
                                                @csrf
                                                <input type="number" class="" min="1" value="1" name="qty">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" data-id="{{$product->id}}" class="button button-type-2 btn btn-danger rounded-0">Add To Cart</button>
                                            </form>
                                            <form action="{{route('cart-page')}}" method="POST" style="margin-right: 5px;" class="d-flex my-2">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" class="button button-type-2 btn btn-danger rounded-0" data-id="{{$product->id}}">Buy Now</button>
                                            </form>
    
                                            <form action="{{route('add-to-wishlist')}}" method="POST" class="d-flex my-2">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" class="button button-type-2 btn btn-danger rounded-0" data-id="{{$product->id}}">Wish List</button>
                                            </form>
                                        </div>                                        
         
                                    @endif


                                    <div class="mt-4">
                                        <p class="fz-small fw-bold mb-0" style="color: #fff; background: #37bcede0; padding: 5px 10px;">Inquiry : {{$siteSetting->email}}</p>

                                    </div>

                                    <h5 class="mb-0 fz-small mt-3" style="color: {{$backgrounds->pd_text_color ?? ''}}">CATEGORIES:
                                        <a href="{{route('/', [$product->category->slug ?? ''])}}" class="text-light text-decoration-none fz-small text-uppercase">{{$product->category->name ?? ''}}
                                        </a>

                                        <a href="{{route('/', [$product->subcategory->slug ?? ''])}}" class="text-light text-decoration-none fz-small text-uppercase">
                                            @if($product->subcategory)
                                            -> {{$product->subcategory->name ?? ''}}
                                            @endif
                                        </a>

                                        <a href="{{route('/', [$product->prosubcategory->slug ?? ''])}}" class="text-light text-decoration-none  fz-small text-uppercase">
                                            @if($product->prosubcategory)
                                            -> {{$product->prosubcategory->name ?? ''}}
                                            @endif
                                        </a>

                                        <a href="{{route('/', [$product->proprocategory->slug ?? ''])}}" class="text-light text-decoration-none  fz-small text-uppercase">
                                            @if($product->proprocategory)
                                            -> {{$product->proprocategory->name ?? ''}}
                                            @endif
                                        </a>
                                    </h5>

                                    <h6 class="fz-extra-small text-light mt-4 mb-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="Brand">BRANDS:

                                        @foreach($ProductBrands as $ProductBrand)
                                        <a href="{{route('/', [$ProductBrand->brand->slug ?? ''])}}" class="text-light text-decoration-none fz-small text-uppercase">{{$ProductBrand->brand->name ?? ''}}
                                            @if(count($ProductBrands)>1)
                                            ,
                                            @endif
                                        </a>
                                        @endforeach

                                    </h6>

                                    <p class="mb-0 fz-small d-inline" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                    <div class="d-flex" style="flex-wrap: wrap;">
                                        <span class="mb-0 fz-small d-inline">SHARE: &nbsp;&nbsp;</span>
                                        
                                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbinarylogic.com.bd&width=60&layout=button&action=like&size=small&share=false&height=65&appId" style="width: 60px; height: 20px; border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                        
                                        <!-- Facebook -->
                                        <div class="fb-share-button " data-href="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" data-layout="button_count">
                                        </div>
                                        <!-- Linked IN -->
                                        <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                                            lang: en_US
                                        </script>
                                        <script type="IN/Share" data-url="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}"></script>

                                        <a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" style="margin-right: 7px;"></a>
                                        
                                       
                                        
                                        <!--<a class="twitter-share-button"-->
                                        <!--  href="https://twitter.com/intent/tweet?text={{$product->name ?? ''}}&url={{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}"-->
                                        <!--  data-size="large" style="padding: 1px 7px;height: 20px;background: #3c7186;color: white;font-weight: 900;text-decoration: none;font-size: 12px; margin-right: 7px;}">-->
                                        <!--Tweet</a>                                      -->
                                        
                                        <div class="desktop_version d-none d-md-block">
                                            
                                            <!--<a href="https://web.whatsapp.com/send?text={{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" data-action="share/whatsapp/share" style="padding: 1px 7px;height: 20px;background: #23612e;color: white;font-weight: 900;text-decoration: none;font-size: 12px; margin-right: 7px;">Whatsapp</a> -->
                                           
                                        </div>
                                         
                                        <div class="mobile_version d-inline-block d-md-none">
                                            <!--<button onclick="window.open('whatsapp://send?text={{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}')" style="border: 0;padding: 1px 8px;height: 26px;background: #23612e;color: white;font-weight: 900;text-decoration: none;font-size: 12px; margin-right: 7px;">WhatsApp </button>  -->
                                        </div>

                                    </div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="product-details-tab mt-5">
                                <ul class="nav border" id="product-details-tab" role="tablist">


                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="product_highlights-tab" data-bs-toggle="tab" data-bs-target="#product_highlights" type="button" role="tab" aria-controls="product_highlights" aria-selected="true">Highlights</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                    </li>



                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Specification</button>
                                    </li>



                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="more-products-tab" data-bs-toggle="tab" data-bs-target="#more-products" type="button" role="tab" aria-controls="more-products" aria-selected="false">More Products</button>
                                    </li>



                                </ul>
                                <div class="tab-content pt-4 border border-top-0 p-4" id="product-details-tabContent" style="background-color: #F1F1F1;">

                                    <div class="tab-pane fade show active" id="product_highlights" role="tabpanel" aria-labelledby="product_highlights-tab">
                                        <!--<h4 class="text-secondary mb-3 text-light">Product Highlights</h4>-->
                                        @if(count($ProductHighlights)>0)
                                            <ul class="ProductHighlight mt-4">
                                                @foreach($ProductHighlights as $ProductHighlight)
                                                <li class="fz-small" style="line-height: 200%;">{{$ProductHighlight->highlights}}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <p style="color: #ffffff;">{!!$product->product_highlights ?? ''!!}</p>
                                        @endif
                                    </div>

                                    <div class="tab-pane fade show" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="" itemprop="description">
                                            <!--<h4 class="text-secondary mb-3 text-light">Description</h4>-->
                                            {!!$product->description ?? ''!!}
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="specification-table">
                                            <!--<h4 class="mb-3 text-light">Specification</h4>-->
                                             {!!$product->specification ?? ''!!} 
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="more-products" role="tabpanel" aria-labelledby="more-products-tab">
                                        <div class="">
                                            <div class="row g-4">


                                                @foreach($relatedProducts as $product)
                                                <?php 
                                                    $ProductEmi = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_price', 'desc')->first(); 
                                                    $ProductStockStatuses = App\Models\ProductStockStatus::where('product_id', $product->id)->get();
                                                    
                                                ?>
                                                <div class="col-12 col-md-4">
                                                    <div class="card card-type-2">
                                                        @if($product->discount >= 1)
                                                        <div class="card__discount">
                                                            <p class="mb-0">-{{$product->discount}}%</p>
                                                        </div>
                                                        @endif
                                                        <div class="card__image" style="max-height: 20rem">
                                                            <a href="{{route('/', [$product->slug])}}">
                                                                <img src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->image_alt ?? $product->name}}" longdesc="{{$product->image_des}}" class="card__image" style="max-height: 21rem">
                                                                <div class="card__icons--top">
                                            <div class="d-flex">
                                                <form action="{{route('add-to-cart')}}" method="post" class="me-2">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit" class="button button-icon"><i class="fal fa-cart-plus"></i></button>
                                                </form>
                                                <form action="{{route('add-to-wishlist')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                                    <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                                    <button type="submit" class="button button-icon"><i class="fal fa-heart"></i></button>
                                                </form>
                                            </div>

                                                @foreach($ProductStockStatuses as $status)
                                                    
                                                    @if($status->stock_status == "in_stock")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "out_of_stock")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">Out Of Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "new_arrived")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">New Arrived</p>
                                                    @endif
        
                                                    @if($status->stock_status == "limited")
                                                    <p class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">Limited Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "upcoming")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">Upcoming</p>
                                                    @endif
                                                @endforeach

                                        </div>
                                                            </a>
                                                        </div>
                                                        <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem">
                                                            <div>
                                                                <h5 class="card__heading"><a href="{{route('/', [$product->slug])}}" class="text-dark" style="text-decoration: none">{{$product->name }}</a></h5>
                                                                <h6>{{$product->subtitle ?? '' }}</h6>
                                                            </div>

                                                            <div>
                                                                @if($product->call_for_price)
                                                                <div class="align-items-center my-3 text-center">
                                                                    <strong class="fz-large d-inline-block text-danger"> {{$product->call_for_price}}</strong>
                                                                </div>
                                                                @else
                                                                <div class="text-center align-items-center my-3">
                                                                    @if($product->regular_price != '')
                                                                    <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</strong>
                                                                    @endif
                                                                    <strong class="fz-normal d-inline-block text-success">Special Price: ৳ {{number_format($product->special_price)}}</strong>
                                                                </div>
                                                                @endif

                                                                <!-- @if(isset($ProductEmi->emi_price))
                                                                <div class="text-center align-items-center my-3 position-relative monthly-emi">
                                                                    <div class="monthly-emi-hover">
                                                                        <?php
                                                                        $ProductEmis = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_month', 'desc')->get();
                                                                        ?>
                                                                        @foreach($ProductEmis as $ProductEmi)
                                                                        <p class="mb-0 fz-extra-small text-light">{{$ProductEmi->emi_month}} Months EMI - {{$ProductEmi->emi_price}} Taka</p>
                                                                        @endforeach
                                                                        <p class="mb-0 fz-extra-small text-success">Note: Only Available In Branches</p>
                                                                    </div>
                                                                    <strong class="fz-small d-inline-block text-dark">Monthly EMI ৳ {{$ProductEmi->emi_price ?? ''}}</strong>
                                                                </div>
                                                                @endif -->
                                                            </div>

                                                            <div class="card__icons align-items-center">
                                                                <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$product->id}}">
                                                                    <i class="fal fa-eye me-3"></i> View
                                                                </button>
                                                                @if(!$product->call_for_price)
                                                                <a href="{{route('/', [$product->slug])}}" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end fo container -->
    </section>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view"></div>
</div>





@endsection