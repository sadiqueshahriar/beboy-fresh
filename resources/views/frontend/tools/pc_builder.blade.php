@extends('layouts.frontend.app')

@section('head')

<title>Build Your Custom PC At Affordable Price In Bangladesh</title>

<meta name="title" content="Build Your Custom PC At Affordable Price In Bangladesh">
<meta name="description" content="Binary Logic PC Builder tools helps you to build your desired personal computer at affordable price in Bangladesh">
<meta property="keywords" content="Binary Logic, build pc, make my computer, PC Builder, make my pc" />

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "Build Your Custom PC At Affordable Price In Bangladesh",
  "image" : "",
  "description" : "Binary Logic PC Builder tools helps you to build your desired personal computer at affordable price in Bangladesh",
  "url" : "https://binarylogic.com.bd/tools/pc_builder",
}
</script>
<style>
.refresher{display:inline-block;float:right;text-align:right}
.pc-builder-show{max-width:950px !important;margin:0 auto}
</style>
@endsection

@section('content')

<?php
$cart_products = [];
$cart_session_comp_id = [];
$sessin_products = Session::get('cart_session');
//dd($sessin_products);
if(isset($sessin_products) && !empty($sessin_products)){
    $item_count = count($sessin_products);
    $item_price = 0;
    $show_first_child_button = 0;
    foreach($sessin_products as $id => $prod){
        $item_price = $item_price + $prod['special_price'];
        $cart_products[$prod['component_id']] = $prod;
        array_push($cart_session_comp_id,$prod['component_id']);
    }
}else{
    $item_count = "0";
    $item_price = "0";
    $show_first_child_button = 1;
}
//dd($cart_products);
?>

<div class="pc__builder" style="background-color: var(--color-dark-1);">
    <div class="container d-flex justify-content-between align-items-center">
        <ul class="breadcrumb fz-small mb-0 py-2">
            <li class="pe-2">
                <a href="{{route('latestproducts')}}">Home</a> &#8811;
            </li>
            <li>PC Builder</li>
        </ul>
    </div>
</div>

