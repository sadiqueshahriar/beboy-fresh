@extends('layouts.frontend.app')

@section('content')

<style>
    
nav{
    font-size: 14px;
    font-weight: 900;
}



</style>

<main class="pt-4">



    <section class="blogs-section pt-75 pb-95">
        <div class="container overflow-hidden">
            <div class="row g-5">
                <div class="col-md-7 col-lg-9">
                    <div class="row">

                        @foreach($posts as $post)
                        <div class="col-12 col-lg-6">
                            <div class="cart cart--secondary cart--no-padding">
                                <div class="cart__image">
                                    <a href="{{route('/', [$post->slug])}}"><img src="{{asset($post->image)}}" alt="{{$post->title}}"></a>
                                </div>

                                <div class="cart__content">
                                    <div class="cart__meta">
                                        <span class="cart__meta--item"><i class="cart__meta--icon fas fa-calendar"></i>{{$post->date}}</span>
                                        <span class="cart__meta--item"><i class="cart__meta--icon fas fa-user"></i>{{$post->user->name ?? ''}}</span>
                                    </div>
                                    <a href="{{route('/', [$post->slug])}}"><h4 class="heading heading--tertiary--2">{{Str::limit($post->title, 35) }}</h4></a>
                                    <br>
                                    <a href="{{route('/', [$post->slug])}}" class="button button--link cart__button--2">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12 text-center pt-5">
                            <p>{{ $posts->links() }}</p>
                            <!-- <button class="button button--tertiary--2">Load More</button> -->
                        </div>
                    </div>
                </div>
                <!-- /.col (all blogs) -->

                <!-- ==================== side bar starts ================== -->
                    @include('layouts.frontend.blog_sidebar')
                <!-- /.col of side bar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->


</main>







@endsection