@extends('layouts.frontend.app')



@section('content')



<?php

    $user_id = Session::get('user_id');

    $user = App\Models\Customer::where('id', $user_id)->first();

?>

@php $customer = App\Models\Customer::where('id',$user_id)->first() @endphp



<section class="register-section">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="main-register-wrapper">

                    <div class="register-icon">

                        <i class="fas fa-shopping-cart" aria-hidden="true"></i>

                    </div>

                    <div class="register-box">

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

                        <div class="row">





                            <form action="{{route('submitOrder')}}" method="post">

                                @csrf

                                <div class="col-md-8">

                                    <input type="hidden" class="form-control" name="total" value="{{$total ?? ''}}">

                                    <input type="hidden" class="form-control" name="CoupondiscountPrice" value="{{$CoupondiscountPrice ?? ''}}">



                                    <input type="text" class="form-control" name="shipping_first_name" value="{{$customer->first_name ?? ''}}" placeholder="First Name">

                                    <input type="text" class="form-control" name="shipping_last_name" value="{{$customer->last_name ?? ''}}" placeholder="Last Name">

                                    <input type="text" class="form-control" name="shipping_phone" value="{{$customer->phone ?? ''}}" placeholder="Phone Number">

                                    <input type="text" class="form-control" name="shipping_email" value="{{$customer->email ?? ''}}" placeholder="Email address" >

                                    <input type="text" class="form-control" name="city" value="{{$customer->city ?? ''}}" placeholder="City">

                                    <input type="text" class="form-control" name="postcode" value="{{$customer->post_code ?? ''}}" placeholder="Post Code">

                                    <input type="text" class="form-control" name="country" value="{{$customer->country ?? ''}}" placeholder="Country">

                                    <textarea class="form-control" name="address" value="{{$customer->address ?? ''}}" placeholder="Shipping Address">{{$user->address}}</textarea>

                                    <textarea class="form-control" name="message" placeholder="Your Message"></textarea>

                                </div>



                                <button type="submit" class="btn btn btn-success btn-lg w-100">Submit Order</button> 

                            </form>

                        </div>

                        <br>

                        

                        <a href="{{URL::to('/')}}" class="w-100"><button type="submit" class="btn btn btn-info text-white btn-lg w-100">Continue Shopping</button> </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>













@endsection