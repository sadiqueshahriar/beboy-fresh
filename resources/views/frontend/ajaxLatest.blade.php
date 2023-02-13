<section class="latest-products py-30 my-30 px-0">
  <h2 class="section-heading mb-5"><a href="{{route('latestproducts')}}">LATEST PRODUCTS</a></h2>
  <div class="product-slider-">
      <div class="swiper-wrapper- row">
          @foreach($latestProducts as $product)
            @include('frontend/elementproductbox',$product)
          @endforeach
      </div>
  </div>
  <div class="d-flex justify-content-center mt-5">
      <!-- <button class="button button-type-1 button-load-more"><a href="{{route('latestproducts')}}" class="w-100 text-white" style="text-decoration: none;">VIEW ALL</a></button> -->
      <div class="box-3" style="position:absolute;right:00px;top:10px">
        <a href="{{route('latestproducts')}}" class="btns btn-three" style="text-decoration: none;">VIEW ALL</a>
      </div>
  </div>
</section>