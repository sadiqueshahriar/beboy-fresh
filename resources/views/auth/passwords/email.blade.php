@extends('templete_two.layouts.app')




@section('head')

<title>Login</title>

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
                        <h2>Reset Password</h2>

                        <form action="{{route('password.email')}}" method="post">
                        	@csrf
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                                
                            @endif
                            <p>
                                <label>Email <span>*</span></label>
                                <input id="email" type="email" name="email" autocomplete="off" value="{{old('email')}}" placeholder="Enter your email">
                            </p>
                            <span class="text-denger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                            
                            <button type="submit">Send Password Link</button>
                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>







@endsection