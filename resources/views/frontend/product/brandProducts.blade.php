@extends('layouts.frontend.app')


@section('head')
<title>{{$brand->meta_title ?? ''}}</title>
<meta name="title" content="{{$brand->meta_title ?? ''}}">
<meta name="description" content="{{$brand->meta_des ?? ''}}">
<meta property="keywords" content="{{$brand->meta_keywords ?? ''}}" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}">

<meta property="og:url"           content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />
<meta property="og:type"          content="brand" />
<meta property="og:title"         content="{{$brand->meta_title ?? ''}}" />
<meta property="og:description"   content="{{$brand->meta_des ?? ''}} " />
<meta property="og:keywords"   content="{{$brand->meta_keywords ?? ''}} " />
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@BinaryLogic" />
<meta name="twitter:creator" content="@BinaryLogic" />
<meta property="twitter:url" content="{{ 'https://binarylogic.com.bd/'.$brand->slug ?? ''}}" />
<meta property="twitter:title" content="{{$brand->meta_title ?? ''}}" />
<meta property="twitter:description" content="{{$brand->meta_des ?? ''}}" />
<meta property="og:keywords"   content="{{$brand->meta_keywords ?? ''}} " />
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$brand->meta_image ?? ''}}" />

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
                    <!-- end of col -->
                    <div class="col-md-12">
                        <div class="controller">
                            <form class="clearfix">
                                <div class="float-start">
                                    <h1 class="fz-large fw-bold mb-0" style="padding: 4px 0;">{{$brand->name ?? ''}}</h1>
                                </div>
                                <div class="float-end">
                                    <span class="fz-small me-4">Sort By</span>
                                    <select class="fz-small py-1 px-3" name="filterValue" id="filterValue" onchange="BrandFilterProduct(this)">
                                        <option value="default">Default</option>
                                        <option value="a_z">Name (A - Z)</option>
                                        <option value="z_a">Name (Z - A)</option>
                                        <option value="lowestPrice">Price (Lowest > Highest)</option>
                                        <option value="HighestPrice">Price (Highest > Lowest)</option>
                                        <option value="BestSeller"> Best Seller </option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <!-- end of controller -->
                        <div class="row g-4 BrandFilterProduct" id="BrandFilterProduct">
                            @forelse($ProductBrands as $product)
                                @include('frontend/elementproductbox',$product)
                            @empty
                            <div class="product-not-found">
                                <span class="icon"><i class="fal fa-info-circle"></i></span>
                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>
                            </div>
                            @endforelse
                        </div>
                        <!-- end of row -->

                        @if(isset($ProductBrands))
                        <p>{{$ProductBrands->links()}}</p>
                        @endif
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
    
    var brand_id = <?php echo $brand->id; ?>;
    function BrandFilterProduct(product){
        var $this = $(this);
        var id = brand_id;
        var filterValue = $('#filterValue').val();
        console.log(filterValue);
        if (id) {
            $.ajax({
                url: "{{url('/filter-brand-products/')}}/"+id+"/"+filterValue,
                type: "GET",
                dataType: "json",
                beforeSend: function() {
                    
                },
                success:function(data){
                    // console.log(data.responseText);

                },
                error:function(error){
                    // console.error(error);
                    $('.BrandFilterProduct').html(error.responseText);
                }
            })
        }
    }

    
</script>








@endsection