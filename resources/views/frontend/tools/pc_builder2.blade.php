@extends('layouts.frontend.app')

@section('content')


<?php


$sessin_products = Session::get('cart_session');


?>

<div class="pc__builder" style="background-color: var(--color-dark-1);">
    <div class="container d-flex justify-content-between align-items-center">
        <ul class="breadcrumb fz-small mb-0 py-2">
            <li class="pe-2"><i class="fal fa-home me-2"></i> <i class="fal fa-caret-right"></i></li>
            <li>PC Builder</li>
        </ul>
        <p class="mb-0 d-none d-md-block fw-bold">PC Builder - Build Your Own Computer - BinaryLogic</p>
    </div>
</div>

<main>
    <div class="container">
        <div class="row">


        @if(isset($sessin_products))



            <div class="col-md-5">
                <section class="pt-4 pb-5 pc-builder">
                    <div class="">
                        <div class="d-flex justify-content-between mb-2 controller">
                            
                            <a href="#" class="button button-type-1 open-items d-md-none" data-size="small">Your Items <i class="fal fa-tv"></i></a>
                        </div>
                        <!-- end of controller -->

                        <div class="c-list-group">

                            @foreach($components as $component)
                            <div class="c-list-item">
                                <div class="c-list-header">
                                    <div>
                                        <img src="{{asset($component->image ?? '')}}" alt="" style="max-width: 2rem;">
                                        <strong>{{$component->name ?? ''}}</strong>
                                    </div>
                                    <div>
                                        <a href="{{route('tools/pc_builder/choose', [$component->slug])}}"><button class="button button-type-1" data-size="small">Choose</button></a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end of container -->
                </section>
            </div>


            <div class="col-md-7">

                <section class="pt-4 pb-5 pc-builder">
                    <div class="">
                        <div class="your-item-table">
                            <div class="text-end"><button class="button button-type-1 text-dark close-items d-md-none">CLOSE</button></div>

                            <div class="d-flex justify-content-between mb-2 controller mt-4">
                                <div>
                                    <a href="#" class="button button-type-1 " data-size="small">YOUR ITEMS <i class="fal fa-tv"></i></a>
                                </div>
                                <div>
                                    <form action="{{route('add-to-cart-array')}}" method="post" style="display: inline-flex;">
                                        @csrf

                                        @if(isset($sessin_products))
                                            @foreach($sessin_products as $id => $details)
                                                <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                                            @endforeach
                                        @endif

                                        <button type="submit" class="button button-type-1" data-size="small"><i class="fal fa-cart-arrow-down"></i></button>
                                    </form>


                                    <form action="{{route('print_pc')}}" method="post" style="display: inline-flex;">
                                        @csrf

                                        @if(isset($sessin_products))
                                            @foreach($sessin_products as $id => $details)
                                                <input type="hidden" value="{{ $details['product_id'] }}" name="product_id[]">                                       
                                            @endforeach
                                        @endif
                                        <button type="submit" class="button button-type-1" data-size="small"><i class="fal fa-save"></i></button>
                                    </form>

                                        


                                    

                                </div>
                            </div>
                            <!-- end of controller -->

                            <div class="table-responsive-md" id="table-data">
                                <table class="table">
                                    <tr>
                                        <td><strong>Image</strong></td>
                                        <td><strong>Product Name</strong></td>
                                        <td><strong>Component</strong></td>
                                        <td><strong>Price</strong></td>
                                        <td><strong>Remove</strong></td>
                                    </tr>

                                    @if(isset($sessin_products))
                                    @foreach($sessin_products as $id => $details)

                                    <tr>
                                        <td style="max-width: 7rem;">
                                            <img src="{{asset($details['image'])}}" alt="" style="max-width: 6rem;">
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $details['name'] }}</p>

                                        </td>
                                        <td>
                                            <p class="mb-0 text-nowrap">{{ $details['component'] }}</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-nowrap">Special : BDT {{ $details['special_price'] }}</p>
                                            <p class="mb-0 text-nowrap">Regular : BDT {{ $details['regular_price'] }}</p>
                                        </td>
                                        <td>
                                            <button class="button button-type-1 remove-from-session" data-id="{{ $id }}" data-size="small">Remove</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

                                    <?php $total = 0 ?>
                                    @foreach((array) session('cart_session') as $id => $details)
                                    <?php $total += $details['special_price'] * $details['quantity'] ?>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total : BDT {{$total}}</strong></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- end of container -->
                </section>


            </div>

        @else    


            <div class="col-md-12">
                <section class="pt-4 pb-5 pc-builder">
                    <div class="">
                        <div class="d-flex justify-content-between mb-2 controller">
                            
                            <a href="#" class="button button-type-1 open-items d-md-none" data-size="small">Your Items</a>
                        </div>
                        <!-- end of controller -->

                        <div class="c-list-group">

                            @foreach($components as $component)
                            <div class="c-list-item">
                                <div class="c-list-header">
                                    <div>
                                        <img src="{{asset($component->image ?? '')}}" alt="" style="max-width: 2rem;">
                                        <strong>{{$component->name ?? ''}}</strong>
                                    </div>
                                    <div>
                                        <a href="{{route('tools/pc_builder/choose', [$component->slug])}}"><button class="button button-type-1" data-size="small">Choose</button></a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end of container -->
                </section>
            </div>


        @endif
        </div>
    </div>

</main>





@endsection