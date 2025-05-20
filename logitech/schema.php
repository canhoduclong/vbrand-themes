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
        // Email
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'site_email',
            'label' => 'Email Liên hệ',
            'default' => 'support@google.com',
        ],
        // Phone
        [
            'session' => 'general',
            'type' => 'list',
            'layout_admin' => 'text',
            'name' => 'site_phone',
            'label' => 'Số điện thoại liên hệ', 
            'max' => 10, 
            'schema' => [
                [
                    'type' => 'text',
                    'name' => 'site_phone_number',
                    'label' => 'Số điện thoại',
                    'default' => 'Ex: 0904.049.522',
                ],
                [
                    'type' => 'text',
                    'name' => 'site_phone_title',
                    'label' => 'Tiêu đề',
                    'default' => 'Ex: Phòng Kinh Doanh',
                ],
                [
                    'type' => 'text',
                    'name' => 'site_phone_alias',
                    'label' => 'Diễn giải',
                    'default' => 'Ex: Liên hệ 24/7 ',
                ],

            ],
            'default' =>[
                [
                    
                ]
            ]
        ],
        // Facebook link
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'site_link_facebook',
            'label' => 'Link Fanpage',
            'default' => 'Đường dân trang facebook',
        ],
        // TicTok Link
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'site_link_tictok',
            'label' => 'link TicTok',
            'default' => 'Đường dân trang TicTok',
        ],
        // SIDE LOGO
        [
            'session' => 'general',
            'type' => 'image',      // LOẠI DỮ LIỆU LÀ IMAGE
            'name' => 'site_logo',
            'label' => 'Site logo',
            'default' => null,
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
                    'name' => 'morebtn',
                    'label' => 'Xem thêm',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'buybtn',
                    'label' => 'Mua ngay',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[
                [
                    'anh' => get_template_directory_uri().'/assets/images/mx-banner.jpg',
                    'slidertitle' => 'Họp mặt',
                    'slidertitlesub' => 'Truyền phát',
                    'slidertitlesecond' => 'Chinh phục', 
                    'slideralias' => 'Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. ',
                    'morebtn' => 'Tìm hiểu thêm',
                    'buybtn' => 'Mua ngay',
                ],
                [
                    'anh' => get_template_directory_uri().'/assets/images/challenge-desktop.jpg',
                    'slidertitle' => 'Họp mặt',
                    'slidertitlesub' => 'Truyền phát',
                    'slidertitlesecond' => 'Chinh phục', 
                    'slideralias' => 'Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. ',
                    'morebtn' => 'Tìm hiểu thêm',
                    'buybtn' => 'Mua ngay',
                ],
                [
                    'anh' => get_template_directory_uri().'/assets/images/banner-desktop.jpg',
                    'slidertitle' => 'Họp mặt',
                    'slidertitlesub' => 'Truyền phát',
                    'slidertitlesecond' => 'Chinh phục', 
                    'slideralias' => 'Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. ',
                    'morebtn' => 'Tìm hiểu thêm',
                    'buybtn' => 'Mua ngay',
                ],
            ],
        ],
        
        // BANNER
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'banner_image',
            'label' => 'Banner Image',
            'default' => get_template_directory_uri() . '/images/couch.png',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'banner_title',
            'label' => 'Banner Title',
            'default' => 'Thiết kế nội thất<span clsas="d-block">hiện đại</span>',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'banner_description',
            'label' => 'Banner Description',
            'default' => 'Thiết kế nội thất hiện đại kết hợp sự tiện nghi và thẩm mỹ, tập trung vào sự đơn giản, linh hoạt và sử dụng tối đa ánh sáng tự nhiên. Vật liệu công nghệ cao như kính, thép không gỉ được ưa chuộng, tạo không gian mở rộng và hiện đại. Màu sắc trung tính kết hợp với điểm nhấn màu sắc táo bạo, đèn led và ánh sáng mềm mại tạo điểm nhấn và sự ấm áp cho không gian. Thiết kế này không chỉ tiện nghi mà còn thể hiện phong cách và cá nhân của gia chủ.',
        ],

         //  Banner Slider
         [
            'session'=>'home',
            'type'=>'list',
            'label' => 'Banner Slider',
            'name'=>'bannerslider',
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
                    'name' => 'morelink',
                    'label' => 'URL xem thêm',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'mortitle',
                    'label' => 'Tiêu đề link',
                    'default' => '',
                ],
            ],

            // ĐÂY LÀ DỮ LIỆU MẪU
            'default'=>[ 
                [
                    'anh' => get_template_directory_uri().'/assets/images/challenge-desktop.jpg',
                    'bannertitle' => 'Họp mặt', 
                    'banneralias' => 'Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. ',
                    'morelink' => 'Tìm hiểu thêm',
                    'mortitle' => 'Mua ngay',
                ],
                [
                    'anh' => get_template_directory_uri().'/assets/images/banner-desktop.jpg',
                    'bannertitle' => 'Họp mặt', 
                    'banneralias' => 'Giới thiệu MX Brio. Trải nghiệm video ultra HD 4K sắc nét với webcam tiên tiến nhất từ trước tới nay của chúng tôi. ',
                    'morelink' => 'Tìm hiểu thêm',
                    'mortitle' => 'Mua ngay',
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
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'products_module_title',
            'label' => 'Products Module Title',
            'default' => 'SẢN PHẨM MỚI',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'products_module_description',
            'label' => 'Products Module Description',
            'default' => 'Mẫu sản phẩm mới nhất được chúng tôi cập nhật hàng ngày',
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'products_module_type',
            'label' => 'Products Module: Type',
            'default' => 'all',
            'options' => [
                ['value' => 'all', 'text' => 'Mặc định'],
                ['value' => 'hot', 'text' => 'Hot'],
                ['value' => 'feature', 'text' => 'Feature'],
                ['value' => 'new', 'text' => 'New'],
            ],
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'products_module_number',
            'label' => 'Products Module: Number of Products',
            'default' => 3,
            'options' => [
                ['value' => 2, 'text' => 2],
                ['value' => 3, 'text' => 3],
                ['value' => 5, 'text' => 5],
            ],
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
            'default' => 'Coffee Table',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_one_alias',
            'label' => 'Shop Banner Alias',
            'default' => 'From $19,000.',
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
            'default' => 'Coffee Table',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_two_alias',
            'label' => 'Shop Banner Alias',
            'default' => 'From $19,000.',
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
            'default' => 'Coffee Table',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_three_alias',
            'label' => 'Shop Banner Alias',
            'default' => 'From $19,000.',
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
            'default' => 'Coffee Table',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_four_alias',
            'label' => 'Shop Banner Alias',
            'default' => 'From $19,000.',
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
            'default' => 'Coffee Table',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'shop_banner_five_alias',
            'label' => 'Shop Banner Alias',
            'default' => 'From $19,000.',
        ],

        



        //--- 3 posts


        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'why_us_module_block_1_title',
            'label' => 'Why Us Module: Block 1 Title',
            'default' => 'Nhanh & Vận chuyển Free',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'why_us_module_block_1_description',
            'label' => 'Why Us Module: Block 1 Description',
            'default' => 'Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'why_us_module_block_1_icon',
            'label' => 'Why Us Module: Block 1 Icon',
            'default' => get_template_directory_uri() . '/images/truck.svg',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'why_us_module_block_2_title',
            'label' => 'Why Us Module: Block 2 Title',
            'default' => 'Nhanh & Vận chuyển Free',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'why_us_module_block_2_description',
            'label' => 'Why Us Module: Block 2 Description',
            'default' => 'Vận chuyển nhanh chóng, không phát sinh chi phí vì dịch vụ hoàn toàn miễn phí',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'why_us_module_block_2_icon',
            'label' => 'Why Us Module: Block 2 Icon',
            'default' => get_template_directory_uri() . '/images/bag.svg',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'why_us_module_block_3_title',
            'label' => 'Why Us Module: Block 3 Title',
            'default' => '24/7 Hỗ trợ',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'why_us_module_block_3_description',
            'label' => 'Why Us Module: Block 3 Description',
            'default' => 'Chúng tôi Luôn luôn ở đây, 24/7. Hãy tin tưởng chúng tôi khi bạn cần gấp.',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'why_us_module_block_3_icon',
            'label' => 'Why Us Module: Block 3 Icon',
            'default' => get_template_directory_uri() . '/images/support.svg',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'why_us_module_block_4_title',
            'label' => 'Why Us Module: Block 4 Title',
            'default' => 'Thiết kế sáng tạo, hiện đại',
        ],
        [
            'session' => 'home',
            'type' => 'textarea',
            'name' => 'why_us_module_block_4_description',
            'label' => 'Why Us Module: Block 4 Description',
            'default' => 'Với nhiều thiết kế đẹp, sáng tạo, luôn mang đến cho bạn sức sống mới.',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'why_us_module_block_4_icon',
            'label' => 'Why Us Module: Block 4 Icon',
            'default' => get_template_directory_uri() . '/images/return.svg',
        ],

        
        // OURS project
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'our_project_module_show',
            'label' => 'Show Our Project Module',
            'default' => true,
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'our_project_module_title',
            'label' => 'Our Project Module Title',
            'default' => 'Dự án',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'our_project_module_alias',
            'label' => 'Our Project Module Alias',
            'default' => 'Dự án đã triển khai',
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'our_project_module_description',
            'label' => 'Our Project Module Description',
            'default' => 'Trải nghiệm các dự án do chúng tôi trực tiếp thiết kế và thi công',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'our_project_project_1',
            'label' => 'Our Project Module: Project 1',
            'default' => get_template_directory_uri() . '/images/project-1.jpg',
        ],
        [
            'session' => 'home',
            'type' => 'image',
            'name' => 'our_project_project_2',
            'label' => 'Our Project Module: Project 2',
            'default' => get_template_directory_uri() . '/images/project-2.jpg',
        ], 


        // ARTICLES
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'articles_module_show',
            'label' => 'Show Articles Module',
            'default' => true,
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'articles_module_number',
            'label' => 'Articles Module: Number of Articles',
            'default' => 3,
            'options' => [
                ['value' => 2, 'text' => 2],
                ['value' => 3, 'text' => 3],
                ['value' => 4, 'text' => 4],
            ],
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'articles_module_sort',
            'label' => 'Articles Module: Sort',
            'default' => 'newest',
            'options' => [
                ['value' => 'newest', 'text' => 'Newest'],
                ['value' => 'oldest', 'text' => 'Oldest'],
            ],
        ],

        // FOOTER
        [
            'session' => 'general',
            'type' => 'textarea',
            'name' => 'copyright_line',
            'label' => 'Copyright Line',
            'default' => '© 2017–2023 vBrand Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
        ],

        // FOOTER LOGO
        [
            'session' => 'general',
            'type' => 'image',
            'name' => 'footer_logo',
            'label' => 'Footer Logo',
            'default' => get_template_directory_uri() . '/images/sofa.png',
        ],
        
        // FOOTER LOGO
        [
            'session' => 'general',
            'type' => 'image',
            'name' => 'aboutus_image',
            'label' => 'Image About Us',
            'default' => get_template_directory_uri() . '/images/why-choose-us-img.jpg',
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
            'session' => 'about-us',
            'type' => 'text',
            'name' => 'aboutus_title',
            'label' => 'About Us title',
            'default' => 'Giới thiệu',
        ],
        [
            'session' => 'about-us',
            'type' => 'textarea',
            'name' => 'aboutus_content',
            'label' => 'About Us content',
            'default' => '<p>chúng tôi mang lại sự kết hợp hoàn hảo giữa thiết kế độc đáo và chất lượng xuất sắc. Chúng tôi tôn trọng nguyên liệu tự nhiên và sử dụng chúng để tạo ra những sản phẩm nội thất đẹp mắt và bền bỉ. </p>   ',
        ],



        [
            'session' => 'chung',
            'type' => 'select',
            'name' => 'module_home_articles_number',
            'label' => 'So luong bai viet',
            'default' => 4,
            'options' => [
                ['value' => 2, 'text' => 2],
                ['value' => 3, 'text' => 3],
                ['value' => 4, 'text' => 4],
            ],

        ],

        [
            'session' => 'chung',
            'type' => 'text',
            'name' => 'module_home_articles_title',
            'label' => 'TIeu de cho model bai viet ỏ trang chu',
            'default' => 'Bai Viet Gan Day',
        ],

        [
            'session' => 'chung',
            'type' => 'textarea',
            'name' => 'module_home_articles_déc',
            'label' => 'dong mo ta cua module, de trong thi khong hien',
            'default' => '',
        ],

        [
            'session' => 'chung',
            'type' => 'select',
            'name' => 'module_home_articles_order',
            'label' => 'Bai viet hien thi',
            'default' => 'new',
            'options' => [
                ['value' => 'new', 'text' => 'Bai viet moi nhat'],
                ['value' => 'read_count', 'text' => 'Bai viet xem nhieu'],
                ['value' => 'old', 'text' => 'Bai cu nhat'],
            ],

        ],
    ],
];