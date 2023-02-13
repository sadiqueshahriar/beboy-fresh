	@forelse($products as $product)
		<div class="mb-4">
			<div class="row align-items-center">
				<div class="col-auto">
					<img style="width: 8rem; height: 8rem; object-fit: cover;" src="{{asset($product->image)}}" alt="{{$product->product_title}}">
				</div>
				<div class="col">
					<a style="text-decoration: none;" href="{{route('/', [$product->slug])}}" class="text-dark">{{$product->name}}</a>	
					<p class="fw-bold mb-0">{{number_format($product->special_price)}} ৳</p>
				</div>
			</div>
		</div>
    @empty
    	<strong style="color: #f00" class="ml-4">No product Found</strong>
	@endforelse
	<!-- <div class="text-center"><a href="{{route('all-products')}}" class="button button-type-1">See All Products</a></div> -->
	
