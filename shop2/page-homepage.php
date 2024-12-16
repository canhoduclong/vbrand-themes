<?php
/**
 * Template Name: Sản phẩm define
 */
get_header();
$themeData = vbrand_load_theme_data();

?>
<div class="intro-slider-container mb-4">
	<div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
		<?php foreach($themeData->get('slider') as $slider): ?>
			<div class="intro-slide" style="background-image: url(<?php echo $slider['anh']; ?>);">
				<div class="container intro-content">
					<div class="intro-title text-white mb-0 lh-sm">HỌP MẶT.</div><!-- End .h3 intro-subtitle -->
					<div class="intro-title text-white mb-0 lh-sm">TRUYỀN PHÁT.</div><!-- End .intro-title -->
					<div class="intro-title text-white mb-0 lh-sm">CHINH PHỤC.</div><!-- End .intro-text -->
					<div class="row mb-2">
						<div class="col col-md-4"> 
							<div class="fs-5 text-white">
								Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. 
							</div>
						</div>
					</div>
					<a href="category.html" class="btn btn-primary">TÌM HIỂU THÊM</a>
					<a href="category.html" class="btn btn-primary ml-3">MUA NGAY</a>
				</div><!-- End .intro-content -->
			</div><!-- End .intro-slide --> 
		<?php endforeach?> 
	</div><!-- End .intro-slider owl-carousel owl-theme -->

	<span class="slider-loader text-white"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->


 <div class="blog-posts">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper">Tin tức</h2><!-- End .title-lg text-center -->

		<div class="owl-carousel owl-simple mb-4 owl-loaded owl-drag" data-toggle="owl" data-owl-options="{
				&quot;nav&quot;: false, 
				&quot;dots&quot;: true,
				&quot;items&quot;: 3,
				&quot;margin&quot;: 20,
				&quot;loop&quot;: false,
				&quot;responsive&quot;: {
					&quot;0&quot;: {
						&quot;items&quot;:1
					},
					&quot;520&quot;: {
						&quot;items&quot;:2
					},
					&quot;768&quot;: {
						&quot;items&quot;:3
					},
					&quot;992&quot;: {
						&quot;items&quot;:4
					}
				}
			}">
			<!-- End .entry -->
		
			<!-- End .entry -->

			<!-- End .entry -->

			<!-- End .entry -->
		<div class="owl-stage-outer">
			<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1188px;">
				<?php 
					$args=array(
						'post_type'     	=> 'post',
						'post_status'   	=> 'publish',
						'posts_per_page' 	=> 3,
						//'lang' 				=> language,
						/*
						'tax_query' => array( 			
							array(
								'taxonomy'  => 'category',
								'field'     => 'term_id',
								'terms'     => array($category_id ),
								'operator'  => 'IN',
								'include_children' => true,
							)
						) */
					); 
					$my_posts = get_posts( $args );
					if ( $my_posts ) {
						foreach ( $my_posts as $index=>$post ) :
							setup_postdata( $post ); 
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
							?>

					<div class="owl-item active">
						<article class="entry">
							<figure class="entry-media">
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('single-post-thumbnail', array('class' => 'image_fade')); ?> 
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body "> 

								<h3 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<p<?php echo the_excerpt();?> </p> 
									<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article>
					</div>

					<?php
						endforeach; 
						wp_reset_postdata();
					}else{ ?> 

					<div class="owl-item active" style="width: 277px; margin-right: 20px;"><article class="entry">
							<figure class="entry-media">
								<a href="single.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-2.jpg" alt="image desc">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body">
								 
								<h3 class="entry-title">
									<a href="single.html">Fusce lacinia arcuet nulla.</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
									<a href="single.html" class="read-more">Xem thêm</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article>
					</div>
					<div class="owl-item active" style="width: 277px; margin-right: 20px;">
						<article class="entry">
							<figure class="entry-media">
								<a href="single.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-3.jpg" alt="image desc">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body">
								 

								<h3 class="entry-title">
									<a href="single.html">Aliquam erat volutpat.</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
									<a href="single.html" class="read-more">READ MORE</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article>
					</div>
					<div class="owl-item active" style="width: 277px; margin-right: 20px;">
						<article class="entry">
							<figure class="entry-media">
								<a href="single.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-4.jpg" alt="image desc">
								</a>
							</figure><!-- End .entry-media -->

							<div class="entry-body ">
								  

								<h3 class="entry-title">
									<a href="single.html">Quisque a lectus.</a>
								</h3><!-- End .entry-title -->

								<div class="entry-content">
									<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. </p>
									<a href="single.html" class="read-more">Xem thêm</a>
								</div><!-- End .entry-content -->
							</div><!-- End .entry-body -->
						</article>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="owl-nav disabled">
				<button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button>
				<button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button>
			</div>
			<div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
		</div><!-- End .owl-carousel -->

		<div class="more-container text-center mt-1">
			<a href="<?=site_url()?>tin-tuc" class="btn btn-outline-lightgray btn-more btn-round"><span>Xem thêm tin</span><i class="icon-long-arrow-right"></i></a>
		</div><!-- End .more-container -->
	</div><!-- End .container -->
</div>
 
<div class="icon-boxes-container  mb-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-rocket"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Giao hàng miễn phí</h3><!-- End .icon-box-title -->
						<p>Đơn hàng từ 58.000 đ</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->
			
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-rotate-left"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Miễn phí đổi trả</h3><!-- End .icon-box-title -->
						<p>Trong 30 ngày</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-info-circle"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Giảm tiếp 20% </h3><!-- End .icon-box-title -->
						<p>cho đơn hàng tiếp</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-life-ring"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Hỗ trợ</h3><!-- End .icon-box-title -->
						<p>24/7 trực tuyến</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div>
 
<div class="mb-3"></div><!-- End .mb-6 -->

<div class="container">
	<ul class="nav nav-pills nav-border-anim nav-big mb-3" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Top Rated</a>
		</li>
	</ul>
</div><!-- End .container -->

<div class="container-fluid">
	<div class="tab-content tab-content-carousel">
		<div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
			<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
				data-owl-options='{
					"nav": false, 
					"dots": true,
					"margin": 20,
					"loop": false,
					"responsive": {
						"0": {
							"items":2
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
							"items":5
						},
						"1600": {
							"items":6,
							"nav": true
						}
					}
				}'>
				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->
					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
						<div class="product-price">
							$251,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->
					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Octo 4240</a></h3><!-- End .product-title -->
						<div class="product-price">
							$746,00
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<span class="product-label label-circle label-new">New</span>
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
						<div class="product-price">
							$970,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<span class="product-label label-circle label-sale">Sale</span>
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
						<div class="product-price">
							<span class="new-price">$337,00</span>
							<span class="old-price">Was $449,00</span>
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3><!-- End .product-title -->
						<div class="product-price">
							$675,00
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3><!-- End .product-title -->
						<div class="product-price">
							$457,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
						<div class="product-price">
							$251,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->
			</div><!-- End .owl-carousel -->
		</div><!-- .End .tab-pane -->
		<div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
			<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
				data-owl-options='{
					"nav": false, 
					"dots": true,
					"margin": 20,
					"loop": false,
					"responsive": {
						"0": {
							"items":2
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
							"items":5
						},
						"1600": {
							"items":6,
							"nav": true
						}
					}
				}'>
				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3><!-- End .product-title -->
						<div class="product-price">
							$675,00
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3><!-- End .product-title -->
						<div class="product-price">
							$457,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3><!-- End .product-title -->
						<div class="product-price">
							$251,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->
			</div><!-- End .owl-carousel -->
		</div><!-- .End .tab-pane -->
		<div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
			<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
				data-owl-options='{
					"nav": false, 
					"dots": true,
					"margin": 20,
					"loop": false,
					"responsive": {
						"0": {
							"items":2
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
							"items":5
						},
						"1600": {
							"items":6,
							"nav": true
						}
					}
				}'>
				<div class="product product-11 text-center">
					<figure class="product-media">
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->
					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Octo 4240</a></h3><!-- End .product-title -->
						<div class="product-price">
							$746,00
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<span class="product-label label-circle label-new">New</span>
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3><!-- End .product-title -->
						<div class="product-price">
							$970,00
						</div><!-- End .product-price -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->

				<div class="product product-11 text-center">
					<figure class="product-media">
						<span class="product-label label-circle label-sale">Sale</span>
						<a href="product.html">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4-1.jpg" alt="Product image" class="product-image">
							<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
						</a>

						<div class="product-action-vertical">
							<a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
						</div><!-- End .product-action-vertical -->

					</figure><!-- End .product-media -->

					<div class="product-body">
						<h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3><!-- End .product-title -->
						<div class="product-price">
							<span class="new-price">$337,00</span>
							<span class="old-price">Was $449,00</span>
						</div><!-- End .product-price -->

						<div class="product-nav product-nav-dots">
							<a href="#" class="active" style="background: #878883;"><span class="sr-only">Color name</span></a>
							<a href="#" style="background: #dfd5c2;"><span class="sr-only">Color name</span></a>
						</div><!-- End .product-nav -->
					</div><!-- End .product-body -->
					<div class="product-action">
						<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
					</div><!-- End .product-action -->
				</div><!-- End .product -->
			</div><!-- End .owl-carousel -->
		</div><!-- .End .tab-pane -->
	</div><!-- End .tab-content -->
