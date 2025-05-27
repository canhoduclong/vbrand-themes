<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?> 


<div class="product-gallery product-gallery-vertical">
	<div class="row">
		<figure class="product-main-image">
			<?php  
				$image = wp_get_attachment_image_src(  $post_thumbnail_id, 'single-post-thumbnail' );    
				$image_src =  $image[0];
			?>
			<img id="product-zoom" 
				src="<?=$image_src?>" 
				data-zoom-image="<?=$image_src?>" alt="product image">
			<a href="#" id="btn-product-gallery" class="btn-product-gallery">
				<i class="icon-arrows"></i>
			</a>
		</figure><!-- End .product-main-image -->

		<div id="product-zoom-gallery" class="product-image-gallery">
			<a class="product-gallery-item" href="#" 
				data-image="<?=$image_src?>" 
				data-zoom-image="<?=$image_src?>">
				<img src="<?=$image_src?>" alt="product side">
			</a>
			<?php 
				do_action( 'woocommerce_product_thumbnails' );
			?>
			
		</div><!-- End .product-image-gallery -->
	</div><!-- End .row -->
</div>



 


 