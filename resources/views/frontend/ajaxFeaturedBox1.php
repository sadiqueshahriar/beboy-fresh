<style>
   

  .purchase {
    margin-top:20px
  }
  .purchase li {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
    display:inline-block;
    -webkit-transition: 0;
    -webkit-transition: all 0.25s, color 0s !important;
    -moz-transition: all 0.25s, color 0s !important;
    -o-transition: all 0.25s, color 0s !important;
    transition: all 0.25s, color 0s !important;
    position:relative;
    z-index:0;
    padding-bottom:20px
  }
  
 
  .purchase li:hover {
    box-shadow: 0 13px 48px rgba(0, 0, 0, 0.2);
    z-index:1;
    color:#fff;
    background:#4898bf;
    border-color:#E85700;
    -webkit-transform:scale(1.05);
  }
  
  .purchase li * {
    -webkit-transition: 0 !important;
    -moz-transition: 0 !important;
    -o-transition: 0 !important;
    transition: 0 !important;
  }
  
  .purchase li:hover * {
    color:#fff !important;
    border-color:rgba(255, 255, 255, 0.27) !important;
  }
  
  .purchase li strong {
    font-size:19px;
    text-transform:uppercase;
    color:#2F3740;
    line-height:45px;
    margin-bottom: 25px;
    display: inline-block;
  }
  
  .purchase ul .purchase-description {
    display:block;
    font-size:19px;
    line-height:30px;
  }
  
  .purchase .purchase-price {
    font-size:84px;
    letter-spacing:2px;
    padding-top:20px;
    display:block;
    font-weight:400;
    padding-bottom:12px;
  }
  .purchase .purchase-button {
    font-size: 19px;
    color: #555;
    padding: 7px 10px 7px 10px;
    display: inline-block;
    margin-top: 10px;
    border: 1px solid #4898bf;
    border-radius: 5px;
    font-weight: bold;
}
  .purchase li:hover .purchase-button {
    
    -webkit-transition: 0;
    -moz-transition: 0;
    -o-transition: 0;
    transition: 0;
  }
  
  
  .purchase ul a:hover {
    color:#E85700;
  }

.purchase ul a, .purchase ul a:hover .purchase-price, .purchase ul a:hover .purchase-description {
color: #6C6C6C;
  text-decoration:none;
}

.purchase li * {
-webkit-transition: 0 !important;
-moz-transition: 0 !important;
-o-transition: 0 !important;
transition: 0 !important;
}
</style>

<section class="purchase">
    <div class="container-fluid">
    <h2 class="section-heading mb-5 text-center mt-4 p-4"><span class="font-weight-bold">FEATURED CATEGORY</span></h2>
                <ul class="row">
                <?php
    if(!empty($first4shopTypes)){
        foreach($first4shopTypes as $shopType){
            ?>
            <li class="col-6 col-sm-4 col-md-3 mb-4 text-center">
                <a class="p-4" href="<?= route('/', [$shopType->slug]) ?>">
                    <strong class="font-weight-bold"><?= $shopType->title ?></strong>
                    <img class="card-img-top" src="<?= asset($shopType->image) ?>" alt="<?= $shopType->title ?>">
                    <span class="purchase-description mt-2 d-none"><?= Str::limit($shopType->short_description, 40)  ?></span>
                    <span class="purchase-button">View Products</span>
                </a>
            </li>
            <?php
        }
    }
    ?>
            
                    </ul>
    </div>
</section>