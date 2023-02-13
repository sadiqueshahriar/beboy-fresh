@extends('templete_two.layouts.app')

@section('content')




    <main>
        <section class="pt-4 pb-5">
            <div class="container">
                <div class="profile">
                    <div class="row">

                        <div class="col-md-3">
                            <ul class="nav d-flex flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" type="button" class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" type="button" class="nav-link " id="order-history-tab" data-bs-toggle="tab"
                                        data-bs-target="#order-history" type="button" role="tab"
                                        aria-controls="order-history" aria-selected="true">Order-history</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" type="button" class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                                        data-bs-target="#change-password" type="button" role="tab"
                                        aria-controls="change-password" aria-selected="false">Change-password</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end of col -->

                        <div class="col-md-9 mt-4 mt-md-0">
                            <div class="tab-content" id="myTabContent">
		                        @if(session()->has('info_update'))
		                        <div class="alert alert-success">
		                            <strong style="font-size: 18px">{{session()->get('info_update')}}</strong>
		                        </div>
		                        @endif

                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="{{route('update-info')}}" method="post">
                                    	@csrf
                                    	<input type="hidden" name="user_id" value="{{$user_id}}">
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="First Name" class="block" value="{{$customer->first_name}}" name="first_name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Last Name" class="block " value="{{$customer->last_name}}" name="last_name">
                                            </div>
                                            <div class="col-md-6">
                                                <select class="block fz-small" class="form-control" name="gender">
                                                	<option value="1" @php echo $customer->gender==1?"selected":""; @endphp>Male</option>
                                                	<option value="2" @php echo $customer->gender==2?"selected":""; @endphp>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Email" class="block fz-small" value="{{$customer->email}}" name="email">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Phone Number" class="block fz-small" value="{{$customer->phone}}" name="phone">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="City" class="block fz-small" value="{{$customer->city}}" name="city">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Post Code" class="block fz-small" value="{{$customer->post_code}}" name="post_code">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Country" class="block fz-small" value="{{$customer->country}}" autocomplete="off" name="country">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="block fz-small form-control" name="address">{{$customer->address}}</textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="button button-type-1">Update Your Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end of tab pane -->

                                <div class="tab-pane fade " id="order-history" role="tabpanel"
                                    aria-labelledby="order-history-tab">

                                    <div class="table-responsive p-2 bg-white">
                                    	<table class="table table-bordered table-hover">
                                    		<tr>
                                    			<td class="fz-small mb-0">Invoice Id</td>
                                    			<td class="fz-small mb-0">Order Date</td>
                                    			<td class="fz-small mb-0">Quantity</td>
                                    			<td class="text-nowrap fz-small mb-0">Total Price</td>
                                                <td class="text-nowrap fz-small mb-0">Status</td>
                                    			<td class="fz-normal mb-0 text-light"></td>
                                    		</tr>
                                            <?php
                                                $orders = App\Models\Order::where('user_id', $customer->id)->orderBy('id', 'desc')->get();
                                            ?>
											@foreach($orders as $order)
												<tr>
													<td>
														<p class="fz-small mb-0">{{$order->invoice_id}}</p>
													</td>
													<td>
														<p class="fz-small mb-0">
														
                                                      <?php
                                                        echo  date('d-m-Y', strtotime($order->created_at));
                                                      ?>
                                
                                                      <?php
                                                          $created_at = $order->created_at;
                                                          echo date('h:i A', strtotime($created_at));
                                                      ?>														
														
														</p>
													</td>
													<td><p class="mb-0">{{$order->total_qty}}</p></td>
													<td><p class="text-nowrap mb-0">BDT {{$order->total_cost}}</p></td>

                                                    <td>

                                                        @php
                                                            if($order->status == 0){
                                                               echo  "<p class='mb-0 bg-warning text-dark text-center '><strong>Pending</strong></p>";
                                                             }
                                                           if($order->status == 1){
                                                               echo  "<p class='mb-0 bg-info text-white text-center'><strong>Processing</strong></p>";
                                                             }
                                                           if($order->status == 2){
                                                             echo  "<p class='mb-0 bg-success text-white text-center'><strong>Approved</strong></p>";
                                                           }
                                                           if($order->status == 3){
                                                             echo  "<p class='mb-0 bg-danger text-white text-center'><strong>Canceled</strong></p>";
                                                           }
                                                        @endphp


                                                    </td>

													<td><a href="#" class="ViewOrderDetails fz-small text-dark text-decoration-none" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#product-details-model" onclick="ViewOrderDetails({{$order->id}})">Details</a></td>
												</tr>
											@endforeach
                                    	</table>
                                    </div>
                                </div>
                                <!-- end of tab pane -->

                                <div class="tab-pane fade" id="change-password" role="tabpanel"
                                    aria-labelledby="change-password-tab">
			                        @if ($errors->any())
			                            <div class="alert alert-danger">
			                                <ul>
			                                    @foreach ($errors->all() as $error)
			                                        <li style="font-size: 18px">{{ $error }}</li>
			                                    @endforeach
			                                </ul>
			                            </div>
			                        @endif

			                        @if(session()->has('pass_update'))
			                        <div class="alert alert-success">
			                            <strong style="font-size: 18px">{{session()->get('pass_update')}}</strong>
			                        </div>
			                        @endif
			                        @if(session()->has('pass_not_match'))
			                        <div class="alert alert-danger">
			                            <strong style="font-size: 18px">{{session()->get('pass_not_match')}}</strong>
			                        </div>
			                        @endif

                                    <form action="{{route('update-password')}}" method="post">
                                    	@csrf
                                    	<input type="hidden" name="user_id" value="{{$user_id}}">
                                        <div class="row g-2">
                                            <div class="col-md-12">
                                                <input type="password" placeholder="Old Password" class="block" name="old_pass">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" placeholder="New Password" class="block" name="password">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" placeholder="New Password" class="block" name="password_confirmation">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="button button-type-1">Update Your Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of row -->
                </div>
            </div>
            <!-- end of container -->
        </section>
    </main>


<!-- Modal -->
<div class="modal fade" id="product-details-model" tabindex="-1" role="dialog" aria-labelledby="product-details-model" aria-hidden="true">
  <div class="modal-dialog" role="document" id="view-model">


     



  </div>
</div>



@endsection