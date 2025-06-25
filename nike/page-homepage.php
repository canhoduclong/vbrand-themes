<?php
/**
 * Template Name: Trang chủ
 */
get_header('home');
$themeData = vbrand_load_theme_data();

?>
<?php if($themeData->get('slider')):?>
<div class="container">
	<div class="intro-slider-container slider-container-ratio mb-2">
		<div class="intro-slider owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
			<?php foreach($themeData->get('slider') as $slider): ?>
			<div class="intro-slide">
				<figure class="slide-image">
					<picture>
						<source media="(max-width: 480px)" srcset="<?php echo $slider['anh']; ?>">
						<img src="<?php echo $slider['anh']; ?>" alt="Image Desc">
					</picture>
				</figure>
				<div class="intro-content">
					<h3 class="intro-subtitle"><?php echo $slider['slidertitlesub'];?></h3>
					<h1 class="intro-title text-white"><?php echo $slider['slidertitle'];?></h1> 
					<div class="intro-price text-white"><?php echo $slider['slideralias'];?></div> 
					<a href="<?php echo isset($slider['buybtn_link'])? $slider['buybtn_link'] :'';?><" class="btn btn-white-primary btn-round">
						<span class="text-uppercase"><?php echo $slider['buybtn'];?></span>
						<i class="icon-long-arrow-right"></i>
					</a>
				</div>
			</div>
			<?php endforeach ?> 
		</div>
		<span class="slider-loader"></span>
	</div>
</div>

<?php endif ?>
<?php
$banners  = $themeData->get('bannerslider'); 
?>
<div class="banner-group">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<?php if($banners[0]){ ?>
					<div class="col-sm-6">
						<div class="banner banner-overlay"> 
							<a href="<?=$banners[0]['morelink']?>">
								<img src="<?=$banners[0]['banner']?>" alt="Banner">
							</a>
							<div class="banner-content banner-content-right">
								<h4 class="banner-subtitle"><a href="<?=$banners[0]['morelink']?>"><?=$banners[0]['banneralias']?></a></h4>
								<h3 class="banner-title text-white"><a href="<?=$banners[0]['morelink']?>"><?=$banners[0]['bannertitle']?></a></h3>
								<a href="<?=$banners[0]['morelink']?>" class="btn btn-outline-white banner-link btn-round"><?=$banners[0]['moretitle']?></a>
							</div>
						</div>
					</div>
					<?php }?>

					<div class="col-sm-6">
						<div class="banner banner-overlay banner-overlay-light">
							<a href="<?=$banners[1]['morelink']?>">
								<img src="<?=$banners[1]['banner']?>" alt="Banner">
							</a>
							<div class="banner-content">
								<h4 class="banner-subtitle bright-black"><a href="<?=$banners[1]['morelink']?>"><?=$banners[1]['saleoff']?></a></h4>
								<h3 class="banner-title"><a href="<?=$banners[1]['morelink']?>"><?=$banners[1]['bannertitle']?></a></h3>
								<div class="banner-text"><a href="<?=$banners[1]['morelink']?>"><?=$banners[1]['banneralias']?></a></div>
								<a href="<?=$banners[1]['morelink']?>" class="btn btn-outline-gray banner-link btn-round"><?=$banners[1]['moretitle']?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="banner banner-large banner-overlay d-none d-sm-block">
					<a href="<?=$banners[2]['morelink']?>">
						<img src="<?=$banners[2]['banner']?>" alt="Banner">
					</a>
					<div class="banner-content">
						<h4 class="banner-subtitle text-white"><a href="<?=$banners[2]['morelink']?>"><?=$banners[2]['saleoff']?></a></h4>
						<h3 class="banner-title text-white"><a href="<?=$banners[2]['morelink']?>"><?=$banners[2]['bannertitle']?></a></h3>
						<div class="banner-text text-white"><a href="<?=$banners[2]['morelink']?>"><?=$banners[2]['banneralias']?></a></div>
						<a href="<?=$banners[2]['morelink']?>" class="btn btn-outline-white banner-link btn-round"><?=$banners[2]['moretitle']?></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 d-sm-none d-lg-block">
				<div class="banner banner-middle banner-overlay">
					<a href="<?=$banners[3]['morelink']?>">
						<img src="<?=$banners[3]['banner']?>" alt="Banner">
					</a>
					<div class="banner-content banner-content-bottom">
						<h4 class="banner-subtitle text-white"><a href="<?=$banners[3]['morelink']?>"><?=$banners[3]['saleoff']?></a></h4>
						<h3 class="banner-title text-white"><a href="<?=$banners[3]['morelink']?>"><?=$banners[3]['bannertitle']?></a></h3>
						<div class="banner-text text-white"><a href="<?=$banners[3]['morelink']?>"><?=$banners[3]['banneralias']?></a></div>
						<a href="<?=$banners[3]['morelink']?>" class="btn btn-outline-white banner-link btn-round"><?=$banners[3]['moretitle']?></a>
					</div>
				</div>
			</div>
			

		</div>
	</div>
