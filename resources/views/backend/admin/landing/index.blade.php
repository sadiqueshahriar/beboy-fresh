@extends('layouts.backend.app')

@section('content')
<style>
.blp {padding-bottom: 25px}
.blp .leading-5{padding:10px 0}
.blp nav {text-align: center;font-size: 15px;}
.blp nav span a:first-child{width:30px;}
.blp nav span a:last-child{width:30px;}
.blp nav span svg{width:20px;}
</style>
<?php
$user_id = Auth::user()->id;
$user = App\Models\User::where('id', $user_id)->first();
?> 
 <div class="content-wrapper mt-5">
    <section class="content">
      <div class="row">
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <!-- <a href="{{URL::to('admin/landing/create')}}" class="nav-link {{ request()->is('admin/landing/create') ? 'active' : '' }}">Add</a> -->
              &nbsp; &nbsp; 
              <!-- <a href="{{URL::to('admin/landing/getLinkData')}}" class="nav-link">Update Data</a> -->
            </div>
            <!-- /.card-header -->
            <div>
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>linktype</th>
                  <th>pagelink</th>
                  <th>nextpagelink</th>
                  <th>statuscode</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                $i=1 
                @endphp
                
                @if($landings)
                    @foreach($landings as $landing)
                    <tr>
                        <td>{{ $landing->id }}  </td>
                        <td>{{ $landing->linktype }}  </td>
                        <td>{{ $landing->pagelink }}  </td>
                        <td>{{ $landing->nextpagelink }}  </td>
                        <td>{{ $landing->statuscode }}  </td>
                        <td>
                        <div class="row">
                            <a href="{{URL::to('admin/landing/'.$landing->id.'/edit')}}" title="Edit" style="float: left; margin-left: 10px; margin-right: 10px">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                </button>
                            </a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                @endif
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

</tbody>












@endsection