<?php $themeData = vbrand_load_theme_data(); ?>
</main>
<footer class="footer footer-2">
				<div class="footer-bottom">
					<div class="container">
						<p class="footer-copyright">Copyright © 2023 Shop Funiture Store. All Rights Reserved.</p>
						
						<ul class="footer-menu">
							<li><a href="#">Terms Of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
						
						<div class="social-icons social-icons-color">
							<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
							<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
							<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
							<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
							<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
						</div>
					</div>
				</div>
			</footer> 

		</div> 

		<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

		<!-- Mobile Menu -->
		<div class="mobile-menu-overlay"></div>
		 
		
		<!-- End .mobile-menu-container -->
		<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
			<div class="row justify-content-center">
				<div class="col-10">
					<div class="row no-gutters bg-white newsletter-popup-content">
						<div class="col-xl-3-5col col-lg-7 banner-content-wrap">
							<div class="banner-content text-center">
								<?php if ($themeData->get('site_logo')) { ?>
                                    <img src="<?php echo $themeData->get('site_logo'); ?>" class="logo" alt="logo" width="60" height="15">
                                <?php }?>
								<h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
								<p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
								<form action="#">
									<div class="input-group input-group-round">
										<input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
										<div class="input-group-append">
											<button class="btn" type="submit"><span>go</span></button>
										</div><!-- .End .input-group-append -->
									</div><!-- .End .input-group -->
								</form>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="register-policy-2" required>
									<label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
								</div><!-- End .custom-checkbox -->
							</div>
						</div>
						<div class="col-xl-2-5col col-lg-5 ">
							News Letter Img 
						</div>
					</div>
				</div>
			</div>
		</div>
		
 
		<?php  wp_footer(); ?>

		<!-- Plugins JS File -->
		<script src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/jquery.hoverIntent.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/jquery.waypoints.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/superfish.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/owl.carousel.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/bootstrap-input-spinner.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/jquery.elevateZoom.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/bootstrap-input-spinner.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Main JS File -->
		<script src="<?=get_template_directory_uri()?>/assets/js/main.js"></script> 
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
	</body>
</html>
		