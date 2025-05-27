<?php 
defined( 'ABSPATH' ) || exit;
global $product;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>
<div class="product product-11 text-center">
    <figure class="product-media">
        <a href="<?=esc_url(get_permalink())?>">
            <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'product-image')); ?>
        </a>
        <div class="product-action-vertical">
            <a href="#" class="btn-product-icon btn-wishlist"><span>Yêu thích</span></a>
        </div> 
    </figure> 

    <div class="product-body">
        <h3 class="product-title"><a href="<?=esc_url(get_permalink())?>"><?=the_title()?></a></h3>
        <div class="product-price">
            <?=wc_price(get_post_meta(get_the_ID(), '_price', true))?>
        </div> 
    </div> 
    <div class="product-action">
        <a href="#" class="btn-product btn-cart"><span>Thêm vào giỏ hàng</span></a>
    </div> 
</div> 