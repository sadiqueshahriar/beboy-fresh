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
		                <h3 class="card-title">Edit Ad</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/ad/'.$ad->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
							@if(isset($ad))
							<div style="display: flex; justify-content:center">
								<img src="{{ asset($ad->image) }}" alt="Image" style="width: 100px">
							</div>
							@endif
		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Image</label>
			                      	<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>

			                    <div class="col-sm-6">
			                    	{{-- <label for="inputPassword3" class="col-form-label">Page</label>
			                      	<select name="page" id="" class="form-control">
			                      		<option value="home" @php echo $ad->page=='home'?"selected":""; @endphp>Home</option>
			                      		<option value="other" @php echo $ad->page=='other'?"selected":""; @endphp>Other</option>
			                      </select> --}}
			                    </div>
		                  	</div>

							  <div class="form-group row">
								<div class="col-sm-6">
									<label for="inputEmail3" class="col-form-label">IMAGE URL</label>
									  <input type="text" class="form-control" value="{{ $ad->cta ?? '' }}" name="cta" placeholder="IMAGE URL">
								</div>
								<div class="col-sm-6">
									<label for="inputPassword3" class="col-form-label">Status</label>
									  <select name="status" id="" class="form-control">
										<option value="1" @php echo $ad->status==1?"selected":""; @endphp>Active</option>
										<option value="0" @php echo $ad->status==0?"selected":""; @endphp>Inactive</option>
								  </select>
								</div>
							  </div>
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

@endsection