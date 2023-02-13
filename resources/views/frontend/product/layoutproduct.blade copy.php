@extends('layouts.frontend.app')

@section('head')

<title>{{$product->meta_title ?? $product->name}}</title>

<meta name="title" content="{{$product->meta_title ?? $product->name}}">
<meta name="description" content="{{$product->meta_des ?? $product->name}}">
<meta property="keywords" content="{{$product->meta_keywords ?? $product->name}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}" />
<meta property="type" content="{{$product->name ?? ''}} :Product" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />

<meta property="og:site_name" content="Binarylogic - Make Your Own PC">
<meta property="og:title" content="{{$product->name ?? ''}}">
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
<meta property="og:image:alt" content="{{$product->image_alt}}" />
<meta property="ia:markup_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">
<meta property="ia:rules_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">


<meta name=twitter:card content=summary_large_image />
<meta name=twitter:site content="@Binarylogic" />
<meta name=twitter:creator content="@Binarylogic" />
<meta name=twitter:url content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />
<meta name=twitter:title content="{{$product->meta_title ?? $product->name}}" />
<meta name=twitter:description content="{{$product->meta_des ?? $product->name}}" />

@if(!empty($product->product_image_large))
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}">

@else
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}">

@endif
@php
$string = strip_tags($product->description);
$string = str_replace('&nbsp;', ' ', $string);
$string = str_replace('&amp;', ' ', $string);
$string = str_replace('&reg;', ' ', $string);
$string = preg_replace('/[^A-Za-z0-9\-.]/', ' ', $string); // Removes special chars.
$string = trim($string); 
//dd($product);
//dd($ProductBrands);

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


@endphp
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "{{$product->name}}",
  "image" : [
    "{{ 'https://binarylogic.com.bd/'.$product->image }}",
    "{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? $product->image}}",
    "{{ 'https://binarylogic.com.bd/'.$product->product_image_medium ?? $product->image}}",
    "{{ 'https://binarylogic.com.bd/'.$product->product_image_small ?? $product->image}}",
    "{{ 'https://binarylogic.com.bd/'.$product->product_image_thumb ?? $product->image}}"
    ],
  "description" : "{{ $product->meta_des ?? $product->name }}",
  "sku": "{{$product->sku ?? $product->id}}",
  "url" : "{{ 'https://binarylogic.com.bd/'.$product->slug ?? 'https://binarylogic.com.bd/'}}",
  "brand": {
     "@type": "Brand",
     "name": "{{$ProductBrands[0]->brand->name ?? 'Binary Logic'}}"
    },
  "offer" : {
    "@type" : "Offer",
    "url" : "{{ 'https://binarylogic.com.bd/'.$product->slug ?? 'https://binarylogic.com.bd/'}}",
    "priceCurrency": "BDT",
    "price" : {{$offer_price}},
    "priceValidUntil" : "{{date('Y-m-d', strtotime('+2 months'))}}",
    "itemCondition": "https://schema.org/NewCondition,
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
       "name": "Binary Logic"
    }
  }
}
</script>

