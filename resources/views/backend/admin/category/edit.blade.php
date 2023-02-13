@extends('layouts.backend.app')

@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/backend/dist/css/edit-temp.css')}}">


<style>

	.color_picker {
		font-family: 'lato', sans-serif;
		text-align: center;
		background: #f7f7f7;
	}

	#color1 {
		border: none;
		width: 100px;
		height: 100px;
		outline: none;
		padding: 4px;
		box-shadow: 1px 0px 3px #333, -1px 0px 3px #333;
	}


	#color2 {
		border: none;
		width: 100px;
		height: 100px;
		outline: none;
		padding: 4px;
		box-shadow: 1px 0px 3px #333, -1px 0px 3px #333;
	}

	input[type="button"] {
		padding: 10px 15px;
		border: none;
		background-color: #333;
		color: white;
	}

	p#output {
		color: white;
		letter-spacing: 1px;
	}

	input[type="button"]:hover {
		background-color: #444;
		cursor: pointer;
		transition: .2s linear;
	}
	
	
	
    :root {
        --color-sky-blue: #146b96;
        --bs-white: #fff;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
    }
    .fz-extra-small {
        font-size: 12px;
    }
    .lh-1 {
        line-height: 1;
    }
    section {
        padding: 50px 0;
        margin: 0 30px;
    }
    .container-fluid {
        max-width: 1600px;
    }
    
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0, .85);
        z-index: -1;
    }
    
    .preview-popup {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1039;
        overflow-y: auto;
        overflow-x: hidden;
        display: none;
    }
    .preview-popup::-webkit-scrollbar {
        display: none;
    }
    
    /* button ======================================= */
    .close-preview-popup {
        position: absolute;
        top: 0;
        right: 0;
        border: none;
        background-color: transparent;
    }
    .button {
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        text-align: center;
        border: none;
        outline: none;
    }
    .button-type-1 {
        background-color: var(--color-sky-blue);
        color: var(--bs-light) !important;
        padding: 10px 20px;
        font-size: 15px;
    }
    .button-icon {
        --size: 30px;
        width: var(--size);
        height: var(--size);
        color: var(--bs-white);
        background-color: transparent;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    .card__icons--top .button {
        background-color: var(--color-sky-blue);
        border-radius: 4px;
    }
    
    .card__icons--top .button:hover {
        background-color: var(--bs-dark);
    }
    .button-tab {
        padding: 5px 20px;
        color: var(--bs-dark);
        margin-right: 5px;
    }
    
    .button-tab.active, .button-tab:hover {
        background: var(--color-sky-blue);
        color: var(--bs-light);
    }
    
    /* cart ==================================== */
    .cart {
        position: relative;
    }
    .card-type-2 {
        font-family: 'Roboto', sans-serif !important;
        text-align: center;
    }
    
    .card-type-2 h5 {
        font-weight: bold !important;
    }
    
    .card-type-2 h6 {
        color: gray;
        font-size: 15px;
    }
    .card-type-2 .card__image {
        height: 300px;
        width: 100%;
        object-fit: contain;
        object-position: center;
        position: relative;
    }
    .card__icons {
        display: flex;
        justify-content: center;
        transition: .2s;
        background-color: rgba(0, 0, 0, .7);
    }
    .card__heading {
        color: #313131;
    }
    .card__heading a {
        color: inherit;
    }
    .card__icons--top {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    
    .card__icons--top .button {
        background-color: var(--color-sky-blue);
        border-radius: 4px;
    }
    
    .card__icons--top .button:hover {
        background-color: var(--bs-dark);
    }
    
    @media (min-width: 768px) {
        .button-load-more {
            position: absolute;
            top: 8px;
            right: 7.5px;
            padding: 5px 20px !important;
        }
    }	
    	
	
	
</style>

 <div class="content-wrapper mt-5">
<section class="content  mb-5">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-12 mt-5">

	            @if ($errors->any())
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
          		
	            <!-- Horizontal Form -->
		            <div class="card card-info">
		              <div class="card-header d-flex justify-content-around">
		                    <h3 class="card-title">Edit Category</h3>
		                
		                    <a href="{{URL::to('admin/category')}}" target="_blank" style=""><h3 class="card-title">Manage Product</h3></a> 
		                
		                    <a href="{{route('view-update-history', [$category->id])}}" target="_blank"><h3 class="card-title float-right">Update History</h3></a>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/category/'.$category->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{$category->name}}">
		                    </div>
		                  </div>


		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Slug </label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="slug" placeholder="SLug Name" required=""  value="{{$category->slug}}">
		                    </div>
		                  </div>
		                  
		                  <div class="form-group row">
		                    <label for="positionId" class="col-sm-3 col-form-label">Position Serial </label>
		                    <div class="col-sm-9">
		                      <input type="number" class="form-control" name="position_id" value="{{$category->position_id}}">
		                    </div>
		                  </div>
	
						  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Description</label>
		                    <div class="col-sm-12">
		                      <textarea name="description" class="textarea form-control" rows="5">{{$category->description}}</textarea>
		                    </div>
		                  </div>
						  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Category Summary</label>
		                    <div class="col-sm-12">
		                      <textarea name="category_summary" id="category_summary" class="textarea form-control" rows="5">{{$category->category_summary}}</textarea>
		                    </div>
		                  </div>

		                  <div class="form-group row">
							<label for="inputEmail3" class="col-form-label">Meta Title <br> <span style="font-weight: normal;color:red;">( Not More Than 59 Characters )</span><br>
								(<span id="meta_title" style="color: #0063da;">0 </span> <span style="color: #0063da;" id="meta_text"> Character Count </span>)
							</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control meta_input" name="meta_title" placeholder="Meta Title"  value="{{$category->meta_title}}">
		                    </div>
						
		                  </div>			                  

		                  
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-form-label">Meta Description <br>
								<span id="rchars" style="color: #0063da;">( 180 </span><span style="color: #0063da;"> Character Remaining )</span>
							</label>
		                    <div class="col-sm-9">
		                      <textarea name="meta_des" class="form-control" rows="5" maxlength="180">{{$category->meta_des}}</textarea>
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Meta Keywords</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="meta_keywords"   value="{{$category->meta_keywords}}">
		                    </div>
		                  </div>			                  



		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Thumbnail</label>
			                    <div class="col-sm-9">
			                    	@if(isset($category))
					                <div class="form-group">
					                    <img src="{{ asset($category->image) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $category->image }}">
					                </div>
				            		@endif

			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>
		                  	</div>


		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Ad</label>
			                    <div class="col-sm-9">
			                        
			                    	@if(isset($category))
					                <div class="form-group">
					                    <img src="{{ asset($category->banner_ad) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_banner_ad" value="{{ $category->banner_ad }}">
					                </div>
				            		@endif			                        
			                        
			                      <input type="file" class="form-control" name="banner_ad">
			                    </div>
		                  	</div>		                  	
		                  	
		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Ad Url</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="banner_ad_url" value="{{ $category->banner_ad_url }}">
			                    </div>
		                  	</div>			                  	
		                  	
		                  	
		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Banner Ad Status</label>
		                    <div class="col-sm-9">
		                      <select name="banner_ad_status" id="" class="form-control">
                        			<option value="1" @php echo $category->banner_ad_status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $category->banner_ad_status==0?"selected":""; @endphp>Inactive</option>
		                      </select>
		                    </div>
		                  </div>


							<div class="color_picker" style="background-color: #7c7c7c">

								<div class="row justify-content-center">
									<div class="col-auto d-flex flex-column align-items-center">
										<p class="heading text-light">Choose Background</p>
										<input type="color" name="color1" id="color1" style="background-color: {{ $category->bg_color }}">									
										
										<div>
											<input type="button" onClick="processData('color1')" value="SET" class="mb-2 mt-2">
										</div>
									</div>

									<div class="col-auto d-flex flex-column align-items-center">
										<p class="heading text-light">Choose Category Title Color</p>
										<input type="color" name="color2" id="color2" style="background-color: {{ $category->bg_color }}">									
										<div>
											<input type="button" onClick="processDataCat('color2')" value="SET" class="mb-2 mt-2">
										</div>
										
									</div>
								</div>

								<div class="text-center">
									<input type="button" value="PREVIEW" class="mb-2 mt-2 show-preview">
								</div>


								<br><br>


							</div>


							<div class="form-group row  mt-2">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Background Color</label>
								<div class="col-sm-9">
									<input type="text" class="form-control " name="bg_color" placeholder="Hex code" value="{{ $category->bg_color }}" id="bg_color">
								</div>
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Category Title Color</label>
								<div class="col-sm-9">
									<input type="text" class="form-control " name="cat_title_color" placeholder="Hex code" value="{{ $category->cat_title_color }}" id="cat_title_color">
								</div>
							</div>

							<div class="form-group row">
							<div class="col-sm-12">
										<label for="inputFaq" class="col-form-label">Category FAQ</label>
										<table class="table table-striped" id="productFaq">
											<thead>
												<tr>
													<th>Question (256) / Answer (1024)</th>
													<th width="150">Point (1-10)</th>
													<th width="150">Action</th>
												</tr>
											</thead>
											<tbody class="product-highLightes">
												@if(!empty($catFaqs) && count($catFaqs)>0)
													@php 
														$i = 0;
														$countFaq = count($catFaqs);
													@endphp
													@foreach($catFaqs as $faq)
													<tr id="faqrow{{$i}}">
														<td>
															<input type="hidden" class="form-control" name="faq[{{$i}}][id]" value="{{$faq->id}}">
															<input type="text" class="form-control" name="faq[{{$i}}][question]" value="{{$faq->question}}">
															<textarea rows="3" class="form-control binaryTinyMCE" name="faq[{{$i}}][answer]">{{$faq->answer}}</textarea></td>
														<td><input type="number" class="form-control" name="faq[{{$i}}][point]" value="{{$faq->point}}"></td>
														<td><button id="faqPlus" onclick="removeFaq({{$i}})" type="button" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle"></i> </button></td>
													</tr>
														@php 
															$i++;
														@endphp
													@endforeach
												@endif
												
											</tbody>
										</table>  
										<table>
											<tr>
												<td><button id="faqPlus" onclick="setFaq({{$countFaq ?? 0}})" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> </button></td>
												<td></td>
												<td></td>
												
											</tr>
										</table>
										<div id="productFaqs"></div>   
									</div>
							</div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
                        			<option value="1" @php echo $category->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $category->status==0?"selected":""; @endphp>Inactive</option>
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




<div class="preview-popup">
	<div class="overlay"></div>

	<section class="position-relative section-bgc" style="background-color: #368910; margin-top: 50px; border-radius: 5px;">
		<button class="close-preview-popup" style="font-size: 29px; background-color: red"><i class="fas fa-times"></i></button>

		<div class="container-fluid position-relative">
			<div class="d-flex mb-2 justify-content-between align-items-center flex-column flex-md-row">
				<h2 class="mb-0 category-name" style="font-family: 'Bebas Neue', cursive;font-size: 40px;">{{$category->name}}</h2>
				<ul class="nav d-flex justify-content-center my-md-0 my-4 product-nav" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link button button-tab active" id="newest-arrivals-desktop-pc-tab" data-bs-toggle="tab" data-bs-target="#newest-arrivals-desktop-pc" type="button" role="tab" aria-controls="newest-arrivals-desktop-pc" aria-selected="true">Newest-arrivals</button>
					</li>

					<li class="nav-item" role="presentation">
						<button class="nav-link button button-tab" id="top-popular-desktop-pc-tab" data-bs-toggle="tab" data-bs-target="#top-popular-desktop-pc" type="button" role="tab" aria-controls="top-popular-desktop-pc" aria-selected="false">Top-popular</button>
					</li>

					@foreach($subcategories as $subcategory)
					<li class="nav-item" role="presentation">
						<button class="nav-link button button-tab" id="binary-pc-tab" data-bs-toggle="tab" data-bs-target="#binary-pc" type="button" role="tab" aria-controls="binary-pc" aria-selected="false">{{$subcategory->name}}</button>
					</li>
					@endforeach
				</ul>
				<div></div>
			</div>

			<div class="tab-content mt-5" id="myTabContent">
				<div class="tab-pane fade show active" id="newest-arrivals-desktop-pc" role="tabpanel" aria-labelledby="newest-arrivals-desktop-pc-tab">
					<div class="row g-3 g-md-5">

						@foreach($products as $product)
						<div class="col-12 col-md-6 col-lg-3">
							<div class="card card-type-2">
								<div class="card__image">
									<a href="">
										<img src="{{asset($product->product_image_small ?? $product->image)}}" alt="Binary PC – 04" longdesc="" class="card__image">
										<div class="card__icons--top">
											<div class="d-flex">
												<form action="" method="post" class="mr-2">
													<input type="hidden" name="_token" value="Ztg3wQxYZWcBuPM3aSM28W1EDHTDPavgn9fBjmCP"> 
													<input type="hidden" name="product_id" value="166">
													<input type="hidden" name="qty" value="1">
													<button type="submit" class="button button-icon"><i class="fas fa-cart-plus" aria-hidden="true"></i></button>
												</form>
												<form action="" method="post">
													<input type="hidden" name="_token" value="Ztg3wQxYZWcBuPM3aSM28W1EDHTDPavgn9fBjmCP"> <input type="hidden" min="1" value="166" class="fz-normal" name="product_id">
													<input type="hidden" min="1" value="1" class="fz-normal" name="qty">
													<button type="submit" class="button button-icon"><i class="fas fa-heart" aria-hidden="true"></i></button>
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
								<div class="p-3 d-flex flex-column justify-content-between" style="min-height: 240px">
									<div>
										<h5 class="card__heading"><a href="#" style="text-decoration: none">{{$product->name}}</a></h5>
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
                                            <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ {{number_format($product->regular_price)}}</strong><br>
                                            @endif

                                            @if($product->special_price != '')
                                            <strong class="fz-normal d-inline-block text-success">Special Price: ৳ {{number_format($product->special_price)}}</strong><br>
                                            @endif
                                        </div>
                                        @endif
									</div>

									<div class="card__icons align-items-center">
										<button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="166">
											<i class="fas fa-eye mr-3" aria-hidden="true"></i> View
										</button>
										<a href="" class="button button-type-1 d-block w-100"><i class="fas fa-shopping-bag mr-3" aria-hidden="true"></i> Shop</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach


						<div class="col-12 text-center d-flex justify-content-center" style="position: static;">
							<button class="button button-type-1 button-load-more"><a href="#" class="w-100 text-white" style="text-decoration: none">View All</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>




<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
	function processData(c1) {
		var cv1 = document.getElementById(c1).value;

		var bg_color = document.getElementById("bg_color").value = cv1;

		// p.textContent = cv1;
		$('.section-bgc').css('background-color', cv1)
	}

	function processDataCat(c2) {
		var cv2 = document.getElementById(c2).value;
		var cat_title_color = document.getElementById("cat_title_color").value = cv2;
		$('.category-name').css('color', cv2)
	}
	$('.show-preview').click(() => {
		$('.preview-popup').fadeIn(200);
	})

	$('.close-preview-popup').on('click', () => {
		$('.preview-popup').fadeOut(200)
	});
	var maxLength = 180;
	$('textarea').keyup(function() {
	  var textlen = maxLength - $(this).val().length;
	  $('#rchars').text(textlen);
	});
	
	var lenth = 0;
	$('.meta_input').keyup(function() {
	  var textlen1 = lenth + $(this).val().length;
	  $('#meta_title').text(textlen1);
	  if (textlen1>59) {
		// $('#meta_title').text(textlen1);
		$("#meta_title").css("color", "red");
		$("#meta_text").css("color", "red");
		// alert("limit reached");
	
	  }
	});
</script>


@endsection