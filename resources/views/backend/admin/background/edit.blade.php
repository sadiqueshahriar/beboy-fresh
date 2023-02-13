@extends('layouts.backend.app')

@section('content')
<!-- 


<style>
	
.note-editor.note-frame .note-editing-area .note-editable {
    height: 200px;
}


</style> -->
 <div class="content-wrapper mt-5">
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
		                <h3 class="card-title">Edit Background Colors</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/backgrounds/$background->id')}}" method="post">
						@method('PATCH')
		              	@csrf
		                <div class="card-body">
			                <div class="form-group row">

			                    <div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Latest Product BG Color</label>
			                      	<input type="text" class="form-control" name="latest_products" placeholder="Color code" value="{{ $backgrounds->latest_products ?? '' }}">
			                    </div>
			                    

			                    <div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Upcoming Product BG Color</label>
			                      	<input type="text" class="form-control" name="upcoming_products" placeholder="Color code" value="{{ $backgrounds->upcoming_products ?? '' }}">
			                    </div>			                    
			                    
			                    <div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Top Product BG Color</label>
			                      	<input type="text" class="form-control" name="top_products" placeholder="Color code" value="{{ $backgrounds->top_products ?? '' }}">
			                    </div>
			                    <div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Brand BG Color</label>
			                      	<input type="text" class="form-control" name="brand" placeholder="Color code" value="{{ $backgrounds->brand ?? '' }}">
			                    </div>

									
								<h6 class="mt-5 ml-2">Product detail Page</h6>
								<div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Body BG</label>
			                      	<input type="text" class="form-control" name="pd_body_bg" placeholder="Color code" value="{{ $backgrounds->pd_body_bg ?? '' }}">
			                    </div>
								<div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Container BG</label>
			                      	<input type="text" class="form-control" name="pd_container_bg" placeholder="Color code" value="{{ $backgrounds->pd_container_bg ?? '' }}">
			                    </div>
								<div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Text Color</label>
			                      	<input type="text" class="form-control" name="pd_text_color" placeholder="Color code" value="{{ $backgrounds->pd_text_color ?? '' }}">
			                    </div>
								<div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Navigation BG Color</label>
			                      	<input type="text" class="form-control" name="pd_nav_bg" placeholder="Color code" value="{{ $backgrounds->pd_nav_bg ?? '' }}">
			                    </div>
								<div class="col-md-12">
			                    	<label for="inputEmail3" class="col-form-label">Product Details Tab</label>
			                      	<input type="text" class="form-control" name="product_details_tab" placeholder="Color code" value="{{ $backgrounds->product_details_tab ?? '' }}">
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