@extends('templete_two.layouts.app')





@section('head')

<title>{{$brand->meta_title ?? ''}}</title>

<meta name="title" content="{{$brand->meta_title ?? ''}}">

<meta name="description" content="{{$brand->meta_des ?? ''}}">

<meta property="keywords" content="{{$brand->meta_keywords ?? ''}}" />

<meta property="site_name" content="Binarylogic" />

<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />

<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}">



<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />

<meta property="og:type"          content="brand" />

<meta property="og:title"         content="{{$brand->meta_title ?? ''}}" />

<meta property="og:description"   content="{{$brand->meta_des ?? ''}} " />

<meta property="og:keywords"   content="{{$brand->meta_keywords ?? ''}} " />

<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}">



<meta name="twitter:card" content="summary" />

<meta name="twitter:site" content="@BinaryLogic" />

<meta name="twitter:creator" content="@BinaryLogic" />

<meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />

<meta property="twitter:title" content="{{$brand->meta_title ?? ''}}" />

<meta property="twitter:description" content="{{$brand->meta_des ?? ''}}" />

<meta property="og:keywords" content="{{$brand->meta_keywords ?? ''}} " />

<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}" />



<script type="application/ld+json">
    @php 
 
        $i=1; 
    
    @endphp
    
    {
    
      "@context": "http://schema.org/",
    
      "@type": "BreadcrumbList",
    
      "name" : "{{$brand->name}}",
    
      "image" : "{{ 'http://www.beboybd.com/'.$brand->image}}",
    
      "description" : "{{$brand->meta_des}}",
    
      "url" : "{{ 'http://www.beboybd.com/'.$brand->slug ?? ''}}"
    
    @if($brand->slug != 'offer')
    
      ,"itemListElement": [
    
        @if(!empty($brand))
            {
    
                "@type": "ListItem",
    
                "position": {{ $i }},
    
                "name": "{{ $brand->name }}",
    
                "item": "http://www.beboybd.com/{{ $brand->slug }}"
    
            }

            @if(!empty($brands) && sizeof($brands) > 0)

               ,

            @endif

        @endif
        @if(!empty($brands) && sizeof($brands) > 0)
            @foreach ($brands as $brand)
    
                @php
                    if($i<sizeof($brands))
                    {
                        $ext_comm = ",";
                   }
                 else {
                    $ext_comm = "";
                }
    
                @endphp
    
                {
    
                "@type": "ListItem",
    
                "position": {{ $i }},
    
                "name": "{{ $brand->name }}",
    
                "item": "http://www.beboybd.com/{{ $brand->slug }}"
    
                }{{$ext_comm}}
    
                @php
    
                    $i++;
    
                @endphp
    
            @endforeach
    
        @endif
    
       ]
     @endif
    
    }
    </script>
    <script>
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

@section('content')

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

    nav span a:first-child{

        width:30px;

    }

    nav span a:last-child{

        width:30px;

    }

    nav span svg{

        width:20px;

    }
    ul, li {
list-style: none;
}



@media all and (max-width: 767px) {

 
.product_content {
    padding-bottom: 0px !important;
}



}




</style>
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



    <main style="background: #f2f4f8;">
        <section>
            <div class="container">            
                <ul class="breadcrumb">
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                        <span class="breadcrumb__title"><a href="{{URL::to('/')}}">Home</a></span>
                        </span>
                    </li>
                    <li class="breadcrumb__item breadcrumb__item-firstChild">
                        <span class="breadcrumb__inner">
                        <span class="breadcrumb__title">{{$brand->name ?? ''}}</span>
                        </span>
                    </li>
                   
                </ul>

            <div class="row pt-4 withFilter">
                <div id="filterSet" class="col-sm-3">
                    <span class="fs-close" onclick="closeFilterSet()">x</span>
                    <input type="hidden" id="tableName" value="{{$tableName}}">
                    <input type="hidden" id="tableValue" value="{{$brand->id}}">
                    <div class="filters">
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
                            <input type="hidden" id="priceRange2s" value="{{$product_highest->special_price ?? 0}}">
                            <div id="price-range" class="slider"></div>

                            <div class="slider-input">
                                <input type="text" id="priceRange1" onchange="submitNewRange()" value="{{$lower_price ?? $product_lowest->special_price ?? 0}}">
                                <input type="text" id="priceRange2" onchange="submitNewRange()" value="{{$higher_price ?? $product_highest->special_price ?? 0}}">
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

                    <!-- end of col -->

                    <div class="col-9" id="filterResult">
                        <div style="background: #fff;margin-bottom: 15px;padding: 10px;border-radius: 5px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="header-title">{{$brand->name ?? ''}}</h4>
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

                        <!-- end of controller -->

                        <div class="row g-4 BrandFilterProduct w-100" id="BrandFilterProduct">

                        @forelse($ProductBrands as $product)
                        <div class="col-12 col-md-3">
                            @include('templete_two.homepage.components.common_product_cart')
                        </div>
                        @empty

                            <div class="product-not-found">

                                <span class="icon"><i class="fal fa-info-circle"></i></span>

                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>

                            </div>

                            @endforelse

                        </div>

                        <!-- end of row -->



                        @if(isset($ProductBrands))

                        <div id="laravelNavigation">
                            <p>{{$ProductBrands->appends(request()->query())->links()}}</p>
                        </div>

                        @endif

                    </div>

                </div>

            </div>

        </section>

    </main>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" id="product-view">







    </div>

</div>


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

function submitNewRange(){
    setFilterUrl();
}

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

// function __sendFilterRequest(id,categoryId){
//    // console.log(id);
//     var filterValue = $("#"+id).val();
//    // console.log(filterValue);
//     var appFilterPath = "http://localhost/binarylogic/filterProduct";
//     $.ajax({ 
//         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//         type: "POST", 
//         data: {
//             "stockAvailability": filterValue,
//             "categoryId": categoryId,
           
//         },
//         url: appFilterPath,
//         success: function(data) { 
           
//             // console.log('here',data);
//             $("#filter_product").html(data);
//         }
//     });
// }



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
@endsection