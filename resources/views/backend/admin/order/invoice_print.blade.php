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
          <i class="fas fa-globe"></i>{{$SiteSetting->name}}
          <small class="float-right">Date: 
          
                    <?php
                        echo  date('d-m-Y', strtotime($order->created_at));
                    ?>

                     <?php
                        $created_at = $order->created_at;
                        echo date('h:i A', strtotime($created_at));
                    ?>
          </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
          <address>
            <strong>{{$SiteSetting->name}}</strong><br>
            {{$SiteSetting->address}}<br>
            Phone: {{$SiteSetting->phone}}<br>
            Email: {{$SiteSetting->email}}
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
	      <address>
	        <strong>{{$order->customer->first_name." ".$order->customer->last_name}}</strong><br>

	        {{$order->customer->address}} <br>
	        Phone: {{$order->customer->phone}}<br>
	        Email: {{$order->customer->email}}
	      </address>  
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #{{$order->invoice_id}}</b><br>
        <br>
        <b>Order ID:</b> {{$order->id}}<br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID #</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Unit Price</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderDetails as $details)
            <tr>
              <td>{{$details->product_id}}</td>
              <td>{{$details->product->name}}</td>
              <td>{{$details->qty}}</td>
              <td>
              	{{$details->product_price}}
              </td>
              <td>৳ {{$details->qty_total_amount}}</td>
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
                  <div style="background: black">
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