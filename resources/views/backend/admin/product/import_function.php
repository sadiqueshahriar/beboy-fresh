<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class ProductImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function collection(collection $collection)
    {




        foreach ($collection as $key => $value) {


            if ($key>0) {

                // $exists = DB::table('products')->where('slug', $value[6])->first();
                // dd($exists);

                // if ($exists) {
                //     //LOGIC HERE TO UPDATE
                //     return null;
                // }

                //Product Save
                $product = DB::table('products')->insert([
                    'category_id' => $value['cat_id'],
                    'sub_category_id' => $value['sub_cat'],
                    'pro_sub_category_id' => $value['pro_sub_cat_id'],
                    'pro_pro_category_id' => $value['pro_pro_cat_id'],
                    'component_id' => $value['component_id'],
                    'name' => $value['name'], 
                    'slug' => $value['slug'], 
                    'discount_price' => $value['discount_price'],
                    'regular_price' => $value['regular_price'],
                    'special_price' => $value['special_price'],
                    'call_for_price' => $value['call_for_price'],
                    'warranty' => $value['warranty'],
                    'discount' => $value['discount'],
                    'qty' => $value['qty'],
                    'status' => $value['status'],
                    'image' => $value['image'],
                    'user_id' => 0,
                    'supplier_id' => 0,
                ]);

                $product_id = DB::getPdo()->lastInsertId();

                //Product Brand Save
                $product_brands = explode(',', $value['p_brands']);
                foreach ($product_brands as $key => $brand) {
                    $product_brand = DB::table('product_brands')->insert([
                        'product_id' => $product_id,
                        'brand_id' => $brand,

                    ]);
                }


                //Product More Image Save
                $product_more_images = explode(',', $value['p_more_image']);
                foreach ($product_more_images as $key => $image) {
                    $product_more_image = DB::table('product_images')->insert([
                        'product_id' => $product_id,
                        'product_image' => $image,

                    ]);
                }

                //Product EMI Save
                $product_emis = explode(',', $value['product_emi']);
                foreach ($product_emis as $key => $emi) {
                    $emi_explode = explode('-', $emi);
                    $product_emi = DB::table('product_emis')->insert([
                        'product_id' => $product_id,
                        'emi_month' => $emi_explode[0],
                        'emi_price' => $emi_explode[1],

                    ]);
                }


                //Product Shop Save
                $product_shops = explode(',', $value['Shop_Type']);
                foreach ($product_shops as $key => $shop) {
                    $product_shop = DB::table('product_shops')->insert([
                        'product_id' => $product_id,
                        'shop_type_id' => $shop,

                    ]);
                }




            }





        }





        

    }
}
