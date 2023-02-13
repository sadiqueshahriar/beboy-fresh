
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// 	loadMobileMenu();
// console.log(window.location.pathname)
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
		if(window.location.pathname == "/proj/"){
			myCatall();
			ads();
			hotDealProduct();
			featuredProduct();
			newArrival();
			//loadWebMenu();
			loadBrand();
		}
	}else{
		if(window.location.pathname === '/'){
// 			myCatall();
// 			ads();
// 			hotDealProduct();
// 			featuredProduct();
// 			newArrival();
			//loadWebMenu();
// 			loadBrand();
		}
	}

	
	function getAppPath(){
		// console.log(window.location.href)
		var appPath = "http://www.beboybd.com/"
		if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
			var appPath = "http://localhost/proj/"
		}
		return appPath;
	}
	
	// console.log(appPath)
	function myCatall(){
	    //console.log('Its going ajax call: 1-hcat');
		var appPath = getAppPath();
	    var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "apps/hcat",
	        success: function(data) { 
	            //console.log('Data inserted');
	            $("#h-cats-1").html(data);
	        }
	    });
	}

	function ads(){
	    //console.log('Its going ajax call: 1-hslidebox');
	    var appPath = getAppPath();
		var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "ads",
	        success: function(data) { 
	            $("#ads").html(data);
	        }
	    });
	}

	function hotDealProduct(){
	    //console.log('Its going ajax call: 1-hslidebox');
	    var appPath = getAppPath();
		var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "hotdeal_product",
	        success: function(data) { 
	            $("#hotdeal-product").html(data);
	        }
	    });
	}

	function featuredProduct(){
	    //console.log('Its going ajax call: 1-hslidebox');
	    var appPath = getAppPath();
		var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "feature_product",
	        success: function(data) { 
	            $("#feature-product").html(data);
	        }
	    });
	}

	function newArrival(){
	    //console.log('Its going ajax call: 1-hslidebox');
	    var appPath = getAppPath();
		var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "new_arrival",
	        success: function(data) { 
	            $("#new-arrival").html(data);
	        }
	    });
	}

	function loadMobileMenu(){
		var appPath = getAppPath();
	    var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "load_mobile_menu",
	        success: function(data) { 
	            $("#loadMobileMenu").html(data);
	        }
	    });
	}


	function loadWebMenu(){
		var appPath = getAppPath();
	    var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "load_web_menu",
	        success: function(data) { 
	            $("#loadWebMenu").html(data);
	        }
	    });
	}

	function loadBrand(){
		var appPath = getAppPath();
	    var txt = "";
	    var x;
	    var i;
	    $.ajax({ 
	        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	        type: "POST", 
	        url: appPath + "load_brand",
	        success: function(data) { 
	            $("#loadBrand").html(data);
	        }
	    });
	}


    function ProductSearch(element){

      var token =  $("input[name=_token]").val();

      var datastr = "product_name=" + element.value + "&token=" + token; 

        if (element.value != '') { 

            $.ajax({
            	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                type: "POST",

                url: '<?php echo route('product-search')?>',

                data: datastr,

                beforeSend: () => {

                    preloader_image = '<div class="d-flex align-items-center justify-content-center"><img src="{{asset("public/frontend/img/ajax-loader.svg")}}" alt="" style="max-width: 10rem"></div>';

                    $('#show-preloader').show();

                    $('#show-preloader').html(preloader_image);

                },



                success: function( msg ) {

                    $(".ShowProduct").show();

                    $('.ShowProduct').html(msg);

                }

            });

        }else {

            $('.ShowProduct').hide();

        }

    }



    $(document).ready(function(){

        $('.DeleteItem').on('click', function(e){

            e.preventDefault();

            var rowId = $(this).data('id');

            console.log(rowId);

            var thisDeleteArea = $(this);



            if (rowId) {

                $.ajax({

                    url: "{{url('/remove-cart/')}}/"+rowId,

                    type: "DELETE",

                    dataType: "json",

                    success:function(data){

                        alert(rowId);

                    },

                    error:function(error){

                        console.log(error);



                        thisDeleteArea.closest('.cartItem').remove();



                        window.location.reload();

                        // $('#totalAjaxCall').load(location.href +' .totalPricingLoad');



                        //toast

                        alertify.set('notifier','position', 'top-right');

                        alertify.error('Successfully Deleted !!');

                    }

                })

            }

        })

    })

    var token = $("input[name=_token]").val();

    function ViewOrderDetails(id) {

        var datastr = "id=" + id + "&token=" + token;

        $.ajax({

            type: "POST",

            url: "<?php echo route('view-order-details'); ?>",

            data: datastr,

            cache: false,

            success: function(data) {

                $('#view-model').html(data);

            },

            error: function(jqXHR, status, err) {

//                    alert(status);

                console.log(err);

            },

            complete: function() {

                // alert("Complete");

            }

        });

    }



    $(".remove-from-session").click(function (e) {

        e.preventDefault();

        var ele = $(this);

            $.ajax({

                url: '{{ url('remove-from-session') }}',

                method: "POST",

                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},

                success: function (response) {

                    window.location.reload();

                }

            });

    });
    

</script>

