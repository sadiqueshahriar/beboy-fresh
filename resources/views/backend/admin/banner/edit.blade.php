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
		                <h3 class="card-title">Edit Banner</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/banner/'.$banner->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Banner Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="Banner Title" value="{{$banner->title}}">
		                    </div>
		                  </div>	

		                	
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label"> URL</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="url" placeholder="URL" value="{{$banner->url}}">
		                    </div>
		                  </div>	


		                  <div class="form-group row">
		                    <div class="col-sm-12">
		                    	<label for="inputEmail3" class="col-form-label">Banner Description</label>
		                      	<textarea name="description" class="textarea " id="">{!!$banner->description!!}</textarea>
		                    </div>
		                  </div>			                  


		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Image</label>
			                    	@if(isset($banner))
					                <div class="form-group">
					                    <img src="{{ asset($banner->image) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $banner->image }}">
					                </div>
				            		@endif
			                      	<input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>

			                    <div class="col-sm-6">
			                    	<label for="inputPassword3" class="col-form-label">Status</label>
			                      	<select name="status" id="" class="form-control">
                        				<option value="1" @php echo $banner->status==1?"selected":""; @endphp>Active</option>
                        				<option value="0" @php echo $banner->status==0?"selected":""; @endphp>Inactive</option>
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