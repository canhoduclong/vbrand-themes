<?php
/**
 * Template Name: Sản phẩm define
 */
get_header();
$themeData = vbrand_load_theme_data();

?>
<div class="intro-slider-container">
	<div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
			"nav": false, 
			"dots": true,
			"responsive": {
				"992": {
					"nav": true,
					"dots": false
				}
			}
		}'>
		<?php 
		
		foreach($themeData->get('slider') as $slider):
				
		?>
		<div class="intro-slide" style="background-image: url(<?php echo $slider['anh']; ?>">
			<div class="container intro-content">
				<h3 class="intro-subtitle text-primary"><?php echo $slider['slidertitle'];?></h3>
				<h1 class="intro-title"><?php echo $slider['slidertitle'];?></h1> 
			</div><!-- End .intro-content -->
		</div><!-- End .intro-slide -->
		<?php endforeach?>
		
	</div><!-- End .intro-slider owl-carousel owl-simple -->

	<span class="slider-loader"></span><!-- End .slider-loader -->
</div><!-- End .intro-slider-container -->

 
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
 
<div class="container"> 
	<div class="heading text-center mb-3">
		<h2 class="title">BỘ SƯU TẬP MỚI</h2> 
	</div>

	<div class="products mb-3">
		<div class="row">

		<?php if ($themeData->get('products_module_show')) { ?>
		<?php
			$count = $themeData->get('products_module_number');					
			$case = $themeData->get('products_module_type');
		?>
		<?php
			switch ($case) {
				case "hot":
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => $count,
						'meta_query'     => array(
							'relation' => 'OR',
							array(
								'key'   => 'hot_product', // Change this to your hot product custom field
								'value' => '1',           // Assuming '1' means it's marked as hot
							)
						),
					); 
					break;                        
				case "feature":
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => $count,
						'meta_query'     => array(
							'relation' => 'OR' ,
							array(
								'key'   => '_featured',   // WooCommerce uses '_featured' for featured products
								'value' => 'yes',
							),
						),
					);
					break;
				case "new":
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => $count,
						'meta_query'     => array(
							'relation' => 'OR',
							array(
								'key'   => 'new_product', // Change this to your new product custom field
								'value' => '1',           // Assuming '1' means it's marked as new
							), 
						),
					);
				default:
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => $count,
					);
			}
			$products = new WP_Query($args);
			if ( woocommerce_product_loop() ) {							
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
				woocommerce_product_loop_start();
				if ($products->have_posts()){ 
					$i=1;
					while ($products->have_posts()){
						$products->the_post(); 

						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action( 'woocommerce_shop_loop' ); 

						wc_get_template_part( 'content', 'product' );
						
						$i++;
					}
				}
				wp_reset_postdata(); // Đặt lại truy vấn sản phẩm 
				woocommerce_product_loop_end();
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			}
		}?> 
		</div>
	</div>					
</div> 

<div class="container">
	<div class="cta cta-horizontal cta-horizontal-box bg-image mb-4 mb-lg-6" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/demos/demo-10/bg-1.jpg);">
		<div class="row flex-column flex-lg-row align-items-lg-center">
			<div class="col">
				<h3 class="cta-title text-primary">New Deals! Start Daily at 12pm e.t.</h3><!-- End .cta-title -->
				<p class="cta-desc">Get <em class="font-weight-medium">FREE SHIPPING* &amp; 5% rewards</em> on every order with Molla Theme rewards program</p><!-- End .cta-desc -->
			</div><!-- End .col -->
			
			<div class="col-auto">
				<a href="#" class="btn btn-white-primary btn-round"><span>Add to Cart for $50.00/yr</span><i class="icon-long-arrow-right"></i></a>
			</div><!-- End .col-auto -->
		</div><!-- End .row -->
	</div><!-- End .cta-horizontal -->
</div>


<div class="blog-posts">
	<div class="container">
		<h2 class="title-lg text-center mb-4">From Our Blog</h2><!-- End .title-lg text-center -->

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
		<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1188px;"><div class="owl-item active" style="width: 277px; margin-right: 20px;"><article class="entry">
				<figure class="entry-media">
					<a href="single.html">
						<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-1.jpg" alt="image desc">
					</a>
				</figure><!-- End .entry-media -->

				<div class="entry-body text-center">
					<div class="entry-meta">
						<a href="#">Nov 22, 2018</a>, 0 Comments
					</div><!-- End .entry-meta -->

					<h3 class="entry-title">
						<a href="single.html">Sed adipiscing ornare.</a>
					</h3><!-- End .entry-title -->

					<div class="entry-content">
						<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p> 
						<a href="single.html" class="read-more">READ MORE</a>
					</div><!-- End .entry-content -->
				</div><!-- End .entry-body -->
			</article></div><div class="owl-item active" style="width: 277px; margin-right: 20px;"><article class="entry">
				<figure class="entry-media">
					<a href="single.html">
						<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-2.jpg" alt="image desc">
					</a>
				</figure><!-- End .entry-media -->

				<div class="entry-body text-center">
					<div class="entry-meta">
						<a href="#">Dec 12, 2018</a>, 0 Comments
					</div><!-- End .entry-meta -->

					<h3 class="entry-title">
						<a href="single.html">Fusce lacinia arcuet nulla.</a>
					</h3><!-- End .entry-title -->

					<div class="entry-content">
						<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. </p>
						<a href="single.html" class="read-more">READ MORE</a>
					</div><!-- End .entry-content -->
				</div><!-- End .entry-body -->
			</article></div><div class="owl-item active" style="width: 277px; margin-right: 20px;"><article class="entry">
				<figure class="entry-media">
					<a href="single.html">
						<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-3.jpg" alt="image desc">
					</a>
				</figure><!-- End .entry-media -->

				<div class="entry-body text-center">
					<div class="entry-meta">
						<a href="#">Dec 19, 2018</a>, 2 Comments
					</div><!-- End .entry-meta -->

					<h3 class="entry-title">
						<a href="single.html">Aliquam erat volutpat.</a>
					</h3><!-- End .entry-title -->

					<div class="entry-content">
						<p>Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
						<a href="single.html" class="read-more">READ MORE</a>
					</div><!-- End .entry-content -->
				</div><!-- End .entry-body -->
			</article></div><div class="owl-item active" style="width: 277px; margin-right: 20px;"><article class="entry">
				<figure class="entry-media">
					<a href="single.html">
						<img src="<?=get_template_directory_uri()?>/assets/images/demos/demo-10/blog/post-4.jpg" alt="image desc">
					</a>
				</figure><!-- End .entry-media -->

				<div class="entry-body text-center">
					<div class="entry-meta">
						<a href="#">Dec 19, 2018</a>, 2 Comments
					</div><!-- End .entry-meta -->

					<h3 class="entry-title">
						<a href="single.html">Quisque a lectus.</a>
					</h3><!-- End .entry-title -->

					<div class="entry-content">
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. </p>
						<a href="single.html" class="read-more">READ MORE</a>
					</div><!-- End .entry-content -->
				</div><!-- End .entry-body -->
			</article></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div><!-- End .owl-carousel -->

		<div class="more-container text-center mt-1">
			<a href="blog.html" class="btn btn-outline-lightgray btn-more btn-round"><span>View more articles</span><i class="icon-long-arrow-right"></i></a>
		</div><!-- End .more-container -->
	</div><!-- End .container -->
</div>
 
<?php
	get_footer();
?> 