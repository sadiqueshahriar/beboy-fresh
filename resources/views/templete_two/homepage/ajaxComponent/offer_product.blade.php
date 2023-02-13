<div class="ec-fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30" data-animation="slideInRight">
    <div class="col-md-12 text-left">
        <div class="section-title">
            <h2 class="ec-bg-title">Limited Time Offer</h2>
            <h2 class="ec-title">Limited Time Offer</h2>
        </div>
    </div>
<div class="ec-fre-products">
    @foreach($OfferProducts as $product)
    <div class="ec-fs-product">
        <div class="ec-fs-pro-inner">
            <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                <div class="ec-fs-pro-image">
                    <a href="{{route('/', $product->slug)}}" class="image"><img class="main-image"
                            src="{{asset($product->product_image_small ?? '')}}" alt="Product" /></a>
                    <a href="{{route('/', $product->slug)}}" class="quickview" data-link-action="quickview" title="Quick view"
                        data-bs-target="#ec_quickview_modal"><img
                            src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                            alt="" /></a>
                </div>
            </div>
            <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                <h5 class="ec-fs-pro-title"><a href="{{route('/', $product->slug)}}">{{ $product->name }}</a>
                </h5>
                <div class="ec-fs-price">
                    <span class="new-price">৳ {{ $product->regular_price }}</span>
                    @if (!empty($product->offer_price))
                    <span class="new-price">৳ {{ $product->offer_price }}</span>
                    @endif
                    
                </div>
                <div class="ec-fs-pro-desc">{{ $product->name }}
                </div>
                @include('templete_two.homepage.components.action_links')
            </div>
        </div>
    </div>
    @endforeach
 
</div>
</div>


   