<div class="modal-content">
    <div class="modal-header bg-blue">
        <h5 class="modal-title text-light" id="exampleModalLabel">{{$product->name}}</h5>
        <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
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
                    <div class="col-3 col-sm-4" style="overflow-y: auto; max-height: 35rem;">
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
                    <span style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</span> <br>
                    @endif
                    <span>Special Price: ৳ {{number_format($product->special_price)}}</span> <br>
                    @endif
<!-- 
                    @foreach($ProductEmis as $ProductEmi)
                    @if($ProductEmi->emi_month && $ProductEmi->emi_price)
                    <span style="font-size: 10px; color: red">{{$ProductEmi->emi_month}} Months EMI - {{$ProductEmi->emi_price}} Taka</span> <br>
                    @endif
                    @endforeach -->
                </h5>

                <p class="fz-small mb-0">SKU: BL-{{$product->sku ?? ''}}</p>

                <p class="fz-small mb-4">NOTE: {{$product->note ?? ''}}</p>

                <p class="fz-small mb-4">WARRANTY: {{$product->warranty ?? ''}}</p>


                @if($product->call_for_price)
                <div class="mb-4 d-flex">
                    <h1> {{$siteSetting->phone ?? ''}}</h1>
                </div>

                @else

                <div class="mb-4 d-flex">

                    <form action="{{route('add-to-cart')}}" class="d-flex" method="post">
                        @csrf
                        <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                        <input type="number" min="1" value="1" class="fz-normal" name="qty" style="max-width: 10rem">
                        <button class="button button-type-1" data-id="{{$product->id}}">ADD TO CART</button>
                    </form>

                    <form action="{{route('cart-page')}}" class="d-flex ms-3" method="post">
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
                    <a href="{{route('/', [$product->brand->slug ?? ''])}}" class="text-decoration-none text-dark fz-small text-uppercase">{{$ProductBrand->brand->name ?? ''}}

                        @if(count($ProductBrands)>1)
                        ,
                        @endif

                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end of inner row -->
    </div>
</div>