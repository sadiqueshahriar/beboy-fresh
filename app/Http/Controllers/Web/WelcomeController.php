<?php



namespace App\Http\Controllers\Web;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Subcategory;

use App\Models\Prosubcategory;

use App\Models\Brand;

use App\Models\Banner;

use App\Models\SliderText;

use App\Models\ShopType;

use App\Models\Product;

use App\Models\Post;

use App\Models\SiteSetting;

use App\Models\Page;

use App\Models\ProductImage;

use App\Models\Tag;

use App\Models\ProductBrand;

use App\Models\ProductEmi;

// use App\Models\BGColor;

use App\Models\FeatureBoxFAds;

use App\Models\FeatureBoxSAds;

use App\Models\FeatureBoxTAds;

use App\Models\SidebarAd;

use App\Models\Component;

use App\Models\BuildYourPc;

 use App\Models\Background;

use App\Models\Ad;

use App\Models\SliderBoxImage;

use App\Models\ProductStockStatus;

use App\Models\Contact;

use App\Models\HotDealProduct;

use App\Models\FeatureProduct;

use App\Models\ProductRundown;


use Session;

use DB;

use Cart;

use Artisan;



class WelcomeController extends Controller

{



	public function welcome()

	{
        $products = Product::where('status', 1)->get();
        $best_sellers = Product::where('status',1)->latest()->take(5)->get();
        $featureProducts = FeatureProduct::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'feature_products.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->take(12)
        ->get();
        
        $newProducts = ProductRundown::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'product_rundowns.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->Orwhere('products.stock_status', '=', 'new_arrived')
        ->take(12)
        ->get();
        $OfferProducts = DB::table('offer')->select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'offer.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->get();

        $top_collections = HotDealProduct::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'hot_deal_products.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->orWhere('products.stock_status', '=', 'coming')
        ->take(12)
        ->get();

        $banners = Banner::where('status', 1)->get();


        return view('templete_two.homepage.welcome_new', compact('products','featureProducts','newProducts','OfferProducts','banners','top_collections','best_sellers'));

	}
    public function welcomegenerated()

	{

		$SiteSetting = SiteSetting::where('status', 1)->first();

		$ads = Ad::where('status', 1)->get();

        $brands = Brand::where('status', 1)->take(15)->get();

        $bgcolors = BGColor::where('status', 1)->pluck('code','section')->all();

        $banners = Banner::where('status', 1)->get();


        switch($SiteSetting->templete) {
            case(1):
 
                return view('welcome', compact(

                    'ads',

                    'banners',

                    'bgcolors',

                    'brands',

                    'SiteSetting'

                ));
 
                break;
 
            case(2):
                 
                return view('templete_two.homepage.welcomegenerated', compact(

                    'ads',

                    'banners',

                    'bgcolors',

                    'brands',

                    'SiteSetting'

                ));
 
                break;
 
            default:
                $msg = 'Something went wrong.';
        }



	}


    public function welcome_new()

    {

        return view('templete_two.homepage.welcome_new');
    }
    public function post_details($slug = null)
    {
        $post = Post::where('slug', $slug)->first();
		return view('frontend.post.post_details', compact('post'));
    }

    public function page_details($slug = null)

    {
        $page = [];
        if(!empty($slug)){
            $page = Page::where('slug', $slug)->where('status', 1)->first();
        }
        $pages = Page::where('status', 1)->paginate(10);
        $SiteSetting = SiteSetting::first();
        switch($SiteSetting->templete) {
            case(1):
 
                return view('frontend.page.page_details', compact('page','pages'));
 
                break;
 
            case(2):
                 
                return view('templete_two.page.page_details', compact('page','pages'));
 
                break;
 
            default:
                $msg = 'Something went wrong.';
        }
    }
    public function banner_details($slug)

    {
        $banner = Banner::where('slug', $slug)->first();
		return view('frontend.page.banner_details', compact('banner'));
    }



    public function product_details($slug)

    {
        $product = Product::where('slug', $slug)->first();
        $productImages = ProductImage::where('product_id', $product->id)->get();
        $ProductBrands = ProductBrand::where('product_id', $product->id)->get();
        $categories = Category::where('status', 1)->get();
        $relatedProducts = Product::where('category_id', $product->category_id)
        					->orwhere('sub_category_id', $product->sub_category_id)
        					->orwhere('pro_sub_category_id', $product->pro_sub_category_id)
        					->where('status', 1)
        					->take(8)
        					->get();
        $ProductEmis = ProductEmi::where('product_id', $product->id)->orderBy('emi_month', 'desc')->get();
        $siteSetting = SiteSetting::where('status', 1)->first();
		return view('frontend.product.product_details', compact('product', 'categories', 'productImages', 'ProductBrands', 'relatedProducts', 'ProductEmis', 'siteSetting'));


    }
    public function viewProductDetails(Request $request)

    {

        $product = Product::where('id', $request->id)->first();
        $productImages = ProductImage::where('product_id', $request->id)->get();
        $ProductBrands = ProductBrand::where('product_id', $request->id)->get();
        $categories = Category::where('status', 1)->get();
        $ProductEmis = ProductEmi::where('product_id', $request->id)->orderBy('emi_month', 'desc')->get();
        $ProductStockStatuses = ProductStockStatus::where('product_id', $request->id)->get();
        $siteSetting = SiteSetting::where('status', 1)->first();
        return view('frontend.product.ProductDetails', compact('productImages', 'product', 'ProductBrands', 'categories', 'ProductEmis', 'siteSetting', 'ProductStockStatuses'));

    }

   public function removeFromSession(Request $request)

