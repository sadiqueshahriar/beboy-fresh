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



<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />

<meta property="og:type"          content="category" />

<meta property="og:title"         content="{{$cat_own->meta_title ??  $cat_own->name}}" />

<meta property="og:description"   content="{{$cat_own->meta_des ??  $cat_own->name}} " />

<meta property="og:keywords"   content="{{$cat_own->meta_keywords ??  $cat_own->name}} " />

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

<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');



$Cart = Cart::content()->count();

?>


<style>
    
    .p-item{width:100%}
    .hidden{
        display: block;
    }
    
    svg{
        width: 25px;
    }
    
 
    
    .flex.items-center.justify-between{
        text-align: center;
    }
    
    p.text-sm.text-gray-700.leading-5 {
        margin: 11px;
    }
    .product-details-tab{
        background: #fff;
        padding: 14px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-bottom: 15px;
    }

    .product-details-tab h1{
        font-size: 25px !important;
    }
    .product-details-tab h2{
        font-size: 23px !important;
        line-height: 29px !important;

    }
    .product-details-tab h3{
        font-size: 21px !important;
    }
    .product-details-tab h4{
        font-size: 20px !important;
    }
    .product-details-tab h5{
        font-size: 19px !important;
    }
    .product-details-tab h6{
        font-size: 18px !important;
    }
    .product-details-tab p{
        font-size: 16px !important;
    }
    b, strong{
        font-weight: 550 !important;
    }

    .product-details-tab a {
        color: blue !important;
    }




    ul, li {
list-style: none;
}

.breadcrumb {
display: flex;
border-radius: 10px;
margin: auto;
text-align: center;
top: 50%;
width: 100%;
height: 40px;
z-index: 1;
margin-top: 15px;
}


.breadcrumb__item {
background-color: white;
color: #252525;
font-family: 'Oswald', sans-serif;
border-radius: 7px;
letter-spacing: 1px;
transition: all 0.3s ease;
position: relative;
display: inline-flex;
justify-content: center;
align-items: center;
font-size: 16px;
transform: skew(-21deg);
box-shadow: 0 2px 5px rgba(0,0,0,0.26);
margin: 5px;
padding: 0 30px;
cursor: pointer;
}


.breadcrumb__item:hover {
background: #0063D1;
color: #FFF;
}


.breadcrumb__inner {
display: flex;
flex-direction: column;
margin: auto;
z-index: 2;
transform: skew(21deg);  
}

.breadcrumb__title {
font-size: 16px;
text-overflow: ellipsis;  
overflow: hidden;
white-space: nowrap;  
}


@media all and (max-width: 1000px) {
.breadcrumb {
height: 35px;
}

.breadcrumb__title{
font-size: 11px;
}
.breadcrumb__item {
padding: 0 30px;
}
}

@media all and (max-width: 767px) {
.breadcrumb {
height: auto;
}
.breadcrumb__item {
padding: 0 20px;
}
.mt-60{
    margin-top: 25px !important
}

/* .product_thumb{
    width: 250px;
} */
 
.product_content {
    padding-bottom: 0px !important;
}



}

.breadcrumb__title a:hover {
    color: white;
}


.product_content{
    text-align: start ;
    padding-bottom: 105px
}

.price_box{
    text-align: center
}
.product_name{
    font-size: 15px;
    line-height: 20px;
    font-weight: 600;
    margin-bottom: 15px !important;
}


/* new category design */
.p-items-wrap {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -5px;
    padding: 0;
    justify-content: flex-start;
}
.p-item-page .p-item {
    flex: 25%;
    max-width: 25%;
}
.p-item-inner {
    display: flex;
    flex-direction: column;
    position: relative;
    width: 100%;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}
.p-item-img {
    text-align: center;
    border-bottom: 3px solid rgba(55,73,187,.03);
    flex: 0 0 268px;
    padding: 20px;
    margin: 0;
}
.p-item-img>a {
    height: 228px;
}
.p-item-page .p-item-details {
    padding: 15px 15px 0;
    position: relative;
}
.p-item-details {
    padding: 15px;
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
}

