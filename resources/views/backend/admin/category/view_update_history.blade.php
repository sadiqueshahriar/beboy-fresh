@extends('layouts.backend.app')

@section('content')

<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 
 
 <div class="content-wrapper ">
    <section class="content mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> {{$category->name ?? ''}}  ( Category ) Update History</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sl.</th>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($histories as $item)
                <tr>
                  	<td>{{$i++}}</td>
                    <td>{{$item->user->name ?? ''}}</td>
	                <td>
                      <?php
                        echo  date('d-m-Y', strtotime($item->created_at));
                      ?>

     
                      
	                </td>
	                
	                <td>
	                    <?php
                          $created_at = $item->created_at;
                          echo date('h:i A', strtotime($created_at));
                      ?>                      
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