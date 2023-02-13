
@forelse($products as $product)
<?php
    $ProductEmi = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_price', 'desc')->first();
    $ProductStockStatuses = App\Models\ProductStockStatus::where('product_id', $product->id)->get();
?>


<div class="col-12 col-md-4">
                            <div class="card card-type-2">
                                @if($product->discount != '')
                                <div class="card__discount">
                                    <p class="mb-0">-{{$product->discount}}%</p>
                                </div>
                                @endif
                                    <div class="card__image">
                                        <a href="{{route('/', [$product->slug])}}">
                                            <img src="{{asset($product->product_image_small ?? $product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" class="card__image">
                                            <div class="card__icons--top">
                                                <div class="d-flex">
                                                    <form action="{{route('add-to-cart')}}" method="post" class="me-2">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}" />
                                                        <input type="hidden" name="qty" value="1" />
                                                        <button type="submit" class="button button-icon"><i class="fal fa-cart-plus"></i></button>
                                                    </form>
                                                    <form action="{{route('add-to-wishlist')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                                        <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                                        <button type="submit" class="button button-icon"><i class="fal fa-heart"></i></button>
                                                    </form>
                                                </div>
                                                @foreach($ProductStockStatuses as $status)
                                                    
                                                    @if($status->stock_status == "in_stock")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "out_of_stock")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">Out Of Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "new_arrived")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">New Arrived</p>
                                                    @endif
        
                                                    @if($status->stock_status == "limited")
                                                    <p class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">Limited Stock</p>
                                                    @endif
        
                                                    @if($status->stock_status == "upcoming")
                                                    <p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">Upcoming</p>
                                                    @endif
                                                @endforeach
                                                
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem">
                                    
                                        <div>
                                            <h5 class="card__heading"><a href="{{route('/', [$product->slug])}}" style="text-decoration: none">{{$product->name }}</a></h5>
                                            <h6>{{$product->subtitle ?? '' }}</h6>
                                        </div>
                                        <div>



                                        @if($product->call_for_price)
                                            <div class="align-items-center my-3 text-center">
                                                <strong class="fz-large d-inline-block text-danger"> {{$product->call_for_price}}</strong>
                                            </div>
                                        @else
                                            <div class="text-center align-items-center my-3">
                                                @if($product->regular_price != '')
                                                <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</strong> <br>
                                                @endif

                                                @if($product->special_price > 0)
                                                    <strong class="fz-normal d-inline-block text-success">Special Price: ৳ {{number_format($product->special_price)}}</strong> <br>
                                                @endif
                                            </div>
                                        @endif

                                        @if(isset($ProductEmi->emi_price))
                                        <div class="text-center align-items-center my-3 position-relative monthly-emi">
                                            <div class="monthly-emi-hover">
                                                <?php
                                                    $ProductEmis = App\Models\ProductEmi::where('product_id', $product->id)->orderBy('emi_month', 'desc')->get();
                                                ?>
                                                @foreach($ProductEmis as $ProductEmi)
                                                <p class="mb-0 fz-extra-small text-light">{{$ProductEmi->emi_month}} Months EMI - {{$ProductEmi->emi_price}} Taka</p>
                                                @endforeach
                                                <p class="mb-0 fz-extra-small text-success">Note: Only Available In Branches</p>
                                            </div>
                                            <strong class="fz-small d-inline-block">Monthly EMI ৳ {{$ProductEmi->emi_price ?? ''}}</strong>
                                        </div>
                                        @endif
                                    </div>
                                        <div class="card__icons align-items-center">

                                            <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$product->id}}">
                                            <i class="fal fa-eye me-3"></i>  View
                                            </button>

                                            @if(!$product->call_for_price)
                                            <a href="{{route('/', [$product->slug])}}" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
</div>
@empty
                            <div class="product-not-found">
                                <span class="icon"><i class="fal fa-info-circle"></i></span>
                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>
                            </div>
@endforelse

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view">



    </div>
</div>


<script>
    
    $('.open-product-details-popup').click(function() {
        id = parseInt($(this).data('id'))

        ViewProductDetails(id)
    })

    
    var token = $("input[name=_token]").val();
    function ViewProductDetails(id) {
        var datastr = "id=" + id + "&token=" + token;

        $.ajax({
            type: "POST",
            url: "<?php echo route('view-product-details'); ?>",
            data: datastr,
            cache: false,
            beforeSend: () => {
                preloader_image = '<img src="{{asset("public/frontend/img/ajax-loader.svg")}}" alt="" class="ajax-loader">';
                $('#product-view').html(preloader_image);
            },
            success: (data) => {
                 console.log(data);
                $('#product-view').html(data);
            },
            error: (jqXHR, status, err) => {
                console.error(err);
            },
            complete: () => {
                
            }
        });
    }
    
    
    
</script>