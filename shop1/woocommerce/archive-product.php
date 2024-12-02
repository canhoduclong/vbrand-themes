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

	 
	// $tax_query = array('relation' => 'OR');

	$meta_query = array('relation' => 'and');
	$meta_size 	= array();
	$meta_color = array();
	if(isset($_GET['filter_pa_size']) && !empty($_GET['filter_pa_size'])){             
		$size = sanitize_text_field($_GET['filter_pa_size']);
		$size_values = explode(',', $size);  
		if (!empty($size_values)) {
			/*
			foreach ($size_values as $single_size) {
				$tax_query[] = array(
					'taxonomy' => 'pa_size', // Replace with the correct taxonomy for size
					'field'    => 'slug',   // You can use 'slug' or 'term_id' depending on your needs
					'terms'    =>[$single_size],
					//'operator' => 'IN'
				);
			} 
			*/
			// Check product variations for color by inspecting `_product_attributes` meta
			$meta_size 	= array('relation' => 'OR'); 
			foreach ($size_values as $single_size) {
				$meta_size[] = array(
					'key'     => 'attribute_size', 	// Meta key for variation attributes
					'value'   => $single_size,         // The color term we want to match (e.g., 'yellow')
					'compare' => '=',                // Use LIKE for matching serialized data in variations
														//'type'    => 'NUMERIC',
				);
			}
		}

	} 
	
 
	// Filter by color (if provided in the URL)
    if (isset($_GET['filter_pa_color']) && !empty($_GET['filter_pa_color'])) {
        $color = sanitize_text_field($_GET['filter_pa_color']);
        $color_values = explode(',', $color);  // Split the color filter into an array of colors

		if (!empty($color_values)) {
			/*
			// Build tax_query for color filtering
			foreach ($color_values as $single_color) {
				$tax_query[] = array(
					'taxonomy' => 'pa_color',  // The product attribute taxonomy for color
					'field'    => 'slug',      // Use 'slug' to match the terms
					'terms'    => [$single_color],
					//'operator' => 'IN'         // Match products with any of these colors
				);
			}
			*/
			// Check product variations for color by inspecting `_product_attributes` meta
			$meta_color = array('relation' => 'OR');
			foreach ($color_values as $single_color) {
				$meta_color[] = array(
					'key'     => 'attribute_color', // Meta key for variation attributes
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
		//'tax_query' 	=> !empty($tax_query) ? $tax_query : '', // Apply the tax_query for size and color filtering
		'meta_query'     => array( 
			'relation' => 'and',
			array( 
				(!empty($meta_size) ?  $meta_size :''),
				(!empty($size_values) ?  $meta_color :''), 
			),
		),
		
	);



	/* search astributês
	** 
		$args = [
			'post_type'      => ['product'], // Bao gồm cả sản phẩm cha và biến thể
			'posts_per_page' => -1,
			'post_status'    => 'publish', 
			'meta_query'     => [ // Lọc sản phẩm biến thể bằng meta key
				'relation' => 'OR',
				[
					'key'     => 'attribute_size', // Meta key của thuộc tính size
					'value'   => 'S',                // Giá trị cần lọc
					'compare' => 'like',                // So sánh chính xác
				],
			], 
		];
	*/
	
	/* test searhc atributes
	** 	$args = [
		'post_type'      => ['product'], // Chỉ lấy sản phẩm cha
		'posts_per_page' => -1,        // Lấy tất cả sản phẩm
		//'post_status'    => 'publish', // Chỉ lấy sản phẩm đã xuất bản
		
		'meta_query'     => [

			'relation' => 'AND',
			[
				'key'     => '_product_attributes', // Key lưu các thuộc tính sản phẩm
				'value'   => 'color',               // Tên thuộc tính cần tìm (size)
				'compare' => 'LIKE',               // So sánh có chứa
			],
			
			[
				'key'     => 'attribute_size', // Meta key của thuộc tính size
				'value'   => 'T',                // Giá trị cần lọc
				'compare' => 'like',                // So sánh chính xác
			],
			

		],

		'tax_query'      => [
			[
				'taxonomy' => 'pa_size',  // Taxonomy for size
				'field'    => 'slug',     // Field to compare (slug is typically used)
				'terms'    => ['S', 'M', 'll'], // Filter by size values (S, M, L)
				'operator' => 'IN',        // Match any of the terms in the array
			],
		],
		 
	];
	*/

	/* show taxônmy
	* 	$taxonomy   = 'pa_size';
		//$label_name = get_taxonomy( $taxonomy )->labels->singular_name;
		$taxonomys = get_taxonomy( $taxonomy );
		echo "<pre>";print_r($taxonomys);echo "</pre>";
	*/

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

 