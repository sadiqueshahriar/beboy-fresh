<div class="col-md-3 col-sm-4 col-6 mb-4">
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
                    <div class="d-flex">
                        <form action="{{route('add-to-wishlist')}}" method="post">
                            @csrf
                            <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                            <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                            <button type="submit" class="btn btn-primary" style="font-size:1.5rem">Save</button>
                        </form>
                    </div>
                    
                     
                </div>
            </a>
        </div>
        <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem">
            
            <div>
                <h5 class="card__heading"><a href="{{route('/', [$product->slug])}}" style="text-decoration: none;">{{$product->name }}</a></h5>
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
                    

                    @if($product->offer_price > 0)
                    <strong class="fz-normal d-inline-block" style="color: #ff8000">Offer Price: ৳ {{number_format($product->offer_price)}}</strong>
                    @endif                                                
                    

                    <br>
                </div>
                @endif

            </div>

            <div class="card__icons align-items-center" style="background:none">
                <a href="{{route('/', [$product->slug])}}" class="btn p-4 h4" style="font-size:2rem">View</a>
                @if(!$product->call_for_price)
                <form action="{{route('add-to-cart')}}" method="post" class="me-2">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}" />
                    <input type="hidden" name="qty" value="1" />
                    <button type="submit" class="btn p-4 h4" style="font-size:2rem">Shop</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>