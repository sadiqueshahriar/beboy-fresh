@if($product->stock_status == "in_stock")
<span style="background:rgb(24, 209, 24)" class="mark"> <b>In Stock</b> </span> 
@endif
@if($product->stock_status == "out_of_stock")   
<span style="background: red;" class="mark"> <b>OUT OF STOCK</b> </span>      
@endif
@if($product->stock_status == "coming")   
<span class="mark">Comming Soon</span>       
@endif
@if($product->stock_status == "new_arrived")   
<span class="mark" style="background: rgb(20, 39, 206);">New Arrival</span>      
@endif
@if($product->stock_status == "limited")   
<span style="background: rgb(148, 158, 5);" class="mark">Limited</span>      
@endif
@if($product->stock_status == "preorder")   
<span style="background: rgb(142, 9, 219);" class="mark">Pre Order</span>      
@endif   