</div>

<?php
$supports  = $themeData->get('support'); 
?>

<div class="icon-boxes-container icon-boxes-separator bg-transparent">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="<?=$supports[0]['icon']?>"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title"><?=$supports[0]['title']?></h3>
						<p><?=$supports[0]['alias']?></p>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="<?=$supports[1]['icon']?>"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title"><?=$supports[1]['title']?></h3>
						<p><?=$supports[1]['alias']?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="<?=$supports[2]['icon']?>"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title"><?=$supports[2]['title']?></h3>
						<p><?=$supports[2]['alias']?></p>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="<?=$supports[3]['icon']?>"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title"><?=$supports[3]['title']?></h3>
						<p><?=$supports[3]['alias']?></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!--Sản phẩm đang khuyễn mãi-->
<div class="bg-light pt-5 pb-10 mb-3">
	<div class="container">
		<div class="heading heading-center mb-3">
			<h2 class="title-lg text-uppercase">Sản phẩm đang khuyễn mãi</h2>

			<ul class="nav nav-pills justify-content-center" role="tablist">
				<?php foreach($themeData->get('products_tabs') as $index => $products_tab): ?>
					<li class="nav-item">
						<a class=" fs-6 nav-link <?php echo $index == 0 ? 'active' : '' ?>" id="trending-all-link" data-toggle="tab" href="#product-tab-<?php echo $index ?>" role="tab" aria-controls="product-tab-<?php echo $index ?>" aria-selected="true">
							<?php echo $products_tab['tab_name']; ?>
						</a>
					</li>
				<?php endforeach ?> 
			</ul>
		</div>

		<div class="tab-content tab-content-carousel">

			<?php foreach($themeData->get('products_tabs') as $index => $products_tab): ?> 
			<?php
				$type = $products_tab['type']; // new | hot | feature
				$limit = $products_tab['limit'];

				// Fetch products based on type
				$args = [
					'post_type'      => 'product',
					'posts_per_page' => $limit,
					'post_status'    => 'publish',
				];

				// Filter by type
				if ($type === 'new') {
					$args['orderby'] = 'date';
					$args['order'] = 'DESC';
				} elseif ($type === 'hot') {
					$args['meta_key'] = 'total_sales';
					$args['orderby'] = 'meta_value_num';
					$args['order'] = 'DESC';
				} elseif ($type === 'feature') {
					$args['tax_query'][] = [
						'taxonomy' => 'product_visibility',
						'field'    => 'name',
						'terms'    => 'featured',
						'operator' => 'IN',
					];
				}

				//$products = wc_get_products($args);
				$products = new WP_Query($args);

			?>

			<div class="tab-pane tab-pane-shadow p-0 fade show <?php echo $index == 0 ? 'active' : '' ?>" id="product-tab-<?php echo $index ?>" role="tabpanel"  aria-labelledby="product-tab-<?php echo $index ?>">
				<div class="owl-carousel owl-simple carousel-equal-height" data-toggle="owl" 
					data-owl-options='{
						"nav": false, 
						"dots": true,
						"margin": 0,
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
								"items":4,
								"nav": true
							}
						}
					}'>
					<?php if ($products->have_posts()) {
							while ($products->have_posts()) {
								$products->the_post(); 
								wc_get_template_part('content', 'product-home'); 
							}

							wp_reset_postdata();
					} ?>
				</div>
			</div>
			<?php endforeach ?>
		</div><!-- End .tab-content -->
	</div><!-- End .container -->
</div><!-- End .bg-light -->


