<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>
<div class="product-section">
	<div class="container">
		<div class="row">
			<div class="products mb-3">
				<?php
				$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

				if ( $heading ) :
				?>
					<h2><?php echo esc_html( $heading ); ?></h2>
				<?php endif; ?>
				
				<div class="row justify-content-center">
					<?php woocommerce_product_loop_start(); ?>
						<?php foreach ( $related_products as $related_product ) : ?>
							<div class="col-6 col-md-4 col-lg-4 col-xl-3">
								<div class="product product-7 text-center">
								<?php
								$post_object = get_post( $related_product->get_id() );
								setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
								wc_get_template_part( 'content', 'product' );
								?>
								</div>
							</div>
						<?php endforeach; ?>
					<?php woocommerce_product_loop_end(); ?> 
				</div>
			</div>
		</div>
	</div>
</div>

	<?php
endif;

wp_reset_postdata();
