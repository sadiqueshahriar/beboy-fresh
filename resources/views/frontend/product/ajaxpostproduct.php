<?php $ii=1; ?>
                
                
<?php  
foreach($categories as $category){
    //echo "<section>".$category->name."</section>";

if($ii == 1){$ii++; }else{
    $ii++; 
$NewestArrivals = DB::table('product_stock_statuses')
    ->select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
    'special_price','offer_price','price_highlight','call_for_price','product_image_small',
    'image','image_alt','status','sku','discount','image_des')
    ->join('products', 'product_stock_statuses.product_id', '=', 'products.id')
    ->where('product_stock_statuses.stock_status', 'in_stock')
    ->orderBy('products.id', 'desc')
    ->where('products.category_id', $category->id)
    ->where('products.status', 1)
    ->take(4)
    ->get();
    //dd($NewestArrivals);  
if(count($NewestArrivals)>3){
?>
<section class="pt-50 pb-40 mt-5 mb-5" style="background-color: <?= $category->bg_color?>">
    <div class="d-flex mb-2 justify-content-between align-items-center flex-column flex-md-row">
        <h2 class="mb-0" style="font-size: 40px; color: <?= $category->cat_title_color ?>"><?= $category->name?></h2>
        <ul class="nav d-flex justify-content-center my-md-0 my-4 product-nav" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link button button-tab mb-2 active" id="newest-arrivals-<?= $category->slug?>-tab" data-bs-toggle="tab" data-bs-target="#newest-arrivals-<?= $category->slug?>" type="button" role="tab" aria-controls="newest-arrivals-<?= $category->slug ?>" aria-selected="true">NEWEST - ARRIVALS </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button button-tab mb-2" id="top-popular-<?= $category->slug?>-tab" data-bs-toggle="tab" data-bs-target="#top-popular-<?= $category->slug?>" type="button" role="tab" aria-controls="top-popular-<?= $category->slug?>" aria-selected="false">TOP - POPULAR</button>
            </li>
        </ul>
    </div>
    <!-- tab -->
    <div class="tab-content mt-5" id="myTabContent">
        <!-- tab pane -->
        <div class="tab-pane fade show active" id="newest-arrivals-<?= $category->slug ?>" role="tabpanel" aria-labelledby="newest-arrivals-<?= $category->slug ?>-tab">
            <!-- row -->
            <div class="row g-3 g-md-5">
                <?php
                foreach($NewestArrivals as $product){
                ?>
                <!-- col -->
                <div class="col-md-3 col-sm-4 col-6 mb-4">
                    <!-- card -->
                    <div class="card card-type-2">
                        <?php
                        if($product->discount > 0){ ?>
                        <div class="card__discount">
                            <p class="mb-0">-<?= $product->discount ?>%</p>
                        </div>
                        <?php } ?>
                        <!-- card img -->
                        <div class="card__image">
                            <a href="<?= $product->slug?>">
                                <img src="<?= $product->product_image_small?>" alt="<?= $product->image_alt?>" longdesc="<?= $product->image_des?>" class="card__image lozad-">
                                <div class="card__icons--top">
                                    <div class="d-flex">
                                        
                                    </div>
                                
                                </div>
                            </a>
                        </div>
                        <!-- /card img -->
                        <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem">
                            <div>
                                <h5 class="card__heading"><a href="<?= $product->slug?>" style="text-decoration: none"><?= $product->name?></a></h5>
                                <h6><?= $product->subtitle?></h6>
                            </div>

                            <div>
                                <?php if($product->call_for_price){ ?>
                                <div class="align-items-center my-3 text-center">
                                    <strong class="fz-large d-inline-block text-danger"> <?= $product->call_for_price?></strong>
                                </div>
                                <?php }else{?>
                                <div class="text-center align-items-center my-3">
                                    <?php if($product->regular_price != ''){?>
                                    <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ <?= number_format($product->regular_price)?></strong><br>
                                    <?php }?>

                                    <?php if($product->special_price != ''){?>
                                    <strong class="fz-normal d-inline-block text-success">Special Price: ৳ <?= number_format($product->special_price)?></strong><br>
                                    <?php }?>
                                </div>
                                <?php }?>

                            </div>

                            <div class="card__icons align-items-center">

                                <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $product->id?>">
                                    <i class="fal fa-eye me-3"></i> View
                                </button>

                                <?php if(!$product->call_for_price){?>
                                <a href="<?= $product->slug?>" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <div class="col-12 text-center d-flex justify-content-center">
                    <button class="d-none button button-type-1 button-load-more"><a href="newest-arrivals/<?= $category->slug?>" class="w-100 text-white" style="text-decoration: none">VIEW ALL</a></button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="top-popular-<?= $category->slug ?>" role="tabpanel" aria-labelledby="top-popular-<?= $category->slug ?>-tab">
            <div class="row g-3 g-md-5">
                <?php
                $TopPopulars = App\Models\Product::where('category_id', $category->id)
                    ->where('status', 1)
                    ->select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
    'special_price','offer_price','price_highlight','call_for_price','product_image_small',
    'image','image_alt','status','sku','discount','image_des')
    ->join('product_stock_statuses', 'products.id', '=', 'product_stock_statuses.product_id')
                    ->orderBy('total_sell', 'desc')
                    ->take(4)
                    ->get();
                    //dd($TopPopulars);
                ?>
                

                <?php
                foreach($TopPopulars as $product){
                ?>

                <div class="col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card card-type-2">
                        <?php if($product->discount > 0){?>
                        <div class="card__discount">
                            <p class="mb-0">-<?= $product->discount?>%</p>
                        </div>
                        <?php }?>
                        <div class="card__image">
                            <a href="<?= $product->slug?>">
                                <img src="<?= $product->product_image_small ?>" alt="<?= $product->image_alt?>" longdesc="<?= $product->image_des?>" class="lozad- card__image">
                                <div class="card__icons--top">
                                    
                                    
                                </div>
                            </a>
                        </div>
                        <div class="p-3 d-flex flex-column justify-content-between" style="min-height: 24rem;">
                            <div>
                                <h5 class="card__heading"><a href="<?= $product->slug?>" style="text-decoration: none"><?= $product->name?></a></h5>
                                <h6><?= $product->subtitle?></h6>
                            </div>

                            <div>
                                <?php if($product->call_for_price){ ?>
                                <div class="align-items-center my-3 text-center">
                                    <strong class="fz-large d-inline-block text-danger"> <?= $product->call_for_price?></strong>
                                </div>
                                <?php }else{ ?>
                                <div class="text-center align-items-center my-3">
                                    <?php if($product->regular_price != ''){?>
                                    <strong class="fz-normal d-inline-block" style="color: gray">Regular Price: ৳ <?= number_format($product->regular_price)?></strong><br>
                                    <?php }?>

                                    <?php if($product->special_price > 0){?>
                                    <strong class="fz-normal d-inline-block text-success">Special Price: ৳ <?= number_format($product->special_price)?></strong>
                                    <?php }?>
                                    <br>
                                </div>
                                <?php }?>

                            </div>
                            <div class="card__icons align-items-center">

                                <button type="button" class="button button-type-1  button-icon w-100 h-100 open-product-details-popup" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $product->id?>">
                                    <i class="fal fa-eye me-3"></i> View
                                </button>

                                <?php if(!$product->call_for_price){?>
                                <a href="<?= $product->slug?>" class="button button-type-1 d-block w-100"><i class="fal fa-shopping-bag me-3"></i> Shop</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="col-12 text-center d-flex justify-content-center">
                    <button class="button button-type-1 button-load-more"><a href="top-popular/<?= $category->slug?>" class="w-100 text-white" style="text-decoration: none">VIEW ALL</a></button>
                </div>
            </div>
        </div>
        
    </div>
    
</section>
<?php 
}

    if($category->banner_ad && $category->banner_ad_status == 1){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align: center;">
                        <a href="<?= $category->banner_ad_url?>">
                            <img src="<?= asset($category->banner_ad) ?>" alt="<?= $category->name ?>"  class="lozad-">
                        </a>
                </div>
            </div>
        </div>
    </div>                
    <?php 
    }
}
}
?>