<!--Chủng loại sản phẩm-->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-md-4">
			<div class="banner banner-cat">
				<a href="#">
					<img src="<?=get_template_directory_uri()?>/assets/images/banner-5.jpg" alt="Banner">
				</a>

				<div class="banner-content banner-content-overlay text-center">
					<h3 class="banner-title font-weight-normal">Women's</h3><!-- End .banner-title -->
					<h4 class="banner-subtitle">125 Products</h4><!-- End .banner-subtitle -->
					<a href="category.html" class="banner-link">SHOP NOW</a>
				</div><!-- End .banner-content -->
			</div><!-- End .banner -->
		</div><!-- End .col-md-4 -->

		<div class="col-sm-6 col-md-4">
			<div class="banner banner-cat">
				<a href="#">`
					<img src="<?=get_template_directory_uri()?>/assets/images/banner-6.jpg" alt="Banner">
				</a>

				<div class="banner-content banner-content-overlay text-center">
					<h3 class="banner-title font-weight-normal">Men's</h3><!-- End .banner-title -->
					<h4 class="banner-subtitle">97 Products</h4><!-- End .banner-subtitle -->
					<a href="category.html" class="banner-link">SHOP NOW</a>
				</div><!-- End .banner-content -->
			</div><!-- End .banner -->
		</div><!-- End .col-md-4 -->

		<div class="col-sm-6 col-md-4">
			<div class="banner banner-cat">
				<a href="#">
					<img src="<?=get_template_directory_uri()?>/assets/images/banner-7.jpg" alt="Banner">
				</a>

				<div class="banner-content banner-content-overlay text-center">
					<h3 class="banner-title font-weight-normal">Kid's</h3><!-- End .banner-title -->
					<h4 class="banner-subtitle">48 Products</h4><!-- End .banner-subtitle -->
					<a href="category.html" class="banner-link">SHOP NOW</a>
				</div><!-- End .banner-content -->
			</div><!-- End .banner -->
		</div><!-- End .col-md-4 -->
	</div><!-- End .row -->
</div><!-- End .container -->

<!--Sản phẩm bán chạy -->
<?php if ($themeData->get('products_module_show')) {
	$count = $themeData->get('products_module_number');					
	$case = $themeData->get('products_module_type');
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
?>

<div class="mb-4"></div>
<div class="container">
	<div class="heading heading-center mb-3">
		<h2 class="title-lg mb-2">Sản Phẩm Bán Chạy</h2> 
	</div>

	<div class="tab-content">
		<div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
			<div class="products just-action-icons-sm">
				<div class="row">

					<?php 
					$args = [
						'post_type'      => 'product',
						'posts_per_page' => $limit,
						'post_status'    => 'publish',
					];
					$products = new WP_Query($args);
					if ($products->have_posts()) {
							while ($products->have_posts()) {
								$products->the_post(); 
								wc_get_template_part('content', 'product-homesmall'); 
							}

							wp_reset_postdata();
					} ?>

				</div>
			</div>
		</div>
	</div>

	<div class="more-container text-center mt-5"> 
		<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn btn-outline-lightgray btn-more btn-round"><span>Xem tất cả</span><i class="icon-long-arrow-right"></i></a>
	</div>
</div>
<?php }?> 

<div class="container">
	<div class="cta cta-horizontal cta-horizontal-box bg-image mb-4 mb-lg-6" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/bg-1.jpg);">
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
		<h2 class="title-lg text-center mb-4">Tin tức</h2>

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
		<div class="owl-stage-outer">
			<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1188px;">
			
			<?php

			 $lnews = $themeData->get('news');
                 
                if($lnews){ 
                    ?>
                    <?php foreach($lnews as $index => $news): ?>
						<div class="owl-item active">
							<article class="entry">
								<figure class="entry-media">
									<a href="<?php echo $news['morelink'];?>">
									    <img src="<?php echo $news['banner'];?> " alt="" class="image_fade"> 
									</a>
								</figure>

								<div class="entry-body text-center">
									<div class="entry-meta">
										<a href="#">Nov 22, 2018</a>, 0 Comments
									</div>

									<h3 class="entry-title">
										<a href="<?php echo $news['morelink'];?>"><?php echo $news['moretitle'];?>.</a>
									</h3>

									<div class="entry-content">
										<p><?php echo $news['banneralias'];?> . </p> 
										<a href="<?php echo $news['morelink'];?>" class="read-more">Xem thêm</a>
									</div>
								</div>
							</article>
						</div> 

                    <?php endforeach ?>
                <?php }else{ ?>
                        <?php $args=array(
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
								<div class="owl-item active">
									<article class="entry">
										<figure class="entry-media">
											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('single-post-thumbnail', array('class' => 'image_fade')); ?> 
											</a>
										</figure>

										<div class="entry-body text-center">
											<div class="entry-meta">
												<a href="#">Nov 22, 2018</a>, 0 Comments
											</div>

											<h3 class="entry-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a>
											</h3>

											<div class="entry-content">
												<p><?php echo strip_tags(get_the_excerpt());?> . </p> 
												<a href="<?php the_permalink(); ?>" class="read-more">Xem thêm</a>
											</div>
										</div>
									</article>
								</div>
								 
                            <?php
                            endforeach; 
                            wp_reset_postdata();
                        }?>
                <?php } ?>
			 </div>
		</div>
		 >
	</div> 

		<div class="more-container text-center mt-1">
			<a href="<?php echo home_url('/');?>tin-tuc/" class="btn btn-outline-lightgray btn-more btn-round"><span>Xem thêm</span><i class="icon-long-arrow-right"></i></a>
		</div>
	</div>
</div>
 
<?php
	get_footer('home');
?> 