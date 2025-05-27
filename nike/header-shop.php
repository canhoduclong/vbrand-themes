<?php
    $themeData = vbrand_load_theme_data();
?>
<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <title><?php echo $themeData->get('site_name', 'Logitech Shop'); ?></title>
        <meta name="keywords" content="<?php echo $themeData->get('site_name', 'Logitech Shop'); ?>">
        <meta name="description" content="<?php echo $themeData->get('site_desctiption', 'Logitech Shop plays a crucial role in shaping the ambiance and functionality of retail spaces'); ?>">
        <meta name="author" content="vBrand">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/assets/images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/assets/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/assets/images/icons/favicon-16x16.png">
        <link rel="manifest" href="<?=get_template_directory_uri()?>/assets/images/icons/site.html">
        <link rel="mask-icon" href="<?=get_template_directory_uri()?>/assets/images/icons/safari-pinned-tab.svg" color="#666666">
        <link rel="shortcut icon" href="<?=get_template_directory_uri()?>/assets/images/icons/favicon.ico">
        <meta name="apple-mobile-web-app-title" content="Molla">
        <meta name="application-name" content="Molla">
        <meta name="msapplication-TileColor" content="#cc9966">
        <meta name="msapplication-config" content="<?=get_template_directory_uri()?>/assets/images/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>

        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
        
        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/plugins/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/plugins/jquery.countdown.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css"> 

        <!-- chngse style heree -->
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/skins/skin-demo-10.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/demos/demo-10.css">
        <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/customs.css">

    </head>
    <body> 

        <div class="page-wrapper">
        <header class="header header-8">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                    <li><a href="wishlist.html"><i class="icon-heart-o"></i>My Wishlist <span>(3)</span></a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.html" class="logo">
                            <img src="<?=get_template_directory_uri()?>/assets/images/nike.jpg" alt="Molla Logo"  height="75">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu">
                            <?php foreach ($themeData->get('menus') as $key => $menu) { 
                                        if ($menu['show'] == 'true') {
                                            if ($menu['type'] == 'page-homepage.php')
                                            {
                                                $page = vbrand_getOrCreatePageByTemplate('page-homepage.php');
                                                $menuLink = get_permalink( $page->ID );

                                            }else if ($menu['type'] == 'page-aboutus.php')
                                            {
                                                $page = vbrand_getOrCreatePageByTemplate('page-aboutus.php');
                                                $menuLink = get_permalink( $page->ID );

                                            } else if ($menu['type'] == 'shop') { 
                                                if (class_exists('WooCommerce')) { 
                                                    if(get_option( 'woocommerce_shop_page_id' )){ 
                                                        $menuLink = get_permalink( wc_get_page_id( 'shop' ) ); 
                                                    }else{
                                                        echo "không tim thấy trang shop, vui lòng kiểm tra cấu hình của woocomerce";
                                                    }
                                                } else {
                                                    echo "chưa cài WooCommerce";
                                                }
                                            } else if ($menu['type'] == 'page-news.php') {

                                                $page = vbrand_getOrCreatePageByTemplate('page-news.php');
                                                $menuLink = get_permalink( $page->ID );

                                            } else if ($menu['type'] == 'page-contact.php') {
                                                $page = vbrand_getOrCreatePageByTemplate('page-contact.php');
                                                $menuLink = get_permalink( $page->ID );
                                            }
                                        ?>
                                        <li>
                                            <a href="<?= $menuLink ?>">
                                                <?= $menu['title'] ?>
                                            </a>
                                        </li><?php 
                                        }
                                    } ?> 
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <?php echo do_shortcode('[custom_product_search]'); ?>
                        </div><!-- End .header-search -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">

 