<?php $themeData = vbrand_load_theme_data(); ?>
</main> 

 <footer class="footer footer-dark">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Giới thiệu</h4>
                                    <ul class="widget-list">
                                        <li><a href="about.html">Câu chuyện về Logitech</a></li>
                                        <li><a href="#">Nghề nghiệp</a></li>
                                        <li><a href="#">Nhà đầu tư</a></li>
                                        <li><a href="contact.html">Blog</a></li>
                                        <li><a href="login.html">Báo chí</a></li>
                                        <li><a href="login.html">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">                                    
                                    <h4 class="widget-title">Giá trị</h4>
                                    <ul class="widget-list">
                                        <li><a href="#"> Con người</a></li>
                                        <li><a href="#"> Hành tinh</a></li>
                                        <li><a href="#">Tái chế</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">Đối tác</h4> 
                                    <ul class="widget-list">
                                        <li><a href="#">Tìm đại lý</a></li>
                                        <li><a href="#">Trở thành Đối tác</a></li>
                                        <li><a href="#">Trở thành Đối tác của Liên minh</a></li>
                                        <li><a href="#">Cổng thông tin đối tác</a></li> 
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title">KHÁCH HÀNG</h4> 
                                    <ul class="widget-list">
                                        <li><a href="#">Tùy chọn email</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div>

                <div class="footer-bottom">
                    <div class="container"> 
                        <div class="col-sm-12 col-lg-12">
                            <div class="my-4">
                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="copyright">
                                    <a href="#">©2025 Logitech. Bảo lưu mọi quyền.</a>
                                    <a href="#"> Điều khoản Sử dụng</a>
                                    <a href="#"> Chính sách về Quyền riêng tư của</a>
                                    <a href="#">Cài đặt cookie</a>
                                    <a href="#"> Bản đồ trang web</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
	
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
		