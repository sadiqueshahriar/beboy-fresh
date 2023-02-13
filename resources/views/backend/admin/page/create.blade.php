@extends('layouts.backend.app')


@section('content')


<style>
	
.note-editor.note-frame .note-editing-area .note-editable {
    height: 300px;
}

</style>

<section class="content mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-10 offset-md-2 mt-5">

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
		                <h3 class="card-title">Add Page</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/page')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">


		                  <!--<div class="form-group row">-->
		                  <!--  <label for="inputEmail3" class="col-sm-3 col-form-label"> Page Category</label>-->
		                  <!--  <div class="col-sm-9">-->
		                  <!--    <select name="page_category_id" id="" class="form-control">-->
		                  <!--  		@foreach($categories as $category)-->
		                  <!--    			<option value="{{$category->id}}">{{$category->name}}</option>-->
		                  <!--    		@endforeach-->
		                  <!--    </select>		                    	-->
		                  <!--  </div>-->
		                  <!--</div>-->


		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="Page Title">
		                    </div>
		                  </div>		                  

			             <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Meta Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
		                    </div>
		                  </div>		                  

			             <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Meta Description</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="meta_des" placeholder="Meta Description">
		                    </div>
		                  </div>

			             <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Meta Keywords</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
		                    </div>
		                  </div>

			             <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> Image</label>
		                    <div class="col-sm-9">
		                      <input type="file" class="form-control" name="meta_image" placeholder="Image">
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Content</label>
		                    <div class="col-sm-9">
				                <textarea name="content" class="textarea summernote" id="summernote">        	
				                </textarea>
		                    </div>
		                  </div>			                  

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Content</label>
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



@endsection