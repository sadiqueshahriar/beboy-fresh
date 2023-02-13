@extends('layouts.frontend.app')

@section('content')
    <?php
        $user_id = Session::get('user_id');
        $user_name = Session::get('name');
        $user_type = Session::get('user_type');

        $Cart = Cart::content()->count();
    ?>

<style type="text/css">
	nav{
		text-align: center;
		font-size: 15px;
	}

    
</style>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row gx-5">
                    
                    <div class="col-md-12">
                        <div class="controller">
<!--                             <form class="clearfix">
                                <div class="float-end">
                                    <span class="fz-small me-4">Sort By</span>
                                    <select class="fz-small py-1 px-3" name="filterValue" id="filterValue" onchange="CategoryFilterProduct(this)">
                                        <option value="default">Default</option>
                                        <option value="a_z">Name (A - Z)</option>
                                        <option value="z_a">Name (Z - A)</option>
                                        <option value="lowestPrice">Price (Lowest > Highest)</option>
                                        <option value="HighestPrice">Price (Highest > Lowest)</option>
                                        <option value="BestSeller"> Best Seller </option>
                                    </select>
                                </div>
                            </form> -->
                        </div>
                        <!-- end of controller -->
                        <div class="row g-4 CategoryFilterProduct" id="CategoryFilterProduct">
                        
                            @if(!empty($products))
                            @foreach($products as $product)
                                @include('frontend.elementproductbox',$product)
                            @endforeach
                            <p>{{$products->links()}}</p>
                            @endif
                        </div>
                        <!-- end of row -->
                        
                    </div>
                </div>
            </div>
        </section>
    </main>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view">



    </div>
</div>









@endsection