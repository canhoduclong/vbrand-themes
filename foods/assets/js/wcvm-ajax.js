jQuery(document).ready(function ($) {
    $('.single_add_to_cart_button').on('click', function (e) {
        e.preventDefault();

        var product_id = $('#wcvm-product-id').val();
        var attributes = {};

        // Collect selected attributes
        $('.wcvm-attribute input:checked').each(function () {
            var name = $(this).attr('name');
            var value = $(this).val();

            if (!attributes[name]) {
                attributes[name] = [];
            }
            attributes[name].push(value);
        });
        
        // Perform AJAX request
        $.ajax({
            url: wcvm_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'wcvm_add_to_cart',
                product_id: product_id,
                attributes: attributes,
                nonce: wcvm_ajax.nonce,
            },
            success: function (response) {
                if (response.success) {
                    // Update cart fragments
                    $.each(response.fragments, function (key, value) {
                        $(key).replaceWith(value);
                    });
                } else {
                    alert(response.data.message);
                }
            },
            error: function () {
                alert('Failed to add product to cart.');
            },
        });
    });
});
