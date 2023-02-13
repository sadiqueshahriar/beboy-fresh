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
              <a href="{{URL::to('admin/product/create')}}" class="p-2"  style="margin-left: 21px;">
                  Add new product
              </a>
              <a href="{{URL::to('admin/product')}}" class="p-2"  style="margin-left: 21px;">
                  Manage product
              </a>
              <a href="{{URL::to('admin/send-seq')}}" class="p-2"  style="margin-left: 21px;">
                  Home product sequence
              </a>
              <div class="" style="margin-top: 15px;">
                <form action="http://www.beboybd.com/admin/product/productSearch" class="search-box__form position-relative" method="post" autocomplete="off">
                    @csrf
                    <div class="">
                        <input type="text" placeholder="Search" class="search-box__input" style="width:90%;vertical-align: top;line-height: 1.75;" name="product_name"  required="required" onkeyup="ProductSearch(this)">
                        <button type="submit" class="button button-icon search-box__button">Search</button>
                    </div>
                </form>
                <div style="padding: 20px 0;">Result for: <span style="font-weight: bold;text-decoration: underline;">{{ $search_name }}</span></div>
            </div>
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
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($products as $product)
                <tr>
                    <td><a href="http://www.beboybd.com/{{$product->slug}}" target="_blank">{{$product->id}}</a></td>
                    <td><img src="{{ asset($product->product_image_thumb) }}" alt="" style=" background: #fff;width: 130px;height: 60px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30); object-fit: cover;"></td>
                    <td>{{$product->name}}<br>
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
                  </td>
                    <td>{{$product->category->name ?? ''}} &Rang; {{$product->subcategory->name ?? ''}} &Rang; {{$product->prosubcategory->name ?? ''}} &Rang; {{$product->proprocategory->name ?? ''}}
                    </td>
                    <td>D: {{$product->discount_price ?? ''}}
                      &Rang; R: {{$product->regular_price ?? ''}}
                      &Rang; S: {{$product->special_price ?? ''}}
                      &Rang; O: {{$product->offer_price ?? ''}}
                    </td>
                    <!--<td>{{$product->qty}}</td>-->
                    <!--@if($product->total_sell == '')-->
                    <!--  <td>0</td>-->
                    <!--@else-->
                    <!--  <td>{{$product->total_sell}}</td>-->
                    <!--@endif-->
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

</tbody>












@endsection