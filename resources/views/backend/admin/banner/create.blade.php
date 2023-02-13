@extends('layouts.backend.app')

@section('content')
 <div class="content-wrapper">

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
          		
	            <!-- Horizontal Form -->
		            <div class="card card-info">
		              <div class="card-header">
		                <h3 class="card-title">Add Banner</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/banner')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="Banner Title">
		                    </div>
		                  </div>	
		                	
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> URL</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="url" placeholder="URL">
		                    </div>
		                  </div>	
		                  
		                  <div class="form-group row">
		                    <div class="col-sm-12">
		                    	<label for="inputEmail3" class="col-form-label">Banner Description</label>
		                      	<textarea name="description" class="textarea " id=""></textarea>
		                    </div>
		                  </div>			                  


		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Image</label>
			                      	<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>
			                    <div class="col-sm-6">
			                    	<label for="inputPassword3" class="col-form-label">Status</label>
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

@endsection