@extends('layouts.frontend.app')

@section('head')

<title>{{$prosubcategory->meta_title ?? ''}}</title>
<meta name="title" content="{{$prosubcategory->meta_title ?? ''}}">
<meta name="description" content="{{$prosubcategory->meta_des ?? ''}}">
<meta property="keywords" content="{{$prosubcategory->meta_keywords ?? ''}}" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->slug ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->image ?? ''}}">


<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->slug ?? ''}}" />
<meta property="og:type"          content="category" />
<meta property="og:title"         content="{{$prosubcategory->meta_title ?? ''}}" />
<meta property="og:description"   content="{{$prosubcategory->meta_des ?? ''}} " />
<meta property="og:keywords"   content="{{$prosubcategory->meta_keywords ?? ''}} " />
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->image ?? ''}}">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@BinaryLogic" />
<meta name="twitter:creator" content="@BinaryLogic" />
<meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->slug ?? ''}}" />
<meta property="twitter:title" content="{{$prosubcategory->meta_title ?? ''}}" />
<meta property="twitter:description" content="{{$prosubcategory->meta_des ?? ''}}" />
<meta property="og:keywords"   content="{{$prosubcategory->meta_keywords ?? ''}} " />
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$prosubcategory->image ?? ''}}" />

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
</style>

<main>
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-3">
                    <!--@include('layouts.frontend.price_range')-->
                    @include('layouts.frontend.category_sidebar')
                </div>
                <!-- end of col -->
                <div class="col-md-9">
                    <div class="controller">
                        <div class="clearfix">
                            <div class="float-start">
                                <h1 class="fz-large fw-bold mb-0" style="padding: 4px 0;">{{$prosubcategory->name ?? ''}}</h1>
                            </div>
                            <form class="float-end">
                                <span class="fz-small me-4">Sort By</span>
                                <select class="fz-small py-1 px-3" name="filterValue" id="filterValue" onchange="ProSubCategoryFilterProduct(this)">
                                    <option value="default">Default</option>
                                    <option value="a_z">Name (A - Z)</option>
                                    <option value="z_a">Name (Z - A)</option>
                                    <option value="lowestPrice">Price (Lowest > Highest)</option>
                                    <option value="HighestPrice">Price (Highest > Lowest)</option>
                                    <option value="BestSeller"> Best Seller </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <!-- end of controller -->
                    <div class="row g-4 ProSubCategoryFilterProduct">
                        @forelse($products as $product)
                        <?php
                        $ProductEmi = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_price', 'desc')->first();
                        $ProductStockStatuses = App\Models\ProductStockStatus::where('product_id', $product->id)->get();
                        ?>

                        <div class="col-12 col-md-4">
                            <div class="card card-type-2">
                                @if($product->discount  >= 1)
                                <div class="card__discount">
                                    <p class="mb-0">-{{$product->discount}}%</p>
                                </div>
                                @endif
                                <div class="card__image">
                                    <a href="{{route('/', [$product->slug])}}">
                                        <img src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" class="card__image">
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
                                        <strong class="fz-normal d-inline-block text-success">Special Price: ৳ {{number_format($product->special_price)}}</strong> <br>
                                        @endif
                                    </div>
                                    @endif

                                    @if(isset($ProductEmi->emi_price))
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
                                        <strong class="fz-small d-inline-block">Monthly EMI ৳ {{$ProductEmi->emi_price ?? ''}}</strong>
                                    </div>
                                    @endif
                                </div>
                                    <div class="card__icons align-items-center">

                                        <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$product->id}}">
                                            <i class="fal fa-eye me-3"></i> View
                                        </button>

                                        @if(!$product->call_for_price)
                                        <a href="{{route('/', [$product->slug])}}" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="product-not-found">
                                <span class="icon"><i class="fal fa-info-circle"></i></span>
                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <!-- end of row -->
                    <p>{{$products->links()}}</p>
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
    var category_id = <?php echo $prosubcategory->category_id; ?>;
    var subcategory_id = <?php echo $prosubcategory->subcategory_id; ?>;
    var prosubcategory_id = <?php echo $prosubcategory->id; ?>;

    function ProSubCategoryFilterProduct(product) {
        var $this = $(this);
        var cat_id = category_id;
        var id = subcategory_id;
        var filterValue = $('#filterValue').val();
        console.log(filterValue);
        if (id) {
            $.ajax({
                url: "{{url('/filter-prosubcategory-products/')}}/" + cat_id + "/" + subcategory_id + "/" + prosubcategory_id + "/" + filterValue,
                type: "GET",
                dataType: "json",
                beforeSend: function() {

                },
                success: function(data) {
                    console.log(data.responseText);

                },
                error: function(error) {
                    console.error(error);
                    $('.ProSubCategoryFilterProduct').html(error.responseText);
                }
            })
        }
    }
</script>





@endsection