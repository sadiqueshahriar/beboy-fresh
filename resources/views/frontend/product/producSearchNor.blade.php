@extends('layouts.frontend.app')







@section('content')

<?php

$user_id = Session::get('user_id');

$user_name = Session::get('name');

$user_type = Session::get('user_type');



$Cart = Cart::content()->count();

?>



<style type="text/css">

    nav {

        text-align: center;

        font-size: 15px;

    }

    nav span svg {

    width: 20px;

}

</style>



<main>

    <section class="py-5">

        <div class="container overflow-hidden">

            <div class="row gx-5">

                <div class="col-md-3">

                    <h2>Search</h2>

                    <h4>Looking for <span class="text-info">{{ $search_name }}</span>

                    <div class="mt-4 border p-2">

                    <div class="search-box mr-40 ">

                        <form action="{{route('products-search')}}" class="" method="post" autocomplete="off">

                            @csrf

                            <div class="d-flex p-0 position-relative">

                                <input type="text" placeholder="Search" class="search-box__input" name="product_name" required="required">

                                <button type="submit" class="button button-icon search-box__button"><i class="fal fa-search"></i></button>

                            </div>

                        </form>

                    </div>

                    </div>

                    

                </div>

                <!-- end of col -->

                <div class="col-md-9">

                    <div class="row g-4 CategoryFilterProduct" id="CategoryFilterProduct">

                        @forelse($products as $product)

                            @include('frontend/elementproductbox',$product)

                        @empty

                            <div class="product-not-found">

                                <span class="icon"><i class="fal fa-info-circle"></i></span>

                                <p class="mb-0">NO PRODUCTS WERE FOUND MATCHING YOUR SELECTION.</p>

                            </div>

                        @endforelse

                        

                        

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



<!--  -->















@endsection