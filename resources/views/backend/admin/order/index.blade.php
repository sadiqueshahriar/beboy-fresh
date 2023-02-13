@extends('layouts.backend.app')

@section('content')
 <div class="content-wrapper">
    <section class="content mt-5 mb-5">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Order</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Order By</th>
                  <th>phone Number</th>
                  <th>Quantity</th>
                  <th>Total Cost</th>
                  <th>Invoice</th>
                  <th>Date</th>
                  <th>Payment</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($orders as $order)
                <tr>

                  	<td>{{$i++}}</td>
                    <td>{{$order->shipping_first_name." ".$order->shipping_last_name }}</td>
                    <td>
                      <a href="tel:{{ $order->shipping_phone }}">{{$order->shipping_phone}}</a>             
                    </td>
                    <td>{{$order->total_qty}}</td>
                    <td>{{$order->total_cost}} BDT</td>
                    <td>#{{$order->invoice_id}} </td>
                    <td>

                      <?php
                        echo  date('d-m-Y', strtotime($order->created_at));
                      ?>

                      <?php
                          $created_at = $order->created_at;
                          echo date('h:i A', strtotime($created_at));
                      ?>
                    </td>
                    <td>{{ $order->payment_method }}</td>

	                <td>
	                    @php
	                        if($order->status == 0){
	                           echo  "<div class='badge badge-warning badge-shadow'>Pending</div>";
	                         }
                           if($order->status == 1){
	                           echo  "<div class='badge badge-info badge-shadow'>Processing</div>";
	                         }
                           if($order->status == 2){
                             echo  "<div class='badge badge-success badge-shadow'>Approved</div>";
                           }
                           if($order->status == 3){
                             echo  "<div class='badge badge-danger badge-shadow'>Canceled</div>";
                           }
                           if($order->status == 5){
                             echo  "<div class='badge badge-primary badge-shadow'>Delivered</div>";
                           }
                           if($order->status == 4){
                             echo  "<div class='badge badge-danger badge-shadow'>Returned</div>";
                           }
	                    @endphp
                      
	                </td>
                  	<td>

                      <div class="row">
                        <a href="{{URL::to('admin/order/'.$order->id)}}" title="View" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                            </button>
                        </a>                        

                        <a href="{{URL::to('admin/order/'.$order->id.'/edit')}}" class="" title="Edit" style="float: left;margin-right: 10px;">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                            </button>
                        </a>
                      </div>


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