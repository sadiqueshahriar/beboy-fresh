@extends('layouts.backend.app')

@section('content')


 <div class="content-wrapper">

    <section class="content  mt-5">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          	<div class="col-md-4 mt-5">
            <!-- general form elements -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Customer Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control"  value='{{$order->shipping_first_name." ".$order->shipping_last_name}}' readonly="">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control" value="{{$order->shipping_email}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label >Phone</label>
                    <input type="text" class="form-control" value="{{$order->shipping_phone}}" readonly="">
                  </div>
                </div>

              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->


          	<div class="col-md-8 mt-5">
            <!-- general form elements -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Shipping Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('admin/update-shipping-details', [$order->id])}}" method="post">
              	@csrf
                <div class="card-body">
                    
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Frist Name</label>
                        <input type="text" name="shipping_first_name" value="{{$order->shipping_first_name ?? ''}}" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="shipping_last_name" value="{{$order->shipping_last_name ?? ''}}" class="form-control">
                      </div>

                      
                    </div>

                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="shipping_phone" value="{{$order->shipping_phone ?? ''}}" class="form-control">
                      </div>

                      
                    </div>

                    <div class="col-md-6">
                      
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="shipping_email" value="{{$order->shipping_email ?? ''}}" class="form-control">
                      </div>

                      
                    </div>
                  </div>
                    
                    
                    
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" id="" rows="2">{{$order->address ?? ''}}</textarea>
                  </div>
	                  	
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >City</label>
                        <input name="city" type="text" class="form-control" value="{{$order->city}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Post Code</label>
                        <input name="postcode" type="text" class="form-control" value="{{$order->postcode}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label >Country</label>
                        <input name="country" type="text" class="form-control" value="{{$order->country}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label>Shipping Area : </label>
                      @if ($order->shipping_area)
                          <b>{{ $order->shipping_area }}</b>
                      @endif
                      <select class="form-control" name="shipping_area">
                        <option value="inside_dhaka"> Inside Dhaka </option>
                        <option value="outside_dhaka"> Outside Dhaka </option>
                     </select>
                    </div>
                    <div class="col-md-4">
                      <label>Shipping Method</label>
                      <input name="shipping_method" type="text" class="form-control" value="{{$order->shipping_method}}">
                    </div>


                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Update</button> 
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

          <div class="col-md-4">
            <!-- general form elements -->

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Order Summery</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('admin/update-order-status', [$order->id])}}" method="post">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Total QTY</label>
                    <input name="total_qty" type="text" class="form-control" value="{{$order->total_qty}}" readonly="">
                  </div>
                  @foreach($orderDetails as $details)
                    <div class="row">
                    <input type="hidden" name="product_id[]" value="{{$details->product->id ?? ''}}">
                    <input type="hidden" name="qty[]" value="{{$details->qty}}">
                    </div>
                  @endforeach

                  <div class="form-group">
                    <label >Sub Total</label>
                    <input name="sub_total" type="text" class="form-control" value="{{$order->total_cost ?? '0'}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label >Discount</label>
                    <input name="discount" type="text" class="form-control" value="{{$order->discount ?? '0'}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label >Total Cost</label>
                    @if($order->discount_total)
                    <input name="total_cost" type="text" class="form-control" value="{{$order->discount_total}}" readonly="">
                    @else
                    <input name="total_cost" type="text" class="form-control" value="{{$order->total_cost}}" readonly="">
                    @endif
                  </div>
                 
                  <div class="form-group">
                    <label >Status</label>
                    <select name="status" id="" class="form-control">
                    	<option value="0" @php echo $order->status==0?"selected":""; @endphp>Pending</option>
                    	<option value="1" @php echo $order->status==1?"selected":""; @endphp>Processing</option>
                    	<option value="2" @php echo $order->status==2?"selected":""; @endphp>Approved</option>
                    	<option value="4" @php echo $order->status==4?"selected":""; @endphp>Returned</option>
                    	<option value="5" @php echo $order->status==5?"selected":""; @endphp>Delivered</option>
                    	<option value="3" @php echo $order->status==3?"selected":""; @endphp>Canceled</option>
                    </select>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                   <button type="submit" class="btn btn-primary">Update</button> 
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

          <!-- right column -->
          <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Order Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    @foreach($orderDetails as $details)
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName">Product Name</label>
                          <input type="text" id="inputName" class="form-control" name="product_name[]" placeholder="Product Name" value="{{$details->product->name ?? ''}}" readonly="">
                        </div>   
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="inputName">Unit Price</label>
                          <input type="text" id="inputName" class="form-control" name="product_price[]"value="{{$details->product_price}}" readonly="">
                        </div>   
                    </div>  
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="inputName">Qty</label>
                          <input type="text" id="inputName" class="form-control" name="quantity[]"  value="{{$details->qty}}" readonly="">
                        </div>   
                    </div>    
                    <div class="col-md-2">
                        <div class="form-group">
                          <label for="inputName">Total Price</label>
                          <input type="text" id="inputName" class="form-control" name="qty_total_amount[]"  value="{{$details->qty_total_amount}}" readonly="">
                        </div>   
                    </div>              

                    @endforeach  
                  </div>

                  </div>

                </form>
              </div>
              
              
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title text-light">Customer Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="" id="" rows="3" class="form-control" readonly="">{{$order->message ?? ''}}</textarea>
                        </div>   
                    </div>
                  </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
              
              
              
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




@endsection