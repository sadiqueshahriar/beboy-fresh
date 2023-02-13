@extends('layouts.backend.app')

@section('content')

 <div class="content-wrapper">
<section class="content ">
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
		                <h3 class="card-title">Edit Slider Box Image</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{route('sliderbox-img.update',$data->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
		                    </div>
		                  </div>		 

		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>
			                    <div class="col-sm-9">
			                    	@if(isset($data))
					                <div class="form-group">
					                    <img src="{{ asset($data->img) }}" alt="Image" style="width: 20%; margin-top: 8px">
					                    <input type="hidden" name="old_image" value="{{ $data->img }}">
					                </div>
				            		@endif

			                      <input type="file" class="form-control" name="img" placeholder="Fetaure Image">
			                    </div>
		                  	</div>

                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Url</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="url" placeholder="Url" value="{{$data->url}}">
                                </div>
                              </div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
                        			<option value="1" @php echo $data->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $data->status==0?"selected":""; @endphp>Inactive</option>
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