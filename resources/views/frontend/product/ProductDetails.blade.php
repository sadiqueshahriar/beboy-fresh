<div class="modal-content">
    <div class="modal-header bg-blue">
        <h5 class="modal-title text-light" id="exampleModalLabel">{{$product->name}}</h5>
        <button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
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
                @include('frontend.elementstockstatus',$product)
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
                <div class="mb-4 d-flex">
                    <h1> {{$siteSetting->phone ?? ''}}</h1>
                </div>

                @else

                <div class="mb-4 d-flex">

                    <a href="{{route('tools/pc_builder/add', [$product->slug, $product->component_id])}}" class="button button-type-1 button-icon" style="background:green;width:250px"><i class="fal fa-shopping-bag me-3"></i>Add to PC Builder</a>

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