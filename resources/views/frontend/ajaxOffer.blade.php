<section class="latest-products py-30 my-30">
    <h2 class="section-heading mb-5"><a class="" href="{{route('/', ['offer'])}}">LATEST OFFER</a></h2>
    <div class="product-slider-">
        <div class="row">
            @foreach($offer_products as $product)
                @include('frontend/elementproductbox',$product)
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="button button-type-1 button-load-more"><a href="{{route('/', ['offer'])}}" class="w-100 text-white" style="text-decoration: none;">View All</a></button>
    </div>
</section>