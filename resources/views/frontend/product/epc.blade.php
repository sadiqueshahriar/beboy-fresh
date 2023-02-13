@extends('layouts.frontend.app')


@section('head')

<title>{{$cat_own->meta_title ??  $cat_own->name}}</title>
<meta name="title" content="{{$cat_own->meta_title ?? $cat_own->name}}">
<meta name="description" content="{{$cat_own->meta_des ??  $cat_own->name}}">
<meta property="keywords" content="{{$cat_own->meta_keywords ??  $cat_own->name}}" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$cat_own->slug ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$cat_own->image ?? ''}}">


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
<script type="application/ld+json">
@if(!empty($category_sub))
{
  "@context": "http://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [
    <?php $i=1; ?>
    @foreach ($category_sub as $cat_sub)
{
        "@type": "ListItem",
        "position": {{ $i }},
        "name": "{{ $cat_sub->name }}",
        "item": "http://www.beboybd.com/{{ $cat_sub->slug }}"
        },
        <?php $i++; ?>
    @endforeach
  ]
}
@endif;
</script>

@endsection


@section('content')
<?php
$user_id = Session::get('user_id');
$user_name = Session::get('name');
$user_type = Session::get('user_type');

$Cart = Cart::content()->count();
?>

<style type="text/css">
    nav {
        text-align: center;
        font-size: 15px;
    }
    nav span a:first-child{
        width:30px;
    }
    nav span a:last-child{
        width:30px;
    }
    nav span svg{
        width:20px;
    }
</style>

<main>
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-md-3">
                    <form class="clearfix">
                        <div class="float-end w-100">
                            <!--@include('layouts.frontend.price_range')-->
                            @include('layouts.frontend.category_sidebar')
                        </div>
                    </form>
                </div>
                <!-- end of col -->
                <div class="col-md-9">
                    <div class="controller">
                        <div class="clearfix">
                            <div class="float-start">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">HOME</a></li>
                                        @if(!empty($cat_parent_2))
                                        <li class="breadcrumb-item"><a href="{{$cat_parent_2->slug}}">{{$cat_parent_2->name}}</a></li>
                                        @endif
                                        @if(!empty($cat_parent_1))
                                        <li class="breadcrumb-item"><a href="{{$cat_parent_1->slug}}">{{$cat_parent_1->name}}</a></li>
                                        @endif
                                        @if(!empty($cat_parent))
                                        <li class="breadcrumb-item"><a href="{{$cat_parent->slug}}">{{$cat_parent->name}}</a></li>
                                        @endif
                                        <li class="breadcrumb-item"><a href="{{$cat_own->slug ?? ''}}">{{$cat_own->name ?? ''}}</a></li>
                                    </ol>
                                </nav>
                                <h1 class="fz-large fw-bold mb-0" style="padding: 4px 0;">{{$cat_own->name ?? ''}}</h1>
                            </div>
                            <form class="float-end">
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
                                <a href="{{ $cat_sub->slug }}">{{ $cat_sub->name }}</a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- end of controller -->
                    <div class="row g-4 SubCategoryFilterProduct" id="SubCategoryFilterProduct">
                        @forelse($products as $product)
                            @include('frontend/elementproductbox',$product)
                        @empty
                        <div class="col-12">
                            <div class="product-not-found">
                                <span class="icon"><i class="fal fa-info-circle"></i></span>
                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <!-- end of row -->
                    <p>{{$products->links()}}</p>
                </div>
            </div>
        </div>
    </section>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view">



    </div>
</div>



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