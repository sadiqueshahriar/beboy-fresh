@extends('layouts.backend.app')

@section('content')
<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 

    <section class="content mt-5 mb-5" style="margin-top: 5rem !important;">
      <div class="row">
        <div class="col-md-8 offset-3">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Pro Sub Category</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Category Name</th>
                  <th>Sub Category Name</th>
                  <th>Pro Sub Category Name</th>
                  <th>Slug</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($prosubcategories as $item)
                <tr>
                  	<td>{{$i++}}</td>
                    <td>{{$item->category->name ?? ''}}</td>
                    <td>{{$item->subcategory->name ?? ''}}</td>
                    <td>{{$item->name}}</td>

                    <td>{{$item->slug}}</td>
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

                        <a href="{{URL::to('admin/prosubcategory/'.$item->id.'/edit')}}" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>

                        @if($user->role_id == 0 )
                        <form action="{{URL::to('admin/prosubcategory/'.$item->id)}}" method="post">
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