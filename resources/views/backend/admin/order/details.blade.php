@extends('layouts.backend.app')
@section('content')

<style>
  .site_logo img{
    width: 50% !important;
  }
</style>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-2 site_logo">
                <img src="{{asset('public/frontend/homepage_three')}}/assets/images/logo_mini.webp" alt="Site Logo" />
                </div>
                <div class="col-12">
                  <h4>
                    {{$SiteSetting->name}}
                    <small class="float-right">Date: 
                    
                              
                    <?php
                        echo  date('d-m-Y', strtotime($order->created_at));
                    ?>

                    <?php
                        $created_at = $order->created_at;
                        echo date('h:i A', strtotime($created_at));
                    ?>
                    
                    </small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>{{$SiteSetting->name}}</strong><br>
                    108/1,Shantinagar,paltan,Dhaka-1217, Dhaka Division, Bangladesh<br>
                    Phone: 01718722233<br>
                    Email: beboybangladesh@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To

                      <address>
                        <strong>{{$order->shipping_first_name  ?? ''}} {{$order->shipping_last_name  ?? ''}}</strong><br>
                        
                        <!--@if($order->shipping_email ?? '')-->
                        <!--Customer Address: {{$order->shipping_email ?? ''}} <br>-->
                        <!--@endif-->
                        Phone: {{$order->shipping_phone  ?? ''}}<br>
                        Email: {{$order->shipping_email  ?? ''}}<br>
                        <strong>Delivery Address:</strong> {{$order->address ?? ''}}, {{$order->postcode ?? ''}}, {{$order->city ?? ''}}, {{$order->country ?? ''}}
                      </address>                    

                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #{{$order->invoice_id}}</b><br>
                  <br>
                  <b>Order ID:</b> {{$order->id}}<br>
                  <b>Shipping Method:</b> {{$order->shipping_method}}<br>
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
                      <td>{{$details->product->name ?? ''}}</td>
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
                  	<img style="width:150px"; src="https://i.ibb.co/Byjp8M1/RJ-Logo.png" alt="b-boy" >
                  </div>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    108/1,Shantinagar,paltan,Dhaka-1217, Dhaka Division, Bangladesh
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
        			<p class="lead"></p>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>৳ {{$order->total_cost ?? '0'}}</td>
                      </tr>
                      <tr>
                        <th>Discount:</th>
                        <td>৳ {{$order->discount ?? '0'}}</td>
                      </tr>
                      @if ($order->shipping_area== 'inside_dhaka')
                        @php
                            $charge = 60;                         
                        @endphp
                        <tr>
                          <th>Delivery Charge:</th>
                          <td>৳ {{$charge}}</td>
                        </tr>
                       @else
                       @php
                        $charge = 120;
                        @endphp
                        <tr>
                          <th>Delivery Charge:</th>
                          <td>৳ {{$charge}}</td>
                        </tr>
                      @endif
                      <tr>
                        <th>Total:</th>
                        <td>৳ {{$total + $charge}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="button" class="btn btn-success float-right" onclick="window.print()"><i class="fas fa-print"></i> Print
                  </button>
                  
                  <!--<a href="{{route('admin/invoice-print',[$order->id])}}"><button type="button" class="btn btn-success float-right" onclick="window.print()"><i class="fas fa-print"></i> Print-->
                  <!--</button></a>-->
                  
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@endsection