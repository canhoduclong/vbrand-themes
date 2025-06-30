<?php

/** Cấu hình nội dung cho các trang & cho toàn trang **
 * 1. Home
 * 2. About us
 * 3. News
 * 4. Contact
 * 5. Shop
 * 
 */

return [

    'sessions' => [
        ['name' => 'general', 'title' => 'CHUNG'],
        ['name' => 'menu', 'title' => 'MENU'],
        ['name' => 'home', 'title' => 'HOME'],
        ['name' => 'about-us', 'title' => 'ABOUT US'],
        ['name' => 'partner', 'title' => 'Parnter'],
    ],

    'options' => [

        // CẤU HÌNH CHUNG CHO WEBSITE 
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'site_name',
            'label' => 'Tên webiste',
            'default' => 'vBrand Theme One',
        ],
        // MENU AND ASSIGN TO PAGE
        [
            'session' => 'menu',
            'type' => 'list',       // LOẠI DỮ LIỆU LÀ LIST
            'name' => 'menus',
            'label' => 'Menus',
            'max' => 10,            // ĐẶC TRƯNG CÓ THỂ THÊM TỐI ĐA NHÓM DỮ LIỆU
            'default' => [
                [
                    'show' => true,
                    'title' => 'Trang chủ',
                    'type' => 'page-homepage.php',
                ],
                [
                    'show' => true,
                    'title' => 'Về chúng tôi',
                    'type' => 'page-aboutus.php',
                ],
                [
                    'show' => true,
                    'title' => 'Gian hàng',
                    'type' => 'shop',
                ],
                [
                    'show' => true,
                    'title' => 'Tin tức',
                    'type' => 'page-news.php',
                ],
                [
                    'show' => true,
                    'title' => 'Liên hệ',
                    'type' => 'page-contact.php',
                ],

            ],

            // ĐỊNH NGHĨA DỮ LIỆU CHO TỪNG ITEMS TRONG LIST PHÍA TRÊN
            // MỖII ITEM CÓ TỐI THIỂU CÁC LỰA CHỌN SAU
            'schema' => [
                [
                    'type' => 'boolean',
                    'name' => 'show',
                    'label' => 'Hiển thị',
                    'default' => true,
                ],
                [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Tên menu',
                    'default' => '',
                ],
                [
                    'type' => 'select',
                    'name' => 'type',
                    'label' => 'Chọn Loại Menu',
                    'default' => '',
                    'options' => [
                        ['value' => 'page-homepage.php', 'text' => 'Home'],
                        ['value' => 'page-aboutus.php', 'text' => 'About Us'],
                        ['value' => 'shop', 'text' => 'Shop'],
                        ['value' => 'page-news.php', 'text' => 'News'],
                        ['value' => 'page-contact', 'text' => 'Contact Us'],
                    ],
                ],
            
            ],
        ],
        
        //  SLIDER 
        [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Slider',
            'name'=>'slider',
            'max' => 10,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'image',
                    'name' => 'anh',
                    'label' => 'Tải ảnh',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'slidertitle',
                    'label' => 'Tiêu đề slider',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'slidertitlesub',
                    'label' => 'Tiêu đề slider dòng 2',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'slidertitlesecond',
                    'label' => 'Tiêu đề slider dòng 3',
                    'default' => '',
                ],
                [
                    'type' => 'textarea',
                    'name' => 'slideralias',
                    'label' => 'Diễn giải ngắn',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'buybtn',
                    'label' => 'Mua ngay',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'buybtn_link',
                    'label' => 'URL mua ngay',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[
                [
                    'anh' => get_template_directory_uri().'/assets/images/slide-2.jpg',
                    'slidertitle' => 'Phong cách mạnh mẽ',
                    'slidertitlesub' => 'Nổi bật',
                    'slidertitlesecond' => '', 
                    'slideralias' => 'Chỉ từ 2.000.000 VNĐ ',
                    'buybtn' => 'Mua ngay',
                    'buybtn_link' => '/gian-hang/',
                ],
                [
                    'anh' => get_template_directory_uri().'/assets/images/slide-3.jpg',
                    'slidertitle' => 'Phong cách thanh lịch mang đậm chất',
                    'slidertitlesub' => 'Nổi bật hơn',
                    'slidertitlesecond' => '', 
                    'slideralias' => 'Chỉ từ 1.000.000 VNĐ ',
                    'buybtn' => 'Mua ngay',
                    'buybtn_link' => '/gian-hang/',
                ],
            ],
        ],
         // HOME PAGE: NEWS 
        [
            'session'=>'home',
            'type'=>'list', 
            'label' => 'News',
            'name'=>'news',
            'max' => 10,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'image',
                    'name' => 'banner',
                    'label' => 'Tải ảnh',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'bannertitle',
                    'label' => 'Tiêu đề Tin',
                    'default' => '',
                ], 
                [
                    'type' => 'textarea',
                    'name' => 'banneralias',
                    'label' => 'Diễn giải ngắn',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'morelink',
                    'label' => 'URL xem thêm',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'moretitle',
                    'label' => 'Tiêu đề link',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
               
                [
                    'banner' => get_template_directory_uri().'/assets/images/news/tin-2.png',
                    'bannertitle' => 'TAI NGHE CÔNG NGHỆ AI', 
                    'banneralias' => 'Dòng sản phẩm mới dành cho Nội Thất Gia Đình lần này tập trung vào các nhóm sản phẩm: Bàn ghế gấp, Bàn ghế ăn, Bàn ghế sofa,…  Bên cạnh đó, Nội thất 190 cũng ra mắt các màu vải mới, với những tông màu nhẹ nhàng như kem, be để đáp ứng thêm sở thích.',
                        'morelink' => '',
                    'moretitle' => '',
                ],
                 [
                    'banner' => get_template_directory_uri().'/assets/images/news/tin-3.png',
                    'bannertitle' => 'TAI NGHE CÔNG NGHỆ AI', 
                    'banneralias' => 'Bàn ghế mây tre phòng khách đóng vai trò cực kỳ quan trọng trong ngôi nhà. Bởi đây không chỉ là điểm nhấn giúp ghi điểm trong lòng các vị khách ghé chơi mà còn thể hiện cá tính và độ tư duy thẩm mỹ của gia chủ. Ngày nay khi lối sống xanh lan.',
                    'morelink' => '',
                    'moretitle' => '',
                ],
                 [
                    'banner' => get_template_directory_uri().'/assets/images/news/tin-1.png',
                    'bannertitle' => 'Giải pháp kinh doanh', 
                    'banneralias' => 'Ngày Quốc tế Gia đình là ngày nào? Ngày Quốc tế Gia đình (International Day of Families) được kỷ niệm vào ngày 15 tháng 5 hàng năm. Đây là một sự kiềm nhằm tôn vinh và đánh giá cao vai trò quan trọng của gia đình trong xã hội. Nguồn gốc ra đời ngày Quốc.',
                    'morelink' => '',
                    'moretitle' => '',
                ],

            ],
        ],

        //  Banner Slider
        [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Banner Slider',
            'name'=>'bannerslider',
            'max' => 4,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'image',
                    'name' => 'banner',
                    'label' => 'Tải ảnh',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'bannertitle',
                    'label' => 'Tiêu đề banner',
                    'default' => '',
                ], 
                [
                    'type' => 'textarea',
                    'name' => 'banneralias',
                    'label' => 'Diễn giải ngắn',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'saleoff',
                    'label' => 'saleoff',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'morelink',
                    'label' => 'URL xem thêm',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'moretitle',
                    'label' => 'Tiêu đề link',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
                [
                    'banner' => get_template_directory_uri().'/assets/images/banner-1.jpg',
                    'bannertitle' => 'THIẾT KẾ VÌ SỰ<br>BỀN VỮNG', 
                    'banneralias' => 'sắc nét với webcam tiên tiến nhất ',
                    'saleoff' => 'Sale Off',
                    'morelink' => '/gian-hang/',
                    'moretitle' => 'Xem thêm',
                ],
                [
                    'banner' => get_template_directory_uri().'/assets/images/banner-2.jpg',
                    'bannertitle' => 'Phong Cách', 
                    'banneralias' => 'người Tốt',
                    'saleoff' => 'Sale Off',
                    'morelink' => '/ve-chung-toi/',
                    'moretitle' => 'Chi tiết',
                ],
                [
                    'banner' => get_template_directory_uri().'/assets/images/banner-3.jpg',
                    'bannertitle' => 'THIẾT KẾ VÌ SỰ<br>BỀN VỮNG', 
                    'banneralias' => 'tới nay của chúng tôi.',
                    'saleoff' => 'Sale Off',
                    'morelink' => '/gian-hang/',
                    'moretitle' => 'Mua ngay',
                ],
                [
                    'banner' => get_template_directory_uri().'/assets/images/banner-4.jpg',
                    'bannertitle' => ' Future Positive Challenge', 
                    'banneralias' => 'Một thách thức.',
                    'saleoff' => 'Sale Off',
                    'morelink' => '/ve-chung-toi/',
                    'moretitle' => 'Mua ngay',
                ],

            ],
        ],

        //  Banner freeship
        [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Banner freeship',
            'name'=>'bannerfreeship',
            'max' => 4,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'image',
                    'name' => 'banner',
                    'label' => 'Tải ảnh',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'bannertitle',
                    'label' => 'Tiêu đề banner',
                    'default' => '',
                ], 
                [
                    'type' => 'text',
                    'name' => 'morelink',
                    'label' => 'URL xem thêm',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'moretitle',
                    'label' => 'Tiêu đề link',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
                [
                    'banner' => get_template_directory_uri().'/assets/images/banner-1.jpg',
                    'bannertitle' => 'New Deals! Start Daily at 12pm e.t.', 
                    'banneralias' => 'Get <em class="font-weight-medium">FREE SHIPPING* &amp; 5% rewards</em> on every order with Molla Theme rewards program', 
                    'morelink' => '/gian-hang/',
                    'moretitle' => 'Add to Cart for $50.00/yr',
                ]

            ],
        ],

        //  Banner Icons Support
        [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Support Icons',
            'name'=>'support',
            'max' => 4,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'text',
                    'name' => 'icon',
                    'label' => 'Biểu tượng',
                    'default' => 'icon-rotate-left',
                ],
                [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Tiêu đề',
                    'default' => '',
                ], 
                [
                    'type' => 'text',
                    'name' => 'alias',
                    'label' => 'Diễn giải ngắn',
                    'default' => '',
                ]
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
                [
                    'icon' => 'icon-rocket',
                    'title' => 'MIỄN PHÍ SHIP', 
                    'alias' => 'Cho đơn từ 500.000 đ', 
                ],
                [
                   'icon' => 'icon-rotate-left',
                    'title' => 'TRẢ HÀNG MIỄN PHÍ', 
                    'alias' => 'Trong 30 ngày', 
                ],
                [
                    'icon' => 'icon-info-circle',
                    'title' => 'Giảm 20% cho 1 sản phẩm', 
                    'alias' => 'khi bạn đăng ký', 
                ],
                [
                    'icon' => 'icon-box-content',
                    'title' => 'CHÚNG TÔI HỖ TRỢ', 
                    'alias' => '24/7 trực tuyến',
                ]
            ]
        ], 

        // HOME PAGE: PRODUCTS TABS
        [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Products Tabs',
            'name'=>'products_tabs',
            'max' => 5,

            //  ĐỊNH NGHĨA MỖI SLIDER GỒM CÓ CÁC CẤU TRÚC SAU
            'schema'=>[
                [
                    'type' => 'text',
                    'name' => 'tab_name',
                    'label' => 'Tab name',
                    'default' => '',
                ],
                [
                    'type' => 'select',
                    'name' => 'type',
                    'label' => 'Type',
                    'default' => 'all',
                    'options' => [
                        ['value' => 'all', 'text' => 'Mặc định'],
                        ['value' => 'hot', 'text' => 'Hot'],
                        ['value' => 'featured', 'text' => 'Featured'],
                        ['value' => 'new', 'text' => 'New'],
                    ],
                ],
                [
                    'type' => 'select',
                    'name' => 'limit',
                    'label' => 'Number of Products',
                    'default' => 10,
                    'options' => [
                        ['value' => 5, 'text' => 5],
                        ['value' => 10, 'text' => 10],
                        ['value' => 15, 'text' => 15],
                        ['value' => 20, 'text' => 20],
                    ],
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
                [
                    'tab_name' => 'MỚI NHẤT',
                    'type' => 'new', 
                    'limit' => 10,
                ],
                [
                    'tab_name' => 'BÁN CHẠY',
                    'type' => 'hot', 
                    'limit' => 10,
                ],
                [
                    'tab_name' => 'ĐƯỢC KHUYẾN NGHỊ',
                    'type' => 'featured', 
                    'limit' => 10,
                ],
            ],
        ],
        
        // PRODUCTS MODULE
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'products_module_show',
            'label' => 'Show Products Module',
            'default' => true,
        ],

        // CHUOI CUA HANG
        //--- CUA HANG SO 1
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'shop_module_show',
            'label' => 'Cửa hàng 1',
            'default' => true,
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'shop_banner_one',
            'label' => 'Shop Banner 1',
            'default' => get_template_directory_uri() . '/assets/images/banners/shop-1.jpg',
            
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'shop_banner_one_title',
            'label' => 'Shop Banner Title',
            'default' => 'DÒNG ERGO',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_one_alias',
            'label' => 'Shop Banner Alias',
            'default' => '',
        ],
        //--- CUA HANG SO 2 
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'shop_banner_two',
            'label' => 'Shop Banner 1',
            'default' => get_template_directory_uri() . '/assets/images/banners/shop-2.jpg',
            
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'shop_banner_two_title',
            'label' => 'Shop Banner Title',
            'default' => 'DÒNG MX MASTER',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_two_alias',
            'label' => 'Shop Banner Alias',
            'default' => '',
        ],
        
        //--- CUA HANG SO 3
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'shop_banner_three',
            'label' => 'Shop Banner 1',
            'default' => get_template_directory_uri() . '/assets/images/banners/shop-3.jpg',
            
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'shop_banner_three_title',
            'label' => 'Shop Banner Title',
            'default' => 'DÀNH CHO LẬP TRÌNH VIÊN',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_three_alias',
            'label' => 'Shop Banner Alias',
            'default' => '',
        ],
        //--- CUA HANG SO 4
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'shop_banner_four',
            'label' => 'Shop Banner 1',
            'default' => get_template_directory_uri() . '/assets/images/banners/shop-4.jpg',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'shop_banner_four_title',
            'label' => 'Shop Banner Title',
            'default' => 'DÀNH CHO CÔNG VIỆC SÁNG TẠO',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_four_alias',
            'label' => 'Shop Banner Alias',
            'default' => '',
        ],

        //--- CUA HANG SO 5
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'shop_banner_five',
            'label' => 'Shop Banner 1',
            'default' => get_template_directory_uri() . '/assets/images/banners/shop-5.jpg',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'shop_banner_five_title',
            'label' => 'Shop Banner Title',
            'default' => 'SẴN SÀNG MANG THEO',
        ],

        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'footer_description',
            'label' => 'Description',
            'default' => 'Giới thiệu công ty dưới footêr',
        ],

        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_five_alias',
            'label' => 'Shop Banner Alias',
            'default' => '',
        ],

        // ABOUT US
        [
            'session' => 'about-us',
            'type' => 'boolean',
            'name' => 'about_us_show',
            'label' => 'Show About Us Module',
            'default' => true,
        ],

        [
            'session' => 'home',
            'type' => 'list',
            'label' => "Banner Group: Mua Sắm Sản Phẩm",
            'name' => 'shopping_banner_group',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'image',
                    'name' => 'image',
                    'label' => 'Banner Image',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Banner Title',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'link',
                    'label' => 'Banner Link',
                    'default' => '#',
                ],
            ],
            'default' => [
                [
                    'image' => get_template_directory_uri().'/assets/images/products/chuot.jpg',
                    'title' => 'Chuột',
                    'link' => '#',
                ],
                [
                    'image' => get_template_directory_uri().'/assets/images/products/ipad-devaices.jpg',
                    'title' => 'Các trường họp bàn phím ipad',
                    'link' => '#',
                ],
                [
                    'image' => get_template_directory_uri().'/assets/images/products/keyboards-horizontal-gallery-desktop-2.jpg',
                    'title' => 'Bàn phím',
                    'link' => '#',
                ],
                [
                    'image' => get_template_directory_uri().'/assets/images/products/bo-doi.jpg',
                    'title' => 'Bộ đôi',
                    'link' => '#',
                ],
                [
                    'image' => get_template_directory_uri().'/assets/images/products/tai-nghe.jpg',
                    'title' => 'Tai nghe & Erabuds',
                    'link' => '#',
                ],
                [
                    'image' => get_template_directory_uri().'/assets/images/products/webcam.jpg',
                    'title' => 'WEBCAM',
                    'link' => '#',
                ],
            ],
        ],


        // FOOTER WIDGETS
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_widget_1',
            'label' => 'Footer Widget 1: Giới thiệu',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'label',
                    'label' => 'Tên liên kết',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
            ],
            'default' => [
                ['label' => 'Câu chuyện về Logitech', 'url' => 'about.html'],
                ['label' => 'Nghề nghiệp', 'url' => '#'],
                ['label' => 'Nhà đầu tư', 'url' => '#'],
                ['label' => 'Blog', 'url' => 'contact.html'],
                ['label' => 'Báo chí', 'url' => 'login.html'],
                ['label' => 'Liên hệ với chúng tôi', 'url' => 'login.html'],
            ],
        ],
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_widget_2',
            'label' => 'Footer Widget 2: Giá trị',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'label',
                    'label' => 'Tên liên kết',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
            ],
            'default' => [
                ['label' => 'Con người', 'url' => '#'],
                ['label' => 'Hành tinh', 'url' => '#'],
                ['label' => 'Tái chế', 'url' => '#'],
            ],
        ],
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_widget_3',
            'label' => 'Footer Widget 3: Đối tác',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'label',
                    'label' => 'Tên liên kết',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
            ],
            'default' => [
                ['label' => 'Tìm đại lý', 'url' => '#'],
                ['label' => 'Trở thành Đối tác', 'url' => '#'],
                ['label' => 'Trở thành Đối tác của Liên minh', 'url' => '#'],
                ['label' => 'Cổng thông tin đối tác', 'url' => '#'],
            ],
        ],
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_widget_4',
            'label' => 'Footer Widget 4: Khách hàng',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'label',
                    'label' => 'Tên liên kết',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
            ],
            'default' => [
                ['label' => 'Tùy chọn email', 'url' => '#'],
            ],
        ],

        // FOOTER SOCIAL ICONS
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_social_icons',
            'label' => 'Footer Social Icons',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'select',
                    'name' => 'icon_class',
                    'label' => 'Icon Class (FontAwesome or similar)',
                    'default' => 'icon-facebook-f',
                    'options' => [
                        ['value' => 'icon-facebook-f', 'text' => 'Facebook'],
                        ['value' => 'icon-twitter', 'text' => 'Twitter'],
                        ['value' => 'icon-instagram', 'text' => 'Instagram'],
                        ['value' => 'icon-youtube', 'text' => 'Youtube'],
                        ['value' => 'icon-pinterest', 'text' => 'Pinterest'],
                        // Add more icons here if needed
                    ],
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
                [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Title',
                    'default' => '',
                ],
            ],
            'default' => [
                ['icon_class' => 'icon-facebook-f', 'url' => '#', 'title' => 'Facebook'],
                ['icon_class' => 'icon-twitter', 'url' => '#', 'title' => 'Twitter'],
                ['icon_class' => 'icon-instagram', 'url' => '#', 'title' => 'Instagram'],
                ['icon_class' => 'icon-youtube', 'url' => '#', 'title' => 'Youtube'],
                ['icon_class' => 'icon-pinterest', 'url' => '#', 'title' => 'Pinterest'],
            ],
        ],

        // FOOTER COPYRIGHT LINKS
        [
            'session' => 'general',
            'type' => 'list',
            'name' => 'footer_copyright_links',
            'label' => 'Footer Copyright Links',
            'max' => 10,
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'label',
                    'label' => 'Tên liên kết',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'url',
                    'label' => 'URL',
                    'default' => '#',
                ],
            ],
            'default' => [
                ['label' => '©2025 Logitech. Bảo lưu mọi quyền.', 'url' => '#'],
                ['label' => 'Điều khoản Sử dụng', 'url' => '#'],
                ['label' => 'Chính sách về Quyền riêng tư của', 'url' => '#'],
                ['label' => 'Cài đặt cookie', 'url' => '#'],
                ['label' => 'Bản đồ trang web', 'url' => '#'],
            ],
        ],

        
    ],
];