.p-item-name {
    margin: 0 0 15px;
    line-height: 20px;
    overflow: hidden;
    font-weight: 600 !important;
    font-size: 14px;
    position: relative;
   
}
.p-item-name a {
    color: #111;
}
.p-item-page .p-item .short-description {
    padding: 10px 0 0 14px;
    flex: 1 1 auto;
    border-bottom: 1px solid #eee;
    margin-bottom: 5px;
}
.p-item-page .short-description li {
    font-size: 13px;
    color: #666 !important;
    position: relative;
    line-height: 16px;
    padding-bottom: 10px;
}
.p-item-page .short-description li {
    font-size: 13px;
    color: #666;
    position: relative;
    line-height: 16px;
    padding-bottom: 10px;
}
 .p-item-price {
    padding-top: 10px;
    flex: 0 0 76px;
    text-align: center;
}
.p-item-price {
    line-height: 22px;
    font-size: 17px;
    font-weight: 600;
    color: #0063d1;
}
.p-item-page .p-item .p-item-price {
    padding-top: 10px;
    flex: 0 0 76px;
    text-align: center;
}
.p-item .actions {
    flex: 0 0 97px;
    display: inline-block;
    width: 100%;
    padding: 15px 0 10px;
}
.p-item .actions .st-btn {
    display: flex;
    flex-wrap: nowrap;
    line-height: 34px;
    background: #fff;
    background: #0063d1;
    color: white;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 600;
    padding: 0 14px;
    cursor: pointer;
    justify-content: center;
    align-content: center;
    text-decoration: none;
}
.p-item .actions .st-btn .material-icons {
    line-height: 34px;
    font-size: 20px;
    margin-right: 5px;
}
.material-icons {
    height: 24px;
    width: 24px;
}

.p-item .actions .btn-compare {
    background: none;
    margin-top: 7px;
    border: none;
    color: #666;
    font-weight: 400;
    font-size: 13px;
    text-decoration: none;
}


.single_product {
    padding: 0px;
     border: 0px;
    border-radius: 0px;
    background: none;
    position: relative;

}
.short-description{
    min-height: 196px;
    border-bottom: 1px solid #eee;
}
 .p-item-price {
    padding-top: 10px !important;
    flex: 0 0 76px !important;
    text-align: center !important;
}

.action_links{
        opacity: 1;
        visibility: visible;
    }
    .add_to_cart{
        opacity: 1;
        visibility: visible;
    }
    @media only screen and (max-width: 767px){
    .new_add a {
        padding: 5px 14px !important;
       

    }
    .p-items-wrap {
            display: block;
           
        }
  .short-description{
         min-height: auto;
    
     }
    .py-2{
        padding-top: 0 !important;
        padding-bottom: 4px !important;

     }
        
}

.add_to_cart{
    bottom: 13px !important;
}
.btn_margin{
    margin-right: 17px;
}
.shop_wrapper.grid_4 .add_to_cart a {
    padding: 7px 30px !important;
}

button{
    line-height: 16px;
    text-align: center;
    font-size: 12px;
    padding: 7px 15px;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
    background: #0063d1;
    color: #ffffff;
    border-radius: 5px;
    border: none;
}
.details{
    float: right;
    
}
.details_btn{
    line-height: 16px;
    text-align: center;
    font-size: 12px;
    padding: 7px 15px;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
    background: #0063d1;
    color: #ffffff;
    border-radius: 5px;
    border: none;
}
.details a:hover{
    color: #fff !important;
}

