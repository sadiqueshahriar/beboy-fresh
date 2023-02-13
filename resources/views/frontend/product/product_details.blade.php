@extends('layouts.frontend.app')

@section('head')

<meta name="title" content="{{$product->meta_title ?? ''}}">
<meta name="description" content="{{$product->meta_des ?? ''}}">
<meta property="keywords" content="{{$product->meta_keywords ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.biz/'.$product->image ?? ''}}" />
<meta property="type" content="{{$product->name ?? ''}} :Product" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}" />




<meta property="og:site_name" content="Binarylogic">
<meta property="og:title" content="{{$product->name ?? ''}}">
<meta property="og:description" content="{{$product->meta_des ?? ''}}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ 'https://binarylogic.biz/'.$product->image ?? ''}}">
<meta property="og:image:width" content="760">
<meta property="og:image:height" content="400">
<meta property="og:url" content="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}">
<meta property="article:published_time" content="{{$product->created_at ?? ''}}" />


@endsection


@section('content')





<main>


    <section class="product-details pt-4 pb-5">
        <div class="container">
            <div class="row gx-4">
                <div class="col-lg-3 d-none d-lg-block">
                    @include('layouts.frontend.category_sidebar')
                </div>
                <!-- end of all categories col -->
                <div class="col-lg-9">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="row gx-3">
                                <div class="col">
                                    <div class="product-image border easyzoom w-100">
                                        <a href="{{asset($product->image)}}" class="popup-image  w-100">
                                            <img src="{{asset($product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" class="elevatezoom w-100" data-zoom-image="{{asset($product->image)}}" style="max-height: 35rem;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <div class="product-thumb-slider product-thumb">
                                            @foreach($productImages as $image)
                                            <div class="slider-item border">
                                                <img src="{{asset($image->product_image)}}" alt="{{$image->product_image_alt}}" longdesc="{{$image->product_image_des}}" class="w-100" data-large-image="{{asset($image->product_image)}}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of col -->
                        <div class="col-lg-6">
                            <h5 class="product-name fw-bold">{{$product->name}}</h5>

                            <div class="col-lg-3 mb-2 text-center">

                                @if($product->stock_status == "in_stock")
                                <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</p>
                                @endif

                                @if($product->stock_status == "out_of_stock")
                                <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">Out Of Stock</p>
                                @endif

                                @if($product->stock_status == "new_arrived")
                                <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">New Arrived</p>
                                @endif

                                @if($product->stock_status == "limited")
                                <p class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">Limited Stock</p>
                                @endif

                                @if($product->stock_status == "upcoming")
                                <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">Upcoming</p>
                                @endif

                            </div>

                            <h5 class="text-sky-blue pb-4 border-bottom mb-4">

                                @if($product->call_for_price)
                                <span> {{$product->call_for_price}}</span> <br>
                                @else
                                @if($product->regular_price != '')

                                <p style="font-size: 18px"><span style="color: #c2c2c2"> Regular Price: ৳ {{number_format($product->regular_price)}}</span><br>

                                    @endif

                                    @if($product->special_price != '')
                                    <span style="color: #ffa500">Special Price: <b>৳ {{number_format($product->special_price)}}</b></span><br>
                                    @endif

                                    @endif

                                    @if($product->discount != '')
                                    <span style="color: #d50b01; font-size: 15px">Discount Price: <b>৳ {{number_format($product->discount_price)}}</b></span><br>
                                    @endif

                            </h5>


                            <!-- @foreach($ProductEmis as $ProductEmi)
                                    @if($ProductEmi->emi_month && $ProductEmi->emi_price)
                                        <span style="font-size: 10px; color: red">{{$ProductEmi->emi_month}} Months EMI - {{$ProductEmi->emi_price}} Taka</span> <br>
                                    @endif
                                @endforeach -->

                            @if(!empty($product->sku))
                            <p class="fz-small">SKU: BL-{{$product->sku ?? ''}}</p>
                            @endif
                            @if(!empty($product->note))
                            <p class="fz-small mb-4">NOTE: {{$product->note ?? ''}}</p>
                             @endif
                             @if(!empty($product->warranty))
                            <p class="fz-small mb-4">WARRANTY: {{$product->warranty ?? ''}}</p>
                            @endif
                            @if($product->home_delivery==1)
                            <p class="fz-small mb-4">Home Delivery: Available</p>
                            @endif
                            @if($product->call_for_price)
                            <div class="mb-4">
                                <h1> {{$siteSetting->phone ?? ''}}</h1>
                            </div>

                            @else

                            <div class="mb-4">

                                <form action="{{route('add-to-cart')}}" class="d-inline-block" method="post">
                                    @csrf
                                    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                    <input type="number" min="1" value="1" class="fz-normal" name="qty">
                                    <button class="button button-type-1" data-id="{{$product->id}}">ADD TO CART</button>
                                </form>

                                <form action="{{route('cart-page')}}" class="d-inline-block" method="post">
                                    @csrf
                                    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                    <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                    <button class="button button-type-1" data-id="{{$product->id}}">BUY NOW</button>
                                </form>

                                <!--<form action="{{route('add-to-wishlist')}}" class="d-inline-block" method="post">
                                            @csrf
                                            <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                            <button class="button button-type-1"  data-id="{{$product->id}}">WISH LIST</button>
                                        </form> -->


                            </div>

                            @endif
                            <div class="mb-4">
                                <strong class="fz-small me-5"></strong>


                                <!-- Facebook -->
                                <div class="fb-share-button " data-href="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}" data-layout="button_count">
                                </div>

                                <!-- Linked IN -->
                                <script src="https://platform.linkedin.com/in.js" type="text/javascript">
                                    lang: en_US
                                </script>
                                <script type="IN/Share" data-url="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}"></script>



                                <a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"></a>
                            </div>

                            <div class="mb-4">
                                <strong class="fz-small">CATEGORIES:</strong> &nbsp;&nbsp;
                                <a href="{{route('/', [$product->category->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">{{$product->category->name ?? ''}}
                                </a>

                                <a href="{{route('/', [$product->subcategory->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">
                                    @if($product->subcategory)
                                    -> {{$product->subcategory->name ?? ''}}
                                    @endif
                                </a>

                                <a href="{{route('/', [$product->prosubcategory->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">
                                    @if($product->prosubcategory)
                                    -> {{$product->prosubcategory->name ?? ''}}
                                    @endif
                                </a>

                                <a href="{{route('/', [$product->proprocategory->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">
                                    @if($product->proprocategory)
                                    -> {{$product->proprocategory->name ?? ''}}
                                    @endif
                                </a>
                            </div>

                            <div class="mb-4">
                                <strong class="fz-small">BRANDS:</strong> &nbsp;&nbsp;
                                @foreach($ProductBrands as $ProductBrand)
                                <a href="{{route('/', [$ProductBrand->brand->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">{{$ProductBrand->brand->name ?? ''}}

                                    @if(count($ProductBrands)>1)
                                    ,
                                    @endif

                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end of inner row -->

                    <div class="product-details-tab border">
                        <ul class="nav border-bottom" id="product-details-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="product_highlights-tab" data-bs-toggle="tab" data-bs-target="#product_highlights" type="button" role="tab" aria-controls="product_highlights" aria-selected="true">Product Highlights</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="true">Specification</button>
                            </li>
