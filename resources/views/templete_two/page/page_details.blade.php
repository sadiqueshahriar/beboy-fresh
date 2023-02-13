@extends('templete_two.layouts.app')




@section('head')

    @if(!empty($page))

    <title>{{$page->meta_title ?? ''}}</title>

    <meta name="title" content="{{$page->meta_title ?? ''}}">

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

<style>
    h2{
        line-height: 45px !important;
    }
      @media only screen and (max-width: 767px) {
          h2 {
             line-height: 36px !important;
            }
       }

</style>




    <main class="pt-4">





        <div class="container mt-4 mb-5">

            <div class="slider-headline_container">

                <div class="row">

                    <div class="col-md-11">

                        <div class="slider-headline">

                            @if(!empty($page))

                            <div class="slider-headline__slide">

                                <p class="mb-0 "> Home /  {{$page->title}}</p>

                            </div>

                            @else

                            <div class="slider-headline__slide">

                                <p class="mb-0 "> Home /  Pages</p>

                            </div>

                           @endif

                        </div>

                    </div>



                </div>

            </div>

        </div>





        <div class="container mt-4 mb-5">

            @if(!empty($page))

        	<div class="row">

        		<div class="col-md-12">

        			<div class="post__title">

        				<h1> {{$page->title}}</h1>

        			</div>

        			<div class="post__des">

        				<p>{!!$page->content!!}</p>

        			</div>

        		</div>

        	</div>

            @elseif(!empty($pages))

                <h2>Are you looking for something like</h2>

                @foreach($pages as $page)

                   <a class="pt-3 button" href="{{$page->slug}}"> {{$page->title}}</a>

                @endforeach

            @endif

        </div>

    </main>















@endsection