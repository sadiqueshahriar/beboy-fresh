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

		              <form class="form-horizontal" action="{{URL::to('admin/office')}}" method="post" enctype="multipart/form-data">

		              	@csrf

		                <div class="card-body">





			                <div class="form-group row">







			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Branch Name</label>

			                      	<input type="text" class="form-control" name="branch_name" placeholder="Branch Name">

			                    </div>







			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Phone</label>

			                      	<input type="text" class="form-control" name="phone" placeholder="Phone">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Email</label>

			                      	<input type="text" class="form-control" name="email" placeholder="Email">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Sales Support</label>

			                      	<input type="text" class="form-control" name="sales_support" placeholder="Sales Support">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Technical Support</label>

			                      	<input type="text" class="form-control" name="technicale_support" placeholder="Technical Support">

			                    </div>



			                    <div class="col-sm-4">

			                    	<label for="inputEmail3" class="col-form-label">Warranty Support</label>

			                      	<input type="text" class="form-control" name="warranty_support" placeholder="Warranty Support">

			                    </div>



			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Address</label>

			                      	<textarea name="address" class="form-control"  id="" rows="2"></textarea>

			                    </div>


			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Iframe</label>

			                      	<textarea name="iframe" class="form-control"  id="" rows="5"></textarea>

			                    </div>


			                    <div class="col-sm-12">

			                    	<label for="inputEmail3" class="col-form-label">Map</label>

			                      	<textarea name="map" class="form-control"  id="" rows="5"></textarea>

			                    </div>



			                    <div class="col-sm-8">

			                    	<label for="inputEmail3" class="col-form-label">Image</label>

			                      	<input type="file" class="form-control" name="image">

			                    </div>



			                    <div class="col-sm-8">

			                    	<label for="inputEmail3" class="col-form-label">Note</label>

			                      	<input type="text" class="form-control" name="note" placeholder="Note">

			                    </div>





			                    <div class="col-sm-4">

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





@endsection