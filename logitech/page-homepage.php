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
					<div class="intro-title text-white mb-0 lh-sm text-uppercase fs-1"><?php echo $slider['slidertitle']; ?></div>
					<div class="intro-title text-white mb-0 lh-sm text-uppercase fs-1"><?php echo $slider['slidertitlesub']; ?></div>
					<div class="intro-title text-white mb-0 lh-sm text-uppercase fs-1"><?php echo $slider['slidertitlesecond']; ?></div>
					<div class="row mb-2">
						<div class="col col-md-4"> 
							<div class="fs-6 text-white">
								<?php echo $slider['slideralias']; ?>
							</div>
						</div>
					</div>
					<a href="<?php echo $slider['morebtn_link']; ?>" class="btn btn-primary fs-7"><?php echo $slider['morebtn']; ?></a>
					<a href="<?php echo $slider['buybtn_link']; ?>" class="btn btn-primary ml-3 fs-7"><?php echo $slider['buybtn']; ?></a>
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
                $lnews = $themeData->get('news');
                 
                if($lnews){ 
                    ?>
                    <?php foreach($lnews as $index => $news): ?>
                        <div class="col-sm-4"> 
							<article class="entry">
								<figure class="entry-media">
									<a href="<?php echo $news['morelink'] ?? '';?>">
									    <img src="<?php echo $news['banner'];?> " alt="" class="image_fade"> 
									</a>
								</figure>
								<div class="entry-body "> 
									<h3 class="entry-title fs-5 ">
										<a href="<?php echo $news['morelink'] ?? '';?>"><?php echo $news['bannertitle'];?> </a>
									</h3>
									<div class="entry-content">
										<div class="fs-6">
                                            <?php echo $news['banneralias'];?> 
                                        </div> 
                                        <?php if($news['morelink'] ?? '') {?> 
                                            <a href="<?php echo $news['morelink'] ?? '';?>" class="read-more fs-6"><?php echo $news['moretitle'];?></a>
                                        <?php }?>
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
                                <div class="col-sm-4"> 
                                    <article class="entry">
                                        <figure class="entry-media">
                                            <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'image_fade')); ?> 
                                            </a>
                                        </figure>
                                        <div class="entry-body "> 
                                            <h3 class="entry-title fs-5 ">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <div class="entry-content">
                                                <div class="fs-6">
                                                    <?php echo strip_tags(get_the_excerpt());?> 
                                                </div> 
                                                <a href="<?php the_permalink(); ?>" class="read-more fs-6">Xem thêm</a>
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
		</div> 
	</div>
</div>
 
<div class="bg-lighter trending-products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">

                <div class="heading heading-flex mb-3"> 
                    <div class="heading-left">
                        <ul class="nav nav-pills justify-content-center title" role="tablist">
                            <?php foreach($themeData->get('products_tabs') as $index => $products_tab): ?>
                                <li class="nav-item">
                                    <a class=" fs-6 nav-link <?php echo $index == 0 ? 'active' : '' ?>" id="trending-all-link" data-toggle="tab" href="#product-tab-<?php echo $index ?>" role="tab" aria-controls="product-tab-<?php echo $index ?>" aria-selected="true">
                                        <?php echo $products_tab['tab_name']; ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->
                

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

                        <div class="tab-pane p-0 fade show <?php echo $index == 0 ? 'active' : '' ?>" id="product-tab-<?php echo $index ?>" role="tabpanel" aria-labelledby="product-tab-<?php echo $index ?>">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {"items":1},
                                        "480": {"items":2},
                                        "768": {"items":3},
                                        "992": {"items":3},
                                        "1200": {"items":4,"nav": true},
                                        "1600": {"items":4,"nav": true}
                                    }
                                }'>
                                 <?php if ($products->have_posts()) {
                                    while ($products->have_posts()) {
                                        $products->the_post();
                                        do_action('woocommerce_shop_loop');
                                        wc_get_template_part('content', 'product');
                                    }
                                    wp_reset_postdata();
                                } ?>

                            </div>
                        </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
 
<div class="mb-3"></div>
 
  

<!-- CHUỖI CỬA HÀNG --> 
<div class="mb-5"></div>

