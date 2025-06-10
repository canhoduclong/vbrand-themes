    <?php $themeData = vbrand_load_theme_data(); ?>
    </main>  
    <footer class="footer footer-dark">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <?php
                    $widgets = [
                        [
                            'title' => 'Giới thiệu',
                            'data' => $themeData->get('footer_widget_1'),
                        ],
                        [
                            'title' => 'Giá trị',
                            'data' => $themeData->get('footer_widget_2'),
                        ],
                        [
                            'title' => 'Đối tác',
                            'data' => $themeData->get('footer_widget_3'),
                        ],
                        [
                            'title' => 'KHÁCH HÀNG',
                            'data' => $themeData->get('footer_widget_4'),
                        ],
                    ];
                    foreach ($widgets as $widget): ?>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title fs-5"><?= esc_html($widget['title']) ?></h4>
                                <ul class="widget-list">
                                    <?php foreach ($widget['data'] as $item): ?>
                                        <li>
                                            <a href="<?= esc_url($item['url']) ?>" class="fs-6">
                                                <?= esc_html($item['label']) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>

        <div class="footer-bottom">
            <div class="container"> 
                <div class="col-sm-12 col-lg-12">
                    <div class="my-4">
                        <div class="social-icons">
                            <?php foreach ($themeData->get('footer_social_icons') as $icon): ?>
                                <a href="<?= esc_url($icon['url']) ?>" class="social-icon fs-6" title="<?= esc_attr($icon['title']) ?>" target="_blank">
                                    <i class="<?= esc_attr($icon['icon_class']) ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright">
                            <?php foreach ($themeData->get('footer_copyright_links') as $link): ?>
                                <a class="fs-6" href="<?= esc_url($link['url']) ?>"><?= esc_html($link['label']) ?></a>
                            <?php endforeach; ?>
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
		