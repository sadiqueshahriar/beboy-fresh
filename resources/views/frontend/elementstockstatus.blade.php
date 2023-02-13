@if($product->stock_status == "in_stock")
<p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2 d-inline">In Stock</p>
@endif

@if($product->stock_status == "out_of_stock")
<p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2 d-inline">Out Of Stock</p>
@endif

@if($product->stock_status == "new_arrived")
<p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-primary text-light rounded mt-2 d-inline">New Arrived</p>
@endif

@if($product->stock_status == "limited")
<p class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2 d-inline">Limited Stock</p>
@endif

@if($product->stock_status == "coming")
<p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-blue text-light rounded mt-2 d-inline">Coming Soon</p>
@endif

@if($product->stock_status == "with_pc")
<p class="mb-0 fz-extra-small lh-1 text-center p-2 bg-binary-deep text-light rounded mt-2 d-inline">With PC</p>
@endif