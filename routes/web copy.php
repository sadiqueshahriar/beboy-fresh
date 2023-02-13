<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('config_cache', function(){
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('view:cache');
    return "Config-Cache is cleared";
});




Route::get('logout', [App\Http\Controllers\WelcomeController::class, 'logout'])->name('logout');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin/home');

Route::resource('admin/order', App\Http\Controllers\Web\OrderController::class);
Route::get('admin/send-email/{id}', [App\Http\Controllers\Web\OrderController::class, 'send_email'])->name('send-order-email');
Route::post('admin/save-email', [App\Http\Controllers\Web\OrderController::class, 'save_email'])->name('save.order-email');

Route::post('admin/update-order-status/{id}', [App\Http\Controllers\Web\OrderController::class, 'update'])->name('admin/update-order-status');
Route::post('admin/update-shipping-details/{id}', [App\Http\Controllers\Web\OrderController::class, 'update_shipping_details'])->name('admin/update-shipping-details');



Route::resource('admin/category', App\Http\Controllers\Web\CategoryController::class);
Route::get('view-update-history/{id}', [App\Http\Controllers\Web\CategoryController::class, 'view_update_history'])->name('view-update-history');

Route::resource('admin/subcategory', App\Http\Controllers\Web\SubcategoryController::class);
Route::resource('admin/prosubcategory', App\Http\Controllers\Web\ProsubcategoryController::class);
Route::resource('admin/proprocategory', App\Http\Controllers\Web\ProprocategoryController::class);
Route::resource('admin/tag', App\Http\Controllers\Web\TagController::class);
Route::resource('admin/post', App\Http\Controllers\Web\PostController::class);
Route::resource('admin/user', App\Http\Controllers\Web\UserController::class);
Route::resource('admin/brand', App\Http\Controllers\Web\BrandController::class);
Route::resource('admin/supplier', App\Http\Controllers\Web\SupplierController::class);
Route::resource('admin/backgrounds', App\Http\Controllers\Web\BackgroundController::class);

Route::resource('admin/product', App\Http\Controllers\Web\ProductController::class);
Route::resource('admin/product/resizeoldimages', App\Http\Controllers\Web\ProductController::class);
Route::resource('admin/product/removeimage', App\Http\Controllers\Web\ProductController::class);

Route::get('admin/import', [App\Http\Controllers\Web\ProductController::class, 'import'])->name('admin/import');		
Route::post('admin/import', [App\Http\Controllers\Web\ProductController::class, 'importFile'])->name('admin/import');	

Route::get('admin/export', [App\Http\Controllers\Web\ProductController::class, 'export'])->name('admin/export');



Route::resource('admin/shoptype', App\Http\Controllers\Web\ShopTypeController::class);
Route::resource('admin/bgcolor', App\Http\Controllers\Web\BGColorController::class);
Route::resource('admin/banner', App\Http\Controllers\Web\BannerController::class);
Route::resource('admin/ad', App\Http\Controllers\Web\AdController::class);
Route::resource('admin/slidertext', App\Http\Controllers\Web\SliderTextController::class);
Route::resource('admin/coupon', App\Http\Controllers\Web\CouponController::class);
Route::resource('admin/sitesetting', App\Http\Controllers\Web\SiteSettingController::class);
Route::resource('admin/office', App\Http\Controllers\Web\OfficeController::class);
Route::resource('admin/pagecategory', App\Http\Controllers\Web\PageCategoryController::class);	
Route::resource('admin/page', App\Http\Controllers\Web\PageController::class);	
Route::resource('admin/component', App\Http\Controllers\Web\ComponentController::class);	


Route::resource('admin/f_s_ads_img', App\Http\Controllers\Web\FeatureBoxFAdsController::class);	
Route::resource('admin/s_s_ads_img', App\Http\Controllers\Web\FeatureBoxSAdsController::class);	
Route::resource('admin/t_s_ads_img', App\Http\Controllers\Web\FeatureBoxTAdsController::class);	
Route::resource('admin/sidebarads', App\Http\Controllers\Web\SidebaradController::class);	