<style>
.woocommerce-product-details__short-description ul li{list-style-type:circle}.color{color:#fff}
/*div#description *{line-height:150%;letter-spacing:.2px}*/
.product-details-tab{background:#f1f1f1;overflow:hidden;border-radius:5px}*{white-space:normal!important}
table tr td:first-child{padding-right:15px}ul.ProductHighlight{font-size:18px}
#product_highlights ul{padding-left:2rem}#product_highlights li,p{list-style:disc;font-size:16px!important;font-family:Roboto}#product_highlights tbody,p{font-size:16px}#description p{font-size:16px}nav{text-align:center;font-size:15px}nav span a:first-child{width:30px}nav span a:last-child{width:30px}nav span svg{width:20px}
.product-thumb-slider .slider-item {
    width: 97px;
    display: inline-block;
    margin-left: 1rem;
    margin-top: 1rem;
    cursor: pointer;
}
.des table{width:100%;border-top:1px solid #ddd;border-left:1px solid #ddd}
.des table td{border-bottom:1px solid #ddd;border-right:1px solid #ddd}
</style>
@endsection



@section('content')
<main style="background-color:{{$backgrounds->pd_body_bg ?? ''}}" itemscope itemtype="https://schema.org/Product">
    <section class="pt-4 pb-5">
        <div class="container clearfix overflow-hidden">
            <!-- Breadcrumb -->
            <div class="p-4 pb-2 bg-white mb-4 rounded">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">HOME</a></li>
                        @if(!empty($product->category))
                        <li class="breadcrumb-item"><a href="{{$product->category->slug}}">{{$product->category->name}}</a></li>
                        @endif

                        @if(!empty($product->subcategory))
                        <li class="breadcrumb-item"><a href="{{$product->subcategory->slug}}">{{$product->subcategory->name}}</a></li>
                        @endif
                        
                        @if(!empty($product->prosubcategory))
                        <li class="breadcrumb-item"><a href="{{$product->prosubcategory->slug}}">{{$product->prosubcategory->name}}</a></li>
                        @endif

                        @if(!empty($product->proprocategory))
                        <li class="breadcrumb-item"><a href="{{$product->proprocategory->slug}}">{{$product->proprocategory->name}}</a></li>
                        @endif
                        
                        <li class="breadcrumb-item"><a href="{{$product->slug ?? ''}}">{{$product->name ?? ''}}</a></li>
                    </ol>
                </nav>
            </div><!-- \Breadcrumb -->
            <div class="row">
                

                <div class="col">
                    <div class="product-details" style="background-color:{{$backgrounds->pd_container_bg ?? ''}};color:{{$backgrounds->pd_text_color ?? ''}}">
                        <div class="row gx-0 gy-4">
                            <div class="col-md-5 mt-0 mt-md-4">
                                <div class="product-image">
                                    <a id="elevator-area" href="{{asset($product->image)}}" class="popup-image text-center w-100 bg-light">
                                        <img src="{{asset($product->product_image_medium ?? $product->image)}}" alt=" {{$product->name}}" class="feature-image elevatezoom" itemprop="Image">
                                    </a>

                                    <div class="product-thumb-slider product-thumb">
                                        <div class="swiper-wrapper">
                                            @foreach($productImages as $image)
                                            <div class="slider-item swiper-slide border">
                                                <img src="{{asset($image->product_image_thumb ?? $image->product_image)}}" alt="{{$image->product_image_alt ?? $product->name}}" class="w-100 h-100" data-large-image="{{asset($image->product_image)}}" longdesc="{{$image->product_image_des}}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of product image col -->
                            @if(!empty(Auth::user()->id))
                            @php $admin_user = App\Models\User::where('id',Auth::user()->id)->first() @endphp
                            
                            @endif
                            
                            <div class="col-md-7">
                                <div class="p-4 p-md-0">
                                    <h1 class="product-heading mb-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="name"> {{$product->name}}</h1>
                                     @if(!empty($admin_user))
                                        @if($admin_user->role_id==0)
                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt text-danger">Edit</i></span> </a>
                                        @endif
                                        @if($admin_user->role_id==1 && $admin_user->id==$product->user_id)
                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt text-danger">Edit</i></span> </a>
                                        @endif
                                    @endif
                                    
                                    @if(!empty($product->subtitle))
                                    <h5 class="mb-4"><small style="color:#fff !important">{{$product->subtitle}}</small></h5>
                                    @endif
                                    <div class="col-lg-3 mb-4">

                                    @if($product->stock_status == "in_stock")
                                    <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</span>
                                    @endif

                                    @if($product->stock_status == "out_of_stock")
                                    <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">Out Of Stock</span>
                                    @endif

                                    @if($product->stock_status == "limited")
                                    <span class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">Limited Stock</span>
                                    @endif

                                    @if($product->stock_status == "upcoming")
                                    <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">Upcoming</span>
                                    @endif


                                    </div>





                                    @if($product->call_for_price)
                                    <h2 style="color: #fff; background: #ab2e2e;padding: 5px; text-align: center;"> {{$product->call_for_price}}</h2> <br>
                                    @else

                                    @if(!empty($product->regular_price) || !empty($product->discount_price) || !empty($product->offer_price) || !empty($product->special_price))
                                        <div class="row mt-4">
                                            <div class="col-12">

                                                @if($product->regular_price > 0)

                                                <p style="font-size: 18px"><span style="color: #fff;border: 1px solid;background: #885c1d;font-weight: 600;padding: 5px 20px;"> Regular Price: ৳ <span itemprop="highPrice">{{number_format($product->regular_price)}}</span></span><br>

                                                @endif
                                                
                                                @if($product->discount_price > 0)

                                                <p style="font-size: 18px"><span style="color: #fff;border: 1px solid;background: #ff3300;font-weight: 600;padding: 5px 20px;"> Discount Price: ৳ <span itemprop="highPrice">{{number_format($product->discount_price)}}</span></span><br>

                                                @endif                                            
                                                
                                            
                                            @if($product->offer_price && $product->special_price > 0)

                                            <p style="font-size: 18px; margin-top: 19px;"><span style="color: #fff; border: 1px solid; background: #b35900;font-weight: 600;padding: 5px 20px;" > Special Cash Price: ৳ <span itemprop="lowPrice">{{number_format($product->special_price)}}</span></span><br>

                                            @endif

                                        </div>

                                    </div>
                                        
                                        
                                        @if($product->price_highlight == 'regular_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Regular Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->regular_price)}}</span></p>
                                        @endif
                                        
                                        @if($product->price_highlight == 'special_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Special Cash Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->special_price)}}</span></p>
                                        @endif         
                                        
                                        @if($product->price_highlight == 'offer_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}"  itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px">Offer Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number"  itemprop="price">{{number_format($product->offer_price)}}</span></p>
                                        @endif    
                                        
                                        @if($product->price_highlight == 'discount_price')
                                            <p class="product-price mb-3 pt-5 pt-md-4" style="color: {{$backgrounds->pd_text_color ?? ''}}" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span style="font-size: 23px" >Discount Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price">{{number_format($product->discount_price)}}</span></p>
                                        @endif       

                                    @endif
                                    @endif

                                    @if(count($ProductHighlights)>0 || $product->product_highlights)
                                    <div class="mt-4 all-text-white" style="font-size: 14px;">
                                        <h3 class="fz-small fw-bold mb-0 pb-2 mr-2 mb-2" style="border-bottom:1px solid #086f7ee0"><span  style="color: #fff; background: #086f7ee0; padding: 5px 10px;">Product Highlights</span></h3>
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

                                    <!-- MONTHLY EMI CALCULATION -->
                                    @if(!empty($product->regular_price) && $product->regular_price >= 5000)
                                        <div class="mt-4">
                                            <h4 class="fz-small fw-bold mb-0 pb-2 mr-2 mb-2" style="border-bottom:1px solid var(--bs-success)"><span style="color: #fff; background: var(--bs-success); padding: 5px 10px">Monthly EMI</span> </h4>
                                            <ul class="ml-25 fz-small">
                                                @for ($i = 3; $i < 13; $i += 3)
                                                    <li>{{$i}} Months EMI - ৳ {{ round(($product->regular_price)/$i) }} Taka</li>
                                                @endfor
                                                <li class="text-danger">Note: Only Available In Branches</li>
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    
                                    @if(!empty($product->warranty))
                                    <div class="mt-4" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                        <h4 class="fz-small fw-bold mb-0 pb-2 mr-2" style="border-bottom:1px solid #326e9f"><span style="color: #fff; background: #326e9f; padding: 5px 10px">Warranty</span> </h4>
                                        <p class="text-light fz-small mt-3">{{$product->warranty ?? ''}}</p>
                                    </div>
                                    @endif
                                    
                                    
                                    @if($product->home_delivery==1)
                                    <div class="my-4 p-y-4" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                        <h4 class="text-white"><span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">Home Delivery Available</span></h4>
                                    </div>
                                    <br>
                                    @endif

                                    
                                    
                                    
                                
                                    @if(count($ProductTerms)>0)
                                    <div class="my-4 all-text-white" style="font-size: 14px;">
                                    <h5 class="fz-small fw-bold mb-0 pb-2 mr-2" style="border-bottom:1px solid #326e9f"><span style="color: #fff; background: #326e9f; padding: 5px 10px;">Terms & Conditions</span></h5>
                                        <ul class="ProductHighlight mt-4">
                                            @foreach($ProductTerms as $ProductTerm)
                                            <li>{{$ProductTerm->terms}}</li>
                                            @endforeach
                                        </ul>
                                        </div>
                                    @endif  
                                                                        
                                    
                            
                                  
                                    
                                   
                                    <div class="my-25 d-flex flex-wrap">
                                    @if($product->call_for_price)
                                        <div class="mb-4">
                                            <span class="text-light" style="font-size:18px"><?php if(!empty($siteSetting->phone)){echo $siteSetting->phone;}?></span>
                                        </div>
                                    @elseif($product->stock_status != 'out_of_stock')
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
                                    @else
                                        
                                    @endif
                                        <form action="{{route('add-to-wishlist')}}" method="POST" class="d-flex my-2">
                                            @csrf
                                            <input type="hidden" value="1" name="qty">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button type="submit" class="button button-type-2 btn btn-danger rounded-0" data-id="{{$product->id}}">Wish List</button>
                                        </form>

                                        @php
                                        if(!empty($product->note)){
                                            $note = explode('----',$product->note);
                                            if(!empty($note[1])){
                                                @endphp
                                                <form action="{{$note[1]}}" method="get" target="_blank" class="d-flex my-2 mx-2">
                                                    @csrf
                                                    <button type="submit" class="button button-type-2 btn btn-danger rounded-0">Driver Link</button>
                                                </form>
                                                @php
                                            }
                                        }
                                        @endphp
                                    </div> 

                                    <div class="mt-4">
                                        <p class="fz-small fw-bold mb-0" style="border-left:2px solid #0089bb"><span style="color: #fff; background: #37bcede0; padding: 5px 10px;">Inquiry : {{$siteSetting->email}}</span></p>

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

                                    <h6 class="fz-extra-small text-light mt-4 mb-4" style="color: {{$backgrounds->pd_text_color ?? ''}}">BRANDS:

                                        @foreach($ProductBrands as $ProductBrand)
                                        <a href="{{route('/', [$ProductBrand->brand->slug ?? ''])}}" class="text-light text-decoration-none fz-small text-uppercase"><span itemprop="Brand">{{$ProductBrand->brand->name ?? ''}}
                                            @if(count($ProductBrands)>1)
                                            ,
                                            @endif
                                        </a>
                                        @endforeach

                                    </h6>

                                    <p class="mb-0 fz-small d-inline" style="color: {{$backgrounds->pd_text_color ?? ''}}">
                                    <div class="d-flex" style="flex-wrap: wrap;">
                                        <span class="mb-0 fz-small d-inline">SHARE: &nbsp;&nbsp;</span>
                                        <a style="border: 1px solid #ddd;margin-right: 10px;padding: 0 5px;" href="https://www.facebook.com/sharer.php?u={{'https://binarylogic.com.bd/'.$product->slug}}" target="_blank" name="facebook"><img width="20" src="https://img.icons8.com/color/48/000000/facebook-circled--v5.png"></span> <span class="text-white">Share</span></a>
                                        
                                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbinarylogic.com.bd&width=60&layout=button&action=like&size=small&share=false&height=65&appId" style="width: 60px; height: 20px; border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                        
                                        <!-- Facebook -->
                                        <div class="fb-share-button " data-href="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" data-layout="button_count">
                                        </div>
                                        <!-- Linked IN -->
                                        <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                                            lang: en_US
                                        </script>
                                        &nbsp;&nbsp;
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
                                    @php
                                    if(!empty($product->note)){
                                        $note = explode('----',$product->note);
                                        if(!empty($note[0])){
                                            echo '<div class="mt-4 h4"><b>Note: </b>'.$note[0].'</div>';
                                        }
                                    }
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="product-details-tab mt-5">
                                <div class="h2 border-bottom p-4">Highlights</div>
                                <div class="p-4">
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
                                <div class="h2 border-bottom p-4 mt-4">Description</div>
                                <div class="p-4" itemprop="description">
                                    {!!$product->description ?? ''!!}
                                </div>

                                <div class="h2 border-bottom p-4 mt-4">Specification</div>
                                <div class="p-4" itemprop="description">
                                    {!!$product->description ?? ''!!}
                                </div>

                                <ul class="nav border " id="product-details-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="product_highlights-tab" data-bs-toggle="tab" data-bs-target="#product_highlights" type="button" role="tab" aria-controls="product_highlights" aria-selected="true">Highlights</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Specification</button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="bg-white p-4 mb-4 ">
                    More Products
                    </h5>

                    <div class="row g-4">
                        @foreach($relatedProducts as $product)
                            @include('frontend/elementproductbox',$product)
                        @endforeach
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