<!-- 
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Rating</button>
                            </li> -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="more-products-tab" data-bs-toggle="tab" data-bs-target="#more-products" type="button" role="tab" aria-controls="more-products" aria-selected="false">More Products</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="product-details-tabContent">
                            <div class="tab-pane fade show active" id="product_highlights" role="tabpanel" aria-labelledby="product_highlights-tab">
                                <div class="p-5">
                                    <p>{!!$product->product_highlights ?? ''!!}</p>
                                </div>
                            </div>

                            <div class="tab-pane fade show " id="description" role="tabpanel" aria-labelledby="description-tab">
                                <div class="p-5 productDescription">
                                    <p>{!!$product->description ?? ''!!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                <div class="p-5">
                                    <p>{!!$product->specification ?? ''!!}</p>
                                </div>
                            </div>
<!-- 

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="p-5">
                                    <p>No ratings published yet.</p>
                                </div>
                            </div> -->

                            <div class="tab-pane fade" id="more-products" role="tabpanel" aria-labelledby="more-products-tab">
                                <div class="p-5">
                                    <div class="row g-4">
                                        @foreach($relatedProducts as $product)

                                        <?php
                                        $ProductEmi = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_price', 'desc')->first();
                                        ?>

                                        <div class="col-6 col-md-4">
                                            <div class="card card-type-2">
                                                <div class="card__discount">
                                                    @if($product->discount != '')
                                                    <p class="mb-0">-{{$product->discount}}%</p>
                                                    @endif
                                                </div>
                                                <div class="card__image"><a href="{{route('/', [$product->slug])}}"><img src="{{asset($product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" class="card__image"></a>
                                                </div>
                                                <div class="p-3 ">
                                                    <h5 class="card__heading"><a href="{{route('/', [$product->slug])}}" style="text-decoration: none">{{$product->name }}</a></h5>

                                                    @if($product->call_for_price)
                                                    <div class="align-items-center my-3 text-center">
                                                        <strong class="fz-large d-inline-block text-danger"> {{$product->call_for_price}}</strong>
                                                    </div>
                                                    @else
                                                    <div class="text-center align-items-center my-3">
                                                        @if($product->regular_price != '')
                                                        <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</strong> <br>
                                                        @endif
                                                        <strong class="fz-normal d-inline-block text-success">Special Price: ৳ {{number_format($product->special_price)}}</strong> <br>
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

                                                    <div class="card__icons align-items-center">

                                                        <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$product->id}}">
                                                            <i class="fal fa-eye me-3"></i> View
                                                        </button>

                                                        @if(!$product->call_for_price)
                                                        <a href="{{route('/', [$product->slug])}}" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end fo container -->
    </section>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view">



    </div>
</div>





@endsection