<?php

return [
    'sessions' => [
        ['name' => 'general', 'title' => 'Tổng quan'],
        ['name' => 'menu', 'title' => 'Menus'],
        ['name' => 'home', 'title' => 'Trang chủ'],
        ['name' => 'about-us', 'title' => 'Về chúng tôi'],
    ],

    'options' => [
        // SITE NAME
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'site_name',
            'label' => 'Tên webiste',
            'default' => 'vBrand Logitech Theme',
        ],

        // SIDE LOGO
        [
            'session' => 'general',
            'type' => 'image',
            'name' => 'site_logo',
            'label' => 'Site logo',
            'default' => 'https://upload.wikimedia.org/wikipedia/commons/1/17/Logitech_logo.svg',
        ],

        // Menus
        [
            'session' => 'menu',
            'type' => 'list',
            'name' => 'menus',
            'label' => 'Menus',
            'max' => 10,
            'default' => [
                [
                    'show' => true,
                    'title' => 'Trang chủ',
                    'type' => 'page-homepage.php',
                ],
                [
                    'show' => true,
                    'title' => 'Giới thiệu',
                    'type' => 'page-aboutus.php',
                ],

                [
                    'show' => true,
                    'title' => 'Gian Hàng',
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
            'schema' => [
                // show
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
                        ['value' => 'page-homepage.php', 'text' => 'Trang chủ'],
                        ['value' => 'page-aboutus.php', 'text' => 'Giới thiệu'],
                        ['value' => 'shop', 'text' => 'Gian hàng'],
                        ['value' => 'page-news.php', 'text' => 'Tin tức'],
                        ['value' => 'page-contact', 'text' => 'Liên hệ'],
                    ],
                ],
            
            ],
        ],

        // SLIDER BLOCK
        // show
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'show_home_slider',
            'label' => 'Show home slider',
            'default' => true,
        ],
        // sliders
        [
            'session' => 'home',
            'type' => 'list',
            'name' => 'home_sliders',
            'label' => 'Home Sliders',
            'max' => 10,
            'default' => [
                [
                    'image' => get_template_directory_uri() . '/image/future-positive-challenge-desktop.jpeg',
                    'title' => 'Example headline.',
                    'button_text' => 'Sign up today',
                    'description' => 'Some representative placeholder content for the first slide of thecarousel.',
                ],
                [
                    'image' => get_template_directory_uri() . '/image/bg-design-desktop.jpeg',
                    'title' => 'Another example headline.',
                    'button_text' => 'Learn more',
                    'description' => 'Some representative placeholder content for the first slide of thecarousel.',
                ],
                [
                    'image' => get_template_directory_uri() . '/image/climate-positive-desk.jpeg',
                    'title' => 'One more for good measure.',
                    'button_text' => 'Learn more',
                    'description' => 'Some representative placeholder content for the third slide of this carousel.',
                ],
            ],
            'schema' => [
                [
                    'type' => 'image',
                    'name' => 'image',
                    'label' => 'Slider Image',
                    'default' => get_template_directory_uri() . '/image/future-positive-challenge-desktop.jpeg',
                ],
                [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Title',
                    'default' => 'Example headline.',
                ],
                [
                    'type' => 'textarea',
                    'name' => 'description',
                    'label' => 'Description',
                    'default' => 'Some representative placeholder content for the first slide of thecarousel.',
                ],
                [
                    'type' => 'text',
                    'name' => 'button_link',
                    'label' => 'Button Link',
                    'default' => '',
                ],
                [
                    'type' => 'text',
                    'name' => 'button_text',
                    'label' => 'Button Text',
                    'default' => 'Sign up today',
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

        // Homepage Products Module
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
            'default' => 4,
            'options' => [
                ['value' => 3, 'text' => 3],
                ['value' => 4, 'text' => 4],
                ['value' => 6, 'text' => 6],
            ],
        ],

        // ARTICLES BLOCK
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'home_articles_block_show',
            'label' => 'Home Articles Block: Show',
            'default' => false,
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'home_articles_block_number',
            'label' => 'Home Articles Block: Number of Articles',
            'default' => 3,
            'options' => [
                ['value' => 3, 'text' => 3],
                ['value' => 4, 'text' => 4],
                ['value' => 6, 'text' => 6],
            ],
        ],
        [
            'session' => 'home',
            'type' => 'select',
            'name' => 'home_articles_block_sort',
            'label' => 'Home Articles Block: Sort',
            'default' => 'newest',
            'options' => [
                ['value' => 'newest', 'text' => 'Newest'],
                ['value' => 'oldest', 'text' => 'Oldest'],
            ],
        ],
        [
            'session' => 'home',
            'type' => 'text',
            'name' => 'home_articles_block_view_button_text',
            'label' => 'Home Articles Block: View button text',
            'default' => 'View details',
        ],

        // FEATURES BLOCK
        [
            'session' => 'home',
            'type' => 'boolean',
            'name' => 'home_feature_block_show',
            'label' => 'Home Feature Block: Show',
            'default' => true,
        ],
        [
            'session' => 'home',
            'type' => 'list',
            'name' => 'articles_block',
            'label' => 'Home Articles Block',
            'max' => 10,
            'default' => [
                [
                    'image' => get_template_directory_uri() . '/image/zone-wireless-2-hpb-feature-2.webp',
                    'title' => 'Pro X 2 Lightspeed. <span
                        class="text-body-secondary">Đăng cấp giải trí.</span>',
                    'description' => 'Được thiết kế cùng những người chơi chuyên nghiệp trên thế giới. Được chế tạo để giành chiến thắng.',
                ],
                [
                    'image' => get_template_directory_uri() . '/image//brio-100-hpb-feature.webp',
                    'title' => 'BRIO 100 <span
                        class="text-body-secondary">Mẫu thiết kế mới nhất.</span>',
                    'description' => 'Webcam Full HD 1080p với tính năng cân bằng sáng tự động, màn che ống kính gắn kèm và micrô tích hợp..',
                ],
            ],
            'schema' => [
                [
                    'type' => 'image',
                    'name' => 'image',
                    'label' => 'Image',
                    'default' => get_template_directory_uri() . '/image/zone-wireless-2-hpb-feature-2.webp',
                ],
                [
                    'type' => 'textarea',
                    'name' => 'title',
                    'label' => 'Title',
                    'default' => 'First featurette heading. <span
                        class="text-body-secondary">It’ll blow your mind.</span>',
                ],
                [
                    'type' => 'textarea',
                    'name' => 'description',
                    'label' => 'Description',
                    'default' => 'Some great placeholder content for the first featurette here. Imagine some exciting
                        prose here.',
                ],
            ],
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
        // FOOTER
        [
            'session' => 'general',
            'type' => 'textarea',
            'name' => 'copyright_line',
            'label' => 'Copyright Line',
            'default' => '© 2017–2023 Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
        ],
        
        // BACK TO TOP TEXT
        [
            'session' => 'general',
            'type' => 'text',
            'name' => 'back_to_top_text',
            'label' => 'Go to top text',
            'default' => 'Back to Top',
        ],
        // [
        //     'session' => 'about-us',
        //     'type' => 'boolean',
        //     'name' => 'about_us_show',
        //     'label' => 'Show About Us Module',
        //     'default' => true,
        // ],
        [
            'session' => 'about-us',
            'type' => 'text',
            'name' => 'about_us_title',
            'label' => 'About Us title',
            'default' => 'Tiêu đề mặc định của trang about us ',
        ],
        [
            'session' => 'about-us',
            'type' => 'textarea',
            'name' => 'about_us_content',
            'label' => 'About Us Content',
            'default' => 'Nội dung mặc định của trang about us ',
        ],
    ],
];

?> 