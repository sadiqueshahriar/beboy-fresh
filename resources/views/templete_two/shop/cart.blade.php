@extends('templete_two.layouts.app')
@section('head')
    <title>{{$SiteSetting->meta_title ?? 'Binary Logic'}}</title>

@endsection


@section('content')
<style>
    .checkout_btn{
        margin-left: 65px;
        display: flex;
    }
    .checkout_btn a{
      background: transparent;
      padding: 0!important;
    }
    .coupon_inner button {
        margin-left: 7px;
    }
    .checkout_btn a:hover {
    background:none;
}
@media only screen and (max-width: 767px) {
    .checkout_btn {
        margin-left: 0px;
        
  }
  .coupon_inner button {
    margin-left: 5px;
}
.coupon_inner button{
    line-height: 13px !important;
    padding: 10px 11px !important;
}
}
.table_desc .cart_page table tbody tr td.product_remove {
    min-width: 22px !important;
}
.table_desc .cart_page table tbody tr td.product_remove {
    min-width: 22px;
}
.table_desc .cart_page table tbody tr td.product-price {
    min-width: 30px !important;
}

.table_desc{
    margin-bottom: 10px !important;
}

 tr td {
    text-align: center;
}
tr th{
    text-align: center;
}

</style>

<?php
// $user_id = Session::get('user_id');
$user_name = Session::get('name');
$user_type = Session::get('user_type');

$Cart = Cart::content()->count();
//dd($contents);
?>

    

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-5">
        <div class="container">
            <form action="{{URL::to('update-cart')}}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>                             
                                            <th class="product_image" width="5%">Image</th>                         
                                            <th class="product_name">Product</th>       
                                            <th class="product_quantity" width="1%">Quantity</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_remove">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @forelse ($contents as $content)
                                        <?php
                                        $product = App\Models\Product::where('id', $content->id)->first();
                                        ?>
                                        <tr class="cartItem">
                                            <td><img src="{{asset($product->product_image_thumb ?? '')}}" alt=""></td>

                                            <input type="hidden" name="rowid[]" value="{{$content->rowId}}">              
                                            <td class="product_name" style="text-align: start;" width="20%">
                                                
                                                <a href="{{route('/', [$product->slug])}}"><strong>{{$content->name }}</strong></a>
                                            </td>

                                            <td class="product_quantity" >
                                                <input min="1"
                                                    max="100" value="{{$content->qty}}" name="quantity[]" type="number">
                                            </td>

                                            <?php
                                                $totalPrice = $content->price * $content->qty;
                                            ?>
                                            <td class="product_total" width="7%">৳ {{$totalPrice}}</td>
                                            <td class="product_remove" width="3%">
                                                <a href="{{ route('delete-from-cart', $content->rowId) }}" data-id="{{$content->rowId}}" class="">
                                                    <svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 458.5 458.5" style="enable-background:new 0 0 458.5 458.5;" xml:space="preserve">
                                               
                                                           <path d="M382.078,57.069h-89.78C289.128,25.075,262.064,0,229.249,0S169.37,25.075,166.2,57.069H76.421
                                                               c-26.938,0-48.854,21.916-48.854,48.854c0,26.125,20.613,47.524,46.429,48.793V399.5c0,32.533,26.467,59,59,59h192.508
                                                               c32.533,0,59-26.467,59-59V154.717c25.816-1.269,46.429-22.668,46.429-48.793C430.933,78.985,409.017,57.069,382.078,57.069z
                                                                M229.249,30c16.244,0,29.807,11.673,32.76,27.069h-65.52C199.442,41.673,213.005,30,229.249,30z M354.503,399.501
                                                               c0,15.991-13.009,29-29,29H132.995c-15.991,0-29-13.009-29-29V154.778c12.244,0,240.932,0,250.508,0V399.501z M382.078,124.778
                                                               c-3.127,0-302.998,0-305.657,0c-10.396,0-18.854-8.458-18.854-18.854S66.025,87.07,76.421,87.07h305.657
                                                               c10.396,0,18.854,8.458,18.854,18.854S392.475,124.778,382.078,124.778z"/>
                                                           <path d="M229.249,392.323c8.284,0,15-6.716,15-15V203.618c0-8.284-6.715-15-15-15c-8.284,0-15,6.716-15,15v173.705
                                                               C214.249,385.607,220.965,392.323,229.249,392.323z"/>
                                                           <path d="M306.671,392.323c8.284,0,15-6.716,15-15V203.618c0-8.284-6.716-15-15-15s-15,6.716-15,15v173.705
                                                               C291.671,385.607,298.387,392.323,306.671,392.323z"/>
                                                           <path d="M151.828,392.323c8.284,0,15-6.716,15-15V203.618c0-8.284-6.716-15-15-15c-8.284,0-15,6.716-15,15v173.705
                                                               C136.828,385.607,143.544,392.323,151.828,392.323z"/>
                                                   
                                               </svg>
                                            </a>
                                            </td>


                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">
                                                    <h1 class="mt-5 mb-5">No Product Added To Cart !!</h1>
                                                </td>
                                            </tr>
                                        @endforelse
                                        
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>

           
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="{{URL::to('/')}}">
                                <button type="button" class="btn-sm text-white mb-2" style=" background: #0063d1;"> Continue Shopping</button>
                            </a>
                        @if(session()->has('empty_notif'))
                        <div class="alert alert-danger">
                            <strong style="font-size: 12px">{{session()->get('empty_notif')}}</strong>
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                            <strong style="font-size: 12px">{{session()->get('error')}}</strong>
                        </div>
                        @endif

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code">
                                <div class="coupon_inner">        
                                    <div class="checkout_btn">
                                        <button type="submit" class="btn-sm text-white" style=" background: #3a3285;">update</button>
                                    </form>
                                        <form action="{{route('checkout')}}" method="get">
                                            @csrf
                                            <input type="hidden" name="CoupondiscountPrice" value="{{$CoupondiscountPrice ?? ''}}">
                                            <input type="hidden" name="total" value="{{$total ?? ''}}">
                                            <button type="submit" class="btn-sm text-white" style=" background: #3a3285;">Check Out</button>
                                            
                                        </form>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            
        </div>
    </div>
    <!--shopping cart area end -->


@stop