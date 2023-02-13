@extends('templete_two.layouts.app')

@section('content')

<style>
    
nav{
    font-size: 14px;
    font-weight: 900;
}

.cart{
    border: 1px solid transparent;
    box-shadow: rgb(0 0 0 / 10%) 0px 4px 12px;
}
.cart__content{
    padding: 5px;
}
.button{
    height: 34px !important;
    line-height: 35px !important;
}

.cart__image{
    min-height:193px;
}


</style>

<main class="">
    <section class="blogs-section pt-75 pb-95" style="background: #f2f4f8;">
        <div class="container overflow-hidden">
            <div class="row g-5 mt-3">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-12 col-lg-3">
                            <div class="cart cart--secondary cart--no-padding">
                                <div class="cart__image">
                                    <a href="{{route('/', [$post->slug])}}"><img src="{{asset($post->image)}}" alt="{{$post->title}}"></a>
                                </div>

                                <div class="cart__content">
                                    <div class="cart__meta">
                                        <span class="cart__meta--item"><i class="cart__meta--icon fas fa-calendar"></i>{{$post->date}}</span>
                                        <span class="cart__meta--item"><i class="cart__meta--icon fas fa-user"></i>{{$post->user->name ?? ''}}</span></a>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section -->


</main>







@endsection