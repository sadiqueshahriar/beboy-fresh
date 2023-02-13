@extends('layouts.frontend.app')

@section('content')
<?php
$user_id = Session::get('user_id');
$user_name = Session::get('name');
$user_type = Session::get('user_type');

$Cart = Cart::content()->count();
//dd($contents);
?>

<main>
    <section class="pt-4 pb-5">
        <div class="container overflow-hidden">
            <div class="row">
                <div class="col-12">
                    <h3 class="pb-3 mb-25 border-bottom border-sky-blue text-sky-blue">Shopping Cart</h3>
                </div>
                <div class="col-md-8">
                    <div class="table-responsive">
                        <form action="{{URL::to('update-cart')}}">
                            <table class="table fz-normal cart-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th class="text-nowrap">Unit Price</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(!empty($contents)){
                                    foreach ($contents as $content) { ?>
                                        <?php
                                        $product = App\Models\Product::where('id', $content->id)->first();
                                        ?>
                                        <tr class="cartItem">
                                            <input type="hidden" name="rowid[]" value="{{$content->rowId}}">

                                            <td><img src="{{ asset($product->image) }}" alt=""></td>
                                            <td class="">
                                                  
                                                @if($product->stock_status == "in_stock")
                                                <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</span>
                                                @endif

                                                @if($product->stock_status == "out_of_stock")
                                                <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">Out Of Stock</span>
                                                @endif

                                                @if($product->stock_status == "new_arrived")
                                                <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">New Arrived</span>
                                                @endif

                                                @if($product->stock_status == "limited")
                                                <span class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">Limited Stock</span>
                                                @endif

                                                @if($product->stock_status == "upcoming")
                                                <span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">Upcoming</span>
                                                @endif

                                                <a href="{{route('/', [$product->slug])}}"> {{$content->name }}</a>
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="{{$content->qty}}" name="quantity[]" style="color: black">
                                            </td>
                                            <td class="text-nowrap">৳ {{$content->price}}</td>

                                            <?php
                                                $totalPrice = $content->price * $content->qty;
                                            ?>

                                            <td class="text-nowrap">৳ {{$totalPrice}}</td>
                                            <td><a data-id="{{$content->rowId}}" class="DeleteItem text-theme" style="padding: 4px 9px 2px 10px;border: 1px solid #ddd;border-radius: 50%;color: red;">X</a></td>
                                        </tr>
                                    <?php } 
                                    }?>
                                </tbody>
                                <tfoot>
                                    <tr class="py-3">
                                        <td colspan="2"><a href="{{URL::to('/')}}" class="button button-type-1 button-small">Continue Shopping</a></td>
                                        <td></td>
                                         <td><a href="{{route('/', ['clearcart'])}}" class="button button-type-1 button-small text-nowrap">Clear Cart</a></td> 
                                        <td colspan="2"><button type="submit" class="button button-type-1 button-small text-nowrap">Update Cart</button></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
                <!-- end of col -->

                <div class="col-md-4" id="totalAjaxCall">
                    <div class="bg-white rounded-3 p-4 totalPricingLoad">
                        <h5 class="mb-4 text-sky-blue">Order Summary</h5>

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

                        <p class="mb-2 d-flex justify-content-between">
                            <span class="fz-small">Subtotal ({{$Cart}} items)</span>
                            <span class="fz-small">৳ {{$sub_total}}</span>
                        </p>


                        <form action="{{route('apply-coupon')}}" class="d-flex my-3" method="post">
                            @csrf
                            <input type="text" class="fz-normal w-100 border-sky-blue rounded-start" placeholder="Enter Your Coupon" name="couponCode" value="{{$couponCode ?? ''}}">
                            <button type="submit" class="button button-type-1 rounded-end fz-normal px-4">Apply</button>
                        </form>

                        <p class="mb-2 d-flex justify-content-between">
                            <span class="fz-small">Discount</span>
                            <span class="fz-small">৳ {{$CoupondiscountPrice ?? '0'}}</span>
                        </p>

                        <p class="mb-2 d-flex justify-content-between">
                            <span class="fz-small">Total Price</span>
                            <span class="fz-small">৳ {{$total ?? ''}} /-</span>
                        </p>

                        <form action="{{route('checkout')}}" method="get">
                            @csrf
                            <input type="hidden" name="CoupondiscountPrice" value="{{$CoupondiscountPrice ?? ''}}">
                            <input type="hidden" name="total" value="{{$total ?? ''}}">
                            <button type="submit" class="button button-type-1 fz-normal d-block w-100">CheckOut</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>









@endsection