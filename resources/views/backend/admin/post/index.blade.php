@extends('layouts.backend.app')

@section('content')
<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 

 <div class="content-wrapper">
    <section class="content mt-5 mb-5">
      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Thumbnail</th>
                  <th>Post Title</th>
                  <th>Slug</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($posts as $post)
                <tr>
                  	<td>{{$i++}}</td>
                    <td><img src="{{ asset($post->image) }}" alt="" style=" background: #fff; width: 100px;height: 50px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30); object-fit: cover"></td>
                    <td>{{$post->title}}</td>

                    <td>{{$post->slug}}
                      <a target="_blank" href="http://www.beboybd.com/{{$post->slug}}">VIEW</a>
                    </td>
                    <td>{{$post->category->name ?? ''}}</td>
                    <td>{{$post->date}}</td>
                    <td>{{$post->time}}</td>
	                <td>
	                    @php
	                        if($post->status == 1){
	                                echo  "<div class='badge badge-success badge-shadow'>Active</div>";
	                            }else{
	                                echo  "<div class='badge badge-danger badge-shadow'>Inactive</div>";
	                            }
	                    @endphp
                      
	                </td>
                  	<td>

                        <a href="{{URL::to('admin/post/'.$post->id.'/edit')}}" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>

                        @if($user->role_id == 0 )
                        <form action="{{URL::to('admin/post/'.$post->id)}}" method="post">
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
      </div>

@endsection