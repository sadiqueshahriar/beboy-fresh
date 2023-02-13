@extends('layouts.backend.app')

@section('content')


 <div class="content-wrapper mt-5">
<section class="content mb-5">
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
		              <div class="card-header">
		                <h3 class="card-title">Add Pro Sub Category</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/prosubcategory')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">

                          <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Category</label>
		                    <div class="col-sm-9">
		                      <select name="category_id" id="category_id" class="form-control" onchange="GetSubCategory(this.value)">
                                <option selected disabled>Select Category</option>
                                  @foreach($categories as $category)
		                      	    <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
		                      </select>
		                    </div>
		                  </div>


                          <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Sub Category</label>
		                    <div class="col-sm-9">
		                      <select name="subcategory_id" id="subcategory_id" class="form-control">
		                      	<option value="" selected disabled> Sub Category</option>

		                      </select>
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pro Sub Category Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="name" placeholder="Pro Sub Category Name">
		                    </div>
		                  </div>			                  


		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">SLug </label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="slug" placeholder="SLug Name" required="">
		                    </div>
		                  </div>

						  <div class="form-group row">
		                    <label for="inputDescription" class="col-sm-3 col-form-label">Description</label>
		                    <div class="col-sm-12">
		                      <textarea name="description" class="form-control" rows="5"></textarea>
		                    </div>
		                  </div>
						  
		                  <div class="form-group row">
							<label for="inputEmail3" class="col-form-label">Meta Title <br> <span style="font-weight: normal;color:red;">( Not More Than 59 Characters )</span><br>
								(<span id="meta_title" style="color: #0063da;">0 </span> <span style="color: #0063da;" id="meta_text"> Character Count </span>)
							</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control meta_input" name="meta_title" placeholder="Meta Title">
		                    </div>
		                  </div>			                  

		                  
		                  <div class="form-group row">
							<label for="inputEmail3" class="col-form-label">Meta Description <br>
								<span id="rchars" style="color: #0063da;">( 180 </span><span style="color: #0063da;"> Character Remaining )</span>
							</label>
		                    <div class="col-sm-9">
		                      <textarea name="meta_des" class="form-control" rows="5" maxlength="180"></textarea>
		                    </div>
		                  </div>
		                  
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Meta Keywords</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="meta_keywords">
		                    </div>
		                  </div>
		                  
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Meta Image</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" name="image" placeholder="Meta Image">
		                    </div>
		                  </div>	
		                  
		                  <div class="form-group row">
							<div class="col-sm-12">
									<label for="inputFaq" class="col-form-label">Pro Sub Category FAQ</label>
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
													<textarea rows="3" class="form-control binaryTinyMCE" name="faq[0][answer]"></textarea></td>
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
								</div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
		                      	<option value="1">Active</option>
		                      	<option value="0">Inactive</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <!-- /.card-body -->
		                <div class="card-footer">
		                  <button type="submit" class="btn btn-info">Save</button>
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
<script>
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