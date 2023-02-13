@extends('layouts.frontend.app')



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

}elseif($product->stock_status == "upcoming"){

    $stock_display = "Upcoming";

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

<meta name="image" property="og:image" content="{{ 'http://www.beboybd.com/'.$product->image ?? ''}}">

<meta property="type" content="{{$product->name ?? ''}} :Product" />

<meta property="site_name" content="Binarylogic" />

<meta property="slug" content="{{ 'http://www.beboybd.com/'.$product->slug ?? ''}}" />

<meta property="product:brand" content="{{$ProductBrands[0]->brand->name ?? 'Binary Logic'}}" />

<meta property="product:availability" content="{{$stock_display}}" />

<meta property="product:condition" content="new" />

<meta property="product:price:amount" content="{{$offer_price}}" />

<meta property="product:price:currency" content="BDT" />

<meta property="product:retailer_item_id" content="{{$product->id}}" />



<meta property="og:site_name" content="Binarylogic - Make Your Own PC">

<meta property="og:title" content="{{$product->name ?? ''}}">

<meta property="og:description" content="{{$product->meta_des ?? $product->name}}">

<meta property="og:type" content="product">



@if(!empty($product->product_image_large))

<meta property="og:image" content="{{ 'http://www.beboybd.com/'.$product->product_image_large ?? ''}}">

@else

<meta property="og:image" content="{{ 'http://www.beboybd.com/'.$product->image ?? ''}}">

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

<meta name=twitter:title content="{{$product->meta_title ?? $product->name}}" />

<meta name=twitter:description content="{{$product->meta_des ?? $product->name}}" />



@if(!empty($product->product_image_large))

<meta property="twitter:image" content="{{ 'http://www.beboybd.com/'.$product->product_image_large ?? ''}}">



@else

<meta property="twitter:image" content="{{ 'http://www.beboybd.com/'.$product->image ?? ''}}">



@endif



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



<style>

    .product-details-tab ul{margin-left:20px}

    .product-details-tab ul li{list-style-type: disc;}

    .font-weight-nornal{font-weight:normal}

    .secondary .fz-extra-small {font-size: 18px!important;}

</style>



<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61c2cddae06298001a1f7364&product=inline-share-buttons" async="async"></script>



@endsection



@section('content')

<main style="background-color:{{$backgrounds->pd_body_bg ?? ''}}">  <section class="pt-4 pb-5">

        <div class="container clearfix overflow-hidden">

            <!-- Breadcrumb -->

            <div class="p-4 pb-2 bg-white mb-4 rounded pr-hide">

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a title="Go to Home" href="{{URL::to('/')}}">HOME</a></li>

                        @if(!empty($product->category))

                        <li class="breadcrumb-item"><a title="{{$product->category->name}}" href="{{$product->category->slug}}">{{$product->category->name}}</a></li>

                        @endif



                        @if(!empty($product->subcategory))

                        <li class="breadcrumb-item"><a title="{{$product->subcategory->name}}" href="{{$product->subcategory->slug}}">{{$product->subcategory->name}}</a></li>

                        @endif

                        

                        @if(!empty($product->prosubcategory))

                        <li class="breadcrumb-item"><a title="{{$product->prosubcategory->name}}" href="{{$product->prosubcategory->slug}}">{{$product->prosubcategory->name}}</a></li>

                        @endif



                        @if(!empty($product->proprocategory))

                        <li class="breadcrumb-item"><a title="{{$product->proprocategory->name}}" href="{{$product->proprocategory->slug}}">{{$product->proprocategory->name}}</a></li>

                        @endif

                        

                        <li class="breadcrumb-item"><a title="{{$product->name ?? ''}}" href="{{$product->slug ?? ''}}">{{$product->name ?? ''}}</a></li>

                    </ol>

                </nav>

            </div>

            <div class="row">

                <div class="col">

                    <div class="product-details" style="background-color:{{$backgrounds->pd_container_bg ?? ''}};color:{{$backgrounds->pd_text_color ?? ''}}">

                        <div class="row gx-0 gy-4 print-half">

                            <div class="col-md-5 mt-0 mt-md-4">

                                <div class="product-image">

                                    <a title="{{$image->product_image_alt ?? $product->name}}" id="elevator-area" href="{{asset($product->image)}}" class="popup-image text-center w-100 bg-light">

                                        <img src="{{asset($product->product_image_medium ?? $product->image)}}" alt="{{$image->product_image_alt ?? $product->name}}" title="{{$image->product_image_des ?? $product->name}}" class="feature-image elevatezoom" itemprop="Image">

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

                                    <h1 class="product-heading mb-4" itemprop="name"> {{$product->name}}</h1>

                                     @if(!empty($admin_user))

                                        @if($admin_user->role_id==0)

                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt text-danger">Edit</i></span> </a>

                                        @endif

                                        @if($admin_user->role_id==1 && $admin_user->id==$product->user_id)

                                        <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" target="_blank"><span style="color: white;font-size: 20px;"><i class="fas fa-pencil-alt text-danger">Edit</i></span> </a>

                                        @endif

                                        @php

                                        if($product->status == 1){

                                        echo  "Active";

                                        }else{

                                            echo  "Inactive";

                                        }

                                        @endphp

                                    @endif

                                    

                                    @if(!empty($product->subtitle))

                                        <h2 class="mb-4">{{$product->subtitle}}</h2>

                                    @endif

                                    <div class="py-2 mb-4 secondary">

                                        @foreach($ProductBrands as $ProductBrand)

                                            <a title="{{$ProductBrand->brand->name ?? ''}}" href="{{route('/', [$ProductBrand->brand->slug ?? ''])}}" class="theme-color text-decoration-none fz-small text-uppercase  border rounded py-1 px-2"><span itemprop="Brand">{{$ProductBrand->brand->name ?? ''}}</a>

                                            @if(count($ProductBrands)>1)

                                            ,

                                            @endif

                                        @endforeach



                                        <a title="SKU: {{$product->sku ?? $product->id}}" href="javascript:void();" class="text-decoration-none fz-small text-uppercase  border rounded py-1 px-2 text-black">SKU: {{$product->sku ?? $product->id}}</a>

                                        @include('frontend.elementstockstatus')



                                    </div>

                                    <h5 class="mb-0 fz-small mt-3 font-weight-nornal">Categories:

                                        <a title="{{$product->category->name ?? ''}}" href="{{route('/', [$product->category->slug ?? ''])}}" class="theme-color fz-extra-small border rounded pt-2 pb-2 px-2 mb-3">{{$product->category->name ?? ''}}</a>

                                        </a>

                                        @if($product->subcategory)

                                        <a title="{{$product->subcategory->name ?? ''}}" href="{{route('/', [$product->subcategory->slug ?? ''])}}" class="theme-color fz-extra-small border rounded pt-2 pb-2 px-2 mb-3">{{$product->subcategory->name ?? ''}}</a>

                                        @endif

                                        @if($product->prosubcategory)

                                        <a title="{{$product->prosubcategory->name ?? ''}}" href="{{route('/', [$product->prosubcategory->slug ?? ''])}}" class="theme-color fz-extra-small border rounded pt-2 pb-2 px-2 mb-3">{{$product->prosubcategory->name ?? ''}}</a>

                                        @endif

                                        @if($product->proprocategory)

                                        <a title="{{$product->proprocategory->name ?? ''}}" href="{{route('/', [$product->proprocategory->slug ?? ''])}}" class="theme-color fz-extra-small border rounded pt-2 pb-2 px-2 mb-3">{{$product->proprocategory->name ?? ''}}</a>

                                        @endif

                                    </h5>



                                    

                                    @if($product->call_for_price)

                                    <div class="my-4 pb-4">

                                        <span class="fz-small">

                                            <span class="h2 d-block d-sm-inline mb-4 mb-sm-0 theme-bg text-white p-2 fz-small fw-bold">{{$product->call_for_price}}</span>

                                            @php

                                            $phone = $siteSetting->phone;

                                            $phone = explode(' ',$siteSetting->phone);

                                            foreach($phone as $key => $value){

                                                echo '<a title="Call now" class="d-inline-block mx-2" href="tel:'.$value.'">'.$value.'</a>';

                                            }

                                            @endphp

                                        </span>

                                    </div>

                                    @else

                                        @if($product->price_highlight != 'regular_price' && !empty($product->regular_price))

                                            <div class="fz-small py-1 m-0"><span>Regular Price:</span> <span>৳</span> <span>{{number_format($product->regular_price)}}</span></div>

                                        @endif

                                        @if(!empty($product->regular_price) || !empty($product->discount_price) || !empty($product->offer_price) || !empty($product->special_price)  || !empty($product->special_price))

                                            

                                            @if($product->price_highlight == 'special_price' && !empty($product->special_price))

                                                <div class="theme-color fz-small product-price my-8 py-4 pt-0" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span>Special Cash Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price" conotent="{{number_format($product->special_price)}}">{{number_format($product->special_price)}}</span></div>

                                            @endif         

                                            

                                            

                                            @if($product->price_highlight == 'discount_price' && !empty($product->discount_price))

                                                <div class="theme-color fz-small product-price my-8 py-4 pt-0" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span>Discount Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price" conotent="{{number_format($product->discount_price)}}">{{number_format($product->discount_price)}}</span></div>

                                            @endif  



                                            @if($product->price_highlight == 'offer_price' && !empty($product->offer_price))

                                                <div class="theme-color fz-small product-price my-8 py-4 pt-0" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><span>Offer Price:</span> <span itemprop="priceCurrency" content="BDT">৳</span> <span class="number" itemprop="price" conotent="{{number_format($product->offer_price)}}">{{number_format($product->offer_price)}}</span></div>

                                            @endif      



                                        @endif

                                    @endif



                                    @foreach($ProductBrands as $ProductBrand)

                                        @if($ProductBrand->brand->slug == 'sunmi-brand')

                                            <div class="sunmi fz-small">Sunmi Product Inquary: <a class="fw-bold theme-color" href="tel:01727061085">01727061085</a></div>

                                        @endif

                                    @endforeach



                                    @if(count($ProductHighlights)>0 || $product->product_highlights)

                                    <div class="short-highlights" itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                        <link itemprop="availability" href="http://schema.org/InStock"/>

                                        <link itemprop="itemCondition" href="http://schema.org/NewCondition">

                                        <meta itemprop="priceCurrency" content="BDT" />

                                        <meta itemprop="price" content="{{$offer_price}}" />

                                    

                                        <div class="mt-4">

                                            <h3 class="fz-small fw-bold mb-0 pb-2 mr-2 mb-2 mt-4" style="border-bottom:1px solid #0101c1"><span style="color:#fff;background:#0101c1;padding:5px 10px;">Product Highlights</span></h3>

                                                @if(count($ProductHighlights)>0)

                                                    <ul class="ProductHighlight mt-4 mx-0">

                                                        @foreach($ProductHighlights as $ProductHighlight)

                                                        <li class="binary-arrow"><span>{{$ProductHighlight->highlights}}</span></li>

                                                        @endforeach

                                                    </ul>

                                                @else

                                                    <p class="product_highlights text-light">{!!$product->product_highlights !!}</p>

                                                @endif

                                        </div>

                                    </div>

                                    @endif



                                    <!-- MONTHLY EMI CALCULATION -->

                                    @if(!empty($product->regular_price) && $product->regular_price >= 5000)

                                        <div class="mt-4">

                                            <h4 class="fz-small fw-bold mb-0 pb-2 mr-2 mb-2" style="border-bottom:1px solid var(--bs-success)"><span style="color: #fff; background: var(--bs-success); padding: 5px 10px">Monthly EMI</span> </h4>

                                            <ul class="ProductHighlight">

                                                @for ($i = 3; $i < 13; $i += 3)

                                                    <li>{{$i}} Months EMI - ৳ {{ round(($product->regular_price)/$i) }} Taka</li>

                                                @endfor

                                                <li class="text-danger">Note: Only Available In Branches</li>

                                            </ul>

                                        </div>

                                    @endif

                                    

                                    

                                    @if(!empty($product->warranty))

                                        <div class="mt-4 fz-small fw-bold" style="border-left:5px solid #0101c1;padding-left:10px;color:#0101c1">

                                            {{$product->warranty ?? ''}}

                                        </div>

                                    @endif

                                    

                                    

                                    @if($product->home_delivery==1)

                                    <div class="mt-4 fz-small fw-bold" style="border-left:5px solid #0101c1;padding-left:10px;color:#0101c1">

                                        Home Delivery Available

                                    </div>

                                    

                                    @endif

                                        

                                    <div class="my-25 d-flex flex-wrap pr-hide">

                                        @if($product->call_for_price)

                                        @elseif($product->stock_status == 'in_stock' || $product->stock_status == 'limited_stock')

                                        <a title="Add to Cart" style="padding:10px" href="javascript:void(0);" onclick="addToCart({{$product->id}});" class="button border btn rounded-0 theme-bg text-white fw-bold">Add To Cart</a>

                                        <a title="Add to Cart" style="padding:10px" href="javascript:void(0);" onclick="addToCart({{$product->id}});" class="button border btn rounded-0 theme-bg text-white fw-bold">Buy Now</a>

                                        @else

                                        @endif

                                        

                                        <form action="{{route('add-to-wishlist')}}" method="POST" class="d-flex ml-2">

                                            @csrf

                                            <input type="hidden" value="1" name="qty">

                                            <input type="hidden" name="product_id" value="{{$product->id}}">

                                            <button type="submit" class="button border btn rounded-0 theme-bg text-white fw-bold" data-id="{{$product->id}}">Wish List</button>

                                        </form>

                                        

                                        <div  class="d-flex ml-2">

                                        <button type="submit" onClick="window.print();" class="button border btn rounded-0 theme-bg text-white fw-bold">Print</button>

                                        </div>

                                        @php

                                        if(!empty($product->note)){

                                            $note = explode('----',$product->note);

                                            if(!empty($note[1])){

                                                @endphp

                                                <form action="{{$note[1]}}" method="get" target="_blank" class="d-flex my-2 mx-2">

                                                    @csrf

                                                    <button type="submit" class="button btn rounded-0  theme-bg text-white fw-bold">Download Driver</button>

                                                </form>

                                                @php

                                            }

                                        }

                                        @endphp

                                    </div> 



                                    <div class="sharethis-inline-share-buttons mt-4"></div>



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

            </div>

        </div>

        <!-- end fo container -->

    </section>

    <section>

            <div class="container">

                <ul class="nav">

                    @if(!empty($product->description))

                    <li class="nav-item nav-item-active">

                        <a title="Go to Description" href="#description">Description</a>

                    </li>

                    @endif

                    @if(!empty($product->video))

                    <li class="nav-item">

                        <a title="Go to Video" href="#video">Video</a>

                    </li>

                    @endif 

                    @if(!empty($product->specification))

                    <li class="nav-item">

                        <a title="Go to Specification" href="#specification">Specification</a>

                    </li>

                    @endif

                    @if(count($ProductTerms)>0)

                    <li class="nav-item">

                        <a title="Go to Terms &amp; Conditions" href="#termsconditions">Terms &amp; Conditions</a>

                    </li>

                    @endif 

                    @if(count($ProductFaq)>0)

                    <li class="nav-item">

                        <a title="Go to Frequently Asked Questions" href="#faq">Frequently Asked Questions</a>

                    </li>

                    @endif  

                </ul>    

            </div>

        

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="product-details-tab mt-5 table-responsive">

                        @if(!empty($product->description))

                        <div id="description" class="border-bottom p-4">Description</div>

                        <div class="p-4" itemprop="description">

                            {!!$product->description ?? ''!!}

                        </div>

                        @endif



                        @if(!empty($product->video))

                        <div id="video" class="border-bottom p-4">Video</div>

                        <div class="p-4" itemprop="video">

                            <div class="container-iframe">

                            <iframe class="responsive-iframe" src="<?= $product->video ?>?rel=0" allowfullscreen></iframe>

                            </div>

                        </div>

                        @endif

                        

                        @if(!empty($product->specification))

                        <div id="specification" class="border-bottom p-4">Specification</div>

                        <div class="table-blue p-4" itemprop="description">

                            {!!$product->specification ?? ''!!}

                        </div>

                        @endif



                        @if(count($ProductTerms)>0)

                        <div id="termsconditions" class="border-bottom p-4">Terms &amp; Conditions</div>

                        <div class="pl-4">

                        <ul class="ProductHighlight mt-4">

                            @foreach($ProductTerms as $ProductTerm)

                            <li>{{$ProductTerm->terms}}</li>

                            @endforeach

                        </ul>

                        </div>

                        @endif  



                        @if(!empty($ProductFaq) && sizeof($ProductFaq) > 0)

                            <div id="faq" class="border-bottom p-4">Frequently Asked Questions</div>

                            <div class="accordion-wrapper p-4">

                                

                                @foreach($ProductFaq as $faq)

                                    <button class="accordion">{{$faq->question}}</button>

                                    <div class="panel">

                                    <p>{! $faq->answer !}</p>

                                    </div>

                                @endforeach



                            </div>

                        @endif

                    </div>

                </div>

            </div>

            

            <div class="mt-4 pr-hide">

                <div class="bg-white p-4 mb-4 h2">More Products</div>

                <div class="row g-4">

                    @foreach($relatedProducts as $product)

                        @include('frontend/elementproductbox',$product)

                    @endforeach

                </div>

            </div>

        </div>

    </section>

</main>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" id="product-view"></div>

</div>



<script>

var acc = document.getElementsByClassName("accordion");

var i;



for (i = 0; i < acc.length; i++) {

  acc[i].addEventListener("click", function() {

    this.classList.toggle("active");

    var panel = this.nextElementSibling;

    if (panel.style.display === "block") {

      panel.style.display = "none";

    } else {

      panel.style.display = "block";

    }

  });

}

</script>



@endsection





