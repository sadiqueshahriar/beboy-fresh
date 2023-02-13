<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
        
        @foreach ($products as $product)
        <url>
            <loc>{{url($product->slug)}}</loc>
            <image:image>
                <image:loc>{{asset($product->image)}}</image:loc>
                <image:caption>{{$product->image_des ?? $product->name}}</image:caption>
                <image:title>{{$product->image_alt ?? $product->name}}</image:title>
            </image:image>
        </url>
    @endforeach
</urlset>