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

#sortable{list-style:none;list-style-type:none}

#sortable li:hover{cursor: pointer;}

</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script>

  $( function() {

    $( "#sortable" ).sortable();

  } );

  </script>

<?php

  $user_id = Auth::user()->id;

  $user = App\Models\User::where('id', $user_id)->first();

?> 

 <div class="content-wrapper mt-5">

    <section class="content">

      <div class="row">

        <div class="col-md-12">

          <div class="card">

            <div class="card-header">

              

              <div class="row">

                <div class="col-md-4"><h3 class="card-title">Manage Offer Product</h3></div><br><br>

                <!--<div class="col-md-4"><a href="{{URL::to('admin/import')}}"><button class="btn btn-warning">Import Product</button></a></div>-->

                <!--<div class="col-md-4"><a href="{{URL::to('admin/export')}}"><button class="btn btn-info">Export Product</button></a></div>-->

              </div>

              

              <a href="{{URL::to('admin/product/create')}}" class="p-2"  style="margin-left: 21px;">

                  Add new product

              </a>

              <a href="{{URL::to('admin/product')}}" class="p-2"  style="margin-left: 21px;">

                  Manage product

              </a>

            </div>

            <!-- /.card-header -->

            <div class="">

              <form class="form-horizontal product-details-form" action="{{URL::to('admin/save-offer-seq')}}" method="post" enctype="multipart/form-data">

                @csrf

                <ul id="sortable" class="mt-4">

                  @foreach($offers as $offer)

                    <?php 
                    // dd($feature);
                    ?>

                    <li class="ui-state-default p-4">

                      <a onclick="delete_row(this)" href="javacript:void()" title="Remove From Home" style="color:red;margin-right:20px">

                        Remove

                      </a>

                      <input type="hidden" name="product[{{$offer->id}}]" value="{{$offer->id}}">


                      <img src="{{ asset($offer->product_image_thumb) }}" alt="" style=" background: #fff;width: 130px;height: 60px;text-align: center;box-sizing: border-box;box-shadow: 6px 9px 11px -5px rgba(0,0,0,0.30); object-fit: cover;"> 

                      <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{$offer->name}}
                      
                      <div class="p-item-price">
                          @if (!empty($offer->offer_price && $offer->special_price))
                              <span style="color: red"><del> ৳ {{$offer->special_price}}</del></span>
                              <span class="current_price">৳ {{$offer->offer_price}}</span>
                          @elseif(!empty($offer->regular_price && $offer->special_price))
                              <span style="color: red"><del> ৳ {{$offer->regular_price}} </del></span>
                              <span class="current_price">৳ {{$offer->special_price}}</span>               
                          @elseif(!empty( $offer->regular_price))
                             <span class="current_price">৳ {{$offer->regular_price}}</span> 
                          @endif                                     
                     </div>

                    </li>

                  @endforeach

                </ul>

                <div class="card-footer">

                  <button type="submit" class="btn btn-info">Save</button>

                </div>

              </form>

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

<script>

  function delete_row(e)

{

    e.parentNode.parentNode.removeChild(e.parentNode);

}

</script>



@endsection