@if (!empty($product->regular_price) && !empty($product->offer_price))
<span class="p-item-price">                                              
<del style="color:black;"> ৳ {{ $product->regular_price }}</del>  &nbsp;                                                                                            
৳ {{ $product->offer_price }}                                            
</span>
@elseif(!empty($product->offer_price))
<span class="p-item-price">              
৳ {{ $product->offer_price }}                                       
</span>
@else
<span class="p-item-price">                                                 
৳ {{ $product->regular_price }}                                                
</span>
@endif