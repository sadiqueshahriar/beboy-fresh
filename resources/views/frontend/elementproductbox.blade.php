@if($product->status == 1)

<div class="col-md-3 col-sm-4 col-6 mb-4">

    <div class="card card-type-2">

        @if($product->discount > 0)

        <div class="card__discount">

            <p class="mb-0">-{{$product->discount}}%</p>

        </div>

        @endif

        <div class="card__image">

            <a title="{{$product->name }}" href="{{route('/', [$product->slug])}}">

                <img data-src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->image_alt ?? $product->name}}"  title="{{$product->image_alt ?? $product->name}}" longdesc="{{$product->image_des}}" class="card__image lozad">

                <span class="card__icons--top">

                    @include('frontend.elementstockstatus')

                </span>

            </a>

            <form action="{{route('add-to-wishlist')}}" method="post" class="card__icons--left">

                @csrf

                <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">

                <input type="hidden" min="1" value="1" class="fz-normal" name="qty">

                <button type="submit" class="mb-0 fz-small lh-1 text-center p-2 bg-blue text-light mt-2 d-inline border-0">Save</button>

            </form>

        </div>

        <div class="d-flex flex-column justify-content-between" style="min-height: 24rem">

            

            <div class="p-3">

                <h2 class="card__heading"><a title="{{$product->name }}" href="{{route('/', [$product->slug])}}" style="text-decoration: none">{{$product->name }}</a></h2>

                <h3>{{$product->subtitle ?? '' }}</h3>

            </div>





            <div class="p-3">

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

                    

                    @if($product->discount_price > 0)

                    <strong class="fz-normal d-inline-block" style="color: #ff8000">Discount Price: ৳ {{number_format($product->discount_price)}}</strong>

                    @endif  



                </div>

                @endif



            </div>



            <div class="card__icons align-items-center" style="background:none">

                <a title="{{$product->name }}" href="{{route('/', [$product->slug])}}" class="btn button-type-1 mx-3">View</a>

                @if(!$product->call_for_price)

                @if($product->stock_status == "in_stock" || $product->stock_status == 'limited_stock')

                <a title="Shop now {{$product->name }}" href="javascript:void(0);" onclick="addToCart({{$product->id}});" class="btn button-type-4" class="btn button-type-4"><span>Shop</span></a>

                <form action="{{route('add-to-cart')}}" method="post" class="me-2 d-none">

                    @csrf

                    <input type="hidden" name="product_id" value="{{$product->id}}" />

                    <input type="hidden" name="qty" value="1" />

                    <button type="submit" class="btn button-type-4"><span>Shop</span></button>

                </form>

                @endif

                @endif

            </div>

        </div>

    </div>

</div>

@endif