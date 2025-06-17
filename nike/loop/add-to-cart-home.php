<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
echo apply_filters(
    'woocommerce_loop_add_to_cart_link',
    sprintf(
       '<div class="product-action">
            <a href="%s" data-quantity="%s" class="%s btn-product btn-cart" %s>%s</a>
            <a href="%s" class="btn-product btn-quickview"><span>Chi tiết</span></a>
        </div>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
        esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
        isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
        esc_html( $product->add_to_cart_text() ),
        esc_url( get_permalink( $product->get_id() ) )
    ),
    $product,
    $args
);


?>

 