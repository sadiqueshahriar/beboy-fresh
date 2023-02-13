@extends('layouts.frontend.app')

@section('head')
    @if(!empty($page))
    <title>{{$page->meta_title ?? $page->title}}</title>
    <meta name="title" content="{{$page->meta_title ?? $page->title}}">
    <meta name="description" content="{{$page->meta_des ?? ''}}">
    <meta property="keywords" content="{{$page->meta_keywords ?? ''}}" />
    <meta property="type" content="Website" />
    <meta property="site_name" content="BinaryLogic" />
    <meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$page->slug ?? ''}}" />
    <meta property="image" content="{{ 'https://binarylogic.com.bd/'.$page->meta_image ?? ''}}">

    <meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$page->slug ?? ''}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$page->meta_title ?? ''}}" />
    <meta property="og:description"   content="{{$page->meta_des ?? ''}} " />
    <meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$page->meta_image ?? ''}}">

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BinaryLogic" />
    <meta name="twitter:creator" content="@BinaryLogic" />
    <meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$page->slug ?? ''}}" />
    <meta property="twitter:title" content="{{$page->meta_title ?? ''}}" />
    <meta property="twitter:description" content="{{$page->meta_des ?? ''}}" />
    <meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$page->meta_image ?? ''}}" />
    @endif
@endsection

@section('content')


<main class="pt-4">


    <!-- <div class="container mt-4 mb-5">
        <div class="slider-headline_container">
            <div class="row">
                <div class="col-md-11">
                    <div class="slider-headline">
                        <div class="slider-headline__slide">
                            <p class="mb-0 text-white"> Home / {{$banner->title ?? ''}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="post__title">
                    <h1 class="mb-4 pb-3 border-bottom border-sky-blue text-sky-blue text-center">{{$banner->title ?? ''}}</h1>
                </div>
                <div class="post__img">
                    <img src="{{asset($banner->image ?? '')}}" alt="{{$banner->title ?? ''}}" class="img-fluid w-100">
                </div>
                <div class="post__des">
                    <p>{!!$banner->description ?? '' !!}</p>
                </div>
            </div>
        </div>
    </div>





</main>







@endsection