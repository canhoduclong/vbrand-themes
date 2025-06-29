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
 
	if ( have_posts()) { 
		
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
			while (have_posts()) {
				the_post();    
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