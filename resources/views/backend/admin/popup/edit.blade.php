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
		                <h3 class="card-title">Edit Popup</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/popup/'.$popup->id)}}" method="post" enctype="multipart/form-data">
		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Popup Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="popup Title" value="{{$popup->title}}">
		                    </div>
		                  </div>	

		                	
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Popup Link</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="link" placeholder="URL" value="{{$popup->link}}">
		                    </div>
		                  </div>	

		                  	<div class="form-group row">
			                    <div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Desktop Image</label>
			                    	@if(isset($popup))
					                <div class="form-group">
										<img style="width:660px" src="{{ asset('images/popup/desktop-popup-'.$popup->image) }}" >
					                    <input type="hidden" name="old_image" value="{{ $popup->image }}">
					                </div>
				            		@endif
			                      	<input type="file" class="form-control" name="image_d" placeholder="Fetaure Image">
			                    </div>
								<div class="col-sm-6">
			                    	<label for="inputEmail3" class="col-form-label">Mobile Image</label>
			                    	@if(isset($popup))
					                <div class="form-group">
										<img style="width:320px" src="{{ asset('images/popup/mobile-popup-'.$popup->image) }}" >
					                </div>
				            		@endif
			                      	<input type="file" class="form-control" name="image_m" placeholder="Fetaure Image">
			                    </div>
		                  	</div>
							<div class="form-group row">
							  <div class="col-sm-6">
								<label for="inputPassword3" class="col-form-label">Status</label>
								<select name="status" id="" class="form-control">
									<option value="1" @php echo $popup->status==1?"selected":""; @endphp>Active</option>
									<option value="0" @php echo $popup->status==0?"selected":""; @endphp>Inactive</option>
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