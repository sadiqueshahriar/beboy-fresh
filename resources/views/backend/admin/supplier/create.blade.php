@extends('layouts.backend.app')

@section('content')


<section class="content mt-5 mb-5">
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
		                <h3 class="card-title">Add Supplier</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/supplier')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">

		                <div class="form-group row">

		                   	<div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Full Name</label>
		                      	<input type="text" class="form-control" name="name" placeholder="Full Name">
		                    </div>

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Company</label>
		                      	<input type="text" class="form-control" name="company" placeholder="Company">
		                    </div>

		                </div>

		                <div class="form-group row">
		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Phone</label>
		                      	<input type="text" class="form-control" name="phone" placeholder="Phone Number">
		                    </div>

		                    <div class="col-sm-6">
		                    	<label for="inputEmail3" class="col-form-label">Email</label>
		                      	<input type="text" class="form-control" name="email" placeholder="Email">
		                    </div>
		                </div>			                  

		                <div class="form-group row">

		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">City</label>
		                      	<input type="text" class="form-control" name="city" placeholder="City">
		                    </div>

		                    <div class="col-sm-4">
		                   	 	<label for="inputEmail3" class="col-form-label">Post Code</label>
		                      	<input type="text" class="form-control" name="post_code" placeholder="Post Code">
		                    </div>

		                    <div class="col-sm-4">
		                    	<label for="inputEmail3" class="col-form-label">Country</label>
		                      	<input type="text" class="form-control" name="country" placeholder="Country">
		                  </div>	

		                </div>				                  

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Address</label>
		                    <div class="col-sm-9">
		                      <textarea class="form-control" name="address"></textarea>
		                    </div>
		                  </div>			                  


		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
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


@endsection