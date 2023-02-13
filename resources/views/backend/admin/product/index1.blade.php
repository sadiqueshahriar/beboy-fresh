@extends('layouts.backend.app')

@section('content')
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
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>ProSubCategory</th>
                  <th>ProProCategory</th>
                  <th>Component</th>
                  <th>Discount Price</th>
                  <th>Regular Price</th>
                  <th>Special Price</th>
                  <th>Offer Price</th>
                  <!--<th>Available QTY</th>-->
                  <!--<th>Total Sell</th>-->
                  <th>Total QTY</th>
                  <th>Created By</th>
                  <th>Created Date & Time</th>
                  <th>Update 1st</th>
                  <th>Update 2nd</th>
                  <th>Updated at</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
            @php $i=1 @endphp
            @foreach($products as $product)
                <tr>
                  	<td>{{$i++}}</td>


                    <td><img src="{{ asset($product->product_image_thumb) }}" alt="" style=" background: #fff;width: 130px;height: 60px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30); object-fit: cover;"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name ?? ''}}</td>
                    <td>{{$product->subcategory->name ?? ''}}</td>
                    <td>{{$product->prosubcategory->name ?? ''}}</td>
                    <td>{{$product->proprocategory->name ?? ''}}</td>
                    <td>{{$product->component->name ?? ''}}</td>
                    <td>{{$product->discount_price ?? ''}}</td>
                    <td>{{$product->regular_price}}</td>
                    <td>{{$product->special_price}}</td>
                    <td>{{$product->offer_price}}</td>
                    <!--<td>{{$product->qty}}</td>-->

                    <!--@if($product->total_sell == '')-->
                    <!--  <td>0</td>-->
                    <!--@else-->
                    <!--  <td>{{$product->total_sell}}</td>-->
                      
                    <!--@endif-->

                    @if($product->total_product == '')
                      <td>{{$product->qty}}</td>
                    @else
                      <td>{{$product->total_product}}</td>

                    @endif
                    <td>{{$product->user->name ?? ''}}</td>
                    <td>
        
                      <?php
                        echo  date('d-m-Y', strtotime($product->created_at));
                      ?>      
                      
                      <?php
                          $created_at = $product->created_at;
                          echo date('h:i A', strtotime($created_at));
                      ?>                      
                      
                    
                    </td>
                    <td>
                      @php 
                        $u = App\Models\User::find($product->updated_by_1);
                        $u2 = App\Models\User::find($product->updated_by_2);
                      @endphp
                      {{$u->name ?? ''}}
	                  </td>
                    <td>
                      {{$u2->name ?? ''}}
	                  </td>
                    <td>
                      
                        <?php
                            echo  date('d-m-Y', strtotime($product->updated_at));
                        ?> 
                        
                      <?php
                          $updated_at = $product->updated_at;
                          echo date('h:i A', strtotime($updated_at));
                      ?>                      
                                              
                        
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
                          @if($user->role_id == 0 )
                          <form action="{{URL::to('admin/product/'.$product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                          </form>
                          @endif
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