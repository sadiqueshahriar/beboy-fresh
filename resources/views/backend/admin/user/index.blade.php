@extends('layouts.backend.app')

@section('content')

    <section class="content mt-5" style="margin-top: 5rem !important;">
      <div class="row">
        <div class="col-md-8 offset-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Role</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($users as $user)
                <tr>
                  	<td>{{$i++}}</td>
                    <td>
                        @if($user->role_id == 0)
                            <span>Admin</span>
                        @endif
                        @if($user->role_id == 1)
                            <span>Editor</span>
                        @endif
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
	                <td>
	                    @php
	                        if($user->status == 1){
	                                echo  "<div class='badge badge-success badge-shadow'>Active</div>";
	                            }else{
	                                echo  "<div class='badge badge-danger badge-shadow'>Inactive</div>";
	                            }
	                    @endphp
                      
	                </td>
                  	<td>

                        <a href="{{URL::to('admin/user/'.$user->id.'/edit')}}" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>

                        <form action="{{URL::to('admin/user/'.$user->id)}}" method="post">
                        	@csrf
                        	@method('DELETE')
                        	<button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                        </form>


                  	</td>
                </tr>
				@endforeach
	
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


@endsection