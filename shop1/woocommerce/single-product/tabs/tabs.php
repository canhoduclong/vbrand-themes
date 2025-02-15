<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */

$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

?> 
 

<?php if ( ! empty( $product_tabs ) ) : ?>

<div class="product-details-tab">
	<ul class="nav nav-pills justify-content-center" role="tablist">
		<?php $tabsindex = 0;?>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<li class="nav-item" id="tab-title-<?php echo esc_attr( $key ); ?>">

				<a class="nav-link<?php echo ($tabsindex < 1 ? ' active':'');?>" id="product-info-link" data-toggle="tab" 
					href="#tab-<?php echo esc_attr( $key ); ?>" role="tab" 
					aria-controls="#tab-<?php echo esc_attr( $key ); ?>" aria-selected="false"> 
					<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
				</a>
			</li>
		<?php $tabsindex++;?>
		<?php endforeach; ?>
	</ul>
	<div class="tab-content">
		<?php $index = 0;?>
		<?php foreach ( $product_tabs as $key => $product_tab ) :  ?>
			<div class="tab-pane fade <?php echo ($index < 1 ? ' show active':'') ;?>" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php $index++;?>
		<?php endforeach; ?>
		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
  
	</div><!-- End .tab-content -->
</div><!-- End .product-details-tab -->

<?php endif; ?>