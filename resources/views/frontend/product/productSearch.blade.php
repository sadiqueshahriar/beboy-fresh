	@forelse($products as $product)
		<div class="mb-4">
			<div class="row align-items-center">
				<div class="col-auto">
					<a href="{{route('/', [$product->slug])}}">
						<img style="width: 8rem; height: 8rem; object-fit: cover;" src="{{asset($product->image)}}" alt="{{$product->product_title}}">
					</a>					
				</div>
				<div class="col">
					<a style="text-decoration: none;" href="{{route('/', [$product->slug])}}" class="text-dark">{{$product->name}}</a>	
					<p class="fw-bold mb-0">
					<?php 
					if(!empty($product->special_price) && number_format($product->special_price) !=0){
						echo number_format($product->special_price).' ৳';
					}else{
						echo "<i>Call For Price</i>";
					}?>
					</p>
				</div>
			</div>
		</div>
    @empty
    	
	@endforelse
	
