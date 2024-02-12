<!-- Plugins JS -->
<script src="assets/website/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/website/js/main.js"></script>

<script>
    $(document).ready(function(){
        $('.add-wishlist').click(function(){
            var productId = $(this).attr('data'); // Your product ID
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: 'POST',
                url: '/add-to-cache',
                data: {
                    product_id: productId,
                    _token: token // Include the CSRF token
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire(response['message']);

                },
                error: function(xhr, status, error) {
                    console.error('Error adding product to cache');
                    Swal.fire("პროდუქტი ვერ დაემატა სურვილების სიას");

                }
            });
        });
    });
</script>