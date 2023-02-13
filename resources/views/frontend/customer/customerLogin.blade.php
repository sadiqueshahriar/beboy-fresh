@extends('layouts.frontend.app')

@section('content')




<section class="login-section">
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
                        
                        <div class="d-flex mt-4">
                            <!--<a class="button button--social-login facebook" href="{{ route('facebook_login') }}"><i class="icon fab fa-facebook-f"></i> Facebook</a>-->
                            <!--<a class="button button--social-login google" href="{{ route('google_login') }}"><i class="icon fab fa-google"></i> Google</a>-->
                        </div>

                    	<form action="{{route('customerLogin')}}" method="post">
                            @csrf
	                        <input type="text" placeholder="Email address" name="email"><br>
	                        <input type="text" placeholder="Password" name="password"><br>
	                        <button type="submit" class="btn btn-primary fz-normal btn-lg w-100">Login</button>
                        </form>

                        <br>
                        <span class="fz-normal">Or</span> <br>

                        <span class="donthaveaccount fz-normal">Don't have any accounts? <a class="text-decoration-none" href="{{route('customerRegister')}}">Register here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection