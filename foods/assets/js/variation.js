// Main Js File
 
$(document).ready(function () {
    'use strict';
   
    var variants = [];

    $.ajax({
        type: "post",
        dataType: "json",
        url: "/wp-admin/admin-ajax.php", //this is wordpress ajax file which is already avaiable in wordpress
        data: {
            action:'get_data', //this value is first parameter of add_action
            id: 4
        },
        success: function(msg){
            console.log(msg);
        }
    });


    //-----
    get_variantions();
    
    function get_variantions(){
        var url_get_variations = 'get_product_variations';
        // Perform AJAX request
        let productId = $('#product_id').val();
        //let pid = document.getElementById('product_id').value;
         
        $.ajax({
            url: url_get_variations,
            type: 'POST',
            data: {
                action: 'bbrand_get_variations',
                product_id: productId
            },
            beforeSend: function () {
                $("#result").html("Loading...");
            },
            success: function (response) {
                if (response.success) {
                    let variants = response.data;
                    let html = "<h3>Product Variants:</h3><ul>";
                    variants.forEach(variant => {
                        let attrText = Object.entries(variant.attributes)
                            .map(([key, value]) => `${key}: ${value}`)
                            .join(", ");

                        html += `
                            <li>
                                <strong>Attributes:</strong> ${attrText} <br>
                                <strong>Price:</strong> ${variant.price} <br>
                                <strong>Stock:</strong> ${variant.stock_status} <br>
                                <img src="${variant.image}" alt="Variant Image" width="80">
                            </li>
                        `;
                    });
                    html += "</ul>";
                    console.log(html);
                    //$("#result").html(html);
                } else {
                    $("#result").html(`<p>${response.data.message}</p>`);
                }
            },
            error: function () {
                $("#result").html("<p>Something went wrong!</p>");
            },
        });
    }
    
       
   
});
