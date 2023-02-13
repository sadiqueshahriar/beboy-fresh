@extends('layouts.frontend.app')





@section('head')



<title>{{$cat_own->meta_title ??  $cat_own->name}}</title>

<meta name="robots" content="index,allow" />

<meta name="author" content="Binary Logic" />

<meta name="publisher" content="Crenotive">

<meta name="title" content="{{$cat_own->meta_title ?? $cat_own->name}}">

<meta name="description" content="{{$cat_own->meta_des ??  $cat_own->name}}">

<meta name="keywords" content="{{$cat_own->meta_keywords ??  $cat_own->name}}" />

<meta property="site_name" content="Binarylogic" />

<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />

<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}">



<link rel="canonical" href="{{'http://www.beboybd.com/'.$cat_own->slug ?? ''}}" />



<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />

<meta property="og:type"          content="category" />

<meta property="og:title"         content="{{$cat_own->meta_title ??  $cat_own->name}}" />

<meta property="og:description"   content="{{$cat_own->meta_des ??  $cat_own->name}} " />

<meta property="og:keywords"   content="{{$cat_own->meta_keywords ??  $cat_own->name}} " />

<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}">



<meta name="twitter:card" content="summary" />

<meta name="twitter:site" content="@BinaryLogic" />

<meta name="twitter:creator" content="@BinaryLogic" />

<meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />

<meta property="twitter:title" content="{{$cat_own->meta_title ??  $cat_own->name}}" />

<meta property="twitter:description" content="{{$cat_own->meta_des ??  $cat_own->name}}" />

<meta property="og:keywords"   content="{{$cat_own->meta_keywords ??  $cat_own->name}} " />

<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}" />

@php

$string = strip_tags($cat_own->description);

$string = str_replace('&nbsp;', ' ', $string);

$string = str_replace('&amp;', ' ', $string);

$string = str_replace('&reg;', ' ', $string);

$string = preg_replace('/[^A-Za-z0-9\-.]/', ' ', $string); // Removes special chars. 

$string = trim($string);

@endphp

<script type="application/ld+json">

<?php //dd($products)?>

@php 

    $categories = Cache::get('categories');

    $categories = json_decode($categories,true);

    $i=1; 

@endphp

{

  "@context": "http://schema.org/",

  "@type": "BreadcrumbList",

  "name" : "{{$cat_own->name}}",

  "image" : "{{ 'http://www.beboybd.com/'.$cat_own->image}}",

  "description" : "{{$cat_own->meta_des}}",

  "url" : "{{ 'http://www.beboybd.com/'.$cat_own->slug ?? ''}}"

  @if($cat_own->slug != 'offer')

  ,"itemListElement": [

    @if(!empty($cat_parent))

        {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $cat_parent->name }}",

            "item": "http://www.beboybd.com/{{ $cat_parent->slug }}"

        }

        @if(!empty($cat_child) && sizeof($cat_child) > 0)

            ,

        @endif

    @endif

    

    @if(!empty($cat_child) && sizeof($cat_child) > 0)

        @foreach ($cat_child as $cat_sub)

            @php

                if($i<sizeof($cat_child)){$ext_comm = ",";} else {$ext_comm = "";}

            @endphp

            {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $cat_sub->name }}",

            "item": "http://www.beboybd.com/{{ $cat_sub->slug }}"

            }{{$ext_comm}}

            @php

                $i++;

            @endphp

        @endforeach

    @endif

  ]

  @else

  ,"itemListElement": [

    @foreach ($categories as $category)

    

            @php

                if($i<sizeof($categories)){$ext_comm = ",";} else {$ext_comm = "";}

            @endphp

            {

            "@type": "ListItem",

            "position": {{ $i }},

            "name": "{{ $category['name'] }}",

            "item": "http://www.beboybd.com/{{ $category['slug'] }}"

            }{{$ext_comm}}

            @php

                $i++;

            @endphp

        @endforeach

    ]

  @endif

}



</script>

@endsection





@section('content')

<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');



$Cart = Cart::content()->count();

?>



