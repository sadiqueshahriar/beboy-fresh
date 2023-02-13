
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	
// console.log(window.location.pathname)
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
		if(window.location.pathname == "/bboy-ecommerce/"){
	
		}
	}else{
		if(window.location.pathname === '/'){
			
		}
	}

	
	function getAppPath(){
		// console.log(window.location.href)
		var appPath = "http://www.beboybd.com/"
		if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
			var appPath = "http://localhost/bboy-ecommerce"
		}
		return appPath;
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

