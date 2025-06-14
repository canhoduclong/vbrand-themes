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
					<a href="<?php echo isset($slider['morebtn_link'])? $slider['morebtn_link'] :'';?><" class="btn btn-white-primary btn-round">
						<span class="text-uppercase"><?php echo $slider['morebtn'];?></span>
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

<div class="banner-group">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-sm-6">
						<div class="banner banner-overlay">
							<a href="#">
								<img src="<?=get_template_directory_uri()?>/assets/images/banner-1.jpg" alt="Banner">
							</a>

							<div class="banner-content banner-content-right">
								<h4 class="banner-subtitle"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle -->
								<h3 class="banner-title text-white"><a href="#">Sneakers & <br>Athletic Shoes</a></h3><!-- End .banner-title -->
								<a href="#" class="btn btn-outline-white banner-link btn-round">Discover Now</a>
							</div><!-- End .banner-content -->
						</div><!-- End .banner -->
					</div><!-- End .col-sm-6 -->

					<div class="col-sm-6">
						<div class="banner banner-overlay banner-overlay-light">
							<a href="#">
								<img src="<?=get_template_directory_uri()?>/assets/images/banner-2.jpg" alt="Banner">
							</a>

							<div class="banner-content">
								<h4 class="banner-subtitle bright-black"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
								<h3 class="banner-title"><a href="#">Sandals</a></h3><!-- End .banner-title -->
								<div class="banner-text"><a href="#">up to 70% off</a></div><!-- End .banner-text -->
								<a href="#" class="btn btn-outline-gray banner-link btn-round">Shop Now</a>
							</div><!-- End .banner-content -->
						</div><!-- End .banner -->
					</div><!-- End .col-sm-6 -->
				</div><!-- End .row -->

				<div class="banner banner-large banner-overlay d-none d-sm-block">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images/banner-3.jpg" alt="Banner">
					</a>

					<div class="banner-content">
						<h4 class="banner-subtitle text-white"><a href="#">On Sale</a></h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white"><a href="#">Slip-On Loafers</a></h3><!-- End .banner-title -->
						<div class="banner-text text-white"><a href="#">up to 30% off</a></div><!-- End .banner-text -->
						<a href="#" class="btn btn-outline-white banner-link btn-round">Shop Now</a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-8 -->

			<div class="col-lg-4 d-sm-none d-lg-block">
				<div class="banner banner-middle banner-overlay">
					<a href="#">
						<img src="<?=get_template_directory_uri()?>/assets/images/banner-4.jpg" alt="Banner">
					</a>

					<div class="banner-content banner-content-bottom">
						<h4 class="banner-subtitle text-white"><a href="#">On Sale</a></h4><!-- End .banner-subtitle -->
						<h3 class="banner-title text-white"><a href="#">Amazing <br>Lace Up Boots</a></h3><!-- End .banner-title -->
						<div class="banner-text text-white"><a href="#">from $39.00</a></div><!-- End .banner-text -->
						<a href="#" class="btn btn-outline-white banner-link btn-round">Discover Now</a>
					</div><!-- End .banner-content -->
				</div><!-- End .banner -->
			</div><!-- End .col-lg-4 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End .banner-group -->


<!-- icons free shipping --> 
<div class="icon-boxes-container icon-boxes-separator bg-transparent">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="icon-rocket"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
						<p>Orders $50 or more</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->
			
			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="icon-rotate-left"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
						<p>Within 30 days</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="icon-info-circle"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
						<p>when you sign up</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->

			<div class="col-sm-6 col-lg-3">
				<div class="icon-box icon-box-side">
					<span class="icon-box-icon text-primary">
						<i class="icon-life-ring"></i>
					</span>

					<div class="icon-box-content">
						<h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
						<p>24/7 amazing services</p>
					</div><!-- End .icon-box-content -->
				</div><!-- End .icon-box -->
			</div><!-- End .col-sm-6 col-lg-3 -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div>

<!--Sản phẩm đang khuyễn mãi-->
<div class="bg-light pt-5 pb-10 mb-3">
	<div class="container">
		<div class="heading heading-center mb-3">
			<h2 class="title-lg">Sản phẩm đang khuyễn mãi</h2>

			<ul class="nav nav-pills justify-content-center" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="new-women-link" data-toggle="tab" href="#new-women-tab" role="tab" aria-controls="new-women-tab" aria-selected="false">Women's</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="new-men-link" data-toggle="tab" href="#new-men-tab" role="tab" aria-controls="new-men-tab" aria-selected="false">Men's</a>
				</li>
			</ul>
		</div>

		<div class="tab-content tab-content-carousel">
			<div class="tab-pane tab-pane-shadow p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
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
					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Sale</span>
							<span class="product-label label-sale">30% off</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Boots</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="new-price">Now $50.00</span>
								<span class="old-price">$84.00</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 4 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-nav product-nav-dots">
								<a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
								<a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
							</div><!-- End .product-nav -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
							<div class="product-price">
								$77.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->
							
						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">New</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3.jpg" alt="Product image" class="product-image">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sandals</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
							<div class="product-price">
								$35.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 2 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-nav product-nav-dots">
								<a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
								<a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
							</div><!-- End .product-nav -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Out Of Stock</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="out-price">$54.99</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 3 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Sale</span>
							<span class="product-label label-sale">40% off</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="new-price">Now $77.99</span>
								<span class="old-price">$130.00</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->
				</div><!-- End .owl-carousel -->
			</div><!-- .End .tab-pane -->
			<div class="tab-pane tab-pane-shadow p-0 fade" id="new-women-tab" role="tabpanel" aria-labelledby="new-women-link">
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
					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Out Of Stock</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="out-price">$54.99</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 3 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">New</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3.jpg" alt="Product image" class="product-image">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sandals</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
							<div class="product-price">
								$35.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 2 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-nav product-nav-dots">
								<a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
								<a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
							</div><!-- End .product-nav -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Sale</span>
							<span class="product-label label-sale">40% off</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="new-price">Now $77.99</span>
								<span class="old-price">$130.00</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Sale</span>
							<span class="product-label label-sale">30% off</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-1.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Boots</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">The North Face Back-To-Berkeley Remtlz Mesh</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="new-price">Now $50.00</span>
								<span class="old-price">$84.00</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 4 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-nav product-nav-dots">
								<a href="#" class="active" style="background: #5f554b;"><span class="sr-only">Color name</span></a>
								<a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
							</div><!-- End .product-nav -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
							<div class="product-price">
								$77.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->
							
						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->
				</div><!-- End .owl-carousel -->
			</div><!-- .End .tab-pane -->
			<div class="tab-pane tab-pane-shadow p-0 fade" id="new-men-tab" role="tabpanel" aria-labelledby="new-men-link">
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
					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Sale</span>
							<span class="product-label label-sale">40% off</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="new-price">Now $77.99</span>
								<span class="old-price">$130.00</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">New</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3.jpg" alt="Product image" class="product-image">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sandals</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Eric Michael Joan</a></h3><!-- End .product-title -->
							<div class="product-price">
								$35.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 2 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-nav product-nav-dots">
								<a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
								<a href="#" style="background: #b58853;"><span class="sr-only">Color name</span></a>
							</div><!-- End .product-nav -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-2.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Men’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Zoom Wildhorse 4</a></h3><!-- End .product-title -->
							<div class="product-price">
								$77.99
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->
							
						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 0 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->

					<div class="product product-3 text-center">
						<figure class="product-media">
							<span class="product-label label-primary">Out Of Stock</span>
							<a href="product.html">
								<img src="<?=get_template_directory_uri()?>/assets/images/products/product-4.jpg" alt="Product image" class="product-image">
							</a>

							<div class="product-action-vertical">
								<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
							</div><!-- End .product-action-vertical -->
						</figure><!-- End .product-media -->

						<div class="product-body">
							<div class="product-cat">
								<a href="#">Women’s</a>,
								<a href="#">Sneakers</a>
							</div><!-- End .product-cat -->
							<h3 class="product-title"><a href="product.html">Nike Air Max Motion LW Racer</a></h3><!-- End .product-title -->
							<div class="product-price">
								<span class="out-price">$54.99</span>
							</div><!-- End .product-price -->
						</div><!-- End .product-body -->

						<div class="product-footer">
							<div class="ratings-container">
								<div class="ratings">
									<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
								</div><!-- End .ratings -->
								<span class="ratings-text">( 3 Reviews )</span>
							</div><!-- End .rating-container -->

							<div class="product-action">
								<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
								<a href="popup/quickView.html" class="btn-product btn-quickview"><span>quick view</span></a>
							</div><!-- End .product-action -->
						</div><!-- End .product-footer -->
					</div><!-- End .product -->
					
				</div><!-- End .owl-carousel -->
			</div><!-- .End .tab-pane -->
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

		<ul class="nav nav-pills justify-content-center" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="top-women-link" data-toggle="tab" href="#top-women-tab" role="tab" aria-controls="top-women-tab" aria-selected="false">Women's</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="top-men-link" data-toggle="tab" href="#top-men-tab" role="tab" aria-controls="top-men-tab" aria-selected="false">Men's</a>
			</li>
		</ul>
	</div>

	<div class="tab-content">
		<div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
			<div class="products just-action-icons-sm">
				<div class="row">
					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">30% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-countdown-container">
									<span class="product-contdown-title">offer ends in:</span>
									<div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
								</div><!-- End .product-countdown-container -->

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $77.99</span>
									<span class="old-price">$130.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sandals</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
								<div class="product-price">
									$42.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->
								
							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-7.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-8.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-9.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-10.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$57.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-11.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 3 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">55% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-12.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $125.99</span>
									<span class="old-price">$275.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-13.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Mules</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
								<div class="product-price">
									$25.75
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 7 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-14.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
								<div class="product-price">
									$109.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .products -->
		</div><!-- .End .tab-pane -->
		<div class="tab-pane p-0 fade" id="top-women-tab" role="tabpanel" aria-labelledby="top-women-link">
			<div class="products just-action-icons-sm">
				<div class="row">
					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-8.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-10.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$57.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-11.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 3 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->
					
					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sandals</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
								<div class="product-price">
									$42.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->
								
							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">30% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-countdown-container">
									<span class="product-contdown-title">offer ends in:</span>
									<div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
								</div><!-- End .product-countdown-container -->

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $77.99</span>
									<span class="old-price">$130.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-9.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-7.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">55% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-12.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $125.99</span>
									<span class="old-price">$275.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-13.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Mules</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
								<div class="product-price">
									$25.75
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 7 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-14.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
								<div class="product-price">
									$109.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .products -->
		</div><!-- .End .tab-pane -->
		<div class="tab-pane p-0 fade" id="top-men-tab" role="tabpanel" aria-labelledby="top-men-link">
			<div class="products just-action-icons-sm">
				<div class="row">
					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-10.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$57.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->


					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">30% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-5.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-countdown-container">
									<span class="product-contdown-title">offer ends in:</span>
									<div class="product-countdown countdown-compact" data-until="2019, 11, 3" data-compact="true"></div><!-- End .product-countdown -->
								</div><!-- End .product-countdown-container -->

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">ASICS Tiger Gel-Lyte MT</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $77.99</span>
									<span class="old-price">$130.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #af5f23;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #806f55;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-11.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Splendid Roselyn II</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 3 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #78645f;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #b89474;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-6.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Sandals</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Eric Michael Sandra</a></h3><!-- End .product-title -->
								<div class="product-price">
									$42.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->
								
							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-7.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Jessica Simpson Blayke</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 2 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #cc6666;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #ccccff;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-8.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Sneakers</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Native Shoes Miles Denim Print</a></h3><!-- End .product-title -->
								<div class="product-price">
									$20.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-nav product-nav-dots">
									<a href="#" class="active" style="background: #ffca51;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #bb8379;"><span class="sr-only">Color name</span></a>
									<a href="#" style="background: #666666;"><span class="sr-only">Color name</span></a>
								</div><!-- End .product-nav -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-9.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">The North Face Raedonda Boot Sneaker</a></h3><!-- End .product-title -->
								<div class="product-price">
									$97.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 4 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-14.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Men’s</a>,
									<a href="#">Boots</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Vasque Sundowner GTX</a></h3><!-- End .product-title -->
								<div class="product-price">
									$109.99
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">Sale</span>
								<span class="product-label label-sale">55% off</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-12.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Heels</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Marc Jacobs Somewhere Sport Sandal</a></h3><!-- End .product-title -->
								<div class="product-price">
									<span class="new-price">Now $125.99</span>
									<span class="old-price">$275.00</span>
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 0 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->

					<div class="col-6 col-md-4 col-lg-3 col-xl-5col">
						<div class="product product-3 text-center">
							<figure class="product-media">
								<span class="product-label label-primary">New</span>
								<a href="product.html">
									<img src="<?=get_template_directory_uri()?>/assets/images/products/product-13.jpg" alt="Product image" class="product-image">
								</a>

								<div class="product-action-vertical">
									<a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
								</div><!-- End .product-action-vertical -->
							</figure><!-- End .product-media -->

							<div class="product-body">
								<div class="product-cat">
									<a href="#">Women’s</a>,
									<a href="#">Mules</a>
								</div><!-- End .product-cat -->
								<h3 class="product-title"><a href="product.html">Crocs Crocband Clog</a></h3><!-- End .product-title -->
								<div class="product-price">
									$25.75
								</div><!-- End .product-price -->
							</div><!-- End .product-body -->

							<div class="product-footer">
								<div class="ratings-container">
									<div class="ratings">
										<div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
									</div><!-- End .ratings -->
									<span class="ratings-text">( 7 Reviews )</span>
								</div><!-- End .rating-container -->

								<div class="product-action">
									<a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
									<a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
								</div><!-- End .product-action -->
							</div><!-- End .product-footer -->
						</div><!-- End .product -->
					</div><!-- End .col-6 col-md-4 col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .products -->
		</div><!-- .End .tab-pane -->
	</div><!-- End .tab-content -->

	<div class="more-container text-center mt-5">
		<a href="category.html" class="btn btn-outline-lightgray btn-more btn-round"><span>View more products</span><i class="icon-long-arrow-right"></i></a>
	</div><!-- End .more-container -->
</div><!-- End .container -->
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
						<img src="<?=get_template_directory_uri()?>/assets/images/post-1.jpg" alt="image desc">
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
						<img src="<?=get_template_directory_uri()?>/assets/images/post-2.jpg" alt="image desc">
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
						<img src="<?=get_template_directory_uri()?>/assets/images/post-3.jpg" alt="image desc">
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
						<img src="<?=get_template_directory_uri()?>/assets/images/post-4.jpg" alt="image desc">
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
	get_footer('home');
?> 