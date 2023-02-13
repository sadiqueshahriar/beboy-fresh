@extends('layouts.backend.app')


@section('head')


<meta name="title" content="{{$product->meta_title ?? ''}}">
<meta name="description" content="{{$product->meta_des ?? ''}}">
<meta property="keywords" content="{{$product->meta_keywords ?? ''}}" />
<meta property="image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}" />
<meta property="type" content="{{$product->name ?? ''}} :Product" />
<meta property="site_name" content="Binarylogic - Make Your Own PC" />
<meta property="slug" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />

<meta property="og:site_name" content="Binarylogic - Make Your Own PC">
<meta property="og:title" content="{{$product->name ?? ''}}">
<meta property="og:description" content="{{$product->meta_des ?? ''}}">
<meta property="og:type" content="article">

@if(!empty($product->product_image_large))
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}">
@else
<meta property="og:image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}">
@endif

<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<meta property="og:url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">
<meta property="article:published_time" content="{{$product->created_at ?? ''}}" />
<meta property="og:image:alt" content="{{$product->image_alt}}" />
<meta property="ia:markup_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">
<meta property="ia:rules_url" content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}">


<meta name=twitter:card content=summary_large_image />
<meta name=twitter:site content="@Binarylogic" />
<meta name=twitter:creator content="@Binarylogic" />
<meta name=twitter:url content="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" />
<meta name=twitter:title content="{{$product->meta_title ?? ''}}" />
<meta name=twitter:description content="{{$product->meta_des ?? ''}}" />


@if(!empty($product->product_image_large))
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->product_image_large ?? ''}}">

@else
<meta property="twitter:image" content="{{ 'https://binarylogic.com.bd/'.$product->image ?? ''}}">

@endif


@endsection



@section('content')



<style>
	/*.note-editor.note-frame .note-editing-area .note-editable {
    height: 200px;
}*/

	#example1_filter input {
		width: 5rem !important;
	}