<main>

    <section class="py-5">

        <div class="container">

            <div class="row gx-5">

                <div class="col-md-12">

                    <div class="controller">

                        <div class="clearfix">

                            <div class="float-start">

                                <nav aria-label="breadcrumb">

                                    <ol class="breadcrumb">

                                        <li class="breadcrumb-item"><a title="Go to home" href="{{URL::to('/')}}">HOME</a></li>

                                        @if(!empty($cat_parent_2))

                                        <li class="breadcrumb-item"><a title="{{$cat_parent_2->name}}" href="{{$cat_parent_2->slug}}">{{$cat_parent_2->name}}</a></li>

                                        @endif

                                        @if(!empty($cat_parent_1))

                                        <li class="breadcrumb-item"><a title="{{$cat_parent_1->name}}" href="{{$cat_parent_1->slug}}">{{$cat_parent_1->name}}</a></li>

                                        @endif

                                        @if(!empty($cat_parent))

                                        <li class="breadcrumb-item"><a title="{{$cat_parent->name}}" href="{{$cat_parent->slug}}">{{$cat_parent->name}}</a></li>

                                        @endif

                                        <li class="breadcrumb-item"><a title="{{$cat_own->name ?? ''}}" href="{{$cat_own->slug ?? ''}}">{{$cat_own->name ?? ''}}</a></li>

                                    </ol>

                                </nav>

                                <h1 class="fz-large fw-bold mb-0" style="padding: 4px 0;">{{$cat_own->name ?? ''}}</h1>

                            </div>

                            <form class="float-end d-none">

                                <span class="fz-small me-4">Sort By</span>

                                <select class="fz-small py-1 px-3" name="filterValue" id="filterValue" onchange="SubCategoryFilterProduct(this)">

                                    <option value="default">Default</option>

                                    <option value="a_z">Name (A - Z)</option>

                                    <option value="z_a">Name (Z - A)</option>

                                    <option value="lowestPrice">Price (Lowest > Highest)</option>

                                    <option value="HighestPrice">Price (Highest > Lowest)</option>

                                    <option value="BestSeller"> Best Seller </option>

                                </select>

                            </form>

                        </div>

                        <div class="brad_sub_cat">

                            @if(!empty($cat_child))

                            @foreach ($cat_child as $cat_sub)

                                <a title="{{ $cat_sub->name }}" href="{{ $cat_sub->slug }}">{{ $cat_sub->name }}</a>

                            @endforeach

                            @endif

                        </div>

                    </div>

                    <!-- end of controller -->

                    <div class="row g-4 SubCategoryFilterProduct" id="SubCategoryFilterProduct">

                        @forelse($products as $product)

                            @include('frontend/elementproductbox',$product)

                        @empty

                        <div class="col-12 display-4 text-secondary">

                            No product found

                        </div>

                        @endforelse

                    </div>

                    <!-- end of row -->

                    <p>{{$products->links()}}</p>

                </div>

            </div>

            <?php

            

            if (app('request')->input('page') && app('request')->input('page') != 1) {

                

            }else{

                ?>

                @if(!empty($cat_own->description))

                <div class="mt-4 des product-details-tab">

                    {!! $cat_own->description !!}

                </div>

                @endif



                @if(!empty($catFaq) && sizeof($catFaq) > 0)

                    <div class="accordion-wrapper p-4">

                        

                        @foreach($catFaq as $faq)

                            <h2 class="accordion">{{$faq->question}}</h2>

                            <div class="panel">

                            <p>{!! $faq->answer !!}</p>

                            </div>

                        @endforeach



                    </div>

                @endif

                <?php

            }

            ?>

            

        </div>

    </section>

</main>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" id="product-view">

    </div>

</div>



<script>

var acc = document.getElementsByClassName("accordion");

var i;



for (i = 0; i < acc.length; i++) {

  acc[i].addEventListener("click", function() {

    this.classList.toggle("active");

    var panel = this.nextElementSibling;

    if (panel.style.display === "block") {

      panel.style.display = "none";

    } else {

      panel.style.display = "block";

    }

  });

}

</script>



<script type="text/javascript">

    var category_id = <?php echo $cat_own->category_id; ?>;

    var subcategory_id = <?php echo $cat_own->id; ?>;



    function SubCategoryFilterProduct(product) {

        var $this = $(this);

        var cat_id = category_id;

        var id = subcategory_id;

        var filterValue = $('#filterValue').val();

        console.log(filterValue);

        if (id) {

            $.ajax({

                url: "{{url('/filter-subcategory-products/')}}/" + cat_id + "/" + id + "/" + filterValue,

                type: "GET",

                dataType: "json",

                beforeSend: function() {



                },

                success: function(data) {

                    console.log(data.responseText);



                },

                error: function(error) {

                    console.error(error);

                    $('.SubCategoryFilterProduct').html(error.responseText);

                }

            })

        }

    }

</script>







@endsection