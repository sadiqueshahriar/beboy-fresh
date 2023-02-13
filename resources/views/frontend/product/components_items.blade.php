@extends('layouts.frontend.app')

@section('head')

<title>PC Builder | Make Your Personal Computer with Binary Logic</title>

<meta name="title" content="PC Builder | Make Your Personal Computer with Binary Logic">
<meta name="description" content="Binary Logic PC Builder tools helps you to build your desired personal computer">
<meta property="keywords" content="Binary Logic, PC Builder, make my pc" />

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


</style>

    <main>
        <section class="py-5">
            <div class="container overflow-hidden">
                <div class="row gx-5">
                    <div class="col-md-3">
                        <a class="btn fs-2 c-navbar-middle w-100 text-center text-white" href="../../../tools/pc_builder">Back to PC BUILDER</a>
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
                        <div class="row g-4 ComponentFilterProduct" id="ComponentFilterProduct">
                        	@forelse($products as $product)
                                
<div class="col-md-4 col-sm-4 col-6 mb-4">
    <div class="card card-type-2">
        @if($product->discount > 0)
        <div class="card__discount">
            <p class="mb-0">-{{$product->discount}}%</p>
        </div>
        @endif
        <div class="card__image">
            <a href="{{route('/', [$product->slug])}}">
                <img src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" class="card__image lozad-">
                <div class="card__icons--top">
                    <div>
                        <form action="{{route('add-to-wishlist')}}" method="post">
                            @csrf
                            <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                            <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                            <button type="submit" class="btn" style="font-size: 0.5rem;background: #146b96;"><i class="fal fa-heart text-white"></i></button>
                        </form>
                    </div>

                    <div> 
                        @include('frontend.elementstockstatus')
                    </div>
                </div>
            </a>
        </div>
        <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem">
            
            <div>
                <h5 class="card__heading"><a href="{{route('/', [$product->slug])}}" style="text-decoration: none">{{$product->name }}</a></h5>
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
                    <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</strong> <br>
                    @endif

                    @if($product->special_price > 0)
                    <strong class="fz-normal d-inline-block text-success">Special Cash Price: ৳ {{number_format($product->special_price)}}</strong> <br>
                    @endif
                    

                    @if($product->offer_price > 0)
                    <strong class="fz-normal d-inline-block" style="color: #ff8000">Offer Price: ৳ {{number_format($product->offer_price)}}</strong>
                    @endif                                                
                    

                </div>
                @endif

            </div>

            <div class="card__icons align-items-center" style="background:none">
                <a href="{{route('/', [$product->slug])}}" class="btn p-4 h4 btn-lg">View</a>
                @if(!$product->call_for_price)
                @if($product->stock_status != "out_of_stock")
                <a href="{{route('tools/pc_builder/add', [$product->slug, $component->slug])}}" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i>Add</a>
                @endif
                @endif
            </div>
        </div>
    </div>
</div>

                            @empty
                                <div class="bg-warning p-4 font-3x">No compatible product found</div>
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
@endsection