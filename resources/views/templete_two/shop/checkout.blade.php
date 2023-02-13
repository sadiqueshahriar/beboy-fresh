@extends('templete_two.layouts.app')
@section('head')
    <title>{{$SiteSetting->meta_title ?? 'Binary Logic'}}</title>

@endsection


@section('content')


<?php
    $user_id = Session::get('user_id');
    $user_name = Session::get('name');
    $user_type = Session::get('user_type');

    $Cart = Cart::content()->count();

    $user = App\Models\Customer::where('id', $user_id)->first();


?>

@php $customer = App\Models\Customer::where('id',$user_id)->first() @endphp

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Confirm Your Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    {{-- <div class="Checkout_section mt-60">
        <div class="container">
           
            <form action="{{route('submitOrder')}}" method="post">
            @csrf
                <div class="checkout_form">
                    <div class="row">


                        <div class="col-lg-6 col-md-6">


                            @if ($errors->any())

                                <div class="alert alert-danger">

                                    <ul>

                                        @foreach ($errors->all() as $error)

                                            <li style="font-size: 18px">{{ $error }}</li>

                                        @endforeach

                                    </ul>

                                </div>

                            @endif



                            @if(session()->has('notif'))

                            <div class="alert alert-success">

                                <strong style="font-size: 18px">{{session()->get('notif')}}</strong>

                            </div>

                            @endif


                            


                                <input type="hidden" class="form-control" name="total" value="{{$total ?? ''}}">

                                <input type="hidden" class="form-control" name="CoupondiscountPrice" value="{{$CoupondiscountPrice ?? ''}}">
                                


                                <h3>Customer Information</h3>
                                <div class="row">

                                    <div class="col-lg-6 mb-20">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" name="shipping_first_name" value="{{$customer->first_name ?? ''}}" required>
                                    </div>


                                    <div class="col-lg-6 mb-20">
                                        <label>Last Name </label>
                                        <input type="text" name="shipping_last_name" value="{{$customer->last_name ?? ''}}">
                                    </div>

                                    
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text"  name="shipping_phone" value="{{$customer->phone ?? ''}}" required>
                                    </div>

                                    
                                    <div class="col-lg-6 mb-20">
                                        <label>Email Address </label>
                                        <input type="text"   name="shipping_email" value="{{$customer->email ?? ''}}">
                                    </div>

                                    
                                    <div class="col-lg-6 mb-20">
                                        <label>City <span>*</span></label>
                                        <input type="text"  name="city" value="{{$customer->city ?? ''}}" required>
                                    </div>

                                    
                                    <div class="col-lg-6 mb-20">
                                        <label>Post Code </label>
                                        <input type="text"  name="postcode" value="{{$customer->post_code ?? ''}}">
                                    </div>
                                    
                                
                                    
                                    <div class="col-lg-6 mb-20">
                                        <label> Delivery Address<span>*</span></label>
                                        <input type="text" name="address" value="{{$customer->address ?? ''}}" required>
                                    </div>


                                  
                                    <div class="col-6 mb-20">
                                        <label for="country">country <span>*</span></label>
                                        <select class="niceselect_option" name="country" id="country">
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mb-20">
                                        <label for="call_time">Free for Call Time</label>
                                        <input type="datetime-local" name="call_time" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="order-notes">
                                            <label for="order_note">Order Notes</label>
                                            <textarea id="order_note" placeholder="Notes about your order, e.g. special notes for delivery." name="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>




                        <div class="col-lg-6 col-md-6">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($contents as $content)
                                            <?php
                                                $product = App\Models\Product::where('id', $content->id)->first();
                                            ?>

                                            <tr>
                                                <td> {{$content->name }}<strong> × {{$content->qty}}</strong></td>
                                                <td> ৳ {{$content->price}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td>৳ {{$sub_total}}</td>
                                            </tr>

                                          <tr>
                                                <th>Discount</th>
                                                <td>৳ {{$CoupondiscountPrice ?? '0'}}</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td><strong>৳ {{$total ?? ''}} /-</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="order_button">
                                        <button onclick="history.back()"    >Go Back</button>
                                        <button type="submit">Confirm Order</button>
                                    </div>
                                </div>
                           
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div> --}}
        <!-- Ec checkout page -->
        <form action="{{route('submitOrder')}}" method="post">
            @csrf
        <section class="ec-page-content section-space-p">
            @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li style="font-size: 18px">{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif



        @if(session()->has('notif'))

        <div class="alert alert-success">

            <strong style="font-size: 18px">{{session()->get('notif')}}</strong>

        </div>

        @endif
        <input type="hidden" class="form-control" name="total" value="{{$total ?? ''}}">

       <input type="hidden" class="form-control" name="CoupondiscountPrice" value="{{$CoupondiscountPrice ?? ''}}">

            <div class="container">
                <div class="row">
                    <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                        <!-- checkout content Start -->
                        <div class="ec-checkout-content">
                            <div class="ec-checkout-inner">
                                <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                    <div class="ec-checkout-block ec-check-bill">
                                        <h3 class="ec-checkout-title">Billing Details</h3>
                                        <div class="ec-bl-block-content">
                                            <div class="ec-check-bill-form">
                                                <form action="#" method="post">
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>First Name*</label>
                                                        <input type="text" name="shipping_first_name"
                                                            placeholder="Enter your first name" required />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Last Name*</label>
                                                        <input type="text" name="shipping_last_name"
                                                            placeholder="Enter your last name" />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="shipping_phone"
                                                            placeholder="Enter your phone number" required />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Email</label>
                                                        <input type="email" name="shipping_email"
                                                            placeholder="Enter your email address" />
                                                    </span>
                                                    <span class="ec-bill-wrap">
                                                        <label>Address</label>
                                                        <input type="text" name="address" placeholder="Address Line " />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>City *</label>
                                                        <span class="ec-bl-select-inner">
                                                            <input type="text" name="city" placeholder="city" />
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Post Code</label>
                                                        <input type="text" name="postalcode" placeholder="Post Code" />
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Country *</label>
                                                        <span class="ec-bl-select-inner">
                                                            <select name="country" id="ec-select-country"
                                                                class="ec-bill-select">
                                                                <option value="bangladesh">Bangladesh</option> 
                                                            </select>
                                                        </span>
                                                    </span>
                                                    <span class="ec-bill-wrap ec-bill-half">
                                                        <label>Payment method *</label>
                                                        <span class="ec-bl-select-inner">
                                                            <select name="payment_method" id="ec-select-country"
                                                                class="ec-bill-select">
                                                                <option value="cash">Cash on delivery</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                   
                                                </form>
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                                <span class="ec-check-order-btn">
                                    {{-- <a class="btn btn-primary" href="#">Place Order</a> --}}
                                    <button class="btn btn-primary" type="submit">Confirm Order</button>
                                </span>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-checkout-rightside col-lg-4 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            @foreach ($contents as $content)
                            <?php
                                $product = App\Models\Product::where('id', $content->id)->first();
                            ?>

                            <tr>
                                <td> {{$content->name }}<strong> × {{$content->qty}}</strong></td>
                                <td> ৳ {{$content->price}}</td>
                            </tr>
                        </table>
                        @endforeach
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Summary</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right">৳ {{$sub_total}}</span>
                                        </div>
                                        <div class="ec-checkout-summary-total">
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right">৳ {{$total ?? ''}} /-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        <div class="ec-sidebar-wrap ec-checkout-del-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-block-content">
                                    <div class="ec-checkout-del">
                                        <span class="ec-del-commemt">
                                                <span class="ec-del-opt-head">Add Comments About Your Order</span>
                                                <textarea name="your-commemt" placeholder="Comments"></textarea>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                        
                    </div>
                </form>
                </div>
            </div>
        </section>


@stop