<main id="widget">
    <div class="container pc-builder-show">
        <div class="controller mt-4 border p-4">
            <div class="row">
                <div class="col-sm-4">
                <a href="{{URL::to('/')}}">
                        <svg width="80" version="1.0" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 500.000000 373.000000"
                          preserveAspectRatio="xMidYMid meet">
                          <g transform="translate(0.000000,373.000000) scale(0.100000,-0.100000)"
                          fill="#0101c1" stroke="none">
                          <path d="M0 1870 l0 -1860 1638 1 c1628 1 1636 1 1521 19 -550 88 -995 373
                          -1296 832 -471 717 -378 1680 221 2297 302 310 661 493 1090 556 78 11 -142
                          13 -1541 14 l-1633 1 0 -1860z"/>
                          <path d="M3081 3409 c-260 -55 -535 -201 -737 -392 -257 -243 -416 -542 -476
                          -891 -26 -158 -22 -427 11 -577 187 -863 1025 -1406 1881 -1219 549 119 998
                          530 1165 1065 228 729 -91 1508 -765 1868 -134 71 -333 139 -477 162 l-43 7 0
                          -586 0 -586 -217 2 -218 3 -3 583 c-2 456 -5 582 -15 581 -6 0 -54 -9 -106
                          -20z"/>
                          </g>
                        </svg>  
                        <spam class="logo-text-black">Binary Logic</span>
                        </a>
                </div>
                <div class="col-sm-8 text-end">
                    <div class="button-wrap">
                        @if(empty($show_first_child_button))
                        <button type="submit" class="button button-type-1" data-size="small">Save Build</button>
                        <button type="submit" class="button button-type-1" data-size="small" onclick="getSS()">Screenshot</button>
                        <form action="{{route('add-to-cart-array')}}" method="post" class="d-inline">
                            @csrf
                            @foreach($sessin_products as $id => $details)
                                <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                            @endforeach
                            <button type="submit" class="button button-type-1" data-size="small">Add to Cart</button>
                        </form>
                        <form action="{{route('print_pc')}}" method="post" class="d-inline">
                            @csrf
                            @foreach($sessin_products as $id => $details)
                                <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                            @endforeach
                            <button type="submit" class="button button-type-1" data-size="small">Print</button>
                        </form>
                        <button type="submit" class="button button-type-1" data-size="small">Clear All</button>
                        @endif
                    </div>
                    <div class="mt-2">
                        Selected Items: {{$item_count}} | 
                        Total Price: {{$item_price}}
                    </div>
                </div>
            </div>
        </div>
        <div class="border p-4">
            <div class="">
                <section class="pc-builder">
                    <div class="">
                        <div class="cc-list-group">
                            @foreach($components as $component)
                                @if(!empty($show_first_child_button))
                                    @if ($loop->first)
                                    <div class="cc-list-item">
                                        <div class="row border-bottom py-4">
                                            <div class="col-sm-3 col-6">
                                                <img src="{{asset($component->image ?? '')}}" alt="" style="max-width: 2rem;">
                                                <strong>{{$component->name ?? ''}}</strong>
                                            </div>
                                            <div class="col-sm-9 col-6 refresher">
                                                <a href="{{route('tools/pc_builder/choose', [$component->slug])}}"><button class="button button-type-1" data-size="small">Choose</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cc-list-item">
                                        <div class="border-bottom py-4">
                                            <div class="">
                                                <img src="{{asset($component->image ?? '')}}" alt="" style="max-width: 2rem;">
                                                <strong>{{$component->name ?? ''}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @else
                                <!-- / first child -->
                                <div class="cc-list-item">
                                    <div class="border-bottom py-4">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-3 col-sm-2">
                                                @if(in_array($component->id,$cart_session_comp_id))
                                                <img src="{{asset($cart_products[$component->id]['image'])}}" alt="product image" class="card__image">
                                                @else

                                                @endif
                                                </div>
                                                <div class="col-9 col-sm-10">
                                                    @if(in_array($component->id,$cart_session_comp_id))
                                                        <div class="refresher">
                                                            <a href="{{route('tools/pc_builder/choose', [$component->slug])}}" class="d-none button">Change</a>
                                                            <a href="javascript:void(0);" class="button button-type-1 remove-from-session" style="background:#961414" data-id=" {{$cart_products[$component->id]['product_id']}}" data-size="small">Remove</a>
                                                        </div>
                                                    @else
                                                        <div class="refresher">
                                                            <a href="{{route('tools/pc_builder/choose', [$component->slug])}}"><button class="button button-type-1" data-size="small">Choose</button></a>
                                                        </div>
                                                    @endif

                                                    <img src="{{asset($component->image ?? '')}}" alt="{{$component->name}}" style="max-width: 2rem;">
                                                    <strong>{{$component->name ?? ''}}</strong>
                                                    @if(in_array($component->id,$cart_session_comp_id))
                                                        <h3 style="padding-left:24px;font-weight:bold;margin-top:10px">{{$cart_products[$component->id]['name']}}</h3>
                                                        <div style="padding-left:24px">
                                                            <span class="active-price">BDT {{ $cart_products[$component->id]['special_price'] }}</span>
                                                            <span class="disabled-price">BDT {{ $cart_products[$component->id]['regular_price'] }}</span>    
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        
                        <div class="mb-2 controller mt-4 border p-4">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div style="font-size:18px">
                                        Selected Items: {{$item_count}} | 
                                        Total Price: {{$item_price}}
                                    </div>
                                </div>
                                @if(empty($show_first_child_button))
                                <div class="col-sm-3">
                                    <form action="{{route('add-to-cart-array')}}" method="post" class="d-inline">
                                        @csrf
                                        @foreach($sessin_products as $id => $details)
                                            <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                                        @endforeach
                                        <button type="submit" class="button button-type-1" data-size="small"><i class="fal fa-shopping-cart text-white"></i></button>
                                    </form>
                                    <form action="{{route('print_pc')}}" method="post" class="d-inline">
                                        @csrf
                                        @foreach($sessin_products as $id => $details)
                                            <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                                        @endforeach
                                        <button type="submit" class="button button-type-1" data-size="small"><i class="fal fa-print"></i></button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- end of container -->
                </section>
            </div>
        </div>
    </div>
</main>
@endsection

<div id="capture" style="padding: 10px; background: #f5da55">
    <h4 style="color: #000; ">Hello world!</h4>
</div>
<script src="{{asset('public/js/html2canvas.js')}}"></script>
<script>
html2canvas(document.querySelector("#widget")).then(canvas => {
    document.body.appendChild(canvas)
});
</script>