<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}


$attr_lbl = [];
foreach ($product->get_variation_attributes() as $taxonomy => $term_names ) {
	$attr_lbl[] = wc_attribute_label($taxonomy);
}

// echo "<pre>"; print_r($attr_lbl); echo "</pre>";

$product_id = $product->get_id();
 
$handle = new WC_Product_Variable($product_id);
$variations = $handle->get_children();

$options = array();
$cart_url = home_url();
$product_url = get_permalink( $product_id );
$qty_layout = '';
foreach ($variations as $value) {
	$single_variation = new WC_Product_Variation($value);
	if( $single_variation->variation_is_visible() ):

		$variant_id = $single_variation->get_id();

		// Variation Thumbnail
		$thumbnail = "<figure class='item'><img class='pvtfw_variant_table_img_size' src='".wp_get_attachment_url( $single_variation->get_image_id() )."' /></figure>";

		$options['image_link'][] = apply_filters('pvtfw_table_thumbnail', wp_kses_post( $thumbnail ), $single_variation);
		$options['sku'][] = apply_filters('pvtfw_table_sku', esc_attr( $single_variation->get_sku() ), $single_variation);
		$options['variation_description'][] = apply_filters('pvtfw_table_variation_description', wp_kses_post( $single_variation->get_description() ), $single_variation);
		$options['attributes'][] = apply_filters('pvtfw_table_attributes', $single_variation->get_variation_attributes(false) , $single_variation);
		$options['dimensions_html'][] = apply_filters('pvtfw_table_dimensions_html', wc_format_dimensions($single_variation->get_dimensions(false)), $single_variation);
		$options['weight_html'][] = apply_filters('pvtfw_table_weight_html', wc_format_weight($single_variation->get_weight(false)), $single_variation);
		$options['availability_html'][] = apply_filters('pvtfw_table_availability_html', wc_get_stock_html( $single_variation ), $single_variation);
		// Applying filter for price

		// Keeping this part for backward compatibility
		if($single_variation->is_on_sale()):
			$price_html = wc_price($single_variation->get_sale_price())." <del>". wc_price($single_variation->get_regular_price())."</del>"."<input type='hidden' name='hidden_price' class='hidden_price' value='".$single_variation->get_sale_price()."'>";
		else:
			$price_html = wc_price($single_variation->get_regular_price())."<input type='hidden' name='hidden_price' class='hidden_price' value='".$single_variation->get_regular_price()."'>";
		endif;

		$options['price_html'][] = apply_filters('pvtfw_price_html', $price_html, $single_variation);
		
		$defaults = array(
			'input_id'     => uniqid( 'quantity_' ),
			'input_name'   => 'quantity',
			'input_value'  => '1',
			'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text' ), $single_variation ),
			'max_value'    => apply_filters( 'woocommerce_quantity_input_max', -1, $single_variation ),
			'min_value'    => apply_filters( 'woocommerce_quantity_input_min', 0, $single_variation ),
			'step'         => apply_filters( 'woocommerce_quantity_input_step', 1, $single_variation ),
			'pattern'      => apply_filters( 'woocommerce_quantity_input_pattern', has_filter( 'woocommerce_stock_amount', 'intval' ) ? '[0-9]*' : '' ),
			'inputmode'    => apply_filters( 'woocommerce_quantity_input_inputmode', has_filter( 'woocommerce_stock_amount', 'intval' ) ? 'numeric' : '' ),
			'product_name' => $single_variation ? $single_variation->get_title() : '',
			'placeholder'  => apply_filters( 'woocommerce_quantity_input_placeholder', '', $single_variation ),
			// When autocomplete is enabled in firefox, it will overwrite actual value with what user entered last. So we default to off.
			// See @link https://github.com/woocommerce/woocommerce/issues/30733.
			'autocomplete' => apply_filters( 'woocommerce_quantity_input_autocomplete', 'off', $single_variation ),
			'readonly'     => false,
		);
		$qtyargs = array(
			'min_value'    => apply_filters( 'pvtfw_qtyargs_min_value', $single_variation->get_min_purchase_quantity(), $single_variation ),
			'max_value'    => apply_filters( 'pvtfw_qtyargs_max_value', $single_variation->get_max_purchase_quantity(), $single_variation ),
			'input_value'  => apply_filters( 'pvtfw_qtyargs_input_value', $single_variation->get_min_purchase_quantity(), $single_variation ),
			'input_id'     => $variant_id,
			'price'        => $single_variation->get_price(), // Custom parameter for hidden price display
			'availability' => '', 	// $single_variation->get_avaialable_variations()['variation_availability'], // Custom parameter for hidden availability,
			'layout'       => $qty_layout
		);
		$options_qty_layout = wp_parse_args( $qtyargs, $defaults );

		/**
		 *
		 * @note: woocommerce_quantity_input_args changed to pvt_woocommerce_quantity_input_args
		 * 
		 * $options['quantity'] called outside of the condition and replaced with $options_qty_layout
		 * 
		 * @since version 1.4.13 
		 * 
		 **/
		$options['quantity'][] = apply_filters( 'pvt_woocommerce_quantity_input_args', $options_qty_layout, $qty_layout, $single_variation );
		/**
		 *
		 * @note: Passed data as array to work with them later
		 * 
		 * 
		 * @since version 1.6.0 
		 * 
		 **/
		$options['action'][] = array(
			'product_id' 	=> $product_id, 
			'cart_url'		=> $cart_url, 
			'product_url'	=> $product_url, 
			'variant_id'	=> $variant_id, 
			'stock_status'	=> $single_variation->is_in_stock(),
			'text'			=> 'texxt here'
		); 
		//echo "<pre>";		print_r($options);		echo "</pre>";

	endif;

}

?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row">
		<div class="col-md-5">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>
		<div class="col-md-7">
			<div class="product-details"> 
			<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div>
		</div>
	</div>
</div>




 
		
<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );
?>
		 
	 
 

<div class="container"> 
	<div class="upsale">
		<?php 
			do_action( 'woocommerce_upsale_product' );
		?>
	</div>
</div>
<div class="container"> 
	<div>
		<?php 
			/**
			 * Hook:
			 * @hooked woocommerce_output_related_products - 20
			 */
			//do_action( 'woocommerce_related_product' );
		?>
	</div>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>
