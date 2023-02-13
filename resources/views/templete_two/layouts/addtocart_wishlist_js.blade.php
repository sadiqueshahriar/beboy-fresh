<script>
    $(document).ready(function() {
        $(document).on('click', '.AddToWishlist', function(e) {

            e.preventDefault();
            var $this = $(this);
            var id = $(this).data('id');

            if (id) {
                $.ajax({
                    url: "{{ url('/add-to-wistlist-ajax/') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    beforeSend: function() {

                    },
                    success: function(data) {
                        console.log(data);
                        if (data.status == 'success') {

                            triggerAlert(data.Message, 'success')

                            $('.wishlist_quantity').text(data.totalItems);


                        } else {

                            triggerAlert(data.Message, 'error')


                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            }
        })

        $(document).on('click', '.AddToCart', function(e) {
            e.preventDefault();
            var $this = $(this);
            var id = $(this).data('id');

            var qty = $('.qty').val();
            if (qty) {
                qty = $('.qty').val();
            } else {
                qty = 1;
            }

            console.log(qty)

            if (id) {
                $.ajax({
                    url: "{{ url('/add-to-cart-ajax/') }}/" + id + '/' + qty,
                    type: "GET",
                    dataType: "json",
                    beforeSend: function() {

                    },
                    success: function(data) {
                        console.log(data);

                        if (data.status == 'success') {
                            // $('.cart_quantity').text(data.totalItems);
                            $('.cart_components').html(data.responseText);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        $('#modal_box').modal('hide');
                        $('.cart_components').html(error.responseText);
                        triggerAlert('Product added to cart!', 'success')
                    }
                })
            }
        })

        $(document).on('click', '.quickView', function(e) {

            e.preventDefault();
            var $this = $(this);
            var id = $(this).data('id');

            if (id) {
                $.ajax({
                    url: "{{ url('/quick-view-ajax/') }}/" + id,
                    type: "GET",
                    dataType: "json",
                    beforeSend: function() {

                    },
                    success: function(data) {

                    },
                    error: function(error) {
                        console.log(error)
                        $('.quick-view').html(error.responseText);



                    }
                })
            }
        })
    })
</script>
