@extends('layouts.backend.app')

@section('content')




<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">

                <?php
                    $date = date('Y-m-d');
                    $today_orders = App\Models\Order::where( 'created_at', 'LIKE', '%' . $date .'%')->count();
                ?>


                <span class="info-box-text">Today Order</span>
                <span class="info-box-number">
                 {{$today_orders}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
                    $total_order = App\Models\Order::count();
                ?>

                <span class="info-box-text">Total Order</span>
                <span class="info-box-number">{{$total_order}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
                    $pending_order = App\Models\Order::where('status', 0)->count();
                ?>

                <span class="info-box-text">Pending Order</span>
                <span class="info-box-number">{{$pending_order}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>





          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fab fa-product-hunt"></i></span>

              <div class="info-box-content">

                <?php
                    $products = App\Models\Product::count();
                ?>

                <span class="info-box-text">Total Products</span>
                <span class="info-box-number">{{$products}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->


          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <?php
                    $customers = App\Models\Customer::count();
                ?>

                <span class="info-box-text">Total Customers</span>
                <span class="info-box-number">{{$customers}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
                  $date = date('Y-m-d');
                  $today_orders_amount = App\Models\Order::where( 'created_at', 'LIKE', '%' . $date .'%')->get();
                    //  dd($today_orders_amount);
                 ?>

                <span class="info-box-text">Todays Order Amount</span>
                <?php
                    $everyPriceProductArray = array(); 
                    foreach ($today_orders_amount as $key => $item) {
                        $price = $item['total_cost'];
                        array_push($everyPriceProductArray, $price);
                    }
                    $everyPriceProduct = array_sum($everyPriceProductArray);
                   // dd($everyPriceProduct);
               ?>
                <span class="info-box-number">{{$everyPriceProduct}}  <b>৳</b> </span>        
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
               $deliveredOrder = App\Models\Order::where( 'status', 5)->count();
              //  dd($today_orders_amount);
            ?>
                <span class="info-box-text">Delivered Order</span>  
                <span class="info-box-number">{{$deliveredOrder}}</span>          
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
                $approved_order = App\Models\Order::where( 'status', 2)->count();
              //  dd($today_orders_amount);
            ?>

                <span class="info-box-text">Approved Order </span>
                <span class="info-box-number">{{$approved_order}}</span>         
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <?php
                $returnOrder = App\Models\Order::where( 'status', 4)->count();
            ?>
                <span class="info-box-text">Return Order</span>
                <span class="info-box-number">{{$returnOrder}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-2">
            <div class="info-box mb-2">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <?php
               
               $canceled = App\Models\Order::where( 'status', 3)->count();
            ?>

                <span class="info-box-text">Canceled Order</span>
                <span class="info-box-number">{{$canceled}}</span>      
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->




        </div>
        <!-- /.row -->



        <?php 
          $customers = App\Models\Customer::orderBy('id', 'desc')->take(5)->get(); 
          $orders = App\Models\Order::orderBy('id', 'desc')->take(5)->get(); 
        ?>


        <div class="row">
          <div class="col-md-6">

            <div class="tab-content" id="myTabContent">

            
              <div class="tab-pane fade show active" id="Customer" role="tabpanel" aria-labelledby="contact-tab">
                <section class="content">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><b>Last 5 Customers</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Sl.</th>
                              <th>Name</th>
                              <th>Email</th>
                              <!--<th>Phone</th>-->

                            </tr>
                            </thead>
                            <tbody>
                        @php $i=1 @endphp
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$customer->first_name}}</td>
                                <td>{{$customer->email}}</td>
                                <!--<td>{{$customer->phone}}</td>-->

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
            </div>

          </div>
          <div class="col-md-6">
            
            <div class="tab-content" id="myTabContent">

            
              <div class="tab-pane fade show active" id="Order" role="tabpanel" aria-labelledby="contact-tab">
                <section class="content">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><b>Last 5 Orders</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Sl.</th>
                              <th>Order By</th>
                              <th>Quantity</th>
                              <th>Total Cost</th>
                              <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                        @php $i=1 @endphp
                        @foreach($orders as $order)
                            <tr>

                              <td>{{$i++}}</td>
                             
                            <td>{{$order->shipping_first_name." ".$order->shipping_last_name}}</td>
                              <td>{{$order->total_qty}}</td>
                              <td>{{$order->total_cost}} BDT</td>
                      
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
            </div>

          </div>
        </div>








        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->






    
  </div>




@endsection