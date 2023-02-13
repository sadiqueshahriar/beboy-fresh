@extends('layouts.frontend.app')

@section('content')



<section class="py-5">
	<div class="container">
		<h3 class="pb-3 mb-25 border-bottom border-sky-blue text-sky-blue">Wishlist</h3>

		<div class="table-responsive-lg">
			<table class="table table-hover fz-small align-middle td-py-3 text-nowrap-td cart-table">
				<thead>
					<tr>
						<th></th>
						<th>Product Name</th>
						<!-- <th>Stock Status</th> -->
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($listedproducts as $listedproduct)
					<?php
					$product = App\Models\Product::where('id', $listedproduct->product_id)->first();
					$available_qty = $product->qty - $product->total_sell;

					?>
					<tr>
						<td>
							<form action="{{route('remove-wishlist')}}" method="post">
								@csrf
								<input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
								<button type="submit" class="button button-icon text-danger fz-large"><i class="fal fa-trash"></i></button>
							</form>
						</td>
						<td>
							<a href="{{route('/', [$product->slug])}}" style="text-decoration: none; color: black"><img src="{{asset($product->image)}}" alt="{{$product->image_alt}}" longdesc="{{$product->image_des}}" style="max-width: 10rem" class="me-3">
								{{$product->name}}</a>
						</td>

						<!-- 
                        @if($product->stock_status == "in_stock")
                        <td >
                        	<span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-success text-light rounded mt-2">In Stock</span>
                    	</td>
                        @endif

                        @if($product->stock_status == "out_of_stock")
                        <td>
                        	<span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-danger text-light rounded mt-2">
                        		Out Of Stock
                        	</span>
                    	</td>
                        @endif

                        @if($product->stock_status == "new_arrived")
                        <td>
                        	<span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">
                        		New Arrived
                        	</span>
                       </td>
                        @endif

                        @if($product->stock_status == "limited")
                        <td>
                        	<span  class="mb-0 fz-extra-small lh-1 text-warning p-2 bg-warning text-light rounded mt-2">
                        		Limited Stock
                        	</span>
                        </td>
                        @endif

                        @if($product->stock_status == "upcoming")
                        <td>
                        	<span class="mb-0 fz-extra-small lh-1 text-center p-2 bg-info text-light rounded mt-2">
                        		Upcoming
                        	</span>
                        </td>
                        @endif
 -->

						@if($product->discount_price)
						<td>BDT {{$product->discount_price}}</td>
						@endif

						@if($product->special_price)
						<td>BDT {{$product->special_price}}</td>
						@else
						<td>BDT {{$product->regular_price}}</td>
						@endif

						@if($available_qty > 0)
						<td>
							<form action="{{route('add-to-cart')}}" method="post">
								@csrf
								<input type="hidden" min="1" value="{{$product->id}}" class="fz-normal" name="product_id">
								<input type="hidden" min="1" value="1" class="fz-normal" name="qty">
								<button type="submit" class="button button-type-1" data-id="{{$product->id}}">ADD TO CART</button>
							</form>


						</td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>



@endsection