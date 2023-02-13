@extends('layouts.backend.app')



@section('content')

<div class="content-wrapper ">
    <section class="content mt-5 mb-5">
      <div class="row">
        <div class="col-md-12">
         <h2 style="text-align: center;"> User Activity Log</h2>  
          <div class="card">
           
            <div class="card-header">
              <h3 class="card-title">Log Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Date Time</th>
                </tr>

                </thead>
                <tbody>
                @php $i=1 @endphp
                @foreach ($activities as $item)
                    
               
                <tr>
                  	<td>{{$i++}}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @if ($item->description == 'Has log in')
                           <span class="badge badge-primary">{{ $item->description }}</span>   
                        @else
                        <span class="badge badge-danger">{{ $item->description }}</span>  
                        @endif
                          
                    </td>
                    <td>{{ $item->time }}</td>
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