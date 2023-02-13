<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Order Invoice</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
            @php $SiteSetting = App\Models\SiteSetting::first(); @endphp
            @php $order = App\Models\Order::findorfail($order_id);
            $orderDetails = App\Models\OrderDetail::where('order_id', $order_id)->get(); 
            $toal_p_price = App\Models\OrderDetail::where('order_id', $order_id)->sum('qty_total_amount');
    
            $var_total_cost = $order->total_cost;
            $total_cost = (float) str_replace(',', '', $var_total_cost);
            $discount = $order->discount;
            $total = $total_cost-$discount;
            @endphp
          <i class="fas fa-globe"></i>{{$SiteSetting->name}}
          {{-- <small class="float-right">Date: {{$order->created_at}}</small> --}}
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        {{-- @php dd($contents); @endphp --}}
          <address>
            <strong>{{$SiteSetting->name}}</strong><br>
            {{$SiteSetting->address}}<br>
            <!-- Phone: {{$SiteSetting->phone}}<br> -->
            Phone: +8801733052215 | +8801733052212<br>
            Email: {{$SiteSetting->email}}
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <br>To
	      <address>
	        <strong>{{$order->shipping_first_name." ".$order->shipping_last_name}}</strong><br>

	        {{-- {{$order->customer->address}} <br> --}}
	        Phone: {{$order->shipping_phone}}<br>
	        Email: {{$order->shipping_email}}
	      </address>  
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <br><b>Invoice #{{$order->invoice_id}}</b><br>
        <br>
        <b>Order ID:</b> {{$order->id}}<br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped" style="border-top:1px solid #ddd;border-left:1px solid #ddd">
            <thead>
            <tr>
              <th style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">ID #</th>
              <th style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">Product</th>
              <th style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">Qty</th>
              <th style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">Unit Price</th>
              <th style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderDetails as $details)
            <tr>
              <td style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">{{$details->product_id}}</td>
              <td style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">{{$details->product->name}}</td>
              <td style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">{{$details->qty}}</td>
              <td style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">
              	{{$details->product_price}}
              </td>
              <td style="padding:5px;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">৳ {{$details->qty_total_amount}}</td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Company:</p>
                  <div style="background: #fff">
                  	<img src="{{asset($SiteSetting->image)}}" alt="Visa">
                  </div>

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   {{$SiteSetting->address}}
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
        			<p class="lead"></p>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>৳ {{$toal_p_price}}</td>
                      </tr>
   

                      <tr>
                        <th>Discount:</th>
                        <td>৳ {{$order->discount ?? '0'}}</td>
                      </tr>

                      <tr>
                        <th>Total:</th>
                        <td>৳ {{$total}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
