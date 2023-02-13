@extends('layouts.backend.app')

@section('content')


<section class="content  mt-5">
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
		                <h3 class="card-title">Edit User</h3>
		              </div>
		              <!-- /.card-header -->
		              <!-- form start -->
		              <form class="form-horizontal" action="{{URL::to('admin/user/'.$user->id)}}" method="post" enctype="multipart/form-data">

		              	@csrf
		              	@method('PATCH')
		                <div class="card-body">
		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">User Name</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="name" placeholder="User Name" value="{{$user->name}}">
		                    </div>
		                  </div>		

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
		                    </div>
		                  </div>


		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
		                    <div class="col-sm-9">
		                      <input type="text" class="form-control" name="password" placeholder="Password" value="{{$user->password_str}}">
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <label for="inputEmail3" class="col-sm-3 col-form-label">Role</label>
		                    <div class="col-sm-9">
		                      <select name="role_id" id="" class="form-control">
                                <option value="0" @php echo $user->role_id==0?"selected":""; @endphp>Sub Admin</option>
                                <option value="1" @php echo $user->role_id==1?"selected":""; @endphp>Editor</option>
                              </select>
		                    </div>
		                  </div>

		                  <div class="form-group row">
		                    <label for="inputPassword3" class="col-sm-3 col-form-label">Status</label>
		                    <div class="col-sm-9">
		                      <select name="status" id="" class="form-control">
                        			<option value="1" @php echo $user->status==1?"selected":""; @endphp>Active</option>
                        			<option value="0" @php echo $user->status==0?"selected":""; @endphp>Inactive</option>
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