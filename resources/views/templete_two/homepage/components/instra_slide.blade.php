<section class="section ec-instagram-section module section-space-p" id="insta">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <p class="sub-title">Our Brand</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ec-insta-wrapper">
        <div class="ec-insta-outer">
            <div class="container" data-animation="fadeIn">
                <div class="insta-auto">
                    <!-- instagram item -->
                    @foreach ($top_collections as $product)
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset($product->product_image_small ?? '')}}" 
                                    alt="product-slider"></a>
                        </div>
                    </div>
                    @endforeach
                    <!-- instagram item -->
                </div>
            </div>
        </div>
    </div>
</section>