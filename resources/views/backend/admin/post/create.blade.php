@extends('layouts.backend.app')

@section('content')

 <div class="content-wrapper">
<section class="content mt-5 mb-5">
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
		                <h3 class="card-title">Add Post</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/post')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group row">

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Post Title</label>
		                      <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" >
		                    </div>		

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Slug</label>
		                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" required="">
		                    </div>		                    

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Meta Title</label>
		                      	<input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
		                    </div>

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Meta Description</label>
		                      	<textarea name="meta_description" class="form-control" id="" cols="30" rows="2"></textarea>
		                    </div>
		                    
		                    <div class="col-sm-12 mb-4">
								<label for="video" class="col-form-label">Blog Video [youtube embed link only]</label>
								<input type="text" class="form-control" name="video">
							 </div>

		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Category</label>
		                      	<select name="category_id"  class="form-control" required="">
                                    @foreach($categories as $category)
			                            <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
		                      	</select>
		                    </div>	
		                    
		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Tag</label>
		                      	<select name="tag_id[]" id="tag_id" class="form-control" multiple="multiple">
                                    @foreach($tags as $tag)
			                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
		                      	</select>
		                    </div>	


		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Keywords</label>
		                      	<input type="text" class="form-control" name="key_words" placeholder="Keywords">
		                    </div>

		                    <div class="col-sm-12">
		                    	<label for="inputEmail3" class="col-form-label">Post Description</label>
								<textarea name="description" class="textarea " id="" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		                    </div>

			                <div class="col-sm-4">
			                    <label for="inputEmail3" class="col-form-label">Fetaure Image</label>
			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
		                  	</div>		  

							<div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Date</label>
		                      	<input type="date" class="form-control" name="date" placeholder="date" required>
		                    </div>

							<div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Time</label>
		                      	<input type="time" class="form-control" name="time" placeholder="date">
		                    </div>
		                    
		                    <div class="col-sm-12">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
		                      	<select name="status" id="" class="form-control">
		                      		<option value="1">Active</option>
		                      		<option value="0">Inactive</option>
		                      	</select>
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




@endsection

