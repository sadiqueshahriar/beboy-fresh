@extends('templete_two.layouts.app')




@section('head')

<title>Reset Password</title>

@endsection



@section('content')

<?php

    $user_id = Session::get('user_id');

?>





    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Reset Your Password</h2>

                        <form action="{{ route('password.update') }}" method="post">
                        	@csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                                
                            @endif
                            <p>
                                <label>Email <span>*</span></label>
                                <input id="email" type="email" name="email" autocomplete="off" placeholder="Enter your email" value="{{ $email ?? old('email') }}" required >
                            </p>
                            <span class="text-denger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                            <p>
                                <label>Password <span>*</span></label>
                                <input id="password" type="password"  name="password" autocomplete="new-password">
                            </p>
                            <span class="text-denger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                            <p>
                                <label>Password Confirm <span>*</span></label>
                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                            </p>
                            
                            
                            <button type="submit">Reset Password</button>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>







@endsection