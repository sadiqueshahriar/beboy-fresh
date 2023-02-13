@extends('templete_two.layouts.app')

@section('content')
<style>
    .new-product-badge1 {
    position: relative;
    top: 36px;
    right: 0px;
    left: 115px;
    background: #673ab7;
    padding: 2px 8px;
    border-radius: 3px;
    box-shadow: 0px 1px 1px 0px #808080d9;
    z-index: 9;
    text-align: center;
    width: 50%;
}
@media only screen and (max-width: 600px) {
    .new-product-badge1 {
        left: 90px;
        padding : 0px;

  }
}
</style>

<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');



$Cart = Cart::content()->count();

?>



<style type="text/css">

    nav {

        text-align: center;

        font-size: 15px;

    }

    nav span svg {

    width: 20px;

}


/* new category design */


.single_product {
    padding: 0px;
     border: 0px;
    border-radius: 0px;
    background: none;
    position: relative;
}

.action_links{
        opacity: 1;
        visibility: visible;
    }
.shop_wrapper.grid_4 .add_to_cart a {
    padding: 7px 30px !important;
}



</style>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{URL::to('/')}}">home</a></li>
                            <li class="breadcrumb-item">{{ $search_name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth" style="background: #f2f4f8">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-3">

                    <h2>Search</h2>

                    <h4>Looking for <span class="text-info">{{ $search_name }}</span>

                    <div class="mt-4 border p-2">

                    <div class="search-box mr-40 ">

                        <form action="{{route('products-search')}}" class="" method="post" autocomplete="off">

                            @csrf

                            <div class="d-flex p-0 position-relative">

                                <input type="text" placeholder="Search" class="search-box__input" name="product_name" required="required" style="border-radius:0;border:0;">

                                <button type="submit" class="button button-icon search-box__button" style="border:0; border-radius: 0;"><i class="fa fa-search" style="display:block;color:white; margin-left: 0;"></i></button>

                            </div>

                        </form>

                    </div>

                    </div>

                
                </div>

                <div class="col-12 col-md-8">
                    

 <div class="product_column">
                  
    <div class="row">

                     
        @forelse($products as $product)
                        

        <div class="col-12 col-md-4">  
         @if($product->stock_status == "in_stock")

            
        <div class="new-product-badge1" style="background: green;">
            <a class="text-white">IN STOCK</a>
        </div>
            
        @endif
        
        @if($product->stock_status == "out_of_stock")

            
        <div class="new-product-badge1" style="background: red;">
            <a class="text-white">OUT Of STOCK</a>
        </div>
            
        @endif
        
        @if($product->stock_status == "limited")

            
        <div class="new-product-badge1" style="background: orange;">
            <a class="text-white">Limited Stock</a>
        </div>
            
        @endif
        
        @if($product->stock_status == "new_arrived")

            
        <div class="new-product-badge1" style="background: #62ba28;">
            <a class="text-white">New Arrived</a>
        </div>            
            
        @endif
        
        @if($product->stock_status == "coming")

            
        <div class="new-product-badge1" style="background: #673ab7;">
            <a class="text-white">Coming Soon</a>
        </div>            
            
        @endif

        @if($product->stock_status == "preorder")                 
        <div class="new-product-badge1" style="background: green;">
            <a class="text-white">Pre Order Now</a>
        </div>            
            
        @endif
        @if($product->stock_status == "with_pc")     
        <div class="new-product-badge1" style="background: #3e2ddb;">
            <a class="text-white">With PC</a>
        </div>            
            
        @endif


 
   
    
                            <!--@include('templete_two.homepage.components.common_product_cart')-->
                            <div class="main-content p-items-wrap">
                                    <div class="p-item">
                                        <div class="p-item-inner">
                                          <div class="p-item-img"> <a href="{{route('/', $product->slug)}}"><img src="{{asset($product->image ?? '')}}" alt="EKWB PVC 10-12mm Tube Clamp" width="228" height="228"></a></div>
                                            <div class="p-item-details">
                                                <h4 class="p-item-name" style="font-weight: 600; min-height: 45px;"> <a href="{{route('/', $product->slug)}}">{{Str::limit($product->name, 55, $end='...')}}</a></h4>
                                            <div class="short-description" >
                                                @php
                                                $ProductHighlights = DB::table('product_highlights')->where('product_id', $product->id)->take(4)->get();
                                               @endphp
                                                @if(count($ProductHighlights)>0)
                                                <ul >
                                                    @foreach($ProductHighlights as $ProductHighlight)
                                                    <li style="list-style: disc;list-style-position: inside;overflow-y:hidden;">{{$ProductHighlight->highlights}} </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </div>
                                                <div class="p-item-price">
                                                    @if (!empty($product->offer_price && $product->special_price))
                                                    <span class="old_price" style="color: red"> <del>৳ {{$product->special_price}}</del></span>
                                                    <span class="current_price">৳ {{$product->offer_price}}</span>
                                                
                            
                                                @elseif(!empty($product->regular_price && $product->special_price))
                                                    <span class="old_price" style="color: red"> <del>৳ {{$product->regular_price}}</del> </span>
                                                    <span class="current_price">৳ {{$product->special_price}}</span> 
                                                
                                            
                                                @elseif(!empty( $product->regular_price))
                                                <span class="current_price">৳ {{$product->regular_price}}</span> 
                                                @endif                      
                                                </div>
                                                  @if ($product->stock_status == 'out_of_stock')
                                                  <div class="add_to_cart" >
                                                    <a href="{{route('/', $product->slug)}}" title="add to cart">Details</a>                                               
                                                  </div>
                                                  @else
                                                  <div class="add_to_cart" >
                                                    <form action="{{route('cart-page')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                                        <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                                        <button  data-id="{{$product->id}}" type="submit">Buy Now</button>
                                                    
                                                    </form> 
                                                </div>
                                                  
                                                  @endif 
                                                  {{-- <div class="">
                                                    <a href="{{route('/', $product->slug)}}" title="details" class="">Details</a>                                               
                                                </div> --}}
                                                
                                                 {{-- <span class="st-btn btn-compare"><a href="{{route('/', $product->slug)}}">Details</a> </span> --}}       
                                                        {{-- <a href="#" class="st-btn btn-add-cart" data-id="{{ $product->id }}"> Buy Now</a> --}}
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @empty

                        <div class="col-12 display-4 text-secondary">

                            No product found

                        </div>

                        @endforelse

                      
                    </div>
                    
                    </div>




            <?php

            

            if (app('request')->input('page') && app('request')->input('page') != 1) {

                

            }else{

                ?>

                @if(!empty($cat_own->description))

                <div class="mt-4 des product-details-tab">

                    {!! $cat_own->description !!}

                </div>

                @endif



                @if(!empty($catFaq) && sizeof($catFaq) > 0)

                    <div class="accordion-wrapper p-4">

                        

                        @foreach($catFaq as $faq)

                            <h2 class="accordion">{{$faq->question}}</h2>

                            <div class="panel">

                            <p>{!! $faq->answer !!}</p>

                            </div>

                        @endforeach



                    </div>

                @endif

                <?php

            }

            ?>


                    
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->




@endsection