</style>
<div class="content-wrapper mt-5">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->



				<div class="col-md-12">

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<!--<div class="fb-share-button mb-5" data-href="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbinarylogic.biz%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>-->

					<!--<script src="https://platform.linkedin.com/in.js" type="text/javascript">-->
					<!--	lang: en_US-->
					<!--</script>-->
					<!--<script type="IN/Share" data-url="{{ 'https://binarylogic.com.bd/'.$product->slug ?? ''}}"></script>-->


					<div class="container">
						<div class="row">
							
						<div class="col-md-3"></div>
						<div class="col-md-3"></div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="{{route('/', [$product->slug])}}" target="_blank"><button class="btn btn-danger mb-3 mt-3 w-75 text-light">View</button></a>
						</div>

						</div>
					</div>	

					<!-- Horizontal Form -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Edit Product</h3>
    
                            <a href="{{URL::to('admin/product')}}" target="_blank" style="float: right;"><h3 class="card-title">Manage Product</h3></a>

						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form class="form-horizontal" action="{{URL::to('admin/product/'.$product->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method('PATCH')
							<div class="card-body">
								<div class="form-group row">

									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Product Name</label>
										<input type="text" class="form-control" name="name" placeholder="Product Name" required="" value="{{$product->name}}">
									</div>

									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Product Subtitle</label>
										  <input type="text" class="form-control" name="subtitle" placeholder="Product subtitle" value="{{$product->subtitle}}">
									</div>

									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Product Slug</label>
										<input type="text" class="form-control" name="slug" required="" value="{{$product->slug}}">
									</div>



									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Meta Title</label>
										<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{$product->meta_title}}">
									</div>


									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Meta Keywords</label>
										<input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" value="{{$product->meta_keywords}}">
									</div>

									<div class="col-sm-12">
										<label for="inputEmail3" class="col-form-label">Meta Description</label>
										<textarea name="meta_des" class="form-control" cols="30" rows="2">{{$product->meta_des}}</textarea>
									</div>



									<div class="col-sm-6">
										<label for="inputEmail3" class="col-form-label">Brand</label>
										<select name="brand_id[]" id="brand_id" class="form-control" multiple="multiple">
										    @foreach($brands as $brand)
    										    
    										    @if(count($productBrands) > 0)
        											@foreach($productBrands as $productBrand)
        											    <option value="{{$brand->id}}" @if($productBrand->brand_id == $brand->id) selected="" @endif>{{$brand->name ?? ''}}</option>
        											@endforeach
        											
        										@else
        										    <option value="{{$brand->id}}">{{$brand->name ?? ''}}</option>
        										@endif
        										
        										
											@endforeach
										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Supplier</label>
										<select name="supplier_id" id="supplier_id" class="form-control">
											<option value="" selected="" disabled="">----Select Supplier----</option>
											@foreach($suppliers as $supplier)
											<option value="{{$supplier->id}}" @php echo $supplier->id==$product->supplier_id?"selected":""; @endphp>{{$supplier->name}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Shop</label>
										<select name="shop" id="" class="form-control" required>
											<option value="retail" @php echo $product->shop=='retail'?"selected":""; @endphp>Retail Shop</option>
											<option value="b2b" @php echo $product->shop=='b2b'?"selected":""; @endphp>B2B Shop</option>
										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Category</label>
										<select name="category_id" id="category_id" class="form-control" required="" onchange="GetSubCategory(this.value)" required="">
											<option value="" selected="" disabled="">----Select Category----</option>
											@foreach($categories as $category)
											<option value="{{$category->id}}" @php echo $category->id==$product->category_id?"selected":""; @endphp>{{$category->name}}</option>
											@endforeach
										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Sub Category</label>
										<select name="sub_category_id" id="subcategory_id" class="form-control" onchange="GetProSubCategory(this.value)">
											<option value="{{$product->subcategory->id ?? ''}}" selected>{{$product->subcategory->name ?? ''}}</option>
										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Pro Sub Category</label>
										<select name="pro_sub_category_id" id="pro_sub_category_id" class="form-control" onchange="GetProproCategory(this.value)">
											<option value="{{$product->prosubcategory->id ?? ''}}" selected>{{$product->prosubcategory->name ?? ''}}</option>

										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Pro Pro Category</label>
										<select name="pro_pro_category_id" id="pro_pro_category_id" class="form-control">
											<option value="{{$product->proprocategory->id ?? ''}}" selected>{{$product->proprocategory->name ?? ''}}</option>

										</select>
									</div>

									<div class="col-sm-3">
										<label for="inputEmail3" class="col-form-label">Component</label>
										<select name="component_id" id="component_id" class="form-control">
										    <option value="">----Select Component----</option>
											@foreach($components as $component)
											<option value="{{$component->id}}" @php echo $component->id==$product->component_id?"selected":""; @endphp>{{$component->name}}</option>
											@endforeach
										</select>
									</div>
								</div>



								<div class="form-group row">
									<div class="col-sm-4  d-none">
										<label for="inputEmail3" class="col-form-label">Buying Price</label>
										<input type="number" class="form-control" name="buying_price" value="{{$product->buying_price}}">
									</div>

									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Call For Price</label>
										<input type="text" class="form-control" name="call_for_price" value="{{$product->call_for_price}}">
									</div>

									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Warranty</label>
										<input type="text" class="form-control" name="warranty" value="{{$product->warranty}}">
									</div>


									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Stock Status: {{$product->stock_status}}</label>
                                        <div>Change Status</div>
										<select name="stock_status" class="form-control ">
												<option value="">Please Select</option>
												<option value="in_stock">In Stock</option>
												<option value="out_of_stock">Out Of Stock</option>
												<option value="limited">Limited Stock</option>
												<option value="preorder">Preorder Now</option>
												<option value="upcoming">Upcoming</option>
										</select>



									</div>


									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Regular Price</label>
										<input type="number" class="form-control" name="regular_price" value="{{$product->regular_price}}">
									</div>

									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Special Price</label>
										<input type="number" class="form-control" name="special_price" value="{{$product->special_price}}">
									</div>
									
									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Offer Price</label>
										<input type="number" class="form-control" name="offer_price" value="{{$product->offer_price ?? ''}}">
									</div>									
									

									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Discount Price</label>
										<input type="number" class="form-control" name="discount_price" value="{{$product->discount_price}}">
									</div>


									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Discount (%)</label>
										<input type="number" class="form-control" name="discount" value="{{$product->discount}}">
									</div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label text-danger">Price highlight  (requried)</label>
			                      	<select class="form-control" name="price_highlight" required>
			                      	    
			                      	    <option value="regular_price" @php echo $product->price_highlight=='regular_price'?"selected":""; @endphp> Regular Price </option>
			                      	    <option value="special_price" @php echo $product->price_highlight=='special_price'?"selected":""; @endphp> Special Price </option>
			                      	    <option value="offer_price" @php echo $product->price_highlight=='offer_price'?"selected":""; @endphp> Offer Price </option>
			                      	    <option value="discount_price" @php echo $product->price_highlight=='discount_price'?"selected":""; @endphp> Discount Price </option>
			                      	    
			                      	</select>
			                    </div>


									<div class="col-sm-4">
										<label for="inputEmail3" class=" col-form-label">Product Qty</label>
										<input type="number" class="form-control" name="qty" value="{{$product->qty}}">
									</div>

									<div class="col-sm-4">
										<label for="inputEmail3" class=" col-form-label">Shop Type</label>
										@if(count($productShops)>0)
										<select name="shop_type_id[]" class="form-control" multiple="" id="shop_type_id">
											@foreach($shop_types as $shop_type)
											@foreach($productShops as $productShop)

											<option value="{{$shop_type->id}}" @php echo $shop_type->id==$productShop->shop_type_id?"selected":""; @endphp>{{$shop_type->title}}</option>

											@endforeach
											@endforeach
										</select>
										@else
										<select name="shop_type_id[]" class="form-control" multiple="" id="shop_type_id">
											@foreach($shop_types as $shop_type)
											<option value="{{$shop_type->id}}">{{$shop_type->title}}</option>
											@endforeach
										</select>
										@endif
									</div>

									<div class="col-sm-4">
										<label for="compatible_product_ids" class=" col-form-label">Compatible Product <span class="small">(leave empty if compatibale with all products, Tip: Set only child item)</span></label>
										  <select name="compatible_product_ids[]" class="form-control" multiple="" id="compatible_product_ids" >
											@foreach($products as $p)
												@if(!empty($product->compatibleIdsToArray()))
												<option value="{{$p->id}}" @if(in_array($p->id, $product->compatibleIdsToArray())) selected @endif>{{$p->name}}</option>
												@else
												<option value="{{$p->id}}">{{$p->name}}</option>
												@endif
											@endforeach
										  </select>
									</div> 
									
									<div class="col-sm-12 mb-4">
										<label for="video" class="col-form-label">Product Video [youtube embed link only]</label>
										<input type="text" class="form-control" name="video" >
									</div>

									<!-- 
			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class=" col-form-label">Min Order Qty</label>
			                      	<input type="number" class="form-control" name="min_order_qty" required="">
			                    </div>  
			                    
			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class=" col-form-label">Max Order Qty</label>
			                      	<input type="number" class="form-control" name="max_order_qty" required="">
			                    </div>  -->
								</div>

								<div class="form-group row">

									<div class="col-sm-4">
										@if(isset($product))
										<div class="form-group">
											<img src="{{ asset($product->image) }}" alt="Image" style="width: 10%; margin-top: 8px">
											<input type="hidden" name="old_image" value="{{ $product->image }}">
										</div>
										@endif
										<label for="inputEmail3" class="col-form-label">Fetaure Image</label>


										<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
									</div>


									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Fetaure Image Alt</label>
										<input type="text" class="form-control" name="image_alt" placeholder="Fetaure Image Alt" value="{{$product->image_alt}}">
									</div>
									
								

									<div class="col-sm-4">
										<label for="inputEmail3" class="col-form-label">Fetaure Image Description</label>
										<textarea name="image_des" class="form-control" cols="30" rows="2">{{ $product->image_des }}</textarea>
									</div>

                
                                 

									<div class="col-sm-12">
									       <hr/>
										<label for="inputEmail3" class="col-form-label">Product Image</label>
										@if(count($productImages) > 0)
    										@foreach($productImages as $productImage)
        										@if(isset($productImage))
        										<div class="form-group">
        											<img src="{{ asset($productImage->product_image_thumb ?? $productImage->product_image) }}" alt="{{ $productImage->product_image_alt }}" style="width: 10%">
        											<input type="hidden" name="old_product_image[]" value="{{$productImage->product_image }}">
        											
        											
        											<input type="hidden" name="old_image_id[]" value="{{$productImage->id }}">
        											
        											Status: 
        											<input type="hidden" id="pi{{$productImage->id }}" name="product_image_status[]" value="{{$productImage->product_image_status }}">
        											<a id="bt{{$productImage->id }}" onclick="setdr({{$productImage->id }})" class="btn btn-danger" href="javascript:void(0)">Delete Image</a>
        											
        											
        										</div>
        										@endif
    										    <table class="table table-striped" id="productImage">
    											<thead>
    												<tr>
    													<th>Image</th>
    													<th>Image ALt</th>
    													<th>Image Des</th>
    													<th>Action</th>
    												</tr>
    											</thead>
    											<tbody>
    												<tr>
    													<td>
    													    
    													    <input type="file" class="form-control" name="product_image[]">
    													  
    													 </td>
    													<td><input type="text" class="form-control" name="product_image_alt[]" value="{{$productImage->product_image_alt}}"></td>
    
    													<td>
    														<textarea name="product_image_des[]" class="form-control" cols="30" rows="2">{{$productImage->product_image_des}}</textarea>
    													</td>
    
    													<td> <button id="add" type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
    												</tr>
    												<tr></tr>
    
    											</tbody>
    										</table>
    										@endforeach
										@else
										<table class="table table-striped" id="productImage">
											<thead>
												<tr>
													<th>Image</th>
													<th>Image ALt</th>
													<th>Image Des</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><input type="file" class="form-control" name="product_image[]"></td>
													<td><input type="text" class="form-control" name="product_image_alt[]"></td>

													<td>
														<textarea name="product_image_des[]" class="form-control" cols="30" rows="2"></textarea>
													</td>

													<td> <button id="add" type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
												</tr>
												<tr></tr>

											</tbody>
										</table>
										@endif
									</div>


                                 <hr/>

				                    <div class="col-sm-12">
				                    	<label for="inputEmail3" class="col-form-label">Free Items For Clients </label>
	                                    <table class="table table-striped" id="freeItemImage">
	                                        <thead>
	                                        <tr>
	                                            <th>Image</th>
	                                            <th>Title</th>
	                                            <th>Image ALt</th>
	                                            <th>Image Des</th>
	                                            <th>Action</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>

	                                        	@if(count($freeitems) > 0)
		                                        	@foreach($freeitems as $item)
			                                            <tr>
			                                                <td>

			                                                	<input type="file" class="form-control" name="free_item_image[]">

										                    	@if(isset($item))
													                <div class="form-group mt-3">
													                    <img src="{{ asset($item->free_item_image) }}" alt="Image" style="width: 10%">
													                    <input type="hidden" name="old_free_item_image[]" value="{{ $item->free_item_image }}">
													                    <input type="hidden" name="old_free_image_id[]" value="{{ $item->id }}">
													                </div>
										                    	@endif


			                                                </td>
			                                                <td><input type="text" class="form-control" name="free_item_title[]" value="{{$item->free_item_title}}"></td>
			                                                <td><input type="text" class="form-control" name="free_item_alt[]" value="{{$item->free_item_alt}}"></td>

			                                                <td>
			                                                	<textarea name="free_item_des[]" class="form-control" cols="30" rows="2" >{{$item->free_item_des}}</textarea>
			                                                </td>

			                                                <td> 

			                                                	<button id="freeItemImage"  type="button" class="btn btn-success btn-sm freeItemImage"><i class="fa fa-plus-circle"></i> </button>
			                                                	<button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button>
			                                                </td>
			                                            </tr>
		                                            @endforeach
	                                            @else

		                                            <tr>
		                                                <td><input type="file" class="form-control" name="free_item_image[]" ></td>
		                                                <td><input type="text" class="form-control" name="free_item_title[]" ></td>
		                                                <td><input type="text" class="form-control" name="free_item_alt[]" ></td>

		                                                <td>
		                                                	<textarea name="free_item_des[]" class="form-control" cols="30" rows="2" ></textarea>
		                                                </td>

		                                                <td> <button id="freeItemImage"  type="button" class="btn btn-success btn-sm freeItemImage"><i class="fa fa-plus-circle"></i> </button></td>
		                                            </tr>

	                                            @endif
	                                            <tr></tr>

	                                        </tbody>
	                                    </table>     
				                    </div>


									

    			                    <div class="col-sm-12">
    			                    	<label for="inputEmail3" class="col-form-label">Product Terms & Conditions</label>
                                        <table class="table table-striped" id="productTerm">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($productTerms)>0)
                                                @foreach($productTerms as $productTerm)
                                                <tr>
                                                    <td><input type="text" class="form-control" name="terms[]" value="{{$productTerm->terms}}"></td>
                                                    <td> 
                                                        <button id="remove"  type="button" class="btn btn-danger btn-sm remove"><i class="fa fa-minus-circle"></i> </button>
                                                        <button id="term"  type="button" class="btn btn-success btn-sm term"><i class="fa fa-plus-circle"></i> </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td><input type="text" class="form-control" name="terms[]"></td>
                                                    <td> 
                                                        <button id="term"  type="button" class="btn btn-success btn-sm term"><i class="fa fa-plus-circle"></i> </button>
                                                    </td>
                                                </tr>
                                                
                                                @endif
                                                <tr></tr>
    
                                            </tbody>
                                        </table>     
    			                    </div>


				                    <div class="col-sm-12">
				                    	<label for="inputEmail3" class="col-form-label">Product Hightlights</label>
	                                    <table class="table table-striped" id="productHightlights">
	                                        <thead>
	                                        <tr>
	                                            <th>Highlight</th>
	                                            <th>Action</th>
	                                        </tr>
	                                        </thead>
	                                        <tbody>
	                                            @if(count($productHighlights)>0)
	                                        	@foreach($productHighlights as $productHighlight)
	                                            <tr>
	                                                <td><input type="text" class="form-control" name="highlights[]" value="{{$productHighlight->highlights}}"></td>
	                                                <td> <button id="addHightlights"  type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button></td>
	                                            </tr>
	                                            @endforeach
	                                            @else
	                                            <tr>
	                                                <td><input type="text" class="form-control" name="highlights[]"></td>
	                                                <td> <button id="addHightlights"  type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button></td>
	                                            </tr>
	                                            @endif
	                                            <tr></tr>

	                                        </tbody>
	                                    </table>     
				                    </div>


								</div>

                                
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">OR</label>

								</div>
                                
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Product Highlights</label>
									<div class="col-sm-12">
										<textarea name="product_highlights" id="product_heighlight" class="form-control" rows="2">{!!$product->product_highlights!!}</textarea>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Product Details</label>
									<div class="col-sm-12  mt-3">
										<div class="col-md-12">
											<div class="mb-3">
												<textarea name="description" id="description" class="textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$product->description!!}</textarea>
											</div>
										</div>
									</div>
								</div>





								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Specification</label>
									<div class="col-sm-12">
										<textarea name="specification" id="specification" class="form-control" rows="2">{{$product->specification}}</textarea>
									</div>
								</div>
								@php
								$note_txt = "";
								$note_url = "";
								if(!empty($product->note)){
									$note = explode('----',$product->note);
									if(sizeof($note) > 1){
										$note_txt = $note[0];
										$note_url = $note[1];
									}else{
										$note_txt = $note[0];
										$note_url = "";
									}
								}
								@endphp

								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Note</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="note" placeholder="Note" value="{{$note_txt}}">
										<input type="url" pattern="https://.*" type="text" class="form-control mt-1" name="note_link" value="{{$note_url}}" placeholder="Driver Link">
									</div>
								</div>
                                <div class="form-group row">
									<label for="inputPassword3" class="col-sm-2 col-form-label">Home Delivery</label>
									<div class="col-sm-9">
									  <select name="home_delivery" id="" class="form-control">
										<option value="1" @php echo $product->home_delivery==1?"selected":""; @endphp>Yes</option>
										<option value="0" @php echo $product->home_delivery==0?"selected":""; @endphp>No</option>
									  </select>
									</div>
								  </div>
								<div class="form-group row">
									<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
									<div class="col-sm-9">
										<select name="status" id="" class="form-control">
											<option value="1" @php echo $product->status==1?"selected":""; @endphp>Active</option>
											<option value="0" @php echo $product->status==0?"selected":""; @endphp>Inactive</option>
										</select>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-info">Update</button>
								<button type="reset" class="btn btn-default float-right">Cancel</button>
							</div>
							<!-- /.card-footer -->
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>

</div>





@endsection

<script>
    function setdr(id){
        $("#pi"+id).val(0);
        $("#bt"+id).html('Cancel Delete Image Request');
        $("#bt"+id).attr('onclick','setcdr('+id+')');
    }
    function setcdr(id){
        $("#pi"+id).val(1);
        $("#bt"+id).html('Delete Image');
        $("#bt"+id).attr('onclick','setdr('+id+')');
    }
</script>