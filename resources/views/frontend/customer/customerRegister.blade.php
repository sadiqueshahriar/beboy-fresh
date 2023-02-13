@extends('layouts.frontend.app')

@section('content')

<?php
    $user_id = Session::get('user_id');
?>

<style>
    
.login-box input, .login-box select{
    margin-bottom: 0 !important;
}    
.login-box button{
    margin-top: 10px !important;
}

</style>

<section class="register-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-login-wrapper">
                    <div class="login-icon">
                        <i class="fal fa-user me-2" aria-hidden="true"></i>
                    </div>
                    <div class="login-box">
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

                        <div class="alert alert-success" id="success_msg" style="display: none">
                            <strong style="font-size: 18px">Your Registation Successful !</strong>
                        </div>

                        <div class="row">


                            <form action="{{route('customerRegister')}}" method="post" id="main_form">
                                @csrf
                                <div class="col-md-12">

                                    <div class="f_name" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" >
                                        <span class="text-danger error-text first_name_error"></span>
                                    </div>

                                    <div class="l_name" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" >
                                        <span class="text-danger error-text last_name_error"></span>
                                    </div>

                                    <div class="gender" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <select name="gender" class="form-control" >
                                            <option value="" disabled="" selected="">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        <span class="text-danger error-text gender_error"></span>
                                    </div>

                                    <div class="phone" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" >
                                        <span class="text-danger error-text phone_error"></span>
                                    </div>

                                    <div class="email" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="text" class="form-control" name="email" placeholder="Email address" >
                                        <span class="text-danger error-text email_error"></span>
                                    </div>

                                    <div class="password" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="password" class="form-control" name="password" placeholder="Password" >
                                        <span class="text-danger error-text password_error"></span>
                                    </div>

                                    <div class="password_confirmation" style="text-align: left;font-size: 15px;font-weight: 900;">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" >
                                        <span class="text-danger error-text password_confirmation_error"></span>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary btn btn-warning btn-lg w-100" style="font-size: 19px; font-weight: 900;">Registration</button> 
                            </form>
                        </div>
                        <br>
                        
                        @if($user_id)
                            <span class="donthaveaccount">Already Logged In</span>
                        @else
                        <span class="fz-small">Or</span> <br>
                            <span class="donthaveaccount">Registration Already? <a class="text-decoration-none" href="{{route('customerLogin')}}">Login</a></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection