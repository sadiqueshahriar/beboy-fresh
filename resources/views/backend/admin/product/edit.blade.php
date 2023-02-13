@extends('layouts.backend.app')
@section('head')
<meta name="title" content="{{$product->meta_title ?? ''}}">
<meta name="description" content="{{$product->meta_des ?? ''}}">
<meta property="keywords" content="{{$product->meta_keywords ?? ''}}" />
<meta property="image" content="{{ 'https://beboybd.com/'.$product->image ?? ''}}" />
<meta property="type" content="{{$product->name ?? ''}} :Product" />
<meta property="site_name" content="Binarylogic - Make Your Own PC" />
<meta property="slug" content="{{ 'https://beboybd.com/'.$product->slug ?? ''}}" />
<meta property="og:site_name" content="Binarylogic - Make Your Own PC">
<meta property="og:title" content="{{$product->name ?? ''}}">
<meta property="og:description" content="{{$product->meta_des ?? ''}}">
<meta property="og:type" content="article">
@if(!empty($product->product_image_large))
<meta property="og:image" content="{{ 'https://beboybd.com/'.$product->product_image_large ?? ''}}">
@else
<meta property="og:image" content="{{ 'https://beboybd.com/'.$product->image ?? ''}}">
@endif
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="{{ 'https://beboybd.com/'.$product->slug ?? ''}}">
<meta property="article:published_time" content="{{$product->created_at ?? ''}}" />
<meta property="og:image:alt" content="{{$product->image_alt}}" />
<meta property="ia:markup_url" content="{{ 'https://beboybd.com/'.$product->slug ?? ''}}">
<meta property="ia:rules_url" content="{{ 'https://beboybd.com/'.$product->slug ?? ''}}">
<meta name=twitter:card content=summary_large_image />
<meta name=twitter:site content="@Binarylogic" />
<meta name=twitter:creator content="@Binarylogic" />
<meta name=twitter:url content="{{ 'https://beboybd.com/'.$product->slug ?? ''}}" />
<meta name=twitter:title content="{{$product->meta_title ?? ''}}" />
<meta name=twitter:description content="{{$product->meta_des ?? ''}}" />
@if(!empty($product->product_image_large))
<meta property="twitter:image" content="{{ 'https://beboybd.com/'.$product->product_image_large ?? ''}}">
@else
<meta property="twitter:image" content="{{ 'https://beboybd.com/'.$product->image ?? ''}}">
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
   .trumbowyg-editor table td {
   border: 2px solid #000000 !important;
   padding: 5px 10px 22px 10px !important;
   }
   #sortable{list-style:none;list-style-type:none}
   #sortable li:hover{cursor: pointer;}
   .new_table td{
   width: 60% !important;
   }
   .select2-selection {
   width: 380px !important;
   }
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
   $( function() {
   
     $( "#sortable" ).sortable();
   
   } );
   
