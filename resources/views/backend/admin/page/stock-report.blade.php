
@extends('layouts.backend.app')


@section('content')
<?php
  $user_id = Auth::user()->id;
  $user = App\Models\User::where('id', $user_id)->first();
?> 
    

    <section class="content mt-5">
        <div class="row">
          <div class="col-md-10 offset-md-2 mt-5">
            <div class="card">
                <div class="card-header">
    
                  <h3 class="card-title"><b>Total Category :</b>  {{ $categoryreport->count() }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th> Coming Soon</th>
                      <th> New Arival</th>
                      <th> Number of In Stock</th>
                      <th> Number of Out of Stock</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categoryreport as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                                  @php
                                     $categorycountinstock = DB::table('products')->where('category_id',$category->id)->where('stock_status','in_stock')->where('status',1)->count();
                                     $categorycountOutStock = DB::table('products')->where('category_id',$category->id)->where('stock_status','out_of_stock')->where('status',1)->count();
                                     $categorycountComingSoon = DB::table('products')->where('category_id',$category->id)->where('stock_status','coming')->where('status',1)->count();
                                     $categorycountNewArrived = DB::table('products')->where('category_id',$category->id)->where('stock_status','new_arrived')->where('status',1)->count();
                                @endphp
    
                            <td>{{ $categorycountComingSoon }}</td>
                            <td>{{ $categorycountNewArrived }}</td>
                            <td>{{ $categorycountinstock }}</td>
                            <td>{{ $categorycountOutStock }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            <div class="card">
              <div class="card-header">
  
                <h3 class="card-title"><b>Total SubCategory :</b>  {{ $Subcategoryreport->count() }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th> Coming Soon</th>
                    <th> New Arival</th>
                    <th> Number of In Stock</th>
                    <th> Number of Out of Stock</th>
                    
                    
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($Subcategoryreport as $subcategory)
                      <tr>
                          <td>{{ $subcategory->name }}</td>

                          @php
                          $Subcategorycountinstock = DB::table('products')->where('sub_category_id',$subcategory->id)->where('stock_status','in_stock')->where('status',1)->count();
                          $SubcategorycountOutStock = DB::table('products')->where('sub_category_id',$subcategory->id)->where('stock_status','out_of_stock')->where('status',1)->count();
                          $subcategorycountComingSoon = DB::table('products')->where('sub_category_id',$subcategory->id)->where('stock_status','coming')->where('status',1)->count();
                          $subcategorycountNewArrived = DB::table('products')->where('sub_category_id',$subcategory->id)->where('stock_status','new_arrived')->where('status',1)->count();
                         @endphp

                        <td> {{  $subcategorycountComingSoon }}</td>
                        <td> {{  $subcategorycountNewArrived }}</td>
                        <td> {{  $Subcategorycountinstock }}</td>
                          <td>{{ $SubcategorycountOutStock }}</td>
                      </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
    
                  <h3 class="card-title"><b>Total ProSubCategory :</b>  {{ $ProSubcategoryreport->count() }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th> Coming Soon</th>
                        <th> New Arival</th>
                        <th> Number of In Stock</th>
                        <th> Number of Out of Stock</th>
                      
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ProSubcategoryreport as $prosubcategory)
                        <tr>
                            <td>{{ $prosubcategory->name }}</td>
                        @php
                            $ProSubcategorycountinstock = DB::table('products')->where('pro_sub_category_id',$prosubcategory->id)->where('stock_status','in_stock')->where('status',1)->count();
                            $ProSubcategorycountOutStock = DB::table('products')->where('pro_sub_category_id',$prosubcategory->id)->where('stock_status','out_of_stock')->where('status',1)->count();
                            $prosubcategorycountComingSoon = DB::table('products')->where('pro_sub_category_id',$prosubcategory->id)->where('stock_status','coming')->where('status',1)->count();
                            $prosubcategorycountNewArrived = DB::table('products')->where('pro_sub_category_id',$prosubcategory->id)->where('stock_status','new_arrived')->where('status',1)->count();
                       @endphp
  
                          <td> {{ $prosubcategorycountComingSoon }} </td>
                          <td> {{ $prosubcategorycountNewArrived }} </td>
                          <td> {{ $ProSubcategorycountinstock }} </td>
                          <td>{{ $ProSubcategorycountOutStock }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
    
                  <h3 class="card-title"><b>Total ProProSubCategory :</b>  {{ $ProProSubcategoryreport->count() }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example4" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th> Coming Soon</th>
                        <th> New Arival</th>
                        <th> Number of In Stock</th>
                        <th> Number of Out of Stock</th>
                      
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($ProProSubcategoryreport as $proprosubcategory)
                        <tr>
                            <td>{{ $proprosubcategory->name }}</td>
                      @php
                            $ProProSubcategorycountinstock = DB::table('products')->where('pro_pro_category_id',$proprosubcategory->id)->where('stock_status','in_stock')->where('status',1)->count();
                            $ProProSubcategorycountOutStock = DB::table('products')->where('pro_pro_category_id',$proprosubcategory->id)->where('stock_status','out_of_stock')->where('status',1)->count();
                            $proprosubcategorycountComingSoon = DB::table('products')->where('pro_pro_category_id',$proprosubcategory->id)->where('stock_status','coming')->where('status',1)->count();
                            $proprosubcategorycountNewArrived = DB::table('products')->where('pro_pro_category_id',$proprosubcategory->id)->where('stock_status','new_arrived')->where('status',1)->count();
                       @endphp
  
                          <td> {{  $proprosubcategorycountComingSoon }}</td>
                          <td> {{  $proprosubcategorycountNewArrived }}</td>
                          <td> {{  $ProProSubcategorycountinstock }}</td>
                          <td>{{ $ProProSubcategorycountOutStock }}</td>
                        </tr>
                    @endforeach
                    </tbody>
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


@endsection