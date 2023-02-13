@extends('templete_two.layouts.app')

@section('head')
<title>Binarylogic || Product Search || {{$slug}}</title>
<meta name="robots" content="index,allow" />
@endsection

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


/* from blade file */
 
    
@media (max-width: 767px) {
    .header-title{border-bottom: 1px solid #ddd;padding-bottom:10px}
    #mobileFilter{display:block !important;background: #eee;padding: 0 5px;border-radius: 5px;}
    #filterSet{display:none}
    #filterSet{
        right: 0;
        height: calc(100vh - 50px);
        transition: all 300ms ease;
        position:fixed;
        overflow:scroll;
        z-index:100;
        top:20px;
        padding-bottom:100px;
        padding-left: 23px;
        padding-top: 46px;
    }
    .fs-close {
        display:block !important;
        position: absolute;
        left: 0px;
        width: 40px;
        height: 40px;
        padding: 7px 10px 10px 10px;
        z-index: 101;
        background: #ffdada;
        font-size: 20px;
        text-align: center;
        vertical-align: middle;
        border-radius: 50%;
        top: 25px;
        color: red;
    }
    .sorting-panel {
        justify-content: space-between !important;
    }
}
.fs-close,#mobileFilter{display:none}
#filterSet.open{display:block}
/* .homepage_two__log,.main_header{display:none} */
.p-item{width:100%}
#laravelNavigation .hidden{
    display: block;
}

#laravelNavigation nav span span[aria-current]:is([aria-current="page"]) span {
    font-weight: bold;background:#0063d1 !important;color:#fff;
}

svg{
    width: 25px;
}

.short-description li {
    position: relative;
    padding-left: 11px;
}
.short-description li::before {
    content: '•';
    margin-left: -7px;
    font-size: 1.5rem;
    display: inline-block;
    position: absolute;
    left: 5px;
    color: #666;
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
flex: 0 0 230px;
margin-bottom: 10px;
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
/*flex: 1 1 auto;
display: flex;
flex-direction: column; */
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
line-height: 22px;
font-size: 17px;
font-weight: 600;
color: #0063d1;
min-height: 35px;
padding-top: 10px;
flex: 0 0 76px;
text-align: center;
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
padding: 0px !important;
border: 0px !important;
border-radius: 0px  !important;
background: none !important; 
position: relative !important;

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
.sorting-panel{display: flex;flex-wrap: wrap;align-content: center; justify-content: flex-end;}
.sorting-panel select{border:none;background: #eee;padding:5px;border-radius:5px}

.withFilter #filterSet{
-ms-flex: 0 0 280px;
flex: 0 0 280px;
max-width: 280px;
padding-right: 0;
margin-right: 0;
}
.withFilter #filterResult{
-ms-flex: 1 1 auto;
flex: 1 1 auto;
max-width: 100%;
}
.search_box_left input {
    padding: 5px;
    border: 1px solid #ddd;
    margin: 7px 5px;
}
/* end from blade file */
    
    
    
</style>

<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');



$Cart = Cart::content()->count();

?>



