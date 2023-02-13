{{--     
                      <!-- Product Content -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{route('/', $product->slug)}}" class="image">
                                                    <img class="main-image"
                                                        src="{{asset($product->product_image_small ?? '')}}" alt="{{ $product->name }}" height="320px;">
                                                    </a>
                                                    
                                                @include('templete_two.homepage.components.stock_status')
                                                @include('templete_two.homepage.components.action_links')
                                                <div class="ec-pro-actions">

                                                    <a href="{{route('/', $product->slug)}}" class="quickview" data-link-action="quickview"
                                                    title="Quick view"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend/homepage_three')}}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{route('/', $product->slug)}}">{{ $product->name }}</a></h5>
                                            @include('templete_two.homepage.components.product_price')
                                        </div>
                                    </div>
                                </div> --}}
                                
                                        <div class="p-item">
                                            <div class="p-item-inner">
                                                <div class="marks">                                               
                                                  @include('templete_two.homepage.components.stock_status')                     
                                                </div>
                                                <div class="p-item-img"> <a href="{{route('/', $product->slug)}}"><img src="{{asset($product->product_image_small ?? '')}}" alt="{{ $product->name }}" width="228" height="228"></a></div>
                                                <div class="p-item-details">
                                                    <h4 class="p-item-name">
                                                        <a href="{{route('/', $product->slug)}}">{{ $product->name }}</a></h4>
                                                        @include('templete_two.homepage.components.product_price')
                                                </div>
                                            </div>
                                        </div>
                                



