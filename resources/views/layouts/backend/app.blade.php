<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BinaryLogic | Dashboard </title>

  <meta name="csrf-token" content="{{ csrf_token() }}"> 



  @yield('head')

  

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->

  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Theme style -->

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/backend/plugins/summernote/summernote-bs4.css')}}">

  <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{asset('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

  <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" /> -->
  <link href="{{asset('public/backend/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<!-- include tinymce -->

  <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>tinymce.init({selector:'textarea'});</script> -->

    <!-- end include tinymce -->

    <link rel="stylesheet" href="{{asset('public/backend/trumbowyg/dist/ui/trumbowyg.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/backend/trumbowyg/dist/plugins/table/ui/trumbowyg.table.min.css')}}">

<style>

.bg-binary-deep{background: #0101c1}

</style>



</head>

<body class="hold-transition sidebar-mini layout-fixed">





<div class="wrapper">





@include('layouts.backend.header')



@include('layouts.backend.sidebar')



@yield('content')



@include('layouts.backend.footer')



</div>



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>



<!-- Bootstrap -->

<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('public/frontend/js/jquery.nice-number.min.js')}}"></script>

<!-- overlayScrollbars -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>



<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->

<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>



<!-- PAGE PLUGINS -->

<!-- jQuery Mapael -->

<script src="{{asset('public/backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>

<script src="{{asset('public/backend/plugins/raphael/raphael.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- ChartJS -->

<script src="{{asset('public/backend/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>



<!-- AdminLTE for demo purposes -->

<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{asset('public/backend/dist/js/pages/dashboard2.js')}}"></script>







<script src="{{asset('public/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>



<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<!-- ck editor remove -->

 <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script> 



 <script data-src="{{asset('public/ckeditor/ckeditor.js')}}"></script>





<!--<script src="{{asset('public/backend/charCounter.min.js')}}"></script>-->

<script src="{{asset('public/backend/jquery.charCountPlugin.js')}}"></script>



<!--<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>-->



<!--<script src="{{asset('public/backend/trumbowyg/dist/trumbowyg.min.js')}}"></script>-->

<!--<script src="{{asset('public/backend/trumbowyg/dist/plugins/table/trumbowyg.table.min.js')}}"></script>-->

<!--<script src="{{asset('public/backend/trumbowyg/dist/plugins/allowtagsfrompaste/trumbowyg.allowtagsfrompaste.min.js')}}"></script>-->

<!--<script src="{{asset('public/backend/trumbowyg/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js')}}"></script>-->






