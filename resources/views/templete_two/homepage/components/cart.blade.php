<?php 
    $contents = Cart::content();

    $subtotal = Cart::subtotal();

    $cart = Cart::content()->count();
?>
<div class="mini_cart_wrapper">
    <a href="{{route('/', 'cart')}}">
        <img src="images/shopping-bag.png" alt="shopping-cart">
              
            ৳{{$subtotal}} <img style="height:15px;" src="images/down-arrow-new.png" alt="arrow-down">
            </a>
    <span class="cart_quantity">{{$cart}}</span>
    <!--mini cart-->
        <div class="cart_component">

            <div class="mini_cart">

                @foreach($contents as $content)

                <?php
                    $product = App\Models\Product::where('id', $content->id)->first();

                ?>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="{{route('/', [$product->slug])}}"><img src="{{asset($product->product_image_thumb)}}" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="{{route('/', [$product->slug])}}">{{$content->name }}</a>
                        <p>Qty: {{ $content->qty }} X <span> ৳{{$content->price}} </span></p>
                    </div>
                    <div class="cart_remove">
                        <!-- <a href="#"><i class="ion-android-close"></i></a> -->
                    </div>
                </div>
                @endforeach


                <div class="mini_cart_table">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">৳{{$subtotal}} </span>
                    </div>
                   
                </div>

                <div class="mini_cart_footer">
                    <div class="cart_button">
                        <a href="{{route('/', 'cart')}}">View cart</a>
                    </div>
                    <div class="cart_button">
                        <a href="{{route('/', 'checkout')}}">Checkout</a>
                    </div>

                </div>

            </div>

        </div>
    <!--mini cart end-->
</div>





