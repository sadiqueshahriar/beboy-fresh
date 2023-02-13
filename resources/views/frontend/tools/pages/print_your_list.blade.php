<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

    <style type="text/css">
        *,body{margin:0}.wrapper,img{max-width:100%}*{padding:0}img{height:auto}.wrapper{width:794px;margin:0 auto}.top-area{display:flex;justify-content:center;align-items:center;margin:20px 0; background-color: #096b62; color: #fff}.logo{margin-right:20px}.company-info h1{color:#fff}.address{border-top:2px solid #fff;margin-top:4px;line-height:24px}table{width:100%;max-width:99%;border-collapse:collapse}table>tbody>tr>td{padding:12px;border-right:1px solid #333}table>tbody>tr>td:last-child{border:0}.component-info{background:#096b62;color:#fff;border:1px solid #096b62}tr.details{border:1px solid #333}.total-amount .amount-label{text-align:right}
    </style>

</head>
<body>
	

<?php
	$user_id = Session::get('user_id');
	$SiteSetting = App\Models\SiteSetting::where('status', 1)->first();
?>


<div class="wrapper">
    <div class="top-area">
        <div class="logo"><a href="{{URL('/')}}"><img src="{{asset($SiteSetting->image)}}" alt="{{$SiteSetting->name}}"></a></div>
        <div class="company-info">
            <h1>{{$SiteSetting->name}}</h1>
            <div class="address">
                <p>{{$SiteSetting->address}}</p>
                <p><strong>Phone: </strong>{{$SiteSetting->phone}}, <strong>Email:</strong>{{$SiteSetting->email}}</p>
                <p class="web">{{URL('/')}}/tools/pc_builder</p>
            </div>
        </div>
    </div>

    <div class="all-printed-component">
        <table>
            <tr class="component-info">
                <td class="component-name"><b>Component</b></td>
                <td class="product-name"><b>Product Name</b></td>
                <td class="price"><b>Price</b></td>
            </tr>

            @php $total=0; @endphp
            
            @foreach($product_id as $key => $value)
        	<?php
        		$product = DB::table('products')->where('id', $value)->first();
        		$component = App\Models\Component::join('products', 'components.id', '=', 'products.component_id')
        								->where('products.id', '=' , $product->id)
        								->select('products.id', 'components.name')
        								->first();
        	?>
            <tr class="details">
                <td class="component">{{$component->name ?? ''}}</td>
                <td class="name">{{$product->name ?? ''}}</td>
                <td class="price">                    
                	<div class="price">{{$product->special_price ?? ''}}৳</div>
                </td>
                <div style="display: none">{{$total += $product->special_price}}</div>
            </tr>
            @endforeach



            <tr class="details total-amount">
                <td colspan="2" class="amount-label"><b>Total:</b></td>
                <td class="amount">{{$total ?? ''}}৳</td>
        	</tr>
        </table>
    </div>
</div>

<script>
    window.print()
</script>

</body>
</html>