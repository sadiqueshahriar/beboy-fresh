<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">

    <channel>

        <title>Beboy </title>
        <link>http://www.beboybd.com</link>
        <description>Beboy - best condom in Bangladesh </description>
        <atom:link type="application/rss+xml" rel="self" href="http://www.beboybd.com/rss.xml"/>
        <language>en </language>
        <pubDate>{{ now()->toRssString() }}</pubDate>

        <item>
            <title>Pocket Condom</title>
            <link>http://www.beboybd.com/beboy-climax-delay-super-dotted-rose-flavour-pocket-pack-02-pcs</link>
            <guid isPermaLink="false">http://www.beboybd.com/beboy-climax-delay-super-dotted-rose-flavour-pocket-pack-02-pcs</guid>
            <description>Beboy - Best pocket condom in Bangladesh</description>
        </item>

        <item>
            <title>customerLogin</title>
            <link>http://www.beboybd.com/customerLogin</link>
            <guid isPermaLink="false">http://www.beboybd.com/customerLogin</guid>
            <description>BinaryLogic - customerLogin From</description>
        </item>
        
        
        
        <item>
            <title>customerRegister</title>
            <link>http://www.beboybd.com/customerRegister</link>
            <guid isPermaLink="false">http://www.beboybd.com/customerRegister</guid>
            <description>BinaryLogic - customerRegister From</description>
        </item>
        
        
        
        <item>
            <title>CartPage</title>
            <link>http://www.beboybd.com/cart</link>
            <guid isPermaLink="false">http://www.beboybd.com/cart</guid>
            <description>BinaryLogic - Cart Page</description>
        </item>   
        
        

        @foreach($categories as $category)
            <item>
                <title>{{ $category->name }}</title>
                <link>http://www.beboybd.com/{{ $category->slug }}</link>
                <description>{{$category->meta_des}}</description>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $category->slug }}</guid>
                <pubDate>{{ $category->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach


        @foreach($brands as $brand)
            <item>
                <title>{{ $brand->name }}</title>
                <link>http://www.beboybd.com/{{ $brand->slug }}</link>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $brand->slug }}</guid>
                <pubDate>{{ $brand->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach

        @foreach($banners as $banner)
            <item>
                <title>{{ $banner->title }}</title>
                <link>http://www.beboybd.com/{{ $banner->slug }}</link>
                <description>{{$banner->description}}</description>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $banner->slug }}</guid>
                <pubDate>{{ $banner->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach

        @foreach($posts as $post)
            <item>
                <title>{{ $post->title }}</title>
                <link>http://www.beboybd.com/{{ $post->slug }}</link>
                <description>{{$post->meta_description}}</description>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $post->slug }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach


        @foreach($components as $component)
            <item>
                <title>{{ $component->name }}</title>
                <link>http://www.beboybd.com/{{ $component->slug }}</link>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $component->slug }}</guid>
                <pubDate>{{ $component->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach


        @foreach($products as $product)
            <item>
                <title>{{ $product->name }}</title>
                <link>http://www.beboybd.com/{{ $product->slug }}</link>
                <description>{{$product->meta_des}}</description>
                <guid isPermaLink="false">http://www.beboybd.com/{{ $product->slug }}</guid>
                <pubDate>{{ $product->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach

    </channel>
</rss>