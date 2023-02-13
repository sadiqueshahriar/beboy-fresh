<!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="p-items-wrap">
                @foreach($newProducts as $product)
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="p-item-img"> <a  href="{{route('/', $product->slug)}}" width="228" height="228"><img
                                src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->name}}"></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a href="{{route('/', $product->slug)}}">{{$product->name}}</a></h4>
                                <div class="p-item-price">
                                    @if (!empty($product->offer_price && $product->special_price))
                                    <span style="color: red"><del> ৳ {{$product->special_price}}</del></span>
                                    <span class="current_price">৳ {{$product->offer_price}}</span> 
                                    @elseif(!empty($product->regular_price && $product->special_price))
                                    <span style="color: red"><del> ৳ {{$product->regular_price}} </del></span>
                                    <span class="current_price">৳ {{$product->special_price}}</span>             
                                    @elseif(!empty( $product->regular_price))
                                    <span class="current_price">৳ {{$product->regular_price}}</span> 
                                    @endif                                    
                                </div>
                            </div>
                            <div class="details_view">
                                <form action="{{route('cart-page')}}" method="POST">
                                    @csrf
                                    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                    <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                    <button class="btn btn-sm shop_now" data-id="{{$product->id}}" type="submit">Shop Now</button>
                                    <a href="{{route('/', $product->slug)}}" class="btn btn-sm">Details</a>
                                </form>                     
                            </div>
                        </div>
                    </div>
                @endforeach   
            </div>
        </div>
    </section>
    <!--product area end-->
 

