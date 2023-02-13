@extends('layouts.backend.app')

@section('content')

 <div class="content-wrapper mt-5">
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-8 offset-md-2">

	            @if ($errors->any())
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
  		
                @if(session()->has('notif'))
                <div class="alert alert-success">
                    <strong style="font-size: 12px">{{session()->get('notif')}}</strong>
                </div>
                @endif
          		
	            <!-- Horizontal Form -->
		            <div class="card card-info">
		              <div class="card-header">
		                <h3 class="card-title">Import xlsx</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/import')}}" method="post" enctype="multipart/form-data">
		              	@csrf
		                <div class="card-body">

		                  	<div class="form-group row">
			                    <label for="inputEmail3" class="col-sm-3 col-form-label">File</label>
			                    <div class="col-sm-9">
			                      <input type="file" class="form-control" name="file" required="">
			                      <span style="color: red">Supported Formate: .xlsx </span>
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