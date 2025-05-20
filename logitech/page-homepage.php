<?php
/**
 * Template Name: Sản phẩm define
 */
get_header('home');
$themeData = vbrand_load_theme_data();
?>

<div class="intro-slider-container mb-4">
	<div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
		<?php foreach($themeData->get('slider') as $slider): ?>
			<div class="intro-slide" style="background-image: url(<?php echo $slider['anh']; ?>);">
				<div class="container intro-content">
					<div class="intro-title text-white mb-0 lh-sm text-uppercase"><?php echo $slider['slidertitle']; ?></div><!-- End .h3 intro-subtitle -->
					<div class="intro-title text-white mb-0 lh-sm text-uppercase"><?php echo $slider['slidertitlesub']; ?></div><!-- End .intro-title -->
					<div class="intro-title text-white mb-0 lh-sm text-uppercase"><?php echo $slider['slidertitlesecond']; ?></div><!-- End .intro-text -->
					<div class="row mb-2">
						<div class="col col-md-4"> 
							<div class="fs-5 text-white">
								<?php echo $slider['slideralias']; ?>
							</div>
						</div>
					</div>
					<a href="<?php echo $slider['morebtn']; ?>" class="btn btn-primary">TÌM HIỂU THÊM</a>
					<a href="<?php echo $slider['buybtn']; ?>" class="btn btn-primary ml-3">MUA NGAY</a>
				</div>
			</div>
		<?php endforeach?> 
	</div>
	<span class="slider-loader text-white"></span>
</div>
 <div class="blog-posts">
	<div class="container"> 
		<div class="row">
			<?php 
				$args=array(
					'post_type'     	=> 'post',
					'post_status'   	=> 'publish',
					'posts_per_page' 	=> 3,
				); 
				$my_posts = get_posts( $args );
				if ( $my_posts ) {
					foreach ( $my_posts as $index=>$post ) :
						setup_postdata( $post ); 
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
						?>
						<div class="col-sm-4"> 
							<article class="entry">
								<figure class="entry-media">
									<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('single-post-thumbnail', array('class' => 'image_fade')); ?> 
									</a>
								</figure>
								<div class="entry-body "> 
									<h3 class="entry-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="entry-content">
										<p><?php echo the_excerpt();?> </p> 
										<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
									</div>
								</div>
							</article> 
						</div>
					<?php
						endforeach; 
						wp_reset_postdata();
					}?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="more-container text-center mt-1">
					<a href="<?=site_url()?>/tin-tuc" class="btn btn-outline-lightgray btn-more btn-round"><span>Xem thêm tin</span><i class="icon-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
 
   <div class="bg-lighter trending-products">
                            <div class="heading heading-flex mb-3"> 
                               <div class="heading-left">
                                    <ul class="nav nav-pills justify-content-center title" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-elec-link" data-toggle="tab" href="#trending-elec-tab" role="tab" aria-controls="trending-elec-tab" aria-selected="false">Electronics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-furn-link" data-toggle="tab" href="#trending-furn-tab" role="tab" aria-controls="trending-furn-tab" aria-selected="false">Furniture</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-cloth-link" data-toggle="tab" href="#trending-cloth-tab" role="tab" aria-controls="trending-cloth-tab" aria-selected="false">Clothes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-acc-link" data-toggle="tab" href="#trending-acc-tab" role="tab" aria-controls="trending-acc-tab" aria-selected="false">Accessories</a>
                                        </li>
                                    </ul>
                               </div><!-- End .heading-right -->
                            </div><!-- End .heading -->

                            <div class="tab-content tab-content-carousel">
                                <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":6,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":8,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14/product-1.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$251.99</span>
                                                    <span class="old-price">Was $290.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14/product-2.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$179.99</span>
                                                    <span class="old-price">Was $199.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14/product-3.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $3,050.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14/product-4.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Clothes</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $240.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14/product-5.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,699.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/products/14//product-6.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-elec-tab" role="tabpanel" aria-labelledby="trending-elec-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $3,050.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Clothes</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $240.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$251.99</span>
                                                    <span class="old-price">Was $290.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$179.99</span>
                                                    <span class="old-price">Was $199.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,699.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-furn-tab" role="tabpanel" aria-labelledby="trending-furn-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$179.99</span>
                                                    <span class="old-price">Was $199.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $3,050.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$251.99</span>
                                                    <span class="old-price">Was $290.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,699.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Clothes</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $240.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-cloth-tab" role="tabpanel" aria-labelledby="trending-cloth-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$251.99</span>
                                                    <span class="old-price">Was $290.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,699.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$179.99</span>
                                                    <span class="old-price">Was $199.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $3,050.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-acc-tab" role="tabpanel" aria-labelledby="trending-acc-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Clothes</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $240.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Furniture</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $3,050.00
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 8 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-sale">Sale</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$179.99</span>
                                                    <span class="old-price">Was $199.00</span>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Electronics</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,699.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 10 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-top">Top</span>
                                                <a href="product.html">
                                                    <img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Laptops</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $1,199.99
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .bg-lighter -->
 
<div class="mb-3"></div>
 
 
 

<div class="mb-5"></div>