.filter-group {
    position: relative;
    user-select: none;
    clear: both;
    padding: 0;
}
.ws-box {
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}
.filters {
    background: #f2f4f8;
    border-radius: 7px;
    margin-bottom: 15px;
}
.price-filter .label, .filter-group .label {
    padding: 0 0 0 20px;
    height: 50px;
    line-height: 50px;
    cursor: pointer;
    color: #111;
    font-size: 17px;
    border-bottom: 1px solid #eee;
}
.filter-group.show .items {
    display: block;
}
.filter-group .items {
    display: none;
    padding: 10px 20px 10px;
    margin-right: 0;
    overflow: auto;
}
.filter-group .items label.filter {
    display: inline-block;
    width: 100%;
    padding: 6px;
    margin: 0 -6px;
    font-size: 14px;
    border-radius: 3px;
    cursor: pointer;
}
.filter-group .items label.filter input {
    margin-right: 10px;
    height: 16px;
    width: 16px;
    position: relative;
    top: 2px;
    float: left;
}
.filter-group .items label.filter span {
    display: block;
    margin-left: 25px;
    line-height: 20px;
    color: #111;
}
#laravelNavigation{padding-bottom: 20px}
.ajaxPage{margin: 20px 0;display:block;width:100%}
.ajaxPage span{cursor:pointer;padding:10px 15px;border:1px solid #ddd;border-radius: 10px;margin:0 10px 10px 0;display:inline-block}
.filterLoadingColumn{display:none}
.filterLoadingColumn.active{display:flex;}
</style>



<?php
// // $products = DB::table('products')->where('category_id',$cat_own->id)->first();
// $products = DB::table('products')->with('product_highlights')->where('category_id',10)
// ->where('status',1)
// ->orderBy('stock_status','asc')
// ->select('products.id','name','slug','regular_price','special_price','offer_price','call_for_price','stock_status','image','products.status','products.created_at','product_highlights.highlights')

// ->take(5)
// ->get();
// dd(json_encode($products));
?>

<div class="container">
   <!--<h2 style="font-size: 24px;margin-top:5px;font-weight:550">{{ $cat_own->name}}</h2>-->
    <ul class="breadcrumb">
        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
            <span class="breadcrumb__title"><a href="{{URL::to('/')}}">Home</a></span>
            </span>
        </li>
       
        @if(!empty($cat_parent_2))

        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
                <span class="breadcrumb__title"> <a title="{{$cat_parent_2->name}}" href="{{$cat_parent_2->slug}}">{{$cat_parent_2->name}}</a></span>
            </span>
        </li>

        @endif

        @if(!empty($cat_parent_1))

        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
                <span class="breadcrumb__title"> <a title="{{$cat_parent_1->name}}" href="{{$cat_parent_1->slug}}">{{$cat_parent_1->name}}</a></span>
            </span>
        </li>
        @endif

        @if(!empty($cat_parent))

        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
                <span class="breadcrumb__title"> <a title="{{$cat_parent->name}}" href="{{$cat_parent->slug}}">{{$cat_parent->name}}</a></span>
            </span>
        </li>

        @endif
        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
            <span class="breadcrumb__title"><a title="{{$cat_own->name ?? ''}}" href="{{$cat_own->slug ?? ''}}">{{$cat_own->name ?? ''}}</a></span>
            </span>
        </li>

        @if (!empty($cat_child)) 
              
        @foreach ($cat_child as $item)
        <li class="breadcrumb__item breadcrumb__item-firstChild">
            <span class="breadcrumb__inner">
            <span class="breadcrumb__title"><a title="{{$item->name ?? ''}}" href="{{$item->slug ?? ''}}">{{$item->name ?? ''}}</a></span>
            </span>
        </li>
        @endforeach
       
        @endif
       

    </ul>
</div>


    <!--breadcrumbs area start-->
    {{-- <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{URL::to('/')}}">home</a></li>
                            <li class="breadcrumb-item"><a title="{{$cat_own->name ?? ''}}" href="{{$cat_own->slug ?? ''}}">{{$cat_own->name ?? ''}}</a></li> 
                      
                           @foreach ($cat_child as $item)
                            <li class="breadcrumb-item"><a title="{{$item->name}}" href="{{$item->slug}}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   
    <!--breadcrumbs area end-->
    @php 
    $price_asc_sel = '';
    $price_desc_sel = '';
    if(!empty($sortRequest)){
        switch ($sortRequest) {
            case 'price_asc':
                $price_asc_sel = 'selected';
                $price_desc_sel = '';
                break;
            case 'price_desc':
                $price_asc_sel = '';
                $price_desc_sel = 'selected';
                break;
            
            default:
                $price_asc_sel = '';
                $price_desc_sel = '';
                break;
        }
    }
    @endphp

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mt-60" style="background: #f2f4f8">
        <div class="container">
           
            <div class="row">
             <div class="col-md-10"></div>
                <div class="col-md-2 mb-3">
                    <span class="font-weight-bold sort-font"> Sort By :</span>
                    <select id="dynamic_select" class="form-select">
                        <option value="{{ URL::current() }}" >Default</option>
                        <option value="{{ URL::current()."?sort=price_asc" }}" {{ $price_asc_sel }}>Price - Low to High</option>
                        <option value="{{ URL::current()."?sort=price_desc" }}" {{ $price_desc_sel }}>Price - High to Low</option>
                    </select>        
                </div>

                @php
                // @dd($products);
                // $subcategory_id = DB::table('subcategories')->where('category_id',$cat_own->id)->first();
                // @dd($subcategory_id);
                $arr_stock = array(1=>'in_stock',2=>'coming',3=>'new_arrived',4=>'preorder');
                $arr_stock_display = array(1=>'In Stock',2=>'Upcomming',3=>'New Arrived',4=>'Preorder');
                @endphp

                <div class="row">
                    <column id="column-left" class="col-sm-2">
                        <input type="hidden" id="tableName" value="{{$tableName}}">
                        <input type="hidden" id="tableValue" value="{{$cat_own->id}}">
                        <div class="filters">
                            <div class="filter-group ws-box show" data-group-type="status">
                                <div class="label">
                                    <span>Availability</span>
                                </div>
                                <div class="items">
                                <?php 
                                for($i=1;$i<5;$i++){
                                    ?>
                                    <label class="filter">
                                        <input
                                            type="checkbox" 
                                            class="common_selector product_stock"
                                            value="{{$arr_stock[$i]}}">
                                        <span>{{$arr_stock_display[$i]}}</span>
                                    </label>
                                    <?php
                                }
                                ?>
                                </div>
                            </div>
                            <div class="filter-group ws-box show" data-group-id="211"></div>
                        </div>  
                    </column>
                
                <div class="col-md-10" >
                    <div class="row shop_wrapper grid_4" style="margin: 0;" id="filter_product">
                        
                    	@forelse($products as $product)
                        <div class="col-md-3">
                            <article class="single_product">
                                <?php  
                                    $route = Route::current()->getName();
                            
                                ?>
                                
                                @if($route == '/')
                                                
                                    @if($product->stock_status == "in_stock")
                                                     
                                    <div class="new-product-badge" style="background: green;">
                                        <a class="text-white">IN STOCK</a>
                                    </div>
                                        
                                    @endif
                                    
                                    @if($product->stock_status == "out_of_stock")
                            
                                        
                                    <div class="new-product-badge" style="background: red;">
                                        <a class="text-white">OUT Of STOCK</a>
                                    </div>
                                        
                                    @endif
                                    
                                    @if($product->stock_status == "limited")
                            
                                        
                                    <div class="new-product-badge" style="background: orange;">
                                        <a class="text-white">Limited Stock</a>
                                    </div>
                                        
                                    @endif
                                    
                                    @if($product->stock_status == "new_arrived")
                                                
                                    <div class="new-product-badge" style="background: #62ba28;">
                                        <a class="text-white">New Arrived</a>
                                    </div>            
                                        
                                    @endif
                                    
                                    @if($product->stock_status == "coming")
                            
                                        
                                    <div class="new-product-badge" style="background: #673ab7;">
                                        <a class="text-white">Coming Soon</a>
                                    </div>            
                                        
                                    @endif
                                    @if($product->stock_status == "preorder")                 
                                    <div class="new-product-badge" style="background: green;">
                                        <a class="text-white">Pre Order Now</a>
                                    </div>            
                                        
                                    @endif
                                    @if($product->stock_status == "with_pc")     
                                    <div class="new-product-badge" style="background: #3e2ddb;">
                                        <a class="text-white">With PC</a>
                                    </div>            
                                        
                                    @endif
                            
                                @endif
              
                                <div class="main-content p-items-wrap">
                                    <div class="p-item">
                                        <div class="p-item-inner">
                                          <div class="p-item-img"> <a href="{{route('/', $product->slug)}}"><img src="{{asset($product->image ?? '')}}" alt="EKWB PVC 10-12mm Tube Clamp" width="228" height="228"></a></div>
                                            <div class="p-item-details">
                                                <h4 class="p-item-name" style="font-weight: 600; min-height: 45px;"> <a href="{{route('/', $product->slug)}}">{{Str::limit($product->name, 55, $end='...')}}</a></h4>
                                            <div class="short-description">
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
                                                        <span class="old_price" style="color: red"> <del>৳ {{number_format($product->special_price)}}</del></span>
                                                        <span class="current_price">৳ {{$product->offer_price}}</span>
                                                    @elseif(!empty($product->regular_price && $product->special_price))
                                                        <span class="old_price" style="color: red"> <del>৳ {{number_format($product->regular_price)}}</del> </span>
                                                        <span class="current_price">৳ {{number_format($product->special_price)}}</span> 
                                                    @elseif(!empty( $product->special_price))
                                                        <span class="current_price">৳ {{number_format($product->special_price)}}</span> 
                                                    @elseif(!empty( $product->regular_price))
                                                    <span class="current_price">৳ {{number_format($product->regular_price)}}</span> 
                                                    @endif                      
                                                </div>
                                                   
                                                @if ($product->stock_status == 'out_of_stock')
                                                  <div style="text-align: center;">
                                                    <a class="details_btn" href="{{route('/', $product->slug)}}" title="add to cart">Details</a>                                               
                                                  </div>
                                                  @else
                                                   <div class="row">
                                                    <div class="col-6">
                                                        <form action="{{route('cart-page')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                                            <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                                            <button  data-id="{{$product->id}}" type="submit">Buy Now</button>
                                                        
                                                        </form>    
                                                    </div>

                                                    <div class="col-6">
                                                      <div class="details">                   
                                                        <a class="details_btn" href="{{route('/', $product->slug)}}">Details</a>     
                                                    </div>
                                                    </div>
                                                  </div>
                                              @endif 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                 
                            </article>
                	
                        </div>
                        @empty

                        <div class="col-12 display-4 text-secondary">

                            No product found

                        </div>

                        @endforelse
                      
                    </div>
                    
                     {{-- <?php

                    $re = app('request')->request->all();
                    // dd();
                    if(empty($re['sort'])){
                        ?>
                         <p>{{$products->links()}}</p>
                        <?php
                    }
                    ?> --}}
                    <div id="laravelNavigation">
                        <p>{{$products->links()}}</p>
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
    </div>
    <!--shop  area end-->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

$(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
//     $(function() {
//     if (localStorage.getItem('dynamic_select')) {
//         $("#dynamic_select option").eq(localStorage.getItem('dynamic_select')).prop('selected', true);
//     }

//     $("#dynamic_select").on('change', function() {
//         localStorage.setItem('dynamic_select', $('option:selected', this).index());
//     });
// });
//filter request

$('.common_selector').click(function(){
    filter_data();
});

function filter_data()
    {
        // $('.filter_data').html('<div id="loading" style="" ></div>');
        // var action = 'fetch_data';
        // var minimum_price = $('#hidden_minimum_price').val();
        // var maximum_price = $('#hidden_maximum_price').val();
        var stock = get_filter('product_stock');
        
        console.log('stock:',stock);
        // var ram = get_filter('ram');
        // var storage = get_filter('storage');
        var tableName = $("#tableName").val();
        var tableValue = $("#tableValue").val();
        console.log('tableName:',tableName);
        console.log('tableValue:',tableValue);

        var appFilterPath = "http://www.beboybd.com/filterProduct";
        $.ajax({
            url: appFilterPath,
            method:"POST",
            data:{stock:stock,tableName:tableName,tableValue:tableValue},
            success:function(data){
                $('#filter_product').html(data);
                $("#laravelNavigation").hide();
                $('.filterLoadingColumn').each(function(index) {
                    if (index < 12){
                        $(this).addClass('active');
                        var imgData = $(this).find('.filterLoadingImages').attr('img-data');
                        // $(this).find('.filterLoadingImages').innerHTML = "";
                        $(this).find('.filterLoadingImages').append('<img src="'+imgData+'" alt="product">')
                    }
                });
            }
        });
    }
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    function filterPage(page){
        var startPoint = 12*(page-1)-1;
        var endPoint = (12*page) - 1;
        $('.filterLoadingColumn').each(function(index) {
            if (index > startPoint && index < (endPoint+1)){
                $(this).addClass('active');
                var imgData = $(this).find('.filterLoadingImages').attr('img-data');
                $(this).find('.filterLoadingImages').children('img').remove();
                $(this).find('.filterLoadingImages').append('<img src="'+imgData+'" alt="product">')
            }else{
                $(this).removeClass('active');
                // var imgData = $(this).find('.filterLoadingImages').attr('img-data');
                // $(this).find('.filterLoadingImages').append('<img src="'+imgData+'" alt="product">')
            }
        });
        window.scrollTo(0,0);
    }

function __sendFilterRequest(id,categoryId){
   // console.log(id);
    var filterValue = $("#"+id).val();
   // console.log(filterValue);
    var appFilterPath = "http://localhost/binarylogic/filterProduct";
    $.ajax({ 
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: "POST", 
        data: {
            "stockAvailability": filterValue,
            "categoryId": categoryId,
           
        },
        url: appFilterPath,
        success: function(data) { 
           
            // console.log('here',data);
            $("#filter_product").html(data);
        }
    });
}


</script>


@endsection