        @if(count($hotdealProducts) > 0)


        <style>
            .p-items-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -5px;
            padding: 0;
            justify-content: flex-start;
        }

        .p-item-inner {
            display: flex;
            flex-direction: column;
            position: relative;
            width: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
        }
        .p-item-img {
            text-align: center;
            border-bottom: 3px solid rgba(55,73,187,.03);
            flex: 0 0 220px;
            padding: 20px;
            margin: 0;
        }
        .p-item-img>a {
            height: 228px;
        }
        .p-item-img img {
            max-width: 100%;
        }
        .p-item-details {
            padding: 15px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }
        p-item-name {
            height: 60px;
            font-weight: 400;
            font-size: 15px;
            margin: 0 0 15px;
            line-height: 20px;
            overflow: hidden;
            font-weight: 400;
            font-size: 14px;
            position: relative;
            
        }
        .p-item-name a {
            color: #111;
        }
        h4{
            font-weight: 400 !important;
            font-size: 15px !important;
            min-height: 57px !important;
        }
        
        .p-item-price {
            line-height: 22px;
            font-size: 17px;
            font-weight: 600;
            color: #0063d1;
            text-align: center;
        }
        .p-item-inner:hover {
            box-shadow: 0 2px 5px rgb(0 0 0 / 10%);
        }
        .details_view{
            display: flex;
            justify-content: space-around;
            border-top: 3px solid rgba(55,73,187,.03);
        
        }
        .shop_now{
            padding-right: 63px;
        }

        
        @media (max-width: 767px){
        .p-item {
            flex: 0 0 50%;
            max-width: 50%;
        
         }
         .p-item-img {
            flex: 0 0 auto;
        }
        h4{
            min-height: 76px !important;
        }
        
        .shop_now{
            padding-right: 0px;
        }

        
    }
    .product_timings {
    margin-top: -13px;
    padding-bottom: 10px;
}
        </style>   

    <!--product area start-->
    <section class="product_area" style="background: #f2f4f8";>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Hot Deals Products</h2>
                    </div>
                </div>
            </div>
            <div class="p-items-wrap">
                @foreach($hotdealProducts as $product)
                <div class="p-item">
                    <div class="p-item-inner">
                        <div class="p-item-img"> <a  href="{{route('/', $product->slug)}}" width="228" height="228"><img
                            src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->name}}"></a>
                        </div>
                       
                     <div class="p-item-details">
                        <div class="product_timings">
                            <div data-countdown="2022/10/19"></div>
                        </div>
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
    @endif

    
<script>
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="countdown_area"><div class="single_countdown"><div class="countdown_number">%D</div><div class="countdown_title">days</div></div><div class="single_countdown"><div class="countdown_number">%H</div><div class="countdown_title">hours</div></div><div class="single_countdown"><div class="countdown_number">%M</div><div class="countdown_title">mins</div></div><div class="single_countdown"><div class="countdown_number">%S</div><div class="countdown_title">secs</div></div></div>'));     
               
       });
    }); 
</script>