</div><!-- End .container-fluid -->
 

<div class="mb-5"></div><!-- End .mb-5 -->

<div class="banner-group">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper">CHUỖII CỬA HÀNG</h2>
		<div class="row">
			<div class="col-md-12 col-lg-5">
				<div class="banner banner-large banner-overlay banner-overlay-light">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images//banners/banner-1.jpg" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title">Coffee Tables</h3><!-- End .banner-title -->
						<div class="banner-text">from $19.99</div><!-- End .banner-text -->
						<a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-5 -->

			<div class="col-md-6 col-lg-3">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images//banners/banner-2.jpg" alt="Banner">
					</a>

					<div class="banner-content banner-content-bottom">
						<h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white">Amazing <br>Armchairs</h3><!-- End .banner-title -->
						<div class="banner-text text-white">from $39.99</div><!-- End .banner-text -->
						<a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-3 -->

			<div class="col-md-6 col-lg-4">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images//banners/banner-3.jpg" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white">Storage <br>Boxes & Baskets</h3><!-- End .banner-title -->
						<a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->

				<div class="banner banner-overlay banner-overlay-light">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images//banners/banner-4.jpg" alt="Banner">
					</a>

					<div class="banner-content banner-content-top">
						<h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
						<h3 class="banner-title">Lamps Offer</h3><!-- End .banner-title -->
						<div class="banner-text">up to 30% off</div><!-- End .banner-text -->
						<a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-4 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End .banner-group -->

