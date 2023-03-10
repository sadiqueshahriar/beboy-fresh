@forelse($products as $product)
<div class="col-md-3 filterLoadingColumn">
    <article class="single_product">
        <?php  
            $route = Route::current()->getName();
            
        ?>

            @if($product->stock_status == "in_stock")
                                
            <div class="new-product-badge" style="background: green;">
                <a class="text-white">IN STOCK</a>
            </div>
                
            @endif
            
            @if($product->stock_status == "out_of_stock")
    
                
            <div class="new-product-badge" style="background: red;">
                <a class="text-white">OUT Of STOCK</a>
            </div>
                
            @endif
            
            @if($product->stock_status == "limited")
    
                
            <div class="new-product-badge" style="background: orange;">
                <a class="text-white">Limited Stock</a>
            </div>
                
            @endif
            
            @if($product->stock_status == "new_arrived")
                        
            <div class="new-product-badge" style="background: #62ba28;">
                <a class="text-white">New Arrived</a>
            </div>            
                
            @endif
            
            @if($product->stock_status == "coming")
    
                
            <div class="new-product-badge" style="background: #673ab7;">
                <a class="text-white">Coming Soon</a>
            </div>            
                
            @endif
            @if($product->stock_status == "preorder")                 
            <div class="new-product-badge" style="background: green;">
                <a class="text-white">Pre Order Now</a>
            </div>            
                
            @endif
            @if($product->stock_status == "with_pc")     
            <div class="new-product-badge" style="background: #3e2ddb;">
                <a class="text-white">With PC</a>
            </div>            
                
            @endif
    
    <?php // <img src="{{asset($product->image ?? '')}}" alt="EKWB PVC 10-12mm Tube Clamp" width="228" height="228">?>

        <div class="main-content p-items-wrap">
            <div class="p-item">
                <div class="p-item-inner">
                    <div class="p-item-img">
                        <a href="{{route('/', $product->slug)}}" class="filterLoadingImages" img-data = {{asset($product->image ?? '')}}>
                           
                        </a>
                    </div>
                    <div class="p-item-details">
                        <h4 class="p-item-name" style="font-weight: 600; min-height: 45px;"> <a href="{{route('/', $product->slug)}}">{{Str::limit($product->name, 55, $end='...')}}</a></h4>
                    <div class="short-description">
                        <ul>
                        @php
                        $cachedHighlights = json_decode(Cache::get('highlights_'.$product->id),true);
                        if(!empty($cachedHighlights)){
                        foreach($cachedHighlights as $key => $value){
                            echo '<li style="list-style: disc;list-style-position: inside;overflow-y:hidden;">'.$value.'</li>';
                        }
                        }
                        @endphp
                        </ul>
                    </div>
                        <div class="p-item-price">
                            @if (!empty($product->offer_price && $product->special_price))
                                <span class="old_price" style="color: red"> <del>??? {{number_format($product->special_price)}}</del></span>
                                <span class="current_price">??? {{$product->offer_price}}</span>
                            @elseif(!empty($product->regular_price && $product->special_price))
                                <span class="old_price" style="color: red"> <del>??? {{number_format($product->regular_price)}}</del> </span>
                                <span class="current_price">??? {{number_format($product->special_price)}}</span> 
                            @elseif(!empty( $product->special_price))
                                <span class="current_price">??? {{number_format($product->special_price)}}</span> 
                            @elseif(!empty( $product->regular_price))
                            <span class="current_price">??? {{number_format($product->regular_price)}}</span> 
                            @endif                      
                        </div>
                            
                        @if ($product->stock_status == 'out_of_stock')
                            <div style="text-align: center;">
                                  <a class="details_btn" href="{{route('/', $product->slug)}}" title="add to cart">Details</a>                                               
                            </div>
                            @else
                            <div class="row">
                            <div class="col-6">
                                <form action="{{route('cart-page')}}" method="POST">
                                    @csrf
                                    <input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
                                    <input type="hidden" min="1" value="1" class="fz-normal" name="qty">
                                    <button  data-id="{{$product->id}}" type="submit">Buy Now</button>                 
                                </form>    
                            </div>
                            <div class="col-6">
                                <div class="details">                   
                                <a class="details_btn" href="{{route('/', $product->slug)}}">Details</a>     
                            </div>
                            </div>
                            </div>
                        @endif 
                        
                    </div>
                </div>
            </div>
        </div>
                            
    </article>
</div>
@empty
<div class="col-12 display-4 text-secondary">No product found for this filter</div>
@endforelse

<?php
$pageLimit = 12;
$totalPage = sizeof($products)/$pageLimit;
echo '<div class="ajaxPage">';
for($i=1;$i<=$totalPage;$i++){
    echo "<span onclick='filterPage(".$i.")'>".$i."</span>";
}
echo '</div>';
?>