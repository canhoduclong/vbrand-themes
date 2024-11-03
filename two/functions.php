<?php

function vbrand_theme_logitech_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'vbrand_theme_logitech_woocommerce_support' );
 

function vbrand_theme_logitech_get_categories() {
    $taxonomy     = 'product_cat';
      $orderby      = 'name';  
      $show_count   = 0;      // 1 for yes, 0 for no
      $pad_counts   = 0;      // 1 for yes, 0 for no
      $hierarchical = 1;      // 1 for yes, 0 for no  
      $title        = '';  
      $empty        = 0;

      $args = array(
          'taxonomy'     => $taxonomy,
          'orderby'      => $orderby,
          'show_count'   => $show_count,
          'pad_counts'   => $pad_counts,
          'hierarchical' => $hierarchical,
          'title_li'     => $title,
          'hide_empty'   => $empty
      );
      $all_categories = get_categories( $args );

      return $all_categories;
      // var_dump($all_categories[0]->name);
      // foreach ($all_categories as $cat) {
      // 	if($cat->category_parent == 0) {
      // 		$category_id = $cat->term_id;       
      // 		echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

      // 		$args2 = array(
      // 				'taxonomy'     => $taxonomy,
      // 				'child_of'     => 0,
      // 				'parent'       => $category_id,
      // 				'orderby'      => $orderby,
      // 				'show_count'   => $show_count,
      // 				'pad_counts'   => $pad_counts,
      // 				'hierarchical' => $hierarchical,
      // 				'title_li'     => $title,
      // 				'hide_empty'   => $empty
      // 		);
      // 		$sub_cats = get_categories( $args2 );
      // 		if($sub_cats) {
      // 			foreach($sub_cats as $sub_category) {
      // 				echo  $sub_category->name ;
      // 			}   
      // 		}
      // 	}       
      // }
}

/**
 * Menu vBrand Synch
 */
function vbrand_logitech_activate()
{
    $themeData = vbrand_load_theme_data();
    $menus = $themeData->get('menus'); 

    // tao pages tu menu
    foreach($menus as $menu){
        //var_dump($menu['type']); //die();
        $page = vbrand_getOrCreatePageByTemplate($menu['type'], $menu['title']);  
        if($menu['type']=='shop'){
            update_option('woocommerce_shop_page_id', $page->ID);
        }     
    } 
    //--- set frontpage 
    vbrand_setfrontPageByTemplate('page-homepage.php');
}

// vbrand_logitech_activate();

$vbrand_logitech_menu_setup = get_option('vbrand_logitech_menu_setup'); 
if (!$vbrand_logitech_menu_setup){
    vbrand_logitech_activate();
    update_option('vbrand_logitech_menu_setup', true); 
    update_option('vbrand_one_menu_setup', false);
}



/**
 * Breadcrumb
 */
 
 function theme_breadcrumbs() {
    // Define the home icon and text
    $home_icon = '<i class="fa fa-home"></i>';
    $home_text = 'Home';

    // Start the breadcrumb output
    echo '<div class="breadcrumbs">';
    echo '<a href="' . home_url() . '">' . $home_icon . ' ' . $home_text . '</a>';

    // Check if it's a single post (single.php) or a page
    if (is_single() || is_page()) {
        $post_type = get_post_type();
        $post_type_object = get_post_type_object($post_type);

        // Display category and parent pages for posts
        if ($post_type === 'post') {
            $categories = get_the_category();
            if (!empty($categories)) {
                $category = $categories[0];
                echo '<span class="sep"> &raquo; </span>';
                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
            }
        }

        // Display parent pages for pages
        elseif ($post_type === 'page') {
            $ancestors = get_post_ancestors(get_the_ID());
            if (!empty($ancestors)) {
                $ancestors = array_reverse($ancestors);
                foreach ($ancestors as $ancestor) {
                    echo '<span class="sep"> &raquo; </span>';
                    echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
                }
            }
        }

        // Display the current post or page title
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">' . get_the_title() . '</span>';
    }

    // Display the category for category archives
    elseif (is_category()) {
        $category = get_queried_object();
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">' . $category->name . '</span>';
    }

    // Display the tag for tag archives
    elseif (is_tag()) {
        $tag = get_queried_object();
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">' . $tag->name . '</span>';
    }

    // Display the search term for search results
    elseif (is_search()) {
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">Search results for "' . get_search_query() . '"</span>';
    }

    // Display the date for date archives
    elseif (is_date()) {
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">' . get_the_date() . '</span>';
    }

    // Display the author for author archives
    elseif (is_author()) {
        $author = get_queried_object();
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">Author: ' . $author->display_name . '</span>';
    }

    // Display the custom post type for custom post type archives
    elseif (is_post_type_archive()) {
        $post_type = get_queried_object();
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">' . $post_type->labels->name . '</span>';
    }

    // Display the 404 error page
    elseif (is_404()) {
        echo '<span class="sep"> &raquo; </span>';
        echo '<span class="current">404 Not Found</span>';
    }

    // End the breadcrumb output
    echo '</div>';
}