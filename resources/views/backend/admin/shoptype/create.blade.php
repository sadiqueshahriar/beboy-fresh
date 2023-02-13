@extends('layouts.backend.app')



@section('content')





<section class="content mt-5">

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

		                <h3 class="card-title">Add Feature Box</h3>

		              </div>

		              <!-- /.card-header -->

		              <!-- form start -->

		              <form class="form-horizontal" action="{{URL::to('admin/shoptype')}}" method="post" enctype="multipart/form-data">

		              	@csrf

		                <div class="card-body">

			                <div class="form-group row">

			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Shop Title</label>

			                    <div class="col-sm-9">

			                      <input type="text" class="form-control" name="title" placeholder="Shop Title">

			                    </div>

			                </div>	

							<div class="form-group row">

								<label for="inputEmail3" class="col-sm-3 col-form-label">Shop Slug</label>

								<div class="col-sm-9">

								<input type="text" class="form-control" name="slug" placeholder="shop-slug">

								</div>

							</div>

			                <div class="form-group row">

			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Short Description</label>

			                    <div class="col-sm-9">

			                      <textarea name="short_description" class="form-control" id="" rows="3"></textarea>

			                    </div>

			                </div>			                  





		                  	<div class="form-group row">

			                    <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>

			                    <div class="col-sm-9">

			                      <input type="file" class="form-control" name="image" placeholder="Fetaure Image">

			                    </div>

		                  	</div>







			                <div class="form-group row">

			                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>

			                    <div class="col-sm-9">

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