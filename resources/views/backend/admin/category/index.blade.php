@extends('layouts.backend.app')

@section('content')

<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();

  $cache_categories = Cache::get('categories');
  $cache_categories2 = Cache::get('subcategories');
  $cache_categories3 = Cache::get('prosubcategories');
  $cache_categories4 = Cache::get('proprosubcategories');

  echo "<div style='display:none'>Cached Categories1: ".$cache_categories."</div>";
  echo "<div style='display:none'>Cached Categories2: ".$cache_categories2."</div>";
  echo "<div style='display:none'>Cached Categories3: ".$cache_categories3."</div>";
  echo "<div style='display:none'>Cached Categories4: ".$cache_categories4."</div>";
?> 
 
 <div class="content-wrapper ">
    <section class="content mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
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
                  <th>Thumbnail</th>
                  <th>Banner Ad</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Status</th>
                  <th>Banner Ad Status</th>
                  <th>Created By</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($categories as $item)
                <tr>
                  	<td>{{$i++}}</td>
                    <td><img src="{{ asset($item->image) }}" alt="" style=" background: #fff; width: 100px;height: 50px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30);object-fit: cover"></td>
                    <td><img src="{{ asset($item->banner_ad) }}" alt="" style=" background: #fff; width: 100px;height: 50px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30);object-fit: contain"></td>
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
	                    @php
	                        if($item->banner_ad_status == 1){
	                                echo  "<div class='badge badge-success badge-shadow'>Active</div>";
	                            }else{
	                                echo  "<div class='badge badge-danger badge-shadow'>Inactive</div>";
	                            }
	                    @endphp
                      
	                </td>
	                
	                <td>{{$item->user->name ?? ''}}</td>
	                
                  	<td>

                        <a href="{{URL::to('admin/category/'.$item->id.'/edit')}}" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>

                        @if($user->role_id == 0 )
                        <form action="{{URL::to('admin/category/'.$item->id)}}" method="post">
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