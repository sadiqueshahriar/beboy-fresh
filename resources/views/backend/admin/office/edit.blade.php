@extends('layouts.backend.app')



@section('content')





<section class="content mt-5">

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

		                <h3 class="card-title">Add Site Info</h3>

		              </div>

		              <!-- /.card-header -->

		              <!-- form start -->

		              <form class="form-horizontal" action="{{URL::to('admin/office/'.$office->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf

		              	@method('PATCH')

		                <div class="card-body">

			                <div class="form-group row">



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Branch Name</label>

			                      	<input type="text" class="form-control" name="branch_name" placeholder="Branch Name" value="{{$office->branch_name}}">

			                    </div>





			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Phone</label>

			                      	<input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$office->phone}}">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Email</label>

			                      	<input type="text" class="form-control" name="email" placeholder="Email" value="{{$office->email}}">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Sales Support</label>

			                      	<input type="text" class="form-control" name="sales_support" placeholder="Sales Support" value="{{$office->sales_support}}">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Technical Support</label>

			                      	<input type="text" class="form-control" name="technicale_support" placeholder="Technical Support" value="{{$office->technicale_support}}">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Warranty Support</label>

			                      	<input type="text" class="form-control" name="warranty_support" placeholder="Warranty Support" value="{{$office->warranty_support}}">

			                    </div>







			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Address</label>

			                      	<textarea name="address" class="form-control"  id="" rows="2">{!! $office->address !!}</textarea>

			                    </div>



			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Iframe</label>

			                      	<textarea name="iframe" class="form-control"  id="" rows="5">{!! $office->iframe !!}</textarea>

			                    </div>

			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Map</label>

			                      	<textarea name="map" class="form-control"  id="" rows="5">{!! $office->map !!}</textarea>

			                    </div>



			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Image</label>

			                    	@if(isset($office))

					                <div class="form-group">

					                    <img src="{{ asset($office->image) }}" alt="Image" style="width: 30%; margin-top: 8px">

					                    <input type="hidden" name="old_image" value="{{ $office->image }}">

					                </div>

				            		@endif

			                      	<input type="file" class="form-control" name="image">

			                    </div>


			                    <div class="col-sm-8">

			                    	<label for="inputEmail3" class="col-form-label">Note</label>

			                      	<input type="text" class="form-control" name="note" placeholder="Note" value="{{$office->note}}">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputPassword3" class="col-form-label">Status</label>

				                    <select name="status" id="" class="form-control">

                        				<option value="1" @php echo $office->status==1?"selected":""; @endphp>Active</option>

                        				<option value="0" @php echo $office->status==0?"selected":""; @endphp>Inactive</option>

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