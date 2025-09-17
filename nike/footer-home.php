   <?php $themeData = vbrand_load_theme_data(); ?>
   </main>

    <footer class="footer footer-dark">
            <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/bg-2.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <div class="cta-heading text-center">
                                <h3 class="cta-title text-white text-uppercase">Đăng ký nhận tin qua email</h3>
                                <p class="cta-desc text-white">Để nhận <span class="font-weight-normal">ƯU ĐÃI</span> hàng tháng</p>
                            </div>
                        
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Nhập email của bạn" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-white" type="submit"><span>Đăng ký ngay</span><i class="icon-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="<?=get_template_directory_uri()?>/assets/images/nike.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <p><?=$themeData->get('footer_description');?></p>

                                <div class="social-icons">
                                    <?php foreach ($themeData->get('footer_social_icons') as $icon): ?>
                                        <a href="<?= esc_url($icon['url']) ?>" class="social-icon" title="<?= esc_attr($icon['title']) ?>" target="_blank">
                                            <i class="<?= esc_attr($icon['icon_class']) ?>"></i>
                                        </a>
                                    <?php endforeach; ?> 
                                </div>
                            </div>
                        </div>
                        <?php
                        $widgets = [
                            [
                                'title' => 'Giới thiệu',
                                'data' => $themeData->get('footer_widget_1'),
                            ],
                        
                            [
                                'title' => 'Đối tác',
                                'data' => $themeData->get('footer_widget_3'),
                            ],
                        ];
                        foreach ($widgets as $widget): ?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h4 class="widget-title"><?= esc_html($widget['title']) ?></h4>
                                    <ul class="widget-list">
                                        <?php foreach ($widget['data'] as $item): ?>
                                            <li>
                                                <a href="<?= esc_url($item['url']) ?>">
                                                    <?= esc_html($item['label']) ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?> 

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title fs-4">Hình thức thanh toán</h4> 
                                <div class="d-flex flex-wrap gap-1 gap-md-2 d-md-grid grid-cols-4 mb-4">
                                    <div>
                                        <img alt="VISA" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/visa_icon_44fe6e15ed.svg 1x, https://cdn2.fptshop.com.vn/svg/visa_icon_44fe6e15ed.svg 2x" src="https://cdn2.fptshop.com.vn/svg/visa_icon_44fe6e15ed.svg"></div><div><img alt="MasterCard" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/mastercard_icon_c75f94f6a5.svg 1x, https://cdn2.fptshop.com.vn/svg/mastercard_icon_c75f94f6a5.svg 2x" src="https://cdn2.fptshop.com.vn/svg/mastercard_icon_c75f94f6a5.svg"></div><div><img alt="JCB" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/jcb_icon_214783937c.svg 1x, https://cdn2.fptshop.com.vn/svg/jcb_icon_214783937c.svg 2x" src="https://cdn2.fptshop.com.vn/svg/jcb_icon_214783937c.svg"></div><div><img alt="American Express" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/amex_icon_d6fb68108d.svg 1x, https://cdn2.fptshop.com.vn/svg/amex_icon_d6fb68108d.svg 2x" src="https://cdn2.fptshop.com.vn/svg/amex_icon_d6fb68108d.svg"></div><div><img alt="VNPAY" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/vnpay_icon_f42045057d.svg 1x, https://cdn2.fptshop.com.vn/svg/vnpay_icon_f42045057d.svg 2x" src="https://cdn2.fptshop.com.vn/svg/vnpay_icon_f42045057d.svg"></div><div><img alt="ZaloPay" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/zalopay_icon_26d64ea93f.svg 1x, https://cdn2.fptshop.com.vn/svg/zalopay_icon_26d64ea93f.svg 2x" src="https://cdn2.fptshop.com.vn/svg/zalopay_icon_26d64ea93f.svg"></div><div><img alt="ATM" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/napas_icon_94d5330e3c.svg 1x, https://cdn2.fptshop.com.vn/svg/napas_icon_94d5330e3c.svg 2x" src="https://cdn2.fptshop.com.vn/svg/napas_icon_94d5330e3c.svg"></div><div><img alt="Kredivo" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/kredivo_icon_04f72baf36.svg 1x, https://cdn2.fptshop.com.vn/svg/kredivo_icon_04f72baf36.svg 2x" src="https://cdn2.fptshop.com.vn/svg/kredivo_icon_04f72baf36.svg"></div><div><img alt="MoMo" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/momo_icon_baef21b5f7.svg 1x, https://cdn2.fptshop.com.vn/svg/momo_icon_baef21b5f7.svg 2x" src="https://cdn2.fptshop.com.vn/svg/momo_icon_baef21b5f7.svg"></div><div><img alt="Foxpay" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/foxpay_icon_063b36c1f8.svg 1x, https://cdn2.fptshop.com.vn/svg/foxpay_icon_063b36c1f8.svg 2x" src="https://cdn2.fptshop.com.vn/svg/foxpay_icon_063b36c1f8.svg"></div><div><img alt="AlePay" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/alepay_icon_20d5310617.svg 1x, https://cdn2.fptshop.com.vn/svg/alepay_icon_20d5310617.svg 2x" src="https://cdn2.fptshop.com.vn/svg/alepay_icon_20d5310617.svg"></div><div><img alt="Muadee" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/muadee_icon_5e297d9e61.svg 1x, https://cdn2.fptshop.com.vn/svg/muadee_icon_5e297d9e61.svg 2x" src="https://cdn2.fptshop.com.vn/svg/muadee_icon_5e297d9e61.svg"></div><div><img alt="Home PayLater" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/homepaylater_icon_adef600842.svg 1x, https://cdn2.fptshop.com.vn/svg/homepaylater_icon_adef600842.svg 2x" src="https://cdn2.fptshop.com.vn/svg/homepaylater_icon_adef600842.svg"></div><div><img alt="Apple Pay" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/applepay_icon_cb6806a0d0.svg 1x, https://cdn2.fptshop.com.vn/svg/applepay_icon_cb6806a0d0.svg 2x" src="https://cdn2.fptshop.com.vn/svg/applepay_icon_cb6806a0d0.svg"></div><div><img alt="Samsung Pay" loading="lazy" width="48" height="30" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/samsungpay_icon_0292aa9876.svg 1x, https://cdn2.fptshop.com.vn/svg/samsungpay_icon_0292aa9876.svg 2x" src="https://cdn2.fptshop.com.vn/svg/samsungpay_icon_0292aa9876.svg">   
                                    </div>
                                </div>
                                <h4 class="widget-title fs-4" >Giấy chứng nhận</h4> 
                                <div class="d-flex flex-wrap gap-1 gap-md-2 d-md-grid grid-cols-4 mb-4"><img alt="DMCA" loading="lazy" width="52" height="32" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/dmca_icon_8fc6622bd5.svg 1x, https://cdn2.fptshop.com.vn/svg/dmca_icon_8fc6622bd5.svg 2x" src="https://cdn2.fptshop.com.vn/svg/dmca_icon_8fc6622bd5.svg"><img alt="Thương hiệu mạnh Việt Nam 2013" loading="lazy" width="52" height="32" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/thuong_hieu_manh_2013_icon_b56f772475.svg 1x, https://cdn2.fptshop.com.vn/svg/thuong_hieu_manh_2013_icon_b56f772475.svg 2x" src="https://cdn2.fptshop.com.vn/svg/thuong_hieu_manh_2013_icon_b56f772475.svg"><img alt="Sản phẩm - Dịch vụ hàng đầu Việt Nam 2014" loading="lazy" width="52" height="32" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/san_pham_dich_vu_hang_dau_viet_nam_icon_282a9ba4f7.svg 1x, https://cdn2.fptshop.com.vn/svg/san_pham_dich_vu_hang_dau_viet_nam_icon_282a9ba4f7.svg 2x" src="https://cdn2.fptshop.com.vn/svg/san_pham_dich_vu_hang_dau_viet_nam_icon_282a9ba4f7.svg"><img alt="Nói không với hàng giả" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/noi_khong_voi_hang_gia_icon_e16037d9cb.svg 1x, https://cdn2.fptshop.com.vn/svg/noi_khong_voi_hang_gia_icon_e16037d9cb.svg 2x" src="https://cdn2.fptshop.com.vn/svg/noi_khong_voi_hang_gia_icon_e16037d9cb.svg"><a rel="nofollow" target="_blank" href="http://online.gov.vn/Home/WebDetails/21883"><img alt="Đã thông báo Bộ Công Thương" loading="lazy" width="86" height="32" decoding="async" data-nimg="1" style="color: transparent;" srcset="https://cdn2.fptshop.com.vn/svg/da_thong_bao_bo_cong_thuong_icon_64785fb3f7.svg 1x, https://cdn2.fptshop.com.vn/svg/da_thong_bao_bo_cong_thuong_icon_64785fb3f7.svg 2x" src="https://cdn2.fptshop.com.vn/svg/da_thong_bao_bo_cong_thuong_icon_64785fb3f7.svg"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Bản quyền @2024 bởi vBrand.</p>
                    <figure class="footer-payments">
                        <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                    </figure><!-- End .footer-payments -->
                </div>
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->



</div>



 

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="<?php echo home_url('/'); ?>">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="<?=get_template_directory_uri()?>/assets/images/nike.jpg" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="<?=get_template_directory_uri()?>/assets/images/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $themeData = vbrand_load_theme_data(); ?>
		<?php  wp_footer(); ?>

		<!-- Plugins JS File --> 
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
         <!-- Plugins JS File -->
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.hoverIntent.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.waypoints.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/superfish.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/bootstrap-input-spinner.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.plugin.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/jquery.countdown.min.js"></script>
        <!-- Main JS File -->
        <script src="<?=get_template_directory_uri()?>/assets/js/main.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/demos/demo-10.js"></script>
        
	</body>
</html>
		