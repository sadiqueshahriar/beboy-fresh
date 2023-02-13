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
		                <h3 class="card-title">Add Popup</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/popup')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Popup Title</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="title" placeholder="Pop Title" required="required">
		                    </div>
		                  </div>	
		                	
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Popup URL</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="link" placeholder="Popup URL" required="required">
		                    </div>
		                  </div>	
		                  
							<div class="form-group row">
								<div class="col-sm-6">
									<label for="inputEmail3" class="col-form-label">Image Desktop (6660x440)</label>
									<input type="file" class="form-control" name="image_d" placeholder="Fetaure Image" required="required">
								</div>
								<div class="col-sm-6">
									<label for="inputEmail3" class="col-form-label">Image Mobile (320x480)</label>
									<input type="file" class="form-control" name="image_m" placeholder="Fetaure Image" required="required">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12">
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