@php
    
    // filter properties
    // id="dynamic_select"
    
    // stock status selected * on change > change in search controller : stock status
    $arr_stock = array(1=>'in_stock',2=>'coming',3=>'new_arrived',4=>'preorder');
    $arr_stock_display = array(1=>'In Stock',2=>'Up Comming',3=>'New Arrived',4=>'Pre Order');

    // sorting
    $arr_sort = array(1=>'price_asc',2=>'price_desc');
    $arr_sort_display = array(1=>'Price - Low',2=>'Price - High');

    // show
    $arr_show = array(1=>12,2=>24,3=>48,4=>60,5=>72);

    // price
    $arr_sort_price = array('asc'=>'Price - Low','desc'=>'Price - High');

    @endphp

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{URL::to('/')}}">Home</a></li>
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
            <div class="row pt-4 withFilter">

                <div id="filterSet" class="col-sm-3">
                    <span class="fs-close" onclick="closeFilterSet()">x</span>
                    <div class="filters">
                        <div class="filter-group ws-box">
                            <div class="search_box_left" style="    margin: 0 0 15px;">
                                <input value="{{$slug}}" placeholder="Search product..." id="searchInputLeft" type="text" name="product_name" required="required">
                                <button onclick="return mySubmitFunctionLeft(event)">Search</button>
                            </div>
                        </div>
                        <div class="filter-group ws-box show slider-box">
                            <div class="label">
                                <span>Price Range</span>
                            </div>
                            <?php 
                            $price = Request::get('price');
                            if(!empty($price)){
                                $product_price = explode(',',$price);
                                $lower_price = $product_price[0];
                                $higher_price = $product_price[1];
                            }
                            
                            ?>
                            <input type="hidden" id="priceRange1s" value="{{$product_lowest->special_price ?? 0}}">
                            <input type="hidden" id="priceRange2s" value="{{$product_highest->special_price}}">
                            <div id="price-range" class="slider"></div>

                            <div class="slider-input">
                                <input onchange="submitNewRange()" type="text" id="priceRange1" value="{{$lower_price ?? $product_lowest->special_price ?? 0}}">
                                <input onchange="submitNewRange()" type="text" id="priceRange2" value="{{$higher_price ?? $product_highest->special_price ?? 0}}">
                            </div>
                        </div>
                        <div class="filter-group ws-box show" data-group-type="status">
                            <div class="label">
                                <span>Availability</span>
                            </div>
                            <div class="items">
                            <?php 
                            $stock = Request::get('stock');
                            for($i=1;$i<5;$i++){
                                $product_stock = explode(',',$stock);
                                if(in_array($i,$product_stock)){
                                    $sel = "checked";
                                }else{
                                    $sel = "";
                                }
                                // if($stock == $i){$sel = "checked";}else{$sel = "";}
                                ?>
                                <label class="filter">
                                    <input
                                        type="checkbox" 
                                        class="common_selector product_stock"
                                        value="{{$i}}"
                                        <?= $sel ?>
                                        >
                                    <span>{{$arr_stock_display[$i]}}</span>
                                </label>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="filter-group ws-box show" data-group-id="211"></div>
                    </div>  
                </div>

                <div class="col-12 col-md-9" id="filterResult">
                    <!-- row toolbar -->    
                    <div style="margin-left: 8px;background: #fff;margin-bottom: 15px;padding: 10px;border-radius: 5px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">Search Result for {{$slug}}</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-1 sorting-panel">
                                    <div id="mobileFilter" onclick="showMobileFilter()">
                                        <svg width="28px" height="28px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g fill="#212121" fill-rule="nonzero">
                                                    <path d="M17.25,19 C17.6642136,19 18,19.3357864 18,19.75 C18,20.1642136 17.6642136,20.5 17.25,20.5 L10.75,20.5 C10.3357864,20.5 10,20.1642136 10,19.75 C10,19.3357864 10.3357864,19 10.75,19 L17.25,19 Z M21.25,13 C21.6642136,13 22,13.3357864 22,13.75 C22,14.1642136 21.6642136,14.5 21.25,14.5 L6.75,14.5 C6.33578644,14.5 6,14.1642136 6,13.75 C6,13.3357864 6.33578644,13 6.75,13 L21.25,13 Z M24.25,7 C24.6642136,7 25,7.33578644 25,7.75 C25,8.16421356 24.6642136,8.5 24.25,8.5 L3.75,8.5 C3.33578644,8.5 3,8.16421356 3,7.75 C3,7.33578644 3.33578644,7 3.75,7 L24.25,7 Z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        Filter
                                    </div>
                                    <div>
                                        <span class="font-weight-bold sort-font"> Sort By:</span>&nbsp;
                                        <select class="common_selector product_sort">
                                            <option value="">Default</option>
                                            <?php
                                            $sort = Request::get('sort');
                                            foreach($arr_sort_price as $key => $value){
                                                if($sort == $key){$sel = "selected";}else{$sel = "";}
                                                echo '<option value="'.$key.'"'. $sel.'>'.$value.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-- LIMIT {{ Request::get('limit') }} -->
                                    <div class="d-none d-md-block">
                                    &nbsp;&nbsp;<span class="font-weight-bold sort-font"> Show:</span>&nbsp;
                                        <select class="common_selector product_limit">
                                            <?php
                                            $limit = Request::get('limit');
                                            foreach($arr_show as $key => $value){
                                                if($limit == $value){$sel = "selected";}else{$sel = "";}
                                                echo '<option value="'.$value.'" '. $sel.'>'.$value.'</option>';
                                            }
                                            ?>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row toolbar -->
                    <div class="product_column">
                        <div class="row shop_wrapper grid_4" style="margin:0" id="filter_product">
                            @forelse($products as $product)
                                @include('templete_two/product/layout_single_product',$product)      
                            @empty
                            <div class="col-12 display-4 text-secondary">
                                No product found
                            </div>
                            @endforelse
                        </div>
                        <div id="laravelNavigation">
                            <p>{{$products->appends(request()->query())->links()}}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
      document.addEventListener("click", (evt) => {
        const flyoutEl = document.getElementById("filterSet");
        const flyoutE2 = document.getElementById("mobileFilter");
        let targetEl = evt.target; // clicked element      
        do {
          if(targetEl == flyoutEl || targetEl == flyoutE2 ) {
            // This is a click inside, does nothing, just return.
            // document.getElementById("flyout-debug").textContent = "Clicked inside!";
            return;
          }
          // Go up the DOM
          targetEl = targetEl.parentNode;
        } while (targetEl);
        // This is a click outside.      
            closeFilterSet()
      });
    </script>
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

$('.common_selector').change(function(){
    // filter_data();
    setFilterUrl();
});


function setFilterUrl(){
    var currentURL = window.location.href.split("?")
    var nextUrl = currentURL[0]
    console.log(currentURL)

    // console.log('setFilterUrl():')

    var stock = get_filter('product_stock')

    var price = $(".product_sort").val()
    var limit = $(".product_limit").val()

    if(limit){
        var nextUrl = nextUrl + "?limit="+limit
    }else{
        var nextUrl = nextUrl + "?limit=12"
    }

    // console.log($("#priceRange1").val())
    // console.log($("#priceRange2").val())
    if($("#priceRange1").val() == $("#priceRange1s").val() && $("#priceRange2").val() == $("#priceRange2s").val()){
        // console.log('range1 and range2 same')
    }else{
        var nextUrl =nextUrl + "&price="+$("#priceRange1").val()+","+$("#priceRange2").val();
    }

    


    if(price){
        var nextUrl =nextUrl + "&sort="+price
    }

    var stock = get_filter('product_stock')
    // console.log('Stock:',stock)
    // console.log('Stock length:',stock.length)
    var stockText = ""
    if(stock.length > 0){
        for (let i = 0; i < stock.length; i++) {
            if(i>0){
                stockText += ","+stock[i]
            }else{
                stockText += stock[i]
            }
        }
        var nextUrl = nextUrl + "&stock="+stockText
    }

    console.log('stockText:',stockText)

    
    

    // console.log('next url:',nextUrl)
    window.location.href = nextUrl
    // const nextURL = 'http://localhost/binarylogic/filterProduct';
    // const nextTitle = 'My new page title';
    // const nextState = { additionalInformation: 'Updated the URL with JS' };
    // window.history.pushState(nextState, nextTitle, nextURL);
}
function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}
function __filter_data()
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

        var appFilterPath = "http://localhost/binarylogic/filterProduct";
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
    

    function __filterPage(page){
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




$(function() {
    var minPrice = parseInt($("#priceRange1").val());
    var maxPrice = parseInt($("#priceRange2").val());
    var minPriceS = parseInt($("#priceRange1s").val());
    var maxPriceS = parseInt($("#priceRange2s").val());
    $("#price-range").slider({
        change: function( event, ui ) {
            setFilterUrl();
        },
        step: 10,
        range: true, 
        min: minPriceS, 
        max: maxPriceS, 
        values: [minPrice, maxPrice],
        slide: function(event, ui)
            {
                $("#priceRange1").val(ui.values[0]);
                $("#priceRange2").val(ui.values[1]);
            }
    });
    // set on load price
    // $("#priceRange1").val($("#price-range").slider("values", 0));
    // $("#priceRange2").val($("#price-range").slider("values", 1));

    if(localStorage.getItem("filterSet") == 'open'){
        showMobileFilter();
    }
});
</script>
<style>
.slider-box {
margin-bottom: 15px;
}
.ui-slider-horizontal {
height: 10px;
background: #dbdbdb;
border: none;
width: 85%;
margin: 20px auto;
}
.ui-slider-horizontal .ui-slider-range {
height: 10px;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
width: 24px;
height: 24px;
}
.slider-input {
    display: flex;
    justify-content: space-around;
    padding-bottom: 20px;
}
.slider-input input {
    width: 100px;
    border: 1px solid #ddd;
    text-align: center;
    padding: 5px;
}
</style>
<script>
    
function submitNewRange(){
    setFilterUrl();
}
    function showMobileFilter(){
        $("#filterSet").addClass('open');
        localStorage.setItem("filterSet", "open");
        const collection = document.getElementsByClassName("off_canvars_overlay");
        collection[0].style.opacity = '.5';
        collection[0].style.visibility = 'visible';

    }

    function closeFilterSet(){
        $("#filterSet").removeClass('open');
        localStorage.setItem("filterSet", "close");
        const collection = document.getElementsByClassName("off_canvars_overlay");
        collection[0].style.opacity = '0';
        collection[0].style.visibility = 'hidden';
    }
</script>

@endsection