   {

        if($request->id) {
            $cart = session()->get('cart_session');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart_session', $cart);
            }
            return redirect()->back();
        }
   }

   public function addToCartArray(Request $request)

   {

        $product_id = $request->product_id;
        foreach ($product_id as $key => $value) {

            $product_details = DB::table('products')->where('id', $value)->first();
            $data = array();
            $data['id']=$product_details->id;
            $data['name']=$product_details->name;
            if ($product_details->discount_price) {
                $data['price']=$product_details->discount_price;
            }
            if ($product_details->special_price) {
                $data['price']=$product_details->special_price;
            }
            $data['qty']= 1;
            $data['weight']=$product_details->id;
            $data['options']['image']=$product_details->image;
            $cart = Cart::add($data);
        }
        $notification=array(
            'message' => ' Added Product In Cart!!',
            'alert-type' => 'success'
        );
        return redirect()->route('cart');
   }

   public function latestproducts(Request $request)

   {
    $products = Product::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
    'special_price','offer_price','price_highlight','call_for_price','product_image_small',
    'image','image_des','image_alt','status','sku','discount','stock_status')
    ->where('products.status',1)
    ->orderBy('products.id', 'desc')
    ->paginate(12);

        return view('frontend.product.latestProducts', compact('products'));  

   }

   public function latest_offer_products(Request $request)

   {

        $products = Product::where('category_id', 12)->where('status', 1)->simplepaginate(12);
        return view('frontend.product.latest_offer_products', compact('products'));  

   }   

   
   public function upcomingproducts(Request $request)

   {

        $products = Product::orderBy('id', 'desc')->where('status', 1)->simplepaginate(12);
        $products = DB::table('product_stock_statuses')

            ->join('products', 'product_stock_statuses.product_id', '=', 'products.id')

            ->where('product_stock_statuses.stock_status', 'upcoming')
            ->orderBy('products.id', 'desc')

            ->where('products.status', 1)

            ->simplepaginate(12);

        return view('frontend.product.upcomingproducts', compact('products'));  

   }



   public function newestArrivals(Request $request, $slug)

   {
        $products = $category = [];
        $category = Category::where('slug', $slug)->first();
        if(!empty($category)){

            $products = Product::orderBy('created_at', 'desc')->where('status', 1)->where('category_id', $category->id)->paginate(12);

        }else{

            $products = "";

        }
        return view('frontend.product.newestArrivals', compact('products','category'));  

   }

   public function topPopular(Request $request, $slug)

   {

    $products = $category = [];
       if(!empty($slug)){
        $category = Category::where('slug', $slug)->first();
        if(!empty($category)){
            $products = Product::orderBy('total_sell', 'desc')->where('status', 1)->where('category_id', $category->id)->simplepaginate(12);
        }
       return view('frontend.product.topPopular', compact('products','category')); 
       }

   }
    public function contact_us() {
        $SiteSetting = SiteSetting::where('status', 1)->first();
        switch($SiteSetting->templete) {
            case(1):
                return view('frontend.page.contact');
                break;
            case(2):           
                return view('templete_two.page.contact');
                break;
            default:
                $msg = 'Something went wrong.';
        }
    }

    public function submit_contactus(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->save();

        Session::flash('message', 'Your Message submited !'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }    
    public function posts()

    {

        $posts = Post::orderBy('id', 'desc')->where('status', 1)->simplepaginate(20);
        $categories = Category::orderBy('id', 'desc')->where('status', 1)->get();
        return view('frontend.post.posts', compact('posts', 'categories'));

    }

    
    public function cat_posts($slug) {

        $posts = $category = [];
        $postcategory = Category::where('slug', $slug)->first();
        if(!empty($postcategory)){
            $posts = Post::orderBy('id', 'desc')->where('category_id', $postcategory->id)->where('status', 1)->paginate(20);

        }
        return view('frontend.post.cat_posts', compact('posts','postcategory'));

    }

    public function tag($slug) {

        $tag = Tag::where('slug', $slug)->first();
        $posts = DB::table('post_tags')
            ->join('tags', 'post_tags.tag_id', '=', 'tags.id')
            ->join('posts', 'post_tags.post_id', '=', 'posts.id')
            ->where('post_tags.tag_id', $tag->id)
            ->select('post_tags.tag_id', 'post_tags.post_id', 'tags.id', 'posts.*')
            ->simplepaginate(20);
        return view('frontend.post.tag_posts', compact('posts'));

    }

    public function ads()
    {
        sleep(4);
        $ads = Ad::where('status', 1)->take(3)->get();

        return view('templete_two.homepage.ajaxComponent.ads', compact('ads'));
    }

    public function hotdeal_product()
    {

        $hotdealProducts = HotDealProduct::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'hot_deal_products.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->take(12)
        ->get();

        return view('templete_two.homepage.ajaxComponent.hotdeal_product', compact('hotdealProducts'));
    }

    public function feature_product()
    {
        $featureProducts = FeatureProduct::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'feature_products.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->take(12)
        ->get();
        return view('templete_two.homepage.ajaxComponent.feature_product', compact('featureProducts'));
    }

    public function new_arrival()
    {
         $newProducts = ProductRundown::select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'product_rundowns.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->Orwhere('products.stock_status', '=', 'new_arrived')
        ->take(12)
        ->get();
        return view('templete_two.homepage.ajaxComponent.new_arrival', compact('newProducts'));
    }
    public function load_mobile_menu()
    {

    sleep(2);
        return view('templete_two.homepage.ajaxComponent.load_mobile_menu');
    }
    public function load_web_menu()
    {

        return view('templete_two.homepage.ajaxComponent.load_web_menu');
    }

    public function load_brand()
    {

        $brands = Brand::select('id','name','slug','image')->where('status', 1)->take(15)->get();
        return view('templete_two.homepage.ajaxComponent.load_brand', compact('brands'));
    }
    public function quick_view_ajax($id)
    {
        $product = Product::find($id);
        $productImages = ProductImage::where('product_id', $id)->get();
        return view('templete_two.homepage.components.quick_view', compact('product', 'productImages'));
    }
    public function direction() {
        return view('templete_two.page.direction');
    }
    public function private_new(){
        $SiteSetting = SiteSetting::where('status', 1)->first();
        $product = DB::table('products')->where('stock_status', 'private')->first();
        // dd($product);
        return view('templete_two.page.private_product', compact('SiteSetting','product'));
    }
    public function new_offer(){
        $OfferProducts = DB::table('offer')->select('products.id','name','subtitle','slug','buying_price','discount_price','regular_price',
        'special_price','offer_price','price_highlight','call_for_price','product_image_small',
        'image','image_des','image_alt','products.status','sku','discount','stock_status')
        ->join('products', 'offer.product_id', '=', 'products.id')
        ->orderBy('seq', 'ASC')
        ->where('products.stock_status', '=', 'in_stock')
        ->get();
        return view('templete_two.page.desktop_offer', compact('OfferProducts'));
    }
}































