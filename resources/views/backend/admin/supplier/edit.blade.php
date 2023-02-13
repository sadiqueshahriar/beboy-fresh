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
		              <form class="form-horizontal" action="{{URL::to('admin/supplier/'.$supplier->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">

			                <div class="form-group row">

			                   	<div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Full Name</label>
			                      	<input type="text" class="form-control" name="name" placeholder="Full Name" value="{{$supplier->name ?? ''}}">
			                    </div>

			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Company</label>
			                      	<input type="text" class="form-control" name="company" placeholder="Company" value="{{$supplier->company ?? ''}}">
			                    </div>

			                </div>

			                <div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Phone</label>
			                      	<input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{$supplier->phone ?? ''}}">
			                    </div>

			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Email</label>
			                      	<input type="text" class="form-control" name="email" placeholder="Email" value="{{$supplier->email ?? ''}}">
			                    </div>
			                </div>			                  

			                <div class="form-group row">

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">City</label>
			                      	<input type="text" class="form-control" name="city" placeholder="City" value="{{$supplier->city ?? ''}}">
			                    </div>

			                    <div class="col-sm-4">
			                   	 	<label for="inputEmail3" class="col-form-label">Post Code</label>
			                      	<input type="text" class="form-control" name="post_code" placeholder="Post Code" value="{{$supplier->post_code ?? ''}}">
			                    </div>

			                    <div class="col-sm-4">
			                    	<label for="inputEmail3" class="col-form-label">Country</label>
			                      	<input type="text" class="form-control" name="country" placeholder="Country" value="{{$supplier->country ?? ''}}">
			                  </div>	

			                </div>				                  

			                <div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Address</label>
			                    <div class="col-sm-9">
			                      <textarea class="form-control" name="address">{{$supplier->address ?? ''}}</textarea>
			                    </div>
			                </div>			                  


		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>
			                    <div class="col-sm-9">
                                    @if(isset($supplier))
					                <div class="form-group">
					                    <img src="{{ asset($supplier->image) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $supplier->image }}">
					                </div>
				            		@endif

			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>
		                  	</div>

			                <div class="form-group row">
			                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
			                    <div class="col-sm-9">
			                      <select name="status" id="" class="form-control">
                                    <option value="1" @php echo $supplier->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $supplier->status==0?"selected":""; @endphp>Inactive</option>
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