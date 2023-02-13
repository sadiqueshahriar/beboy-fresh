<div class="bg-white">
                    
<div class="w3-content w3-display-container" style="">
@foreach($banners as $banner)
<?php
$img_arr = explode('/',$banner['image']);
$img_arr_t = $img_arr[0].'/'.$img_arr[1].'/t/'.$img_arr[2];
$img_arr_s = $img_arr[0].'/'.$img_arr[1].'/s/'.$img_arr[2];
$img_arr_m = $img_arr[0].'/'.$img_arr[1].'/m/'.$img_arr[2];
$img_arr_l = $img_arr[0].'/'.$img_arr[1].'/l/'.$img_arr[2];
?>
    <div class="mySlides">
        <a href="{{$banner['url']}}">
            <picture>
                <source srcset="{{asset($img_arr_s)}}" media="(max-width: 480px)">
                <source srcset="{{asset($img_arr_s)}}" media="(max-width: 768px)">
                <source srcset="{{asset($img_arr_m)}}" media="(max-width: 1024px)">
                <source srcset="{{asset($img_arr_m)}}" media="(max-width: 1200px)">
                <img src="{{asset($img_arr_l)}}" alt="{{asset($banner['title'])}}" class="banner-slider__image w-100"/>
            </picture>
        </a>
    </div>
@endforeach
  <div class="d-none text-center w3-display-bottommiddle">
    <div class="float-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="float-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
  </div>
  <div class="d-none demo"></div>
</div>
</div>
<style>
  .w3-display-container{width:100%;position:relative}
  .w3-hover-text-khaki {background: blue;padding: 15px 20px;color: #fff;font-size: 150%;}
  .w3-display-bottommiddle {position: absolute;left: 50%;top: 45%;transform: translate(-50%,0%);-ms-transform: translate(-50%,0%);width: 100%;}
  .float-left{float:left}
  .float-right{float:right}
  .w3-hover-text-khaki{background:blue;}
  .w3-hover-text-khaki:hover{background:red;}
</style>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block"; 
  setTimeout(plusDivs, 2000, slideIndex);
}
</script>