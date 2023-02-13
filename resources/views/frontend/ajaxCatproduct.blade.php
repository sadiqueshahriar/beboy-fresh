<?php $ii=1; ?>
                
                
<?php  
//dd($categories);
foreach($categories as $category){
    //echo "<section>".$category->name."</section>";

if($ii == 1){$ii++; }else{
    $ii++; 
$NewestArrivals = App\Models\Product::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
    'special_price','offer_price','price_highlight','call_for_price','product_image_small',
    'image','image_des','image_alt','status','sku','discount','stock_status')
    ->where([['products.category_id', $category->id],['status',1]])
    ->orderBy('products.id', 'desc')
    ->take(4)
    ->get();
//if(count($NewestArrivals)>3){
?>
<section class="pt-50 pb-40 mt-5 mb-5">
    <div class="d-flex mb-2 justify-content-between align-items-center flex-column flex-md-row">
        <h2 class="section-heading mb-5" style="color: <?= $category->cat_title_color ?>">
            <a href="<?= $category->slug ?>"><?= $category->name?></a>
        </h2>
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
                @foreach($NewestArrivals as $product)
                    @include('frontend/elementproductbox',$product)
                @endforeach
                <div class="col-12 text-center d-flex justify-content-center">
                    <button class="button button-type-1 button-load-more"><a href="newest-arrivals/<?= $category->slug?>" class="w-100 text-white" style="text-decoration: none">VIEW ALL</a></button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="top-popular-<?= $category->slug ?>" role="tabpanel" aria-labelledby="top-popular-<?= $category->slug ?>-tab">
            <div class="row g-3 g-md-5">
                <?php
                $TopPopulars = App\Models\Product::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
                'special_price','offer_price','price_highlight','call_for_price','product_image_small',
                'image','image_des','image_alt','status','sku','discount','stock_status')
                ->where([['products.category_id', $category->id],['status',1]])
                ->orderBy('total_sell', 'desc')
                ->take(4)
                ->get();
                ?>
                @foreach($TopPopulars as $product)
                    @include('frontend/elementproductbox',$product)
                @endforeach
                <div class="col-12 text-center d-flex justify-content-center">
                    <button class="button button-type-1 button-load-more"><a href="top-popular/<?= $category->slug?>" class="w-100 text-white" style="text-decoration: none">VIEW ALL</a></button>
                </div>
            </div>
        </div>
        
    </div>
    
</section>
<?php 
//}

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