<?php

/**
 * Register shop, single product ,product category
 */
//awel 7aga unique small letter benha _
//klma f sf7a 
//group ay kalam woocommerce
if (function_exists('pll_register_string')) {
    pll_register_string('all', 'ALL', 'woocommerce');
    pll_register_string('read_more', 'READ MORE', 'woocommerce'); //done
    pll_register_string('leave_a_reply', 'Leave a Reply', 'woocommerce'); //done //comment .php 
    pll_register_string('message', 'MESSAGE', 'woocommerce'); //done// comment .php 
    pll_register_string('logged_in_as', 'Logged in as', 'woocommerce'); //done// comment .php 
    pll_register_string('log_out', 'Log out', 'woocommerce'); //done// comment .php 
    pll_register_string('no_more_items_available', 'No more items available.', 'woocommerce'); //done// parenttheme/functions/enqueue-scripts.php done fadl a7tha azai
    pll_register_string('loading', 'Loading', 'woocommerce'); //done //fadl a7tha azai 
    pll_register_string('load_more_item', 'Load More Item', 'woocommerce'); //done //fadl a7tha azai  

    pll_register_string('add_to_cart', 'ADD TO CART', 'woocommerce');
    pll_register_string('sold_by_egypt_made', 'Sold By egypt made', 'woocommerce');
    pll_register_string('quick_view', '	QUICK VIEW', 'woocommerce');
    pll_register_string('buy_on_amazon', 'BUY ON AMAZON', 'woocommerce');
    pll_register_string('description', 'Description', 'woocommerce'); //wc-template-functions.php
    pll_register_string('reviews', 'Reviews', 'woocommerce'); //plugin/include/wc-template-functions.php
    pll_register_string('related_products', 'Related Products', 'woocommerce');
    pll_register_string('default_sorting', 'DEFAULT SORTING', 'woocommerce'); //wc-template-functions.php
    pll_register_string('sort_by_popularity', 'SORT BY POPULARITY', 'woocommerce'); //wc-template-functions.php
    pll_register_string('sort_by_average_rating', 'SORT BY AVERAGE RATING', 'woocommerce'); //wc-template-functions.php
    pll_register_string('sort_by_newness', 'SORT BY NEWNESS', 'woocommerce'); //wc-template-functions.php
    pll_register_string('sort_by_average_price', 'SORT BY PRICE: LOW TO HIGH', 'woocommerce'); //wc-template-functions.php
    pll_register_string('sort_by_average_price_inverse', 'SORT BY PRICE: HIGH TO LOW', 'woocommerce'); //wc-template-functions.php
}
//
// =============================================================================
// Enqueue Scripts
// =============================================================================

if (!function_exists('getbowtied_scripts')) :

    function getbowtied_scripts() {

        if (GETBOWTIED_VISUAL_COMPOSER_IS_ACTIVE) { // If VC exists/active load scripts after VC
            $dependencies = array('jquery', 'wpb_composer_front_js');
        } else { // Do not depend on VC
            $dependencies = array('jquery');
        }

        wp_enqueue_script('getbowtied-scripts', get_template_directory_uri() . '/js/scripts-dist.js', $dependencies, getbowtied_theme_version(), TRUE);

        if (function_exists('pll_e')) {
            $nomoreItems = pll__('No more items available.');
            $loadmore = pll__('Load More Items');

            $loading = pll__('Loading');
        } else {
            $nomoreItems = _e('No more items available.', 'woocommerce');
            $loadmore = _e('Load More Items', 'woocommerce');
            $loading = _e('Loading', 'woocommerce');
        }

        // Send variables to js
        $getbowtied_scripts_vars_array = array(
            'ajax_load_more_locale' => esc_html__($loadmore, 'getbowtied'),
            'ajax_loading_locale' => esc_html__($loading, 'getbowtied'),
            'ajax_no_more_items_locale' => esc_html__($nomoreItems, 'getbowtied'),
            'blog_pagination_type' => getbowtied_theme_option('blog_pagination', 'infinite_scroll'),
            'blog_layout' => getbowtied_theme_option('blog_layout', 'blog_layout_default'),
            'shop_pagination_type' => getbowtied_theme_option('shop_pagination', 'infinite_scroll'),
            'shop_layout_style' => getbowtied_theme_option('shop_layout_style', 'regular'),
        );

        wp_localize_script('getbowtied-scripts', 'getbowtied_scripts_vars', $getbowtied_scripts_vars_array);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'getbowtied_scripts');
endif;
add_filter( 'woocommerce_get_item_data',  'custom_sold_by' , 10, 2 );

add_filter('woocommerce_get_item_data', 'custom_sold_by', 10, 2);

function custom_sold_by($values, $cart_item) {
    $vendor_id = $cart_item['data']->post->post_author;
    $sold_by_label = pll_e(WC_Vendors::$pv_options->get_option('sold_by_label'));
    $sold_by = WCV_Vendors::is_vendor($vendor_id) ? sprintf('<a href="%s" target="_TOP">%s </a>', WCV_Vendors::get_vendor_shop_page($vendor_id), WCV_Vendors::get_vendor_sold_by($vendor_id)) : get_bloginfo('name');

    $values[] = array(
        'name' => apply_filters('wcvendors_cart_sold_by', $sold_by_label, $cart_item['data']->post->ID, $cart_item['data']->post->post_author),
        'display' => $sold_by,
    );

    return $values;
}
