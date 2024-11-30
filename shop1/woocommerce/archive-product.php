<?php 
    get_header('shop');
	
?> 
<div class="page-header text-center" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/page-header-bg.jpg')">
    <div class="container">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="page-title"><?php woocommerce_page_title(); ?><span>Shop</span></h1>
	    <?php endif; ?> 
    </div>
</div>

 
<?php


	do_action('woocommerce_custom_breadcrumb');
 

	do_action('woocommerce_custom_content_wrapper'); 

	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action( 'woocommerce_before_main_content' ); 
	
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );

	
	//$tax_query = array( 'relation' => 'AND' ); 
	$tax_query = array('relation' => 'OR');
	$meta_query = array('relation' => 'OR');
	 
	if(isset($_GET['filter_pa_size']) && !empty($_GET['filter_pa_size'])){             
		$size = sanitize_text_field($_GET['filter_pa_size']);
		$size_values = explode(',', $size); 

		/*
		foreach ($size_values as $single_size) {
			$tax_query[] = array(
				'taxonomy' => 'pa_size', // Replace with the correct taxonomy for size
				'field'    => 'name',   // You can use 'slug' or 'term_id' depending on your needs
				'terms'    => sanitize_text_field($single_size),
				'operator' => 'LIKE'
			);
		}
		*/

		if (!empty($size)) {
			// Check product variations for color by inspecting `_product_attributes` meta
			foreach ($size_values as $single_size) {
				$meta_query[] = array(
					'key'     => '_product_attributes', // Meta key for variation attributes
					'value'   =>  $single_size,          // The color term we want to match (e.g., 'yellow')
					'compare' => 'LIKE',                // Use LIKE for matching serialized data in variations
				);
			}
		}

	} 
	
 
	// Filter by color (if provided in the URL)
    if (isset($_GET['filter_pa_color']) && !empty($_GET['filter_pa_color'])) {
        $color = sanitize_text_field($_GET['filter_pa_color']);
        $color_values = explode(',', $color);  // Split the color filter into an array of colors

		/*
        // Build tax_query for color filtering
        foreach ($color_values as $single_color) {
            $tax_query[] = array(
                'taxonomy' => 'pa_color',  // The product attribute taxonomy for color
                'field'    => 'slug',      // Use 'slug' to match the terms
                'terms'    => sanitize_text_field($single_color),
                'operator' => 'like'         // Match products with any of these colors
            );
        }
		*/
		// Add a meta_query for variations if color is passed in the URL
		if (!empty($color_values)) {
			// Check product variations for color by inspecting `_product_attributes` meta
			foreach ($color_values as $single_color) {
				$meta_query[] = array(
					'key'     => '_product_attributes', // Meta key for variation attributes
					'value'   => $single_color,                // The color term we want to match (e.g., 'yellow')
					'compare' => 'LIKE',                // Use LIKE for matching serialized data in variations
				);
			}
		}

    }




	// WP_Query arguments
	$args = array(
		'post_type'     => array('product', 'product_variation'),  // Query both products and variations
		'posts_per_page'=> -1,  // Get all matching products (no pagination)
		'post_status'   => 'publish',  // Only published products
		'tax_query' 	=> !empty($tax_query) ? $tax_query : '', // Apply the tax_query for size and color filtering
		'meta_query'     => $meta_query, 
	);

	//echo "<pre>";	print_r( $args); 	echo "</pre>";

	$query = new WP_Query( $args ); 

	if ($query->have_posts()) {
		 
		
		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );

		woocommerce_product_loop_start();
 
		if ( wc_get_loop_prop( 'total' ) ) {
			while ($query->have_posts()) {
				$query->the_post();   


				/*
				$product = wc_get_product(get_the_ID()); 
				$attributes = $product->get_attributes();  
				echo "<pre>"; 	print_r($attributes);  	echo "</pre>";
				 */
			 


				//the_post();
				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action( 'woocommerce_shop_loop' );
				 
				wc_get_template_part( 'content', 'product' );
				
			} 
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );

	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}

 	do_action('woocommerce_custom_end_content_wrapper');


	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	
	do_action( 'woocommerce_sidebar' );


	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );


 
?>


<?php 

get_footer( 'shop' );

?>

 