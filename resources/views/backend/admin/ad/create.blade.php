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
		                <h3 class="card-title">Add Description Page Ads</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/ad')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">


		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Image</label>
			                      	<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>
			                    {{-- <div class="col-sm-6">
			                    	<label for="inputPassword3" class="col-form-label">Page</label>
			                      	<select name="page" id="" class="form-control">
			                      		<option value="home">Home</option>
			                      </select>
			                    </div> --}}
		                  	</div>


		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">IMAGE URL</label>
			                      	<input type="text" class="form-control" name="cta" placeholder="IMAGE URL">
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