<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
        
        @foreach ($categories as $category)
        <url>
            <loc>{{url($category->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($category->image)}}</image:loc>
                <image:caption>{{$category->meta_des ?? $category->name}}</image:caption>
                <image:title>{{$category->meta_des ?? $category->name}}</image:title>
            </image:image>
        </url>
        @endforeach

        @foreach ($subcategories as $category)
        <url>
            <loc>{{url($category->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($category->image)}}</image:loc>
                <image:caption>{{$category->meta_des ?? $category->name}}</image:caption>
                <image:title>{{$category->meta_des ?? $category->name}}</image:title>
            </image:image>
        </url>
        @endforeach

        @foreach ($pro_sub_cats as $category)
        <url>
            <loc>{{url($category->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($category->image)}}</image:loc>
                <image:caption>{{$category->meta_des ?? $category->name}}</image:caption>
                <image:title>{{$category->meta_des ?? $category->name}}</image:title>
            </image:image>
        </url>
        @endforeach

        @foreach ($pro_pro_sub_cats as $category)
        <url>
            <loc>{{url($category->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($category->image)}}</image:loc>
                <image:caption>{{$category->meta_des ?? $category->name}}</image:caption>
                <image:title>{{$category->meta_des ?? $category->name}}</image:title>
            </image:image>
        </url>
        @endforeach

        @foreach ($brands as $brand)
        <url>
            <loc>{{url($brand->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($brand->image)}}</image:loc>
                <image:caption>{{$brand->meta_des ?? $brand->name}}</image:caption>
                <image:title>{{$brand->name}}</image:title>
            </image:image>
        </url>
        @endforeach

        @foreach ($banners as $banner)
        <url>
            <loc>{{url($banner->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($banner->image)}}</image:loc>
                <image:caption>{{$banner->title ?? ''}}</image:caption>
                <image:title>{{$banner->title ?? ''}}</image:title>
            </image:image>
        </url>
        @endforeach

</urlset>