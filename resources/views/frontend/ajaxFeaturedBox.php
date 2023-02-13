<style>
.fbi a{color:#000}
.fbi a:hover{color:#0101c1}
.fbitx{padding-top:18px;float:left}
@media only screen and (max-width: 767px) {
  .fbi img{width:30px}
  .fbitx{padding-top:2px;font-weight:normal}
  .single-cate.with-title{padding:5px}
}

</style>



<div class="purchase__ fbi">

    <div class="container">

    <h2 class="section-heading text-center pt-4 mb-4"><span class="font-weight-bold">FEATURED CATEGORY</span></h2>

      <ul class="row">

        <?php

        if(!empty($first4shopTypes)){

            foreach($first4shopTypes as $shopType){

              $img = explode('/',$shopType->image);

              $img[2] = 'thumb-'.$img[2];

              $img_arr_s = $img[0].'/'.$img[1].'/'.$img[2];

                ?>

                <li class="col-md-3 col-6 mb-2 text-center">

                    <a class="single-cate with-title" href="<?= route('/', [$shopType->slug]) ?>">

                      <strong class="font-weight-bold d-inline-block fbitx"><?= $shopType->title ?></strong>

                      <picture class="float-end" style="max-width:60px">
                        <img class="card-img-top px-1 p-sm-2" src="<?= asset($shopType->image) ?>" alt="<?= $shopType->title ?>">
                      </picture>

                    </a>

                </li>

                <?php

            }

        }

        ?>

      </ul>

    </div>
</div>