</script>
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
               
               <div class="container">
                  <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-3"></div>
                     <div class="col-md-3">
                         <a href="http://www.beboybd.com/admin/product"><button class="btn btn-primary mb-3 mt-3 text-light w-75">Manage Product</button></a>
                     </div>
                     <div class="col-md-3">
                        <a href="{{route('/', [$product->slug])}}" target="_blank"><button class="btn btn-danger mb-3 mt-3 w-75 text-light">View</button></a>
                     </div>
                  </div>
               </div>
               <!-- Horizontal Form -->
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Edit Product</h3>
                     <a href="{{URL::to('admin/product')}}" target="_blank" style="float: right;">
                        <h3 class="card-title">Manage Product</h3>
                     </a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  name="myForm" action="{{URL::to('admin/product/'.$product->id)}}" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PATCH')
                     <div class="card-body">
                        
                           <div class="row">
                           
                              <div class="col-sm-4">
                                 <label for="inputEmail3" class="col-form-label">Product Name</label>
                                 <input type="text" class="form-control" name="name" placeholder="Product Name"  value="{{$product->name}}">
                              </div>
                              <!--<div class="col-sm-6">-->
                              <!--   <label for="inputEmail3" class="col-form-label">Product Subtitle</label>-->
                              <!--   <input type="text" class="form-control" name="subtitle" placeholder="Product subtitle" value="{{$product->subtitle}}">-->
                              <!--</div>-->
                              <div class="col-sm-4">
                                 <label for="inputEmail3" class="col-form-label">Product Slug</label>
                                 <input type="text" class="form-control" name="slug"  value="{{$product->slug}}">
                              </div>
                              <div class="col-sm-4">
                                 <label for="inputEmail3" class="col-form-label">Meta Title  <span style="font-weight: normal;color:red;">( Not More Than 59 Characters )</span></label>
                                 (<span id="meta_title" style="color: #0063da;">0 </span><span style="color: #0063da;" id="meta_text"> Character Count </span>)
                                 <input type="text" class="form-control meta_input" name="meta_title" placeholder="Meta Title" value="{{$product->meta_title}}">
                              </div>
                              <div class="col-sm-3">
                                 <label for="inputEmail3" class="col-form-label">Brand</label><br>
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
                                 <label for="inputEmail3" class="col-form-label">Meta Keywords</label>
                                 <!--<input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" value="{{$product->meta_keywords}}">-->
                                 <input type="text" class="form-control" name="meta_keywords" value="{{$product->meta_keywords}}">
                              </div>
                          
                              <div class="col-sm-6">
                                 <label for="inputEmail3" class="col-form-label">Meta Description</label>
                                 (<span id="rchars" style="color: #0063da;">0 </span><span style="color: #0063da;"> Character Count </span>)
                                 <textarea name="meta_des" class="form-control" cols="30" rows="2">{{$product->meta_des}}</textarea>
                              </div>
                           </div>
                          
                              <div class="form-group row">
                                 <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-form-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-control"  onchange="GetSubCategory(this.value)" >
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
                              </div>
                           
                          
                              <div class="form-group row">

                                 <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-form-label">Stock Status: {{$product->stock_status}}</label>
                                    <div>Change Status</div>
                                    <select name="stock_status" class="form-control">
                                       <option value=0>Please Select</option>
                                       <option value="in_stock">In Stock</option>
                                       <option value="out_of_stock">Out Of Stock</option>
                                       <option value="new_arrived">New Arrived</option>
                                       <option value="limited">Limited Stock</option>
                                       <option value="preorder">Preorder Now</option>
                                       <option value="coming">Coming Soon</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-form-label">Regular Price</label>
                                    <input type="number" class="form-control" name="regular_price" value="{{$product->regular_price}}">
                                 </div>
                                 <div class="col-sm-3">
                                    <label for="inputEmail3" class="col-form-label">Offer Price</label>
                                    <input type="number" class="form-control" name="offer_price" value="{{$product->offer_price ?? ''}}">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label">Discount (%)</label>
                                    <input type="number" class="form-control" name="discount" value="{{$product->discount}}">
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class="col-form-label text-danger">Price highlight  (requried)</label>
                                    <select class="form-control" name="price_highlight" >
                                       <option value="regular_price" @php echo $product->price_highlight=='regular_price'?"selected":""; @endphp> Regular Price </option>
                                       <option value="offer_price" @php echo $product->price_highlight=='offer_price'?"selected":""; @endphp> Offer Price </option>
                                    </select>
                                 </div>
                                 <div class="col-sm-4">
                                    <label for="inputEmail3" class=" col-form-label">Product Qty</label>
                                    <input type="number" class="form-control" name="qty" value="{{$product->qty}}">
                                 </div>
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
                                    <input name="image_des" class="form-control" value="{{$product->image_des}}">
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
                                                <input name="product_image_des[]" value="{{$productImage->product_image_des}}" class="form-control">
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
                                                <input name="product_image_des[]" class="form-control">
                                             </td>
                                             <td> <button id="add" type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
                                          </tr>
                                          <tr></tr>
                                       </tbody>
                                    </table>
                                    @endif
                                 </div>
                                 <hr/>
                              </div>
                           
                           
                              <div class="form-group row">
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
                                    @if(count($productHighlights)>0)
                                    <ul id="sortable" class="mt-4" style="margin-left: -28px;">
                                       @foreach($productHighlights as $productHighlight)
                                       <li class="ui-state-default p-3" style="display: flex;background-color: rgba(0,0,0,.05);">
                                          <input type="text" style="width: 60%;" class="form-control" name="highlights[]" value="{{$productHighlight->highlights}}">
                                          <a onclick="delete_row(this)" href="javacript:void()" type="button" class="btn btn-danger btn-sm ml-4">

                                             <i class="fa fa-minus-circle text-white"></i>
                     
                                           </a>
                                          <button id="addHightlights" style="margin-left:10px;" type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button>
                                       </li>
                                       @endforeach
                                       @else
                                       <li class="ui-state-default p-3" style="display: flex;background-color: rgba(0,0,0,.05);">
                                          <input type="text" style="width: 60%;" class="form-control" name="highlights[]">
                                          <button id="addHightlights" style="margin-left:10px;" type="button" class="btn btn-success btn-sm addHightlights"><i class="fa fa-plus-circle"></i> </button>
                                       </li>
                                    </ul>
                                    @endif
                                 </div>
                                 <div class="col-sm-12">
                                    <label for="inputEmail3" class="col-form-label ml-3">Product Hightlights</label>
                                    <table class="table table-striped new_table" id="productHightlights">
                                    </table>
                                 </div>
                                 <div class="col-sm-12">
                                    <label for="inputFaq" class="col-form-label">Product FAQ</label>
                                    <table class="table table-striped" id="productFaq">
                                       <thead>
                                          <tr>
                                             <th>Question (256) / Answer (1024)</th>
                                             <th width="150">Point (1-10)</th>
                                             <th width="150">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="product-highLightes">
                                          @if(count($productFaqs)>0)
                                          @php 
                                          $i = 0;
                                          @endphp
                                          @foreach($productFaqs as $faq)
                                          <tr id="faqrow{{$i}}">
                                             <td>
                                                <input type="hidden" class="form-control" name="faq[{{$i}}][id]" value="{{$faq->id}}">
                                                <input type="text" class="form-control" name="faq[{{$i}}][question]" value="{{$faq->question}}">
                                                <textarea rows="3" class="form-control binaryTinyMCE" name="faq[{{$i}}][answer]">{{$faq->answer}}</textarea>
                                             </td>
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
                                    <div id="productFaqs"></div>
                                    <table>
                                       <tr>
                                          <td><button id="faqPlus" onclick="setFaq({{count($productFaqs)}})" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> </button></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-2 col-form-label">Product Details</label>
                                 <div class="col-sm-12  mt-3">
                                    <div class="col-md-12">
                                       <div class="mb-3">
                                          <textarea name="description" id="description" class="textarea">{!!$product->description!!}</textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-2 col-form-label">More Details</label>
                                 <div class="col-sm-12  mt-3">
                                   <div class="col-md-12">
                                      <div class="mb-3">
                                        <textarea name="product_summery" id="product_summery" class="textarea">{!!$product->product_summery!!}</textarea>
                                      </div>
                                   </div>
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
                          
                            
                              <!-- Share information -->
                              <div class="border mb-4 p-4" style="background: #e7e7e7;">
                                 <div class="form-group row">
                                    @if(!empty($productSocial))
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Title</label>
                                       <input type="text" class="form-control meta_input" name="socialTitle" value="{{$productSocial->socialTitle}}">
                                    </div>
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Description</label>
                                       <input type="text" class="form-control" name="socialDescription" value="{{$productSocial->socialDescription}}">
                                    </div>
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Image</label><br>
                                       <img src="../images/social_image/{{$productSocial->socialImage}}" alt="Share Image" style="width:300px"><br><br>
                                       <input type="file" name="socialImage" value="{{$productSocial->socialImage}}">
                                    </div>
                                    @else
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Title</label>
                                       <input type="text" class="form-control meta_input" name="socialTitle" value="">
                                    </div>
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Description</label>
                                       <input type="text" class="form-control" name="socialDescription" value="">
                                    </div>
                                    <div class="col-sm-12">
                                       <label for="" class="col-form-label">Share Image</label><br>
                                       <input type="file" name="socialImage" value="">
                                    </div>
                                    @endif
                                 </div>
                              </div>
                              <!-- End Share information -->
                           
                       
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
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
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
   
</script>
<script>

   function delete_row(e)
 
 {
 
     e.parentNode.parentNode.removeChild(e.parentNode);
 
 }

 //javascript validation starts
 function validateForm() {
      let n = document.forms["myForm"]["name"].value;
      let s = document.forms["myForm"]["slug"].value;
      let c = document.forms["myForm"]["category_id"].value;
      let p = document.forms["myForm"]["price_highlight"].value;
       
      // let image = document.forms["myForm"]["image"].value;
      if (n == "") {
         alert("Product Name must be filled out");
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
      // if (stock == "Please Select") {
      //    alert("Stock Status must be filled out");
      //    return false;
      // }
      // if (image == "") {
      //    alert("Feature Image must be filled out");
      //    return false;
      // }
   }
 //javascript validation ends
 
 </script>
@endsection