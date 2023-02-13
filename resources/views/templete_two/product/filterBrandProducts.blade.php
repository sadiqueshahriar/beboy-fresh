
                        @forelse($products as $product)
                        <div class="col-12 col-md-3">
                            @include('templete_two.homepage.components.common_product_cart')
                        </div>
                        @empty

                            <div class="product-not-found">

                                <span class="icon"><i class="fal fa-info-circle"></i></span>

                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>

                            </div>

                            @endforelse

