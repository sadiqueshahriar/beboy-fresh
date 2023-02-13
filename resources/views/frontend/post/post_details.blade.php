@extends('templete_two.layouts.app')
@section('head')

<title>{{$post->meta_title ?? ''}}</title>
<meta name="title" content="{{$post->meta_title ?? ''}}">
<meta name="description" content="{{$post->meta_description ?? ''}}">
<meta property="keywords" content="{{$post->key_words ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$post->image ?? ''}}" />
<meta property="type" content="{{$post->meta_title ?? ''}} :Post" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$post->slug ?? ''}}" />


<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$post->slug ?? ''}}" />
<meta property="og:type"          content="Binarylogic" />
<meta property="og:title"         content="{{$post->meta_title ?? ''}}" />
<meta property="og:description"   content="{{$post->meta_description ?? ''}}" />
<meta property="og:image"         content="{{ 'https://binarylogic.com.bd/'.$post->image ?? ''}}" />

<meta name="robots" content="noindex" />
<style>
    .blog-details__text ul{margin-left:20px}
    .blog-details__text ul li{list-style: disc;}
</style>

@endsection

@section('content')
<style>
    h1{
        font-size: 25px !important;
        font-weight: 400 !important;
    }
</style>



<main class="pt-4">


    <section class="py-50">
        <div class="container overflow-hidden">
            <div class="row g-5">
                <div class="col-md-9">
                    <div class="blog-details">
                        <div class="blog-details__image">
                            <a href="{{route('/', [$post->slug])}}" class="w-100 text-center"><img src="{{asset($post->image)}}" alt="{{$post->title}}"  class="mt-2"></a>
                        </div>
                        <div class="blog-details__content">
                            <div class="blog-details__meta bottom-after">
                                <div class="blog-details__meta__item">
                                    <span class="blog-details__meta--icon"><i class="fas fa-calendar-alt"></i></span>
                                    <span class="blog-details__text">{{$post->date}}</span>
                                </div>
                                <div class="blog-details__meta__item">
                                    <span class="blog-details__meta--icon"><i class="fas fa-user"></i></span>
                                    <span class="blog-details__text">{{$post->user->name ?? ''}}</span>
                                </div>
                            </div>
                            <!-- /.blog-details__meta -->
                            <h1 class="mt-3 mb-3">{{$post->title}}</h1>

                            <div class="blog-details__text">
                                {!!$post->description!!}
                            </div>
                        </div>
                         @if(!empty($post->video))
                        <div class="video_content mb-2" id="video_content">
                            <div class="product_d_inner">
                                <h4 class="mb-3 font_size">Video</h4>
                                <div class="p-4" itemprop="video">
    
                                    <div class="container-iframe">
    
                                        <iframe class="responsive-iframe" src="<?= $post->video ?>?rel=0" allowfullscreen></iframe>
    
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- /.blog-details -->

                    <div class="d-flex justify-content-between pb-4 mb-5 border-bottom">
                        @if(count($post_tags) > 0)
                        <div class="blog-tags">
                            <span class="me-3" style="font-size: 20px">Tags: </span>
                            
                            @foreach($post_tags as $post_tag)
                            <a href="{{route('tag', [$post_tag->tag->slug ?? ''])}}" class="button button--tertiary--2 button--small mx-1">{{$post_tag->tag->name ?? ''}}</a>
                            @endforeach
                        </div>
                        @endif
                        <!-- /.blog-tags -->

                       
                    </div>

<!--                     <div class="comments">
                        <h4 class="heading heading--tertiary--2 mb-4 bottom-after pb-3">2 Comments</h4>

                        <div class="comment">
                            <div class="row g-5 align-items-center">
                                <div class="col-auto">
                                    <div class="comment__image">
                                        <img src="{{asset('public/frontend/img/user/home-team-02-100x100')}}.webp" alt="">
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="comment__content">
                                        <div class="comment__author">Riva Collins</div>
                                        <div class="comment__date">November 9, 2019 - 2:07 am</div>
                                        <div class="comment__text">It’s no secret that the digital industry is booming. From exciting startups to ghor global and brands, companies are reaching out.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
 

                        <div class="comment">
                            <div class="row g-5 align-items-center">
                                <div class="col-auto">
                                    <div class="comment__image">
                                        <img src="{{asset('public/frontend/img/user/home-team-04-100x100')}}.webp" alt="">
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="comment__content">
                                        <div class="comment__author">Obila Doe</div>
                                        <div class="comment__date">November 9, 2019 - 2:07 am</div>
                                        <div class="comment__text">It’s no secret that the digital industry is booming. From exciting startups to ghor global and brands, companies are reaching out.</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="comment">
                            <div class="row g-5 align-items-center">
                                <div class="col-auto">
                                    <div class="comment__image">
                                        <img src="{{asset('public/frontend/img/user/team-02')}}.webp" alt="">
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="comment__content">
                                        <div class="comment__author">Riva Collins</div>
                                        <div class="comment__date">November 9, 2019 - 2:07 am</div>
                                        <div class="comment__text">It’s no secret that the digital industry is booming. From exciting startups to ghor global and brands, companies are reaching out.</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="comment-form">
                        <h4 class="heading heading--tertiary--2 mb-4 bottom-after pb-3">Leave A Comment</h4>

                        <form action="/" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea name="comment" placeholder="Write Your Comment *"></textarea>
                                </div>
                                <div class="col-6 col-md-4">
                                    <input type="text" name="name" placeholder="Name*">
                                </div>
                                <div class="col-6 col-md-4">
                                    <input type="email" name="email" placeholder="Email*">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="url" name="website" placeholder="Website">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="button button--secondary--2">
                                        <i class="fas fa-envelope button--secondary__icon"></i>
                                        <span class="button--secondary__text">Comment</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>

                <!-- ==================== side bar starts ================== -->
                <!-- /.col of side bar -->
            </div>
        </div>
    </section>

</main>







@endsection