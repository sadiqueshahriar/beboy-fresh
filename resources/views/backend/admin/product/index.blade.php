@extends('layouts.backend.app')



@section('content')

<style>

.blp {padding-bottom: 25px}

.blp .leading-5{padding:10px 0}

.blp nav {

  text-align: center;

  font-size: 15px;

}

.blp nav span a:first-child{

  width:30px;

}

.blp nav span a:last-child{

  width:30px;

}

.blp nav span svg{

  width:20px;

}

</style>

<?php

  $user_id = Auth::user()->id;

  $user = App\Models\User::where('id', $user_id)->first();

?> 

 <div class="content-wrapper mt-5">

    <section class="content">

      <div class="row">

        <div class="col-md-12 ">

          <div class="card">

            <div class="card-header">

              

              <div class="row">

                <div class="col-md-4"><h3 class="card-title">Manage Product</h3></div>

                <!--<div class="col-md-4"><a href="{{URL::to('admin/import')}}"><button class="btn btn-warning">Import Product</button></a></div>-->

                <!--<div class="col-md-4"><a href="{{URL::to('admin/export')}}"><button class="btn btn-info">Export Product</button></a></div>-->

              </div>
               @php
                  $upcoming = DB::table('products')->where('stock_status','upcoming')->count();
                  $newarrived = DB::table('products')->where('stock_status','new_arrived')->count();
                  $instock = DB::table('products')->where('stock_status','in_stock')->count();
                  $OutofStock = DB::table('products')->where('stock_status','out_of_stock')->count();
              @endphp
              <div class="row mt-3">
                <div class="col-md-3">Upcoming Product: {{ $upcoming }}</div>
                <div class="col-md-3">New Arrival Product: {{ $newarrived }}</div>
                <div class="col-md-3">In Stock Product: {{ $instock }}</div>
                <div class="col-md-3">Out of Stock Product: {{ $OutofStock }}</div>
              </div>

              <div class="mb-4" style="margin-top: 15px;">

                <form  class="search-box__form position-relative" method="get" autocomplete="off">

              

                    <div class="">

                        <input type="text" placeholder="Search" class="search-box__input" style="width:90%;vertical-align: top;line-height: 1.75;" name="term" id="term">

                        <button type="submit" class="button button-icon search-box__button">Search</button>

                    </div>

                </form>

              </div>

              <a href="{{URL::to('admin/product/create')}}" class="p-2"  style="margin-left: 21px;">
                  Add new product
              </a>
              <a href="{{URL::to('admin/send-seq')}}" class="p-2"  style="margin-left: 21px;">
                  New Arrival product sequence
              </a>
            <a href="{{URL::to('admin/offer-product-seq')}}" class="p-2"  style="margin-left: 21px;">
                Offer product sequence
            </a>
            <a href="{{URL::to('admin/hotdeal-product-seq')}}" class="p-2"  style="margin-left: 21px;">
              Top Collection Product Sequence
          </a>

            </div>

            <!-- /.card-header -->

            <div class="">

              <table class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>ID</th>

                  <th>Image</th>

                  <th>Name</th>

                  <th>Category</th>

                  <th>Price</th>

                  <!--<th>Available QTY</th>-->

                  <!--<th>Total Sell</th>-->

                  <th>Status</th>

                  <th style="width:7.2%;">Action</th>

                  

                </tr>

                </thead>

                <tbody>

            @php $i=1 @endphp

            @foreach($products as $product)

                <tr>

                    <td class="text-center"><a href="http://www.beboybd.com/{{$product->slug}}" target="_blank">{{$product->id}}</a><br>@include('frontend.elementstockstatus')</td>

                    <td><img src="{{ asset($product->product_image_thumb) }}" alt="" style=" background: #fff;width: 130px;height: 60px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30); object-fit: cover;"></td>

                    <td>

                      {{$product->name}}

                      <br><small>{{$product->created_at}}</small> 

                      @if(in_array($product->id,$rundowns))

                      <a href="{{URL::to('admin/send-home-remove/'.$product->id)}}" title="Remove From Home" style="float: left; margin-left: 10px; margin-right: 10px">

                              <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-home"></i>
                              </button>

                          </a>

                          @else

                          <a href="{{URL::to('admin/send-home/'.$product->id)}}" title="Add To Home" style="float: left; margin-left: 10px; margin-right: 10px">

                              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-home"></i>

                              </button>

                          </a>

                      @endif
    

                     @if(in_array($product->id,$offers))

                     <a href="{{URL::to('admin/remove-from-offer/'.$product->id)}}" title="Remove From Offer" style="float: left; margin-left: 10px; margin-right: 10px">

                           <button type="submit" class="btn btn-success btn-sm">
                             <i class="fa fa-paper-plane"></i>

                           </button>

                       </a>

                  @else
                       <a href="{{URL::to('admin/send-to-offer/'.$product->id)}}" title="Add To Offer" style="float: left; margin-left: 10px; margin-right: 10px">

                           <button type="submit" class="btn btn-primary btn-sm">
                             <i class="fa fa-paper-plane"></i>

                           </button>

                       </a>

                  @endif
                  @if(in_array($product->id,$hotdeals))

                          <a href="{{URL::to('admin/remove-from-hot-deal/'.$product->id)}}" title="Remove From Top Collection" style="float: left; margin-left: 10px; margin-right: 10px">

                              <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-fire"></i>

                              </button>

                          </a>
                    @else
                          <a href="{{URL::to('admin/send-to-hot-deal/'.$product->id)}}" title="Add To Top Collection" style="float: left; margin-left: 10px; margin-right: 10px">

                              <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-fire"></i>

                              </button>

                          </a>
                    @endif
                  </td>

                    <td>{{$product->category->name ?? ''}} &Rang; {{$product->subcategory->name ?? ''}} &Rang; {{$product->prosubcategory->name ?? ''}} &Rang; {{$product->proprocategory->name ?? ''}}

                    </td>

                    <td>D: {{$product->discount_price ?? ''}}

                      &Rang; R: {{$product->regular_price ?? ''}}

                      &Rang; S: {{$product->special_price ?? ''}}

                      &Rang; O: {{$product->offer_price ?? ''}}

                    </td>
	                <td>

	                    @php

	                        if($product->status == 1){

                              echo  "<div class='badge badge-success badge-shadow'>Active</div>";

                          }else{

                              echo  "<div class='badge badge-danger badge-shadow'>Inactive</div>";

                          }

	                    @endphp
	                </td>
                  	<td>
                      <div class="row">

                          <a href="{{URL::to('admin/product/'.$product->id.'/edit')}}" title="Edit" style="float: left; margin-left: 10px; margin-right: 10px">

                              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>

                              </button>

                          </a>   
                           <a href="{{route('/', [$product->slug])}}" title="View" style="float: left; margin-left: 10px; margin-right: 10px" target="_blank">

                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>

                            </button>

                        </a>

                      </div>

                  	</td>
                </tr>

				    @endforeach
                </tfoot>

              </table>
              <div class="blp">{{ $products->appends(request()->input())->links() }}</div>

            </div>

            <!-- /.card-body -->

          </div>

          <!-- /.card -->



        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>
</tbody>

























@endsection