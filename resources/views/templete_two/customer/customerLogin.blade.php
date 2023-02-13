@extends('templete_two.layouts.app')




@section('head')

<title>Login</title>

@endsection



@section('content')

<?php

    $user_id = Session::get('user_id');

?>




    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--login area start-->


                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li style="font-size: 12px">{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif



                        @if(session()->has('notif'))

                        <div class="alert alert-success">

                            <strong style="font-size: 12px">{{session()->get('notif')}}</strong>

                        </div>

                        @endif



                        @if(session()->has('login_failed'))

                        <div class="alert alert-danger">

                            <strong style="font-size: 12px">{{session()->get('login_failed')}}</strong>

                        </div>

                        @endif



                        @if(session()->has('login_notify'))

                        <div class="alert alert-danger">

                            <strong style="font-size: 12px">{{session()->get('login_notify')}}</strong>

                        </div>

                        @endif



                        @if(session()->has('login_pls'))

                        <div class="alert alert-danger">

                            <strong style="font-size: 12px">{{session()->get('login_pls')}}</strong>

                        </div>

                        @endif

                        <div class="alert alert-success" id="success_msg" style="display: none">

                            <strong style="font-size: 18px">Your Registation Successful !</strong>

                        </div>
                        


                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                       

                        <form action="{{route('customerLogin')}}" method="post">
                        	@csrf
                           

                            <div class="ec-login-wrapper">
                                <h2>Login</h2>
                                <div class="ec-login-container">
                                    <div class="ec-login-form">
                                        <form action="#" method="post">
                                            <span class="ec-login-wrap">
                                                <label>Email Address*</label>
                                                <input type="text" name="email" autocomplete="off" required />
                                            </span>
                                            <span class="ec-login-wrap">
                                                <label>Password*</label>
                                                <input type="password" type="password" name="password" autocomplete="off" required />
                                            </span>
                                            <span class="ec-login-wrap ec-login-fp">
                                                <label><a href="{{route('password.request')}}">Forgot Password?</a></label>
                                            </span>
                                            <span class="ec-login-wrap ec-login-btn">
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                       <form action="{{route('customerRegister')}}" method="post" id="">

                        @csrf
                        <!-- Start Register -->
                        <section class="ec-page-content section-space-p">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="section-title">
                                        <h2 class="ec-title">Register</h2>
                                    </div>
                                </div>
                                <div class="ec-register-wrapper">
                                    <div class="ec-register-container">
                                        <div class="ec-register-form">
                                            
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>First Name*</label>
                                                    <input type="text" name="first_name" placeholder="Enter your first name" required />
                                                </span>
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>Last Name*</label>
                                                    <input type="text" name="last_name" placeholder="Enter your last name" required />
                                                </span>
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>Email*</label>
                                                    <input type="email" name="email" placeholder="Enter your email add..." required />
                                                </span>
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>Phone Number*</label>
                                                    <input type="text" name="phone" placeholder="Enter your phone number"
                                                        required />
                                                </span>
                                                <span class="ec-register-wrap">
                                                    <label>Password <span>*</span></label>
                                                    <input type="password" name="password">
                                                </span>
                                                
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>Confirm Password <span>*</span></label>
                                                    <input type="password" name="password_confirmation">
                                                </span>
                                                <span class="ec-register-wrap ec-register-btn">
                                                    <button class="btn btn-primary" type="submit">Register</button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- End Register -->
                                        </form>
                                    </div>
                                </div>
                                <!--register area end-->
                            </div>
                        </div>
                 







@endsection