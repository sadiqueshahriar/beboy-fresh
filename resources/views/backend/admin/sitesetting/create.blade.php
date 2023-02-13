@extends('layouts.backend.app')

@section('content')


<section class="content mt-5">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-6 offset-md-4 mt-5">

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
		                <h3 class="card-title">Add Site Info</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/sitesetting')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">


			                <div class="form-group row">



			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Site Name</label>
			                      	<input type="text" class="form-control" name="name" placeholder="Site Name">
			                    </div>
			                    
			                    

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Meta Title</label>
			                      	<input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
			                    </div>
			                    

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Meta Description</label>
			                      	<input type="text" class="form-control" name="meta_des" placeholder="Meta Description">
			                    </div>			                    
			                    
			                    
			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Meta Keywords</label>
			                      	<input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
			                    </div>				                    


			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Canonical ( Tag ) Link</label>
			                      	<input type="text" class="form-control" name="canonical" placeholder="Canonical ( Tag ) Link">
			                    </div>	


			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Robots meta tag</label>
			                      	<input type="text" class="form-control" name="meta_robots" placeholder=".. , ...">
			                    </div>	

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Address</label>
			                      	<input type="text" class="form-control" name="address" placeholder="Address">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Phone</label>
			                      	<input type="text" class="form-control" name="phone" placeholder="Phone">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Email</label>
			                      	<input type="text" class="form-control" name="email" placeholder="Email">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Facebook</label>
			                      	<input type="text" class="form-control" name="facebook" placeholder="Facebook">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Twitter</label>
			                      	<input type="text" class="form-control" name="twitter" placeholder="Twitter">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Linkedin</label>
			                      	<input type="text" class="form-control" name="linkedin" placeholder="linkedin">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Youtube</label>
			                      	<input type="text" class="form-control" name="youtube" placeholder="Youtube">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Intagram</label>
			                      	<input type="text" class="form-control" name="intagram" placeholder="Intagram">
			                    </div>


			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Thumbnail</label>
			                      	<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>



			                    <div class="col-sm-6">
			                    	<label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
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