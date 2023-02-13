@if(!empty($sliderboximages))    
<div class="row g-4 bg-white">
@foreach($sliderboximages as $image)
    <?php 
    $img_arr = explode('/',$image->img);
    $img_arr_t = $img_arr[0].'/'.$img_arr[1].'/t/'.$img_arr[2];
    $img_arr_s = $img_arr[0].'/'.$img_arr[1].'/s/'.$img_arr[2];
    $img_arr_m = $img_arr[0].'/'.$img_arr[1].'/m/'.$img_arr[2];
    $img_arr_l = $img_arr[0].'/'.$img_arr[1].'/l/'.$img_arr[2];
    ?>
    <div class="col-6">
        <a href="{{asset($image->url)}}" class="w-100">
            <picture>
                <source srcset="{{asset($img_arr_t)}}" media="(max-width: 480px)">
                <source srcset="{{asset($img_arr_t)}}" media="(max-width: 768px)">
                <source srcset="{{asset($img_arr_t)}}" media="(max-width: 1024px)">
                <source srcset="{{asset($img_arr_t)}}" media="(max-width: 1200px)">
                <img src="{{asset($img_arr_t)}}" alt="{{asset($image->title)}}" />
            </picture>
        </a>
    </div>
    @endforeach
    <!-- /.col 6 -->
</div>
@endif