@include('layouts.backend.js_script')



    <script>

        $('.nice-number').niceNumber({

            autoSize: true,

        });



        const productThumbSlides = new Swiper('.product-thumb-slider', {

            slidesPerView: 3,

            spaceBetween: 5,

            observer: true,

            observeParents: true,

        });



        let emi_arr = [];



        $('.product-preview-button').click(function() {

            // get all data ========================================================

            const productName = $('.product-details-form .product-name').val().trim()

            const productBrand = $('.product-details-form .product-brand :selected').toArray().map(item => item.text);



            const productCategory = $('.product-details-form .product-category :selected').text().trim()

            const productSubCategory = $('.product-details-form .product-sub-category :selected').text().trim()

            const productProSubcategory = $('.product-details-form [name=pro_sub_category_id] :selected').text().trim();

            const productProProSubcategory = $('.product-details-form [name=pro_pro_category_id] :selected').text().trim();



            const productStockStatuses = $('.product-details-form [name^=stock_status] :selected').toArray().map(item => item.text)



            const productCallForPrice = $('.product-details-form [name="call_for_price"]').val().trim()

            const productRegularPrice = $('.product-details-form [name="regular_price"]').val().trim()

            const productSpecialPrice = $('.product-details-form [name="special_price"]').val().trim()

            const productDiscountPrice = $('.product-details-form [name="discount_price"]').val().trim()



            const productWarranty = $('.product-details-form [name="warranty"]').val().trim()

            const productFeatureImage = $('.product-details-form .feature-image')



            // get product emi

            const emi_item_arr = $('.emi_rows tr');



            $.each(emi_item_arr, (index, item) => {

                const emi_month = $(item).find('input[name^=emi_month]').val();

                const emi_price = $(item).find('input[name^=emi_price]').val();

                if (emi_month && emi_price) {

                    const emi_item = {

                        emi_month,

                        emi_price

                    };

                    emi_arr.push(emi_item);

                }

            });

            

            const productHighLightRows = $('.product-highLightes input[name^=highlights]');

            const productHighLights = [];

            

            $.each(productHighLightRows, (index, highLight) => {

                if ($(highLight).val()) {

                    productHighLights.push($(highLight).val().trim())

                }

            })



            // get feature image ========================================================

            const file = $('.product-details-form .feature-image')[0].files[0];



            if (file) {

                let reader = new FileReader();

                reader.onload = function(event) {

                    $('.product-preview .feature-image').attr('src', event.target.result);

                }

                reader.readAsDataURL(file);

            };



            // get product images 

            const productImagesTableBody = $('.product-images');

            const productImageInputs = $('.product-images').find('input[type=file]')



            $.each(productImageInputs, (index, input) => {

                let reader = new FileReader()



                reader.onload = function(event) {

                    productThumbSlides.appendSlide(`

                        <div class="swiper-slide">

                            <img src="${event.target.result}" alt="" class="border">

                        </div>

                    `);

                    productThumbSlides.init()

                }



                const file = input.files[0]

                if (file) {

                    reader.readAsDataURL(file)

                }

            });



            // set product data ========================================================

            $('.product-preview .product-name').text(productName)



            $('.product-stock-statuses').empty();

            productStockStatuses.forEach((item, index, statuses) => {

                let stockStatus = ''

                

                if (item === 'In Stock') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 px-4 bg-success text-light rounded mt-2 d-inline-block">In Stock</p>'

                }

                if (item === 'Out Of Stock') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 px-4 bg-danger text-light rounded mt-2 d-inline-block">Out Of Stock</p>'

                }

                if (item === 'New Arrived/ Latest') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 px-4 bg-info text-light rounded mt-2 d-inline-block">New Arrived</p>'

                }

                if (item === 'Limited Stock') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 text-warning px-4 bg-warning text-light rounded mt-2 d-inline-block">Limited Stock</p>'

                }

                if (item === 'Preorder Now') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 px-4 bg-secondary text-light rounded mt-2 d-inline-block">PreOrder Now</p>'

                }

                if (item === 'Upcoming') {

                    stockStatus += '<p class="mb-0 fz-extra-small lh-1 px-4 bg-info text-light rounded mt-2 d-inline-block">Upcoming</p>'

                }

                if (index !== statuses.length -1) {

                    stockStatus += '<br />'

                }



                $('.product-stock-statuses').append(stockStatus)

            });



            if (productCallForPrice) {

                $('.product-preview .call-for-price .call-for-price-text').text(productCallForPrice)

                $('.product-preview .call-for-price').show();

            } else {

                $('.product-preview .call-for-price').hide();

            }



            if (productRegularPrice && !productCallForPrice) {

                $('.product-preview .regular-price').show();

                $('.product-preview .regular-price .number').text(productRegularPrice)

            } else {

                $('.product-preview .regular-price').hide();

            }



            if (productSpecialPrice && !productCallForPrice) {

                $('.product-preview .spacial-price').show();

                $('.product-preview .spacial-price .number').text(productSpecialPrice)

            } else {

                $('.product-preview .spacial-price').hide();

            }



            if (productWarranty) {

                $('.product-preview .warranty').show();

                $('.product-preview .warranty .number').text(productWarranty)

            } else {

                $('.product-preview .warranty').hide();

            }



            $('.brand span').empty();

            productBrand.forEach((brand, index, brands) => {

                if (index === brands.length - 1) {

                    $('.brand span').append(`${brand}`)

                } else {

                    $('.brand span').append(`${brand}, &nbsp;`)

                }

            });



            if (productCategory !== '----Select Category----') {

                $('.categories .category').show()

                $('.categories .category').html(productCategory)

            } else {

                $('.categories .category').hide();

            }



            if (productSubCategory !== '----Select Sub Category----') {

                $('.categories .sub-category').show()

                $('.categories .sub-category').html('-> &nbsp;' + productSubCategory)

            } else {

                $('.categories .sub-category').hide();

            }



            if (productProSubcategory !== '----Select Pro Sub Category----') {

                $('.categories .pro-sub-category').show()

                $('.categories .pro-sub-category').html('-> &nbsp;' + productProSubcategory)

            } else {

                $('.categories .pro-sub-category').hide();

            }



            if (productProProSubcategory !== '----Select Pro Pro Category----') {

                $('.categories .pro-pro-sub-category').show();

                $('.categories .pro-pro-sub-category').html('-> &nbsp;' + productProProSubcategory);

            } else {

                $('.categories .pro-pro-sub-category').hide();

            }



            if (emi_arr.length > 0) {

                $('.product-preview .monthlyEMI').show()

                $('.product-preview .monthlyEMI ul').empty();

                $.each(emi_arr, (index, item) => {

                    $('.product-preview .monthlyEMI ul').append(`<li>${item.emi_month} Months EMI - ${item.emi_price} Taka</li>`)



                })

            } else {

                $('.product-preview .monthlyEMI').hide()

            }

            

            if (productHighLights.length > 0) {

                $('.product-preview .product-highlight').show()

                $('.product-preview .product-highlight ul').empty();



                $.each(productHighLights, (index, item) => {

                    $('.product-preview .product-highlight ul').append(`<li>${item}</li>`);

                })

            } else {

                $('.product-preview .product-highlight').hide()

            }



            // show popup ================

            $('.product-preview').fadeIn(200);

            setTimeout(function() {

                $('.product-preview__inner').fadeIn(200);

            }, 500);

        });



        $('.close-product-preview, .overlay').click(function() {

            $('.product-preview').fadeOut(200);

            productThumbSlides.removeAllSlides();

            emi_arr = []

        })

    </script>



    <script type="text/javascript" src="{{asset('public/js/tinymce.min.js')}}"></script>

    <script>

    tinymce.init({

        selector: 'textarea.binaryTinyMCE',

        height: 500,

        menubar: false,

        plugins: [

            'advlist autolink lists link image charmap print preview anchor',

            'searchreplace visualblocks code fullscreen',

            'insertdatetime media table paste code help wordcount'

        ],

        toolbar: 'link ' + 'undo redo | formatselect | ' +

        'bold italic backcolor | alignleft aligncenter ' +

        'alignright alignjustify | bullist numlist outdent indent | ' +

        'removeformat | help',

        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

    });

    </script>



</body>

</html>