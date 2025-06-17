<?php 
defined( 'ABSPATH' ) || exit;
global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
} 
?>  
<div class="product product-3 text-center">
    <figure class="product-media">
        <?php if ( $product->is_on_sale() ) : ?>
            <span class="product-label label-primary"><?php esc_html_e( 'Sale', 'your-text-domain' ); ?></span>
        <?php endif; ?>
        
        <a href="<?php the_permalink(); ?>"> 
            <?php echo $product->get_image( 'medium' ); ?>
        </a>

        <div class="product-action-vertical">
            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span><?php esc_html_e( 'add to wishlist', 'your-text-domain' ); ?></span></a>
        </div>
    </figure>

    <div class="product-body">
        <div class="product-cat">
            <?php echo wc_get_product_category_list( $product->get_id(), ', ' ); ?>
        </div>

        <h3 class="product-title"><a href="<?php the_permalink(); ?>"> <?php echo $product->get_name(); ?> </a></h3>

        <div class="product-price">
            <?php echo $product->get_price_html(); ?>
        </div>
    </div>

    <div class="product-footer">
        <div class="ratings-container">
            <div class="ratings">
                <div class="ratings-val" style="width: <?php echo ( $product->get_average_rating() / 5 ) * 100; ?>%;"></div><!-- End .ratings-val -->
            </div>
            <span class="ratings-text">( <?php echo $product->get_review_count(); ?> Reviews )</span>
        </div>

		<?php wc_get_template( 'loop/add-to-cart-home.php', [], get_stylesheet_directory() . "/nike/" ); ?>
        
    </div>
</div>
