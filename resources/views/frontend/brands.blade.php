@extends('templete_two.layouts.app')


@section('head')

<title>Binary Brands</title>
<meta name="title" content="Binary Brands">
<meta name="description" content="Binary Brands">
<meta property="keywords" content="Binary Brands" />
<meta property="site_name" content="Binarylogic" />
<meta property="slug" content="https://binarylogic.com.bd/brands" />
<meta property="image" content="http://www.beboybd.com/images/site_image/Binarylogic_181.png">


<meta property="og:url"           content="https://binarylogic.com.bd/brands" />
<meta property="og:type"          content="brand" />
<meta property="og:title"         content="Binary Brands" />
<meta property="og:description"   content="Binary Brands" />
<meta property="og:keywords"   content="Binary Brands" />
<meta property="og:image" content="http://www.beboybd.com/images/site_image/Binarylogic_181.png">

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@BinaryLogic" />
<meta name="twitter:creator" content="@BinaryLogic" />
<meta property="twitter:url" content="http://www.beboybd.com/brands" />
<meta property="twitter:title" content="Binary Brands" />
<meta property="twitter:description" content="Binary Brands" />
<meta property="og:keywords"   content="Binary Brands" />
<meta property="twitter:image" content="http://www.beboybd.com/images/site_image/Binarylogic_181.png" />

<script type="application/ld+json">
    @php 
 
        $i=1; 
    
    @endphp
    
    {
    
      "@context": "http://schema.org/",
    
      "@type": "BreadcrumbList",
    
      "name" : "Binary Brands",
    
      "image" : "http://www.beboybd.com/images/site_image/Binarylogic_181.png",
    
      "description" : "Binary Brands",
    
      "url" : "{{ 'http://www.beboybd.com/brands'}}"
    

    
      ,"itemListElement": [
    
        @if(!empty($brands))
            {
    
                "@type": "ListItem",
    
                "position": {{ $i }},
    
                "name": "brands",
    
                "item": "http://www.beboybd.com/brands"
    
            }

            @if(!empty($brands) && sizeof($brands) > 0)

               ,

            @endif

        @endif
        @if(!empty($brands) && sizeof($brands) > 0)
            @foreach ($brands as $brand)
    
                @php
                    if($i<sizeof($brands))
                    {
                        $ext_comm = ",";
                   }
                 else {
                    $ext_comm = "";
                }
    
                @endphp
    
                {
    
                "@type": "ListItem",
                "position": {{ $i }},
                "name": "{{ $brand->name }}",
    
                "item": "http://www.beboybd.com/{{ $brand->slug }}"
    
                }{{$ext_comm}}
    
                @php
    
                    $i++;
    
                @endphp
    
            @endforeach
    
        @endif
    
       ]
    
    
    }
    </script>

@endsection


@section('content')
    <?php
        $user_id = Session::get('user_id');
        $user_name = Session::get('name');
        $user_type = Session::get('user_type');

        $Cart = Cart::content()->count();
    ?>

<style type="text/css">
	nav{
		text-align: center;
		font-size: 15px;
	}

</style>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row gx-5">
                   
                    <!-- end of col -->
                    <div class="col">
                    <h2 class="section-heading mb-5">
                    OUR BRANDS</h2>
					<div class="row mt-4">
                        @foreach($brands as $brand)
                        @if($brand->status == 1)
                        <div class="col-6 col-sm-4 col-md-3 mb-4">
                            <div class="brand">
                                <a href="{{$brand->slug}}"><img src="{{asset($brand->image)}}" alt="{{$brand->name}}"  class="" style="height:100px;width:100px"></a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="product-view">



    </div>
</div>


@endsection