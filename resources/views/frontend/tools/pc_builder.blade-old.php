@extends('layouts.frontend.app')

@section('content')


<?php
    

    $sessin_products = Session::get('cart_session');
    

?>

	<div class="pc__builder">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-7">
						<ul class="breadcrumb">
							<li><i class="fal fa-home"></i></li>
							<li><i class="fal fa-caret-right"></i>PC Builder</li>
						</ul>
					</div>
					<div class="col-md-5">
						
					</div>
				</div>
			</div>
		</div>

	</div>

    <main>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-5">
			        <section class="pt-4 pb-5 pc-builder">
			            <div class="container">
			                <div class="d-flex justify-content-between mb-2 controller">
			                    <div>
			                        <a href="#" class="button button-type-1" data-size="small">GET A QUOTE</a>
			                    </div>

			                </div>
			                <!-- end of controller -->

			                <div class="c-list-group bg-white px-3">

			                	@foreach($components as $component)
			                    <div class="c-list-item">
			                        <div class="c-list-header">
			                            <div>
			                                <img src="{{asset($component->image ?? '')}}" alt="" style="max-width: 2rem;">
			                                <strong>{{$component->name ?? ''}}</strong>
			                            </div>
			                            <div>

			                                <a href="{{route('tools/pc_builder/choose', [$component->slug])}}"><button class="button button-type-1" data-size="small">Choose</button></a>

			                            </div>
			                        </div>

			                    </div>
			                    @endforeach
			                </div>
			            </div>
			            <!-- end of container -->
			        </section>
    			</div>
    			<div class="col-md-7">
    				
        			<section class="pt-4 pb-5 pc-builder">
			            <div class="container">
			                <div class="d-flex justify-content-between mb-2 controller">
			                    <div>
			                        <a href="#" class="button button-type-1" data-size="small">YOUR ITEMS</a>
			                    </div>
			                    <div>
			                        <a href="#" class="button button-type-1" data-size="small"><i class="fal fa-cart-arrow-down"></i></a>
			                        <a href="#" class="button button-type-1" data-size="small"><i class="fal fa-save"></i></a>
			                        <a href="#" class="button button-type-1" data-size="small"><i class="fal fa-camera"></i></a>
			                    </div>
			                </div>
			                <!-- end of controller -->

			                <div class="c-list-group bg-white px-3">
			                	<div class="container">
			                		<div class="row">
			                			<div class="col-md-2"><strong>Image</strong></div>
			                			<div class="col-md-3"><strong>Product Name</strong></div>
			                			<div class="col-md-2"><strong>Component</strong></div>
			                			<div class="col-md-3"><strong>Price</strong></div>
			                			<div class="col-md-2"><strong>Remove</strong></div>
			                		</div>
			                	</div>

			                    <div class="c-list-item">
			                        <div class="c-list-header">
					                	<div class="container">
							        @if(isset($sessin_products))
							            @foreach($sessin_products as $id => $details)

					                		<div class="row mt-5">
					                			<div class="col-md-2">
					                				<img src="{{asset($details['image'])}}" alt="" style="max-width: 6rem;">
					                			</div>
					                			<div class="col-md-3">
					                				<strong>{{ $details['name'] }}</strong>
					                				 
					                			</div>
					                			<div class="col-md-2">
					                				<strong>{{ $details['component'] }}</strong>
					                			</div>
					                			<div class="col-md-3">
					                				<strong>Special : BDT {{ $details['special_price'] }}</strong>
					                				<strong>Regular : BDT {{ $details['regular_price'] }}</strong>
					                			</div>
					                			<div class="col-md-2">
					                				 <button class="button button-type-1 remove-from-session" data-id="{{ $id }}" data-size="small">Remove</button>
					                			</div>
					                		</div>
										@endforeach

					                	</div>


			                        @endif
			                        </div>

			                    </div>

			                	<div class="container">
			                		<div class="row">
			                			<div class="col-md-2"><strong></strong></div>
			                			<div class="col-md-3"><strong></strong></div>
			                			<div class="col-md-2"><strong></strong></div>
				                        <?php $total = 0 ?>
				                        @foreach((array) session('cart_session') as $id => $details)
				                            <?php $total += $details['special_price'] * $details['quantity'] ?>
				                        @endforeach

			                			<div class="col-md-3"><strong>Total : BDT {{$total}}</strong></div>
			                			<div class="col-md-2"><strong></strong></div>
			                		</div>
			                	</div>


			                </div>
			            </div>
			            <!-- end of container -->
			        </section>


    			</div>
    		</div>
    	</div>

    </main>





@endsection