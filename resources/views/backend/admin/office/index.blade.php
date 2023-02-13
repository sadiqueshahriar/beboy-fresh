@extends('layouts.backend.app')

@section('content')
<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 
    <section class="content mt-5" style="margin-top: 5rem !important;">
      <div class="row">
        <div class="col-md-10 offset-md-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Category</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Branch Name</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>Sales Support</th>
                  <th>Warranty Support</th>
                  <th>Technical Support</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($offices as $item)
                <tr>
                  	<td>{{$i++}}</td>
                    <td>{{$item->branch_name}}</td>

                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->sales_support}}</td>
                    <td>{{$item->warranty_support}}</td>
                    <td>{{$item->technicale_support}}</td>
	                <td>
	                    @php
	                        if($item->status == 1){
	                                echo  "<div class='badge badge-success badge-shadow'>Active</div>";
	                            }else{
	                                echo  "<div class='badge badge-danger badge-shadow'>Inactive</div>";
	                            }
	                    @endphp
                      
	                </td>
                  	<td>

                        <a href="{{URL::to('admin/office/'.$item->id.'/edit')}}" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>

                        @if($user->role_id == 0 )
                        <form action="{{URL::to('admin/office/'.$item->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        @endif


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