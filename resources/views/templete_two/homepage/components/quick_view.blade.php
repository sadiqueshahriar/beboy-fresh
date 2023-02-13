   
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal_body">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="modal_tab">
                        <div class="tab-content product-details-large">

                            @php 
                                $show = '';
                                $active = '';
                                $i=1; 
                            @endphp
                            @foreach($productImages as $productImage)
                            <?php  
                                if($i == 1){
                                    $show = 'show';
                                    $active = 'active'; 
                                }
                            ?>
                            
                            <div class="tab-pane fade <?php if($i==1) echo($show)  ?> <?php if($i==1) echo($active)  ?>" id="tab{{$productImage->id}}" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="{{asset($productImage->product_image)}}"><img src="{{asset($productImage->product_image)}}" alt=""></a>
                                </div>
                            </div>

                            @php $i++; @endphp
                            @endforeach

                           
                        </div>
                        <div class="modal_tab_button">
                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                
                            @php 
                                $show = '';
                                $active = '';
                                $i=1; 
                            @endphp
                            @foreach($productImages as $productImage)
                            <?php  
                                if($i == 1){
                                    $active = 'active'; 
                                }
                            ?>
                                <li>
                                    <a class="nav-link <?php if($i==1) echo($active)  ?>" data-bs-toggle="tab" href="#tab{{$productImage->id}}" role="tab"
                                        aria-controls="tab{{$productImage->id}}" aria-selected="false"><img src="{{asset($productImage->product_image_thumb)}}" alt=""></a>
                                </li>

                            @php $i++; @endphp
                            @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="modal_right">
                        <div class="modal_title mb-10">
                            <h2>{{$product->name}}</h2>
                        </div>
                        <div class="modal_price mb-10">
                            <span class="old_price">৳{{$product->regular_price}}</span>
                            <span class="current_price">৳{{$product->special_price}}</span>
                        </div>
                        <div class="modal_description mb-15">
                            <p>{!! $product->product_highlights !!}</p>
                        </div>
                        <div class="variants_selects">
                           
                            <div class="modal_add_to_cart">
                                <form action="#">
                                    <input min="0" max="100" step="2" name="qty" value="1" type="number" class="qty">
                                    <button type="button" class="AddToCart" data-id="{{ $product->id }}">add to cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal_social">
                            <h2>Share this product</h2>
                            <ul>




                                <!-- Facebook -->

                                <div class="fb-share-button " data-href="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}" data-layout="button_count">

                                </div>



                                <!-- Linked IN -->

                                <script src="https://platform.linkedin.com/in.js" type="text/javascript">

                                    lang: en_US

                                </script>

                                <script type="IN/Share" data-url="{{ 'https://binarylogic.biz/'.$product->slug ?? ''}}"></script>







                                <a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"></a>


                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

