<?php
/**
 * Template for displaying products in a custom "Home" loop.
 *
 * File: your-theme/your-woo-templates/loop/content-product-home.php
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

// Product Categories
$terms = get_the_terms( $product->get_id(), 'product_cat' );
$categories = '';
if ( $terms && ! is_wp_error( $terms ) ) {
    $cat_names = array();
    foreach ( $terms as $term ) {
        $cat_names[] ='<a href="' . get_term_link( $term ) . '">' . esc_html( $term->name ) . '</a>';
    }
    $categories = implode( ', ', $cat_names );
}

?>
<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
    <div class="product product-3 text-center">
        <figure class="product-media">
            <a href="<?php the_permalink(); ?>"> 
                <?php echo $product->get_image( 'medium', [ 'alt' => $product->get_name(), 'class' => 'product-image' ] ); ?>
            </a>

            <div class="product-action-vertical">
                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
            </div><!-- End .product-action-vertical -->
        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">
                <?php echo $categories; ?>
            </div><!-- End .product-cat -->

            <h3 class="product-title"><a href="<?php the_permalink(); ?>"> <?php echo $product->get_name(); ?> </a></h3><!-- End .product-title -->

            <div class="product-price">
                <?php echo $product->get_price_html(); ?>
            </div><!-- End .product-price -->
        </div><!-- End .product-body -->

        <div class="product-footer">
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: <?php echo ( 20 * $product->get_average_rating() ); ?>%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class="ratings-text">( <?php echo $product->get_rating_count(); ?> Reviews )</span>
            </div><!-- End .rating-container -->

            <div class="product-action">
                <?php
                // Nút add to cart
                echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                    sprintf(
                       '<a href="%s" data-quantity="%s" class="%s button btn-product btn-cart " %s><span>%s</span></a>',
                        esc_url( $product->add_to_cart_url() ),
                        esc_attr( 1 ),
                        esc_attr( 'button ajax_add_to_cart add_to_cart_button product_type_' . $product->get_type() ),
                        wc_implode_html_attributes( [ 
                            'data-product_id' => $product->get_id(), 
                            'aria-label' => esc_attr( $product->add_to_cart_description() )
                        ] ),
                        esc_html( $product->add_to_cart_text() )
                    ),
                    $product
                );
                ?>
                
                <a href="<?php the_permalink(); ?>" class="btn-product btn-quickview"><span>quick view</span></a>
            </div><!-- End .product-action -->
        </div><!-- End .product-footer -->
    </div><!-- End .product -->
</div><!-- End .col -->
