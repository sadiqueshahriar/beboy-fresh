@extends('templete_two.layouts.app')




@section('head')

<title>Profile</title>

@endsection



@section('content')

<?php

    $user_id = Session::get('user_id');

?>


<style>
    
input{
    font-size: 21px !important;
}

.profile ul {

    background-color: #fff;

    padding: 4px;

    border-radius: 3px

}



.profile ul li a {

    padding: 5px 1rem;

    border-radius: 3px;

    display: block;

    width: 100%;

    border: none;

    font-size: 16px;

    color: #000;

    margin-bottom: 3px

}


li.nav-item-active a, li.nav-item:hover a {
    background: #3a3285 !important;
    color: #fff;
}

li.nav-item a {
    flex: 0 0 auto;
    background: #efefef;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    color: #000;
    font-weight: bold;
    font-size: 15px;
    list-style: none;
    line-height: 35px;
    margin: 10px 15px 0 0;
    padding: 0 15px;
    text-align: center;
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem;
    text-decoration: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
</style>


    <!-- customer login start -->
    <div class="customer_login mt-60">
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

                                        <div class="row g-2 space-t-15">

                                            <div class="col-md-6">

                                                <input type="text" placeholder="First Name" class="form-control" value="{{$customer->first_name}}" name="first_name">
                                            </div>

                                            <div class="col-md-6 space-t-15">

                                                <input type="text" placeholder="Last Name" class="form-control" value="{{$customer->last_name}}" name="last_name">

                                            </div>

                                            <div class="col-md-6 mt-2">

                                                <select class="form-control" name="gender">

                                                    <option value="1" @php echo $customer->gender==1?"selected":""; @endphp>Male</option>

                                                    <option value="2" @php echo $customer->gender==2?"selected":""; @endphp>Female</option>

                                                </select>

                                            </div>

                                            <div class="col-md-6  mt-3 mb-3">

                                                <input type="text" placeholder="Email" class="form-control" value="{{$customer->email}}" name="email">

                                            </div>

                                            <div class="col-md-6 mb-3">

                                                <input type="text" placeholder="Phone Number" class="form-control" value="{{$customer->phone}}" name="phone">

                                            </div>

                                            <div class="col-md-6">

                                                <input type="text" placeholder="City" class="form-control" value="{{$customer->city}}" name="city">

                                            </div>

                                            <div class="col-md-6 mb-3">

                                                <input type="text" placeholder="Post Code" class="form-control" value="{{$customer->post_code}}" name="post_code">

                                            </div>

                                            <div class="col-md-6 mb-3">

                                                <input type="text" placeholder="Country" class="form-control" value="{{$customer->country}}" autocomplete="off" name="country">

                                            </div>

                                            <div class="col-md-12">

                                                <textarea class="form-control" name="address">{{$customer->address}}</textarea>

                                            </div>

                                            <div class="col-12">

                                                <button type="submit" class="btn btn-sm bg-primary text-white mt-3" style="border: 0;">Update Your Profile</button>

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

                                            <div class="col-md-12 mb-3">

                                                <input type="password" placeholder="Old Password" class="form-control" name="old_pass">

                                            </div>

                                            <div class="col-md-6 mb-3">

                                                <input type="password" placeholder="New Password" class="form-control" name="password">

                                            </div>

                                            <div class="col-md-6 mb-3">

                                                <input type="password" placeholder="New Password" class="form-control" name="password_confirmation">

                                            </div>

                                            <div class="col-12">

                                                <button type="submit" class="btn btn-sm btn-primary text-white"style="border: 0;">Update Your Password</button>

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
    </div>



<div class="modal fade" id="product-details-model" tabindex="-1" role="dialog" aria-labelledby="product-details-model" aria-hidden="true">

  <div class="modal-dialog" role="document" id="view-model">





     







  </div>

</div>





@endsection