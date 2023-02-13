<table>
    <thead>
        <tr>
            <th>cat_id</th>
            <th>sub_cat</th>
            <th>pro_sub_cat_id</th>
            <th>pro_pro_cat_id</th>
            <th>component_id</th>
            <th>name</th>
            <th>slug</th>
            <th>discount_price</th>
            <th>regular_price</th>
            <th>special_price</th>
            <th>call_for_price</th>
            <th>warranty</th>
            <th>discount</th>
            <th>qty</th>
            <th>status</th>
            <th>image</th>
            <th>p_brands</th>
            <th>p_more_image</th>
            <th>product_emi</th>
            <th>Shop_Type</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)

            <?php
                $p_brands = App\Models\ProductBrand::where('product_id', $product->id)->get();
                $p_m_images = App\Models\ProductImage::where('product_id', $product->id)->get();
                $p_emis = App\Models\ProductEmi::where('product_id', $product->id)->get();
                $p_shops = App\Models\ProductShop::where('product_id', $product->id)->get();
            ?>

            <tr>
                <td>{{$product->category_id}}</td>
                <td>{{$product->sub_category_id}}</td>
                <td>{{$product->pro_sub_category_id}}</td>
                <td>{{$product->pro_pro_category_id}}</td>
                <td>{{$product->component_id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->slug }}</td>
                <td>{{$product->discount_price}}</td>
                <td>{{$product->regular_price}}</td>
                <td>{{$product->special_price}}</td>
                <td>{{$product->call_for_price}}</td>
                <td>{{$product->warranty}}</td>
                <td>{{$product->discount}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->status}}</td>
                <td>{{$product->image}}</td>

                <td>
                    @foreach($p_brands as $brand)
                        {{$brand->brand_id}},
                    @endforeach
                </td>

                
                <td>
                    @foreach($p_m_images as $p_m_image)
                        {{$p_m_image->product_image}},
                    @endforeach
                </td>

                <td>
                    @foreach($p_emis as $p_emi)
                        {{$p_emi->emi_month}}-{{$p_emi->emi_price}},
                    @endforeach
                </td>
                <td>
                    @foreach($p_shops as $p_shop)
                        {{$p_shop->shop_type_id}},
                    @endforeach
                </td>

            </tr>
        @endforeach
    </tbody>

</table>