@extends('layouts.backend.app')
@section('content')
<!-- 
   <style>
   
   	
   
   .note-editor.note-frame .note-editing-area .note-editable {
   
       height: 200px;
   
   }
   
   
   
   
   
   </style> -->
<style>
   .trumbowyg-editor table td {
   border: 2px solid #000000 !important;
   padding: 5px 10px 22px 10px !important;
   }
   .select2-selection {
   width: 380px !important;
   }
</style>
<div class="content-wrapper mt-5">
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               {{-- @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif --}}
               <!-- Horizontal Form -->
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Add Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal product-details-form" name="myForm" action="{{URL::to('admin/product')}}" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                              <div class="col-md-4">
                                 <label for="inputEmail3" class="col-form-label">Product Name</label>
                                 <input type="text" class="form-control product-name text-dark" name="name" placeholder="Product Name">
                              </div>
                              <!--<div class="col-sm-6">-->
                              <!--   <label for="inputEmail3" class="col-form-label">Product Subtitle</label>-->
                              <!--   <input type="text" class="form-control" name="subtitle" placeholder="Product subtitle" >-->
                              <!--</div>-->
                              <div class="col-sm-4">
                                 <label for="inputEmail3" class="col-form-label">Product Slug</label>
                                 <input type="text" class="form-control" name="slug" >
                              </div>
                              <div class="col-sm-4">
                                 <label for="inputEmail3" class="col-form-label">Meta Title  <span style="font-weight: normal;color:red;">( Not More Than 59 Characters )</span></label>
                                 (<span id="meta_title" style="color: #0063da;">0 </span><span style="color: #0063da;" id="meta_text"> Character Count </span>)
                                 <input type="text" class="form-control meta_input" name="meta_title" placeholder="Meta Title" >
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Brand</label><br>
                                 <select name="brand_id[]" id="brand_id" class="form-control product-brand" multiple="multiple">
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Meta Keywords</label>
                                 <!--<input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">-->
                                 <input type="text" class="form-control" name="meta_keywords" value="">
                              </div>

                              <div class="col-sm-6">
                                 <label for="inputEmail3" class="col-form-label">Meta Description</label>
                                 (<span id="rchars" style="color: #0063da;">0 </span><span style="color: #0063da;"> Character Count </span>)
                                 <textarea name="meta_des" class="form-control" cols="30" rows="2" id="textarea" maxlength="180"></textarea>
                              </div>
                           </div>
                         
							         <div class="form-group row">
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Category</label>
                                 <select name="category_id" id="category_id" class="form-control product-category" onchange="GetSubCategory(this.value)">
                                    <option value="" selected="" disabled="">----Select Category----</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Sub Category</label>
                                 <select name="sub_category_id" id="subcategory_id" class="form-control product-sub-category"   onchange="GetProSubCategory(this.value)">
                                    <option value="" selected="" disabled="">----Select Sub Category----</option>
                                 </select>
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Pro Sub Category</label>
                                 <select name="pro_sub_category_id" id="pro_sub_category_id" class="form-control"  onchange="GetProproCategory(this.value)">
                                    <option value="" selected="" disabled="" >----Select Pro Sub Category----</option>
                                 </select>
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Pro Pro Category</label>
                                 <select name="pro_pro_category_id" id="pro_pro_category_id" class="form-control" >
                                    <option value="" selected="" disabled="">----Select Pro Pro Category----</option>
                                 </select>
                              </div>
							</div>
                          

                           
                              <!--<div class="form-group row">-->
                              <!--   <div class="col-sm-3">-->
                              <!--      <label for="inputEmail3" class="col-form-label">Shop</label>-->
                              <!--      <select name="shop" class="form-control" required>-->
                              <!--         <option value="" selected>Select Shop</option>-->
                              <!--         <option value="retail">Retail Shop</option>-->
                              <!--         <option value="b2b">B2B Shop</option>-->
                              <!--      </select>-->
                              <!--   </div>-->
                              <!--</div>-->
                              <div class="form-group row">
                                 <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-form-label">Stock Status</label>
                                    <select name="stock_status" class="form-control ">
                                       <option value="in_stock">In Stock</option>
                                       <option value="out_of_stock">Out Of Stock</option>
                                       <option value="new_arrived">New Arrived</option>
                                       <option value="coming">Coming Soon</option>
                                       <option value="limited">Limited Stock</option>
                                       <option value="preorder">Preorder Now</option>

                                    </select>
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Regular Price</label>
                                    <input type="number" class="form-control" name="regular_price">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Offer Price</label>
                                    <input type="number"  class="form-control" name="offer_price">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Discount (%)</label>
                                    <input type="number" class="form-control" name="discount">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label text-danger">Price highlight  (requried)</label>
                                    <select class="form-control" name="price_highlight">
                                       <option selected disabled> Select Price </option>
                                       <option value="regular_price"> Regular Price </option>
                                       <option value="offer_price"> Offer Price </option>
                                    </select>
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class=" col-form-label">Product Qty</label>
                                    <input type="number" class="form-control" name="qty" >
                                 </div>
                              </div>
                         
                          
                              <div class="form-group row">
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Fetaure Image</label>
                                    <input type="file" class="form-control feature-image" name="image" placeholder="Fetaure Image">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Fetaure Image Alt</label>
                                    <input type="text" class="form-control" name="image_alt" placeholder="Fetaure Image Alt">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Fetaure Image Description</label>
                                    <textarea name="image_des" class="form-control" cols="30" rows="2"></textarea>
                                 </div>
                                 <div class="col-sm-12">
                                    <label for="inputEmail3" class="col-form-label">Product Image</label>
                                    <table class="table table-striped" id="productImage">
                                       <thead>
                                          <tr>
                                             <th>Image</th>
                                             <th>Image ALt</th>
                                             <th>Image Des</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="product-images">
                                          <tr>
                                             <td><input type="file" class="form-control" name="product_image[]" ></td>
                                             <td><input type="text" class="form-control" name="product_image_alt[]" ></td>
                                             <td>
                                                <textarea name="product_image_des[]" class="form-control" cols="30" rows="2" ></textarea>
                                             </td>
                                             <td> <button id="add"  type="button" class="btn btn-success btn-sm add"><i class="fa fa-plus-circle"></i> </button></td>
                                          </tr>
                                          <tr></tr>
                                       </tbody>
                                    </table>
                                 </div>
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
									  <tr>
										 <td><input type="text" class="form-control" name="terms[]" ></td>
										 <td> <button id="term"  type="button" class="btn btn-success btn-sm term"><i class="fa fa-plus-circle"></i> </button></td>
									  </tr>
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
								   <tbody class="product-highLightes">
									  <tr>
										 <td><input type="text" class="form-control" name="highlights[]"></td>
										 <td> <button id="addHightlights"  type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button></td>
									  </tr>
									  <tr></tr>
								   </tbody>
								</table>
							 </div>
							 <div class="col-sm-12">
								<label for="inputFaq" class="col-form-label">Product FAQ</label>
								<table class="table table-striped" id="productFaq">
								   <thead>
									  <tr>
										 <th>Question (256)/Answer (1024)</th>
										 <th width="150">Point (1-10)</th>
										 <th width="150">Action</th>
									  </tr>
								   </thead>
								   <tbody class="product-highLightes">
									  <tr>
										 <td>
											<input type="text" class="form-control" name="faq[0][question]">
											<textarea rows="3" class="form-control binaryTinyMCE" name="faq[0][answer]"></textarea>
										 </td>
										 </td>
										 <td><input type="number" class="form-control" name="faq[0][point]"></td>
										 <td></td>
									  </tr>
								   </tbody>
								</table>
								<table>
								   <tr>
									  <td><button id="faqPlus" onclick="setFaq(1)" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> </button></td>
									  <td></td>
									  <td></td>
								   </tr>
								</table>
							 </div>
						  
						  <div class="form-group row">
							 <label for="inputEmail3" class="col-sm-2 col-form-label">Product Details</label>
							 <div class="col-sm-12  mt-3">
								<div class="col-md-12">
								   <div class="mb-3">
									  <textarea name="description" id="description" class="textarea"></textarea>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="form-group row">
							 <label for="inputEmail3" class="col-sm-2 col-form-label">More Details</label>
							 <div class="col-sm-12  mt-3">
								<div class="col-md-12">
								   <div class="mb-3">
									  <textarea name="product_summery" id="product_summery" class="textarea"></textarea>
								   </div>
								</div>
							 </div>
						  </div>
						  <div class="form-group row">
							 <label for="inputPassword3" class="col-sm-2 col-form-label">Home Delivery</label>
							 <div class="col-sm-9">
								<select name="home_delivery" id="" class="form-control">
								   <option value="1">Yes</option>
								   <option value="0">No</option>
								</select>
							 </div>
						  </div>
						  <div class="form-group row">
							 <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
							 <div class="col-sm-9">
								<select name="status" class="form-control">
								   <option value="1">Active</option>
								   <option value="0">Inactive</option>
								</select>
							 </div>
						  </div>
					 
					   <!-- /.card-body -->
					
				</div>
                          
                     <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        
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
<div class="product-preview">
   <div class="overlay">
      <img src="https://media4.giphy.com/media/3oEjI6SIIHBdRxXI40/200.gif" alt="">
   </div>
   <div class="product-preview__inner" style="background-color: #313131;">
      <button class="close-product-preview"><i class="fas fa-times"></i></button>
      <div class="row">
         <div class="col-md-5">
            <div style="background-color: #fff; padding: 10px; border-radius: 5px;">
               <img src="/" alt="" class="feature-image">
               <div class="product-thumb-slider mt-1" style="overflow: hidden;">
                  <div class="swiper-wrapper"></div>
               </div>
            </div>
         </div>
         <!-- /.col -->
         <div class="col-md-7">
            <div class="product-details">
               <h2 class="product-name">Intel NUC7PJYH Mini PC NUC Kit</h2>
               <div class="product-stock-statuses mb-2"></div>
               <div class="call-for-price mb-4" style="background: var(--danger); padding: 3px; text-align: center;">
                  <div class="call-for-price-text" style="color: #fff; margin-left: 20px; font-size: 35px;"></div>
               </div>
               <div class="regular-price">Regular Price: ৳ <span class="number">20,700</span></div>
               <div class="spacial-price">Special Price: ৳ <span class="number">19,000</span></div>
               <div class="product-highlight">
                  <p class="product-highlight-title">Product Highlights</p>
                  <ul style="color: #fff; font-size: 14px;">
                     <li>1.5 GHz Intel Pentium J5005 Quad-Core</li>
                     <li>2 x DDR4-2400 SODIMM Slots (Up to 8GB)</li>
                     <li>1 x 2.5″ Drive Bay</li>
                     <li>Integrated Intel UHD Graphics 605</li>
                     <li>SDXC Media Card Reader</li>
                     <li>1 x 10/100/1000 Mb/s Gigabit Ethernet</li>
                  </ul>
               </div>
               <!-- /.product-highlight -->
               <div class="warranty">
                  <p class="warranty-title">Warranty for <span class="number"></span> Month</p>
               </div>
               <div class="monthlyEMI">
                  <p class="monthlyEMI-title">Monthly EMI</p>
                  <ul></ul>
               </div>
               <div class="call-for-price mb-4">
                  <h1 class="text-light"> 01727 061082 》》01611 449778</h1>
               </div>
               <div class="product-footer">
                  <input type="number" class="nice-number" min="1" value="1" name="qty">
                  <button type="button" class="button button-danger mr-1 ml-2">Add To Cart</button>
                  <button type="button" class="button button-danger mr-1">Buy Now</button>
                  <button type="button" class="button button-danger mr-1">Wish List</button>
               </div>
               <p class="mb-0 text-light fz-normal brand mt-3">Brand: <span></span></p>
               <p class="mb-0 text-light fz-normal categories">
                  Categories: 
                  <span class="category"></span>
                  <span class="sub-category"></span>
                  <span class="pro-sub-category"></span>
                  <span class="pro-pro-sub-category"></span>
               </p>
            </div>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.product-preview__inner -->
</div>
<!-- /.product-preview -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>-->
<script>
   var Length = 0;
   $('textarea').keyup(function() {
     var textlen = Length + $(this).val().length;
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


   function validateForm() {
      let n = document.forms["myForm"]["name"].value;
      let s = document.forms["myForm"]["slug"].value;
      let c = document.forms["myForm"]["category_id"].value;
      let p = document.forms["myForm"]["price_highlight"].value;
      let image = document.forms["myForm"]["image"].value;


      if (n == "") {
         alert("Name must be filled out");
         return false;
      }  
      if (s == "") {
         alert("Slug must be filled out");
         return false;
      }
      if (c == "") {
         alert("Category must be filled out");
         return false;
      }
      if (p == "Select Price") {
         alert("price highlight must be filled out");
         return false;
      }  
      if (image == "") {
         alert("Feature Image must be filled out");
         return false;
      }
      
   }

   
</script>
@endsection