<div class="banner-group">
	<div class="container">
		<h2 class="title-lg text-center mb-4 text-upper fs-3">CHUỖI CỬA HÀNG</h2>
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

						// Shop 5
						$shop_banner_five = $themeData->get('shop_banner_five');
						$shop_banner_five_title = $themeData->get('shop_banner_five_title');
						$shop_banner_five_alias = $themeData->get('shop_banner_five_alias');
					?>
					<a href="#">
						<img src="<?=$shop_one?>" alt="Banner">
					</a>
					<div class="banner-content banner-overlay-light banner-content-top"> 
						<h3 class="banner-title text-white"><?=$shop_one_title?></h3>
						<a href="#" class="btn btn-outline-white banner-link"><?=$shop_one_alias?><i class="icon-long-arrow-right"></i></a>
					</div>
				</div>
			</div><!-- End .col-lg-5 -->

			<div class="col-md-4 col-lg-4">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_two?>" alt="Banner">
					</a>

					<div class="banner-content  banner-overlay-light banner-content-top"> 
						<h3 class="banner-title text-white fs-5"><?=$shop_banner_two_title?></h3>
						<div class="banner-text text-white fs-5"><?=$shop_banner_two_alias?></div> 
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-4">
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_three?>" alt="Banner">
					</a>

					<div class="banner-content  banner-overlay-light banner-content-top"> 
						<h3 class="banner-title text-white fs-4"><?=$shop_banner_three_title?></h3>
						<div class="banner-text text-white fs-5"><?=$shop_banner_three_alias?></div> 
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">			
				<div class="banner banner-overlay banner-overlay-light banner-content-top">
					<a href="#">
						<img src="<?=$shop_banner_four?>" alt="Banner">
					</a>

					<div class="banner-content  banner-overlay-light banner-content-top"> 
						<h3 class="banner-title text-white fs-4"><?=$shop_banner_four_title?></h3>
						<a href="#" class="btn btn-outline-white banner-link fs-5"><?=$shop_banner_four_alias?></a> 
					</div>
				</div>
			</div><!-- End .col-lg-4 -->
			<div class="col-md-8 col-lg-8">
			
				<div class="banner banner-overlay">
					<a href="#">
						<img src="<?=$shop_banner_five?>" alt="Banner">
					</a>
					<div class="banner-content banner-overlay-light banner-content-top"> 
						<h3 class="banner-title text-white fs-4"><?=$shop_banner_five_title?></h3>
						<a href="#" class="btn btn-outline-white banner-link fs-5"><?=$shop_banner_five_alias?><i class="icon-long-arrow-right"></i></a>
					</div>
				</div>
			</div> 

		</div><!-- End .row -->
	</div><!-- End .container -->
</div>

<!--mua sắm sản -->
<div class="mb-5"></div>
<div class="banner-group">
    <div class="container">
        <h2 class="title-lg text-center mb-4 text-upper fs-3">MUA SẮM SẢN 'PHẨM</h2>
        <div class="pt-3 pb-3">
            <div class="container">
                <div class="banner-group">
                    <div class="row">
                        <?php
                        $banners = $themeData->get('shopping_banner_group');
                        $col1 = array_slice($banners, 0, 2);
                        $col2 = array_slice($banners, 2, 2);
                        $col3 = array_slice($banners, 4, 2);
                        ?>
                        <div class="col-sm-6 col-lg-4">
                            <?php foreach ($col1 as $banner): ?>
                                <div class="banner banner-overlay banner-lg">
                                    <a href="<?= esc_url($banner['link']) ?>">
                                        <img src="<?= esc_url($banner['image']) ?>" alt="Banner">
                                    </a>
                                    <div class="banner-content banner-content-top">
                                        <h4 class="banner-title fs-6"><a href="<?= esc_url($banner['link']) ?>"><?= esc_html($banner['title']) ?></a></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <?php foreach ($col2 as $banner): ?>
                                <div class="banner banner-overlay banner-lg">
                                    <a href="<?= esc_url($banner['link']) ?>">
                                        <img src="<?= esc_url($banner['image']) ?>" alt="Banner">
                                    </a>
                                    <div class="banner-content banner-content-top">
                                        <h4 class="banner-title fs-6"><a href="<?= esc_url($banner['link']) ?>"><?= esc_html($banner['title']) ?></a></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <?php foreach ($col3 as $banner): ?>
                                    <div class="col-sm-6 col-lg-12">
                                        <div class="banner banner-overlay">
                                            <a href="<?= esc_url($banner['link']) ?>">
                                                <img src="<?= esc_url($banner['image']) ?>" alt="Banner">
                                            </a>
                                            <div class="banner-content banner-content-top">
                                                <h4 class="banner-title fs-6"><a href="<?= esc_url($banner['link']) ?>"><?= esc_html($banner['title']) ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-5"></div>
   
<div class="intro-slider-container ">
	<div id="banerslider" class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav": false, "dots": false}'>
		<?php foreach($themeData->get('bannerslider') as $slider): ?>
			<div class="intro-slide" style="background-image: url(<?php echo $slider['banner']; ?>);">
				<div class="container intro-content text-center">
					<div class="intro-title text-white mb-0 lh-sm"><?php echo $slider['bannertitle']; ?></div>
					<div class="row mb-2 justify-content-center">
						<div class="col col-md-4">
							<div class="fs-5 text-white">
								<?php echo $slider['banneralias']; ?>
							</div>
						</div>
					</div>
					<a href="<?php echo $slider['morelink']; ?>" class="btn btn-primary"><?php echo $slider['moretitle']; ?></a> 
				</div>
			</div>
		<?php endforeach?> 
	</div>
	<span class="slider-loader text-white"></span>
</div>

<?php
	get_footer('home');
?>