<div class="mb-5"></div><!-- End .mb-5 -->

<div class="container">
	<div class="cta cta-horizontal cta-horizontal-box bg-image mb-4 mb-lg-6" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/demos/demo-10/bg-1.jpg);">
		<div class="row flex-column flex-lg-row align-items-lg-center">
			<div class="col">
				<h3 class="cta-title text-primary">Ưu đãi mới! Bắt đầu hàng ngày lúc 12 giờ trưa theo giờ</h3><!-- End .cta-title -->
				<p class="cta-desc">Get <em class="font-weight-medium">GIAO HÀNG MIỄN PHÍ * &amp; 5% giảm giá</em> Hàng ngày vào khung giờ cố địng</p><!-- End .cta-desc -->
			</div><!-- End .col -->
			
			<div class="col-auto">
				<a href="#" class="btn btn-white-primary btn-round"><span>Thêm  vào giỏ hàng chỉ $50.00/yr</span><i class="icon-long-arrow-right"></i></a>
			</div><!-- End .col-auto -->
		</div><!-- End .row -->
	</div><!-- End .cta-horizontal -->
</div>

 
<div class="intro-slider-container mb-4">
	<div id="banerslider" class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
		<?php foreach($themeData->get('slider') as $slider): ?>
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
	get_footer();
?> 
<script>
	$('#banerslider').owlCarousel({
	center: true,
	items:1,
	loop:true,
	margin:5,
	animateOut: 'slideInLeft',
	animateIn: 'slideOutRight'
	});
</script>