<!-- End .mb-5 --> 
<div class="banner-group">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper">CHUỖI CỬA HÀNG</h2>
		<div class="row">
			<div class="col-md-4 col-lg-4">
				<div class="banner banner-large banner-overlay banner-overlay-light">
					<?php
						// Shop 1
						$shop_one = $themeData->get('shop_banner_one');
						$shop_one_title = $themeData->get('shop_banner_one_title');
						$shop_one_alias = $themeData->get('shop_banner_one_alias');
						// Shop 2
						$shop_banner_two = $themeData->get('shop_banner_two');
						$shop_banner_two_title = $themeData->get('shop_banner_two_title');
						$shop_banner_two_alias = $themeData->get('shop_banner_two_alias');
						// Shop 3
						$shop_banner_three = $themeData->get('shop_banner_three');
						$shop_banner_three_title = $themeData->get('shop_banner_three_title');
						$shop_banner_three_alias = $themeData->get('shop_banner_three_alias');
						// Shop 4
						$shop_banner_four = $themeData->get('shop_banner_four');
						$shop_banner_four_title = $themeData->get('shop_banner_four_title');
						$shop_banner_four_alias = $themeData->get('shop_banner_four_alias');


					?>
					<a href="#">
						<img src="<?=$shop_one?>" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title"><?=$shop_one_title?></h3><!-- End .banner-title -->
						<div class="banner-text"><?=$shop_one_alias?></div><!-- End .banner-text -->
						 
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-5 -->

			<div class="col-md-4 col-lg-4">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_two?>" alt="Banner">
					</a>

					<div class="banner-content banner-content-bottom">
						<h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white"><?=$shop_banner_two_title?></h3><!-- End .banner-title -->
						<div class="banner-text text-white"><?=$shop_banner_two_alias?></div><!-- End .banner-text --> 
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-3 -->

			<div class="col-md-4 col-lg-4">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_two?>" alt="Banner">
					</a>

					<div class="banner-content banner-content-bottom">
						<h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white"><?=$shop_banner_two_title?></h3><!-- End .banner-title -->
						<div class="banner-text text-white"><?=$shop_banner_two_alias?></div><!-- End .banner-text --> 
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-3 -->
			<div class="col-md-4 col-lg-4">			
				<div class="banner banner-overlay banner-overlay-light">
					<a href="#">
						<img src="<?=$shop_banner_four?>" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title"><?=$shop_banner_four_title?></h3><!-- End .banner-title -->
						<div class="banner-text"><?=$shop_banner_four_alias?></div><!-- End .banner-text --> 
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-4 -->
			<div class="col-md-8 col-lg-8">
			
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_three?>" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white"><?=$shop_banner_three_title?></h3><!-- End .banner-title -->
						<a href="#" class="btn btn-outline-white banner-link"><?=$shop_banner_three_alias?><i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-3 --> 

		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End .banner-group -->

<div class="banner-group">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper">MUA SẮM SẢN 'PHẨM</h2>
		
		<div class="pt-3 pb-3">
                <div class="container">
                    <div class="banner-group">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="banner banner-overlay banner-lg">
                                    <a href="#">
                                        <img src="<?=get_template_directory_uri()?>/assets/images/banners/demo-top-1.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-bottom">
                                        <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Waterproof</a></h3><!-- End .banner-title -->
                                        <div class="banner-text text-white"><a href="#">from $19.00</a></div><!-- End .banner-text -->
                                        <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->

                            <div class="col-sm-6 col-lg-4 order-lg-last">
                                <div class="banner banner-overlay banner-lg">
                                    <a href="#">
                                        <img src="<?=get_template_directory_uri()?>/assets/images/banners/demo-top-4.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content banner-content-top">
                                        <h4 class="banner-subtitle text-white"><a href="#">On Sale</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Women's<br>Sportswear</a></h3><!-- End .banner-title -->
                                        <div class="banner-text text-white"><a href="#">from $39.00</a></div><!-- End .banner-text -->
                                        <a href="#" class="btn btn-outline-white banner-link">Discover Now</a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->

                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="<?=get_template_directory_uri()?>/assets/images/banners/demo-top-2.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Accessories<br>and Shoes</a></h3><!-- End .banner-title -->
                                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 col-lg-12 -->

                                    <div class="col-sm-6 col-lg-12">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="<?=get_template_directory_uri()?>/assets/images/banners/demo-top-3.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Spring 2019</a></h3><!-- End .banner-title -->
                                                <a href="#" class="btn btn-outline-white banner-link">Shop Now</a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 col-lg-12 -->
                                </div><!-- End .row -->
                            </div><!-- End .col-lg-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .banner-group -->
					

				</div><!-- End .container -->
            </div>
	</div>
<div class="mb-5"></div><!-- End .mb-5 -->
  
 
<div class="intro-slider-container mb-4">
	<div id="banerslider" class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
		<?php foreach($themeData->get('bannerslider') as $slider): ?>
			<div class="intro-slide" style="background-image: url(<?php echo $slider['anh']; ?>);">
				<div class="container intro-content text-center">
					<div class="intro-title text-white mb-0 lh-sm">THIẾT KẾ VÌ SỰ</div><!-- End .h3 intro-subtitle -->
					<div class="intro-title text-white mb-0 lh-sm">BỀN VỮNG</div><!-- End .intro-title --> 
					<div class="row mb-2 justify-content-center">
						<div class="col col-md-4">
							<div class="fs-5 text-white">
								Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. 
							</div>
						</div>
					</div>
					<a href="category.html" class="btn btn-primary">TÌM HIỂU THÊM</a> 
				</div><!-- End .intro-content -->
			</div><!-- End .intro-slide --> 
		<?php endforeach?> 
	</div><!-- End .intro-slider owl-carousel owl-theme -->

	<span class="slider-loader text-white"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->


<?php
	get_footer('home');
?> 
