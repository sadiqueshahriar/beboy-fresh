<div class="search-box mr-40 ">
    <form action="{{route('products-search')}}" class="search-box__form d-none d-lg-block " method="post" autocomplete="off">
        @csrf
        <div class="d-flex p-0 position-relative">
            <input onkeyup="ProductSearch(this)" type="text" placeholder="Search" class="search-box__input" name="product_name" required="required">
            <button type="submit" class="button button-icon search-box__button"><i class="fal fa-search"></i></button>
            <div style="background: #fff; display: none; max-height: 400px; overflow-y: auto; margin-top: 5px; padding: 1rem 0; position: absolute; top: 100%; left: 0; right: 0; z-index: 2;text-align: left;" class="ShowProduct" id="show-preloader">
            </div>
        </div>
    </form>
</div>