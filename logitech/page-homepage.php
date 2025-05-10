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
										<p<?php echo the_excerpt();?> </p> 
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
 
<div class="icon-boxes-container  mb-4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-rocket"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Giao hàng miễn phí</h3>
						<p>Đơn hàng từ 58.000 đ</p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-rotate-left"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Miễn phí đổi trả</h3>
						<p>Trong 30 ngày</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-info-circle"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Giảm tiếp 20% </h3>
						<p>cho đơn hàng tiếp</p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon">
						<i class="icon-life-ring"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Hỗ trợ</h3>
						<p>24/7 trực tuyến</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 
<div class="mb-3"></div>

<div class="container">
	<ul class="nav nav-pills nav-border-anim nav-big mb-3" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">MUA SẮM SẢN PHẨM</a>
		</li> 
	</ul>
</div>
 
<div class="mb-5"></div> 
 
<div class="container">
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
<div class="mb-5"></div>
<!-- End .mb-5 --> 
<div class="banner-group">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper">CHUỖI CỬA HÀNG</h2>
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
						<a href="#" class="btn btn-outline-gray banner-link">Xem thêm<i class="icon-long-arrow-right"></i></a>
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
						<a href="#" class="btn btn-outline-gray banner-link">Xem thêm<i class="icon-long-arrow-right"></i></a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-4 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End .banner-group -->

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
	get_footer();
?> 
<script>
	$('#banerslider').owlCarousel({
	center: true,
	items:1,
	loop:true,
	//margin:5,
	animateOut: 'slideInLeft',
	animateIn: 'slideOutRight'
	});
</script>