Route::get('admin/invoice-print/{id}', [App\Http\Controllers\Web\OrderController::class, 'invoicePrint'])->name('admin/invoice-print');		


//BackEnd Ajax Request
Route::post('admin/get-subcategory', [App\Http\Controllers\Web\AjaxRequestController::class, 'getSubcategory'])->name('admin/get-subcategory');
Route::post('admin/get-pro-sub-category', [App\Http\Controllers\Web\AjaxRequestController::class, 'getProSubCategory'])->name('admin/get-pro-sub-category');
Route::post('admin/get-pro-pro-category', [App\Http\Controllers\Web\AjaxRequestController::class, 'getProProCategory'])->name('admin/get-pro-pro-category');


//sliderbox-img
Route::resource('admin/sliderbox-img', App\Http\Controllers\Web\SliderBoxImageController::class);
//email marketing
Route::get('admin/customer-email', [App\Http\Controllers\Web\EmailMarketingController::class, 'customer_email'])->name('customer-email');
Route::post('admin/marketing-email', [App\Http\Controllers\Web\EmailMarketingController::class, 'marketing_email'])->name('admin.send-marketing-email');
Route::get('admin/email-template', [App\Http\Controllers\Web\EmailMarketingController::class, 'email_template'])->name('email-template');
Route::post('admin/email-details', [App\Http\Controllers\Web\EmailMarketingController::class, 'email_details'])->name('save.email-details');
Route::get('admin/individual-email', [App\Http\Controllers\Web\EmailMarketingController::class, 'individual_email'])->name('individual-email');
Route::get('admin/individual-mail/{id}', [App\Http\Controllers\Web\EmailMarketingController::class, 'send_individual_mail'])->name('send-individual-mail');
Route::post('admin/individual-email', [App\Http\Controllers\Web\EmailMarketingController::class, 'save_individual_email'])->name('save.individual-email');


Route::get('sitemap.xml', [App\Http\Controllers\Web\SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('rss.xml', [App\Http\Controllers\Web\SitemapController::class, 'feed'])->name('rss.xml');
Route::get('robots.txt', [App\Http\Controllers\Web\SitemapController::class, 'robots'])->name('robots.txt');

Route::get('remove-component',  [App\Http\Controllers\Web\ProductController::class, 'remove_component'])->name('remove-component');

Route::get('contact-us',  [App\Http\Controllers\Web\WelcomeController::class, 'contact_us'])->name('contact-us');

Route::post('contactus',  [App\Http\Controllers\Web\WelcomeController::class, 'submit_contactus'])->name('contactus');

// FrontEnd Routes

Route::get('cart',  [App\Http\Controllers\Web\CartController::class, 'cart'])->name('cart');
Route::get('wishlist',  [App\Http\Controllers\Web\WishlistController::class, 'index'])->name('wishlist');
//Authencication Controller
Route::get('customerLogin', [App\Http\Controllers\Web\AuthenticationController::class, 'customerLogin'])->name('customerLogin');
Route::post('customerLogin', [App\Http\Controllers\Web\AuthenticationController::class, 'customerSubmitLoginForm'])->name('customerLogin');
Route::get('customerRegister', [App\Http\Controllers\Web\AuthenticationController::class, 'customerRegister'])->name('customerRegister');
Route::post('customerRegister', [App\Http\Controllers\Web\AuthenticationController::class, 'customerSubmitRegisterForm'])->name('customerRegister');

//Profile Controller
Route::get('profile', [App\Http\Controllers\Web\ProfileController::class, 'show'])->name('profile');
Route::post('update-info', [App\Http\Controllers\Web\ProfileController::class, 'update'])->name('update-info');
Route::post('update-password', [App\Http\Controllers\Web\ProfileController::class, 'updatePassword'])->name('update-password');
Route::post('view-order-details', [App\Http\Controllers\Web\ProfileController::class, 'viewOrderDetails'])->name('view-order-details');

//Cart Controller
Route::post('add-to-cart',  [App\Http\Controllers\Web\CartController::class, 'add_to_cart'])->name('add-to-cart');

Route::post('cart-page', [App\Http\Controllers\Web\CartController::class, 'cart_page'])->name('cart-page');
Route::delete('remove-cart/{rowId}', [App\Http\Controllers\Web\CartController::class, 'remove_cart'])->name('remove-cart');
Route::get('update-cart', [App\Http\Controllers\Web\CartController::class, 'update_cart'])->name('update-cart');
Route::get('catssubpros', [App\Http\Controllers\Web\SearchController::class, 'catsubpro'])->name('catssubpros');
Route::post('apply-coupon', [App\Http\Controllers\Web\CartController::class, 'apply_coupon'])->name('apply-coupon');
Route::get('checkout', [App\Http\Controllers\Web\CartController::class, 'checkout'])->name('checkout');
Route::post('submitOrder', [App\Http\Controllers\Web\CartController::class, 'submitOrder'])->name('submitOrder');

Route::get('intel-12gen-processor',  [App\Http\Controllers\Web\WelcomeController::class, 'intel']);

// facebook login
Route::get('facebook_login', [App\Http\Controllers\Web\AuthenticationController::class, 'facebookLogin'])->name('facebook_login');
Route::get('facebook_callback', [App\Http\Controllers\Web\AuthenticationController::class, 'facebookCallback'])->name('facebook_callback');

// google login
Route::get('google_login', [App\Http\Controllers\Web\AuthenticationController::class, 'googleLogin'])->name('google_login');
Route::get('google_callback', [App\Http\Controllers\Web\AuthenticationController::class, 'googleCallback'])->name('google_callback');



//Wish List Controller
Route::post('add-to-wishlist',  [App\Http\Controllers\Web\WishlistController::class, 'addToWishlist'])->name('add-to-wishlist');
Route::post('remove-wishlist',  [App\Http\Controllers\Web\WishlistController::class, 'destroy'])->name('remove-wishlist');

Route::post('view-product-details', [App\Http\Controllers\Web\WelcomeController::class, 'viewProductDetails'])->name('view-product-details');


Route::get('tools/pc_builder', [App\Http\Controllers\Web\WelcomeController::class, 'PCBuilder'])->name('tools/pc_builder');
Route::get('tools/pc_builder/choose/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'ChooseItem'])->name('tools/pc_builder/choose');
Route::get('tools/pc_builder/add/{productSlug}/{componentSlug}', [App\Http\Controllers\Web\WelcomeController::class, 'AddItem'])->name('tools/pc_builder/add');

Route::post('remove-from-session', [App\Http\Controllers\Web\WelcomeController::class, 'removeFromSession'])->name('remove-from-session');
Route::get('clear-cart', [App\Http\Controllers\Web\CartController::class, 'clearCart'])->name('clear-cart');

Route::post('add-to-cart-array', [App\Http\Controllers\Web\WelcomeController::class, 'addToCartArray'])->name('add-to-cart-array');
Route::post('print_pc', [App\Http\Controllers\Web\WelcomeController::class, 'print_pc'])->name('print_pc');


Route::get('latestproducts', [App\Http\Controllers\Web\WelcomeController::class, 'latestproducts'])->name('latestproducts');
Route::get('latest-offers', [App\Http\Controllers\Web\WelcomeController::class, 'latest_offer_products'])->name('latest-offers');
Route::get('upcomingproducts', [App\Http\Controllers\Web\WelcomeController::class, 'upcomingproducts'])->name('upcomingproducts');

Route::get('newest-arrivals/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'newestArrivals'])->name('newest-arrivals');
Route::get('top-popular/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'topPopular'])->name('top-popular');

Route::get('blogs', [App\Http\Controllers\Web\WelcomeController::class, 'posts'])->name('blogs');
Route::get('blog/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'cat_posts'])->name('blog');
//Route::get('brand', [App\Http\Controllers\Web\SearchController::class, 'brandsProducts'])->name('brands-products');


Route::get('tag/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'tag'])->name('tag');

Route::get('/{slug}', [App\Http\Controllers\Web\SearchController::class, 'MakeUrl'])->name('/');

Route::get('product-category/{slug}', [App\Http\Controllers\Web\SearchController::class, 'MakeUrl'])->name('product-category');
Route::get('product-category/{catSlug}/{slug}', [App\Http\Controllers\Web\SearchController::class, 'subCategoryProducts'])->name('product-category');
Route::get('prosub/{catSlug}/{subSlug}/{slug}', [App\Http\Controllers\Web\SearchController::class, 'proSubCategoryProducts'])->name('prosub');
Route::get('brands', [App\Http\Controllers\Web\SearchController::class, 'brands'])->name('brands');
Route::get('brand/{slug}', [App\Http\Controllers\Web\SearchController::class, 'brandProducts'])->name('brand-products');

Route::get('/', [App\Http\Controllers\Web\WelcomeController::class, 'welcome']);

Route::get('post/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'post_details'])->name('post');
Route::get('page/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'page_details'])->name('page');
Route::get('banner/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'banner_details'])->name('banner');
Route::get('product/{slug}', [App\Http\Controllers\Web\WelcomeController::class, 'product_details'])->name('product');





//Search Prodduct Controller

//Route::get('sub/{catSlug}/{slug}', [App\Http\Controllers\Web\SearchController::class, 'subCategoryProducts'])->name('sub');

//Route::get('propro/{catSlug}/{subSlug}/{proSubSlug}/{slug}', [App\Http\Controllers\Web\SearchController::class, 'proProcategoryProducts'])->name('propro');




Route::get('catsubpro', [App\Http\Controllers\Web\SearchController::class, 'catsubpro'])->name('catsubpro');
Route::get('filter-category-products/{id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterCategoryProducts'])->name('filter-category-products');
Route::get('filter-subcategory-products/{cat_id}/{id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterSubCategoryProducts'])->name('filter-subcategory-products');
Route::get('filter-prosubcategory-products/{cat_id}/{subcategory_id}/{prosubcategory_id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterprosubcategoryProducts'])->name('filter-prosubcategory-products');
Route::get('brand-products/{slug}', [App\Http\Controllers\Web\SearchController::class, 'brandProducts'])->name('brand-products');
Route::get('filter-brand-products/{id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterBrandProducts'])->name('filter-brand-products');
Route::get('workstation/{slug}', [App\Http\Controllers\Web\SearchController::class, 'workstationProduct'])->name('workstation');
Route::get('allproduct', [App\Http\Controllers\Web\SearchController::class, 'allproduct'])->name('allproduct');
Route::get('filter-shop-type-products/{id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterShoptypeProducts'])->name('filter-shop-type-products');
Route::post('product-search', [App\Http\Controllers\Web\SearchController::class, 'productSearch'])->name('product-search');
Route::post('filter-price', [App\Http\Controllers\Web\SearchController::class, 'filterPrice'])->name('filter-price');
Route::get('all-products', [App\Http\Controllers\Web\SearchController::class, 'allProducts'])->name('all-products');
Route::get('filter-products/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterProducts'])->name('filter-products');

Route::post('products-search', [App\Http\Controllers\Web\SearchController::class, 'producSearchNor'])->name('products-search');

Route::get('filter-component-products/{id}/{filterValue}', [App\Http\Controllers\Web\SearchController::class, 'filterComponentProducts'])->name('filter-component-products');









//FrontEnd Ajax Request
Route::get('add-cart/{id}',  [App\Http\Controllers\Web\CartController::class, 'add_cart'])->name('add-cart');

//new loading
Route::post('apps/{page}',  [App\Http\Controllers\Web\AppsController::class, 'index']);


