@extends('templete_two.layouts.app')




@section('head')



<title>PC Builder | Make Your Personal Computer with Binary Logic</title>



<meta name="title" content="PC Builder | Make Your Personal Computer with Binary Logic">
<meta name="description" content="Binary Logic PC Builder tools helps you to build your desired personal computer">
<meta property="keywords" content="Binary Logic, PC Builder, make my pc" />
<meta name="robots" content="noindex,nofollow">


<script type="application/ld+json">

{

  "@context" : "http://schema.org",

  "@type" : "Product",

  "name" : "PC Builder | Make Your Personal Computer with Binary Logic",

  "image" : "",

  "description" : "Binary Logic PC Builder tools helps you to build your desired personal computer",

  "url" : "https://binarylogic.com.bd/tools/pc_builder",

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

//dd($component);

?>



<style type="text/css">

	nav{

		text-align: center;

		font-size: 15px;

	}

.product-thumb {
    display: flex;
    margin-bottom: 10px;
    }
    .product-thumb .img-holder {
    flex: 0 0 200px;
    padding: 10px;
    margin: 0;
    text-align: center;
}
img {
    vertical-align: middle;
    border-style: none;
    max-width: 100%;
    height: auto;
}
.product-thumb .product-info {
    padding: 20px;
    flex: 1 1 auto;
    display: flex;
    align-items: center;
}
.product-thumb .product-content-blcok {
    flex: 1 1 auto;
}
.product-thumb .product-info h4 {
    margin-bottom: 10px;
    font-weight: 600;
    font-size: 14px;
    position: relative;
    height: auto;
}
.product-thumb .short-description {
    /* padding: 0 0 0 14px; */
    flex: 1 1 auto;
    margin-bottom: 5px;
}
.product-thumb .short-description li {
    font-size: 13px;
    padding: 5px 0;
    color: #666666;
    position: relative;
    line-height: 16px;
}
.product-thumb .actions {
    flex: 0 0 95px;
}

.product-thumb .actions .price {
    font-size: 20px;
    text-align: center;
}
.product-thumb .btn {
    display: block;
    min-width: 100px;
    text-align: center;
    margin-top: 15px;
}
.btn {
    background: #0063D1;;
    display: inline-block;
    padding: 0 20px;
    margin: 0;
    height: 42px;
    line-height: 38px;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
    outline: none;
    text-align: center;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    transition: all 300ms linear;
}
.btn:hover{
    color: white !important;
}
.ws-box {
    background: #fdfdfd;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
}

@media only screen and (max-width: 991px) {
    .product-thumb .img-holder {
        text-align: center;
         flex: 0 0 100%;
    }
  
    .product-thumb .product-info {
    display: block;
    padding: 0 20px 20px;
}
.product-thumb .product-content-blcok {
    padding-right: 0;
}
.product-thumb .actions {
    padding: 10px 0 0;
    text-align: left;
}

.product-thumb {
    flex: 1 1 100%;
    max-width: 100%;
    flex-wrap: wrap;

  }

}

.new_searchbar{
    display:none;
}


</style>



    <main>

        <section class="py-5">

            <div class="container overflow-hidden">
                
                <div class="row">
                    <div class="col-md-10"></div>
                                <div class="col-md-2 mb-3">
                                    <span class="font-weight-bold sort-font"> Sort By :</span>
                                    <select id="dynamic_select" class="form-select">
                                        <option value="{{ URL::current() }}">All</option>
                                        <option value="{{ URL::current()."?sort=price_asc" }}">Price - Low to High</option>
                                        <option value="{{ URL::current()."?sort=price_desc" }}">Price - High to Low</option>
                                        <option value="{{ URL::current()."?sort=in_stock" }}">In Stock</option>
                                    </select>        
                                </div>

                </div>

                <div class="row gx-5">

                    <div class="col-md-3">

                        <a class="btn fs-2 c-navbar-middle w-100 text-center text-black" href="../../../tools/pc_builder" style="background: #0063D1;color: white;font-size: 23px !important;">Back to PC BUILDER</a>

                    </div>

                    <!-- end of col -->

                    <div class="col-md-9">

                        <div class="controller d-none">

                            <form class="clearfix">

                                <div class="float-end">

                                    <span class="fz-small me-4">Sort By</span>

                                    <select class="fz-small py-1 px-3" name="filterValue" id="filterValue" onchange="ComponentFilterProduct(this)">

                                        <option value="default">Default</option>

                                        <option value="a_z">Name (A - Z)</option>

                                        <option value="z_a">Name (Z - A)</option>

                                        <option value="lowestPrice">Price (Lowest > Highest)</option>

                                        <option value="HighestPrice">Price (Highest > Lowest)</option>

                                        <option value="BestSeller"> Best Seller </option>

                                    </select>

                                </div>

                            </form>

                        </div>

                        <h1 class="mb-4 h2 pb-4 border-bottom">PC Builder Component: {{$component->name}}</h1>

                        <!-- end of controller -->

                        @if(!empty($products))

                            <div class="row shop_wrapper grid_4">


                                @forelse($products as $product)
                                
                                    @if(!empty($product->special_price) || !empty($product->regular_price))
                                    <div class="product-thumb ws-box">
                                        <div class="img-holder">
                                            <a href="{{route('/', $product->slug)}}"><img src="{{asset($product->image ?? '')}}" alt=""></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-content-blcok">
                                                <h4 class="product-name">
                                                    <a href="{{route('/', $product->slug)}}">{{$product->name}}</a>
                                                </h4>
                                            <div class="short-description">
                                                @php
                                                    $ProductHighlights = DB::table('product_highlights')->where('product_id', $product->id)->get();
                                                   
                                                @endphp
                                               
                                                @if(count($ProductHighlights)>0 || $product->product_highlights)
                                                <div class="product_desc">
                                                    @if(count($ProductHighlights)>0)
                    
                                                        @foreach($ProductHighlights as $ProductHighlight)
                                                        <p style="margin: 0"><i class="fa fa-angle-right"></i> {{$ProductHighlight->highlights}}</p>
                                                        
                                                        @endforeach
                    
                                                    @else
                                                        <p>{!!$product->product_highlights !!}</p>
                                                    @endif
                    
                    
                                                </div>
                                                @endif
                                            </div>
                                            </div>
                                            <div class="actions">
                                                <div class="price space-between">
                                                    <div class="price_box" style="min-width: 110px;">
                                                        @if($product->regular_price)
                                                        <span class="old_price">৳ {{$product->regular_price}}</span>
                                                        @endif
                                                        @if($product->special_price)
                                                        <span class="current_price">৳ {{$product->special_price}}</span>
                                                        @endif
                                                    </div>
                                                 <a class="btn-add btn" href="{{route('tools/pc_builder/add', [$product->slug, $component->slug])}}" title="add to cart">Add</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @empty

                                <div class="col-12 display-4 text-secondary">

                                    No product found

                                </div>

                                @endforelse

                              
                            </div>
                            
                            

                        <!-- end of row -->

                        

                        @else

                        <div class="">

                                <span class="icon"><i class="fal fa-info-circle"></i></span>

                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>

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

















<script type="text/javascript">

    var component_id = <?php if(!empty($component)){echo $component->id;} ?>;

    function ComponentFilterProduct(product){

        var $this = $(this);

        var id = component_id;

        var filterValue = $('#filterValue').val();

        console.log(filterValue);

        if (id) {

            $.ajax({

                url: "{{url('/filter-component-products/')}}/"+id+"/"+filterValue,

                type: "GET",

                dataType: "json",

                beforeSend: function() {

                  //task before send  

                },

                success:function(data){

                    // console.log(data.responseText);

                },

                error:function(error){

                    // console.error(error);

                    $('.ComponentFilterProduct').html(error.responseText);

                }

            })

        }

    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
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
    $(function() {
    if (localStorage.getItem('dynamic_select')) {
        $("#dynamic_select option").eq(localStorage.getItem('dynamic_select')).prop('selected', true);
    }

    $("#dynamic_select").on('change', function() {
        localStorage.setItem('dynamic_select', $('option:selected', this).index());
    });
});
</script>



@endsection