@extends('layouts.backend.app')

@section('content')


<section class="content  mt-5 mb-5">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-6 offset-4 mt-5">

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
		                <h3 class="card-title">Edit Component</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/component/'.$component->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
	 

		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="name" required="" value="{{$component->name}}">
			                    </div>
		                  	</div>

		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Slug</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="slug" required="" value="{{$component->slug}}">
			                    </div>
		                  	</div>



		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>
			                    <div class="col-sm-9">
			                    	@if(isset($component))
					                <div class="form-group">
					                    <img src="{{ asset($component->image) }}" alt="Image" style="width: 30%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $component->image }}">
					                </div>
				            		@endif

			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">
			                    </div>
		                  	</div>



		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alt Tag</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="alt_tag" value="{{$component->alt_tag}}">
			                    </div>
		                  	</div>

		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image Short Des</label>
			                    <div class="col-sm-9">
			                      <input type="text" class="form-control" name="img_des" value="{{$component->img_des}}">
			                    </div>
		                  	</div>





		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
                        			<option value="1" @php echo $component->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $component->status==0?"selected":""; @endphp>Inactive</option>
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


@endsection