@extends('templete_two.layouts.app')

@section('content')





    <main>
        <section class="section-404 position-relative">
            <img src="{{asset('public/frontend/img/404.png')}}" alt="BinaryLogic" class="banner--image w-100">

            <div class="banner--404">
                <div class="container overflow-hidden h-100 w-100">
                    <div class="banner__content">
                        <div class="row">
                            <div class="col-md-5">
                                <h3 class="fw-bold mb-0"><span class="text-danger"></span> Page Not Found.</h3>
                                <p class="fz-normal py-3">You didn't break the internet. But we can't find what you are looking for.</p>
                                <a href="{{URL::to('/')}}" class="button button-type-3 rounded">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>







@endsection