<?php

require_once 'functions1.php';
require_once 'functions2.php';

// register wc vendor translate strings
add_action('wp_enqueue_scripts', 'register_theme_enqueue_styles');

function register_theme_enqueue_styles() {
    // custom script
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js');
    
    // datepicker
    wp_enqueue_style('datepicker-style', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    wp_enqueue_script('datepicker-script', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
}

if (function_exists('pll_register_string')) {
    pll_register_string('view_your_store', 'View Your Store', 'wc-vendors');
    pll_register_string('store_settings', 'Store Settings', 'wc-vendors');
    pll_register_string('add_new_product', 'Add New Product', 'wc-vendors');
    pll_register_string('edit_products', 'Edit Products', 'wc-vendors');

    pll_register_string('sales_report', 'Sales Report', 'wc-vendors');
    pll_register_string('product', 'Product', 'wc-vendors');
    pll_register_string('quantity', 'Quantity', 'wc-vendors');
    pll_register_string('commission', 'Commission', 'wc-vendors');
    pll_register_string('rate', 'Rate', 'wc-vendors');
    pll_register_string('totals', 'Totals', 'wc-vendors');
    pll_register_string('show_orders', 'Show Orders', 'wc-vendors');
    pll_register_string('no_sales_period', 'You have no sales during this period', 'wc-vendors');
    pll_register_string('no_sales_made', 'You haven\'t made any sales yet', 'wc-vendors');

    pll_register_string('from', 'From:', 'wc-vendors');
    pll_register_string('to', 'To:', 'wc-vendors');
    pll_register_string('show', 'Show', 'wc-vendors');

    pll_register_string('account_not_approved', 'Your account has not yet been approved to become a vendor.  When it is, you will receive an email telling you that your account is approved!', 'wc-vendors');
    pll_register_string('account_not_vendor', 'Your account is not setup as a vendor.', 'wc-vendors');
    pll_register_string('apply_avendor', 'Apply to become a vendor?', 'wc-vendors');
    pll_register_string('submit_vendor', 'Submit', 'wc-vendors');

    pll_register_string('vendor_adminstartion_denied', 'Application denied. You are an administrator.', 'wc-vendors');
    
    pll_register_string('hide_items', 'Hide items', 'wc-vendors');
    pll_register_string('view_items', 'View items', 'wc-vendors');
    
    pll_register_string('vendor_orders', 'Orders', 'wc-vendors');
    pll_register_string('vendor_order', 'Order', 'wc-vendors');
    pll_register_string('vendor_shipping', 'Shipping', 'wc-vendors');
    pll_register_string('vendor_total', 'Total', 'wc-vendors');
    pll_register_string('vendor_date', 'Date', 'wc-vendors');
    pll_register_string('vendor_links', 'Links', 'wc-vendors');
    pll_register_string('vendor_mark_shipped', 'Mark shipped', 'wc-vendors');
    pll_register_string('vendor_shipped', 'Shipped', 'wc-vendors');
    pll_register_string('vendor_tracking', 'Tracking', 'wc-vendors');
    
    pll_register_string('vendor_totals', 'Total:', 'wc-vendors');
    pll_register_string('vendor_total', 'Total', 'wc-vendors');
    
    pll_register_string('vendor_total', 'You have no orders during this period.', 'wc-vendors');
    
    pll_register_string('vendor_orders_for', 'Orders for', 'wc-vendors');
    pll_register_string('vendor_product_title', 'Product Title', 'wc-vendors');
    pll_register_string('vendor_full_name', 'Full name', 'wc-vendors');
    pll_register_string('vendor_address', 'Address', 'wc-vendors');
    pll_register_string('vendor_city', 'City', 'wc-vendors');
    pll_register_string('vendor_zip', 'Zip', 'wc-vendors');
    pll_register_string('vendor_state', 'State', 'wc-vendors');
    pll_register_string('vendor_email_address', 'Email address', 'wc-vendors');
    pll_register_string('vendor_date', 'Date', 'wc-vendors');
    pll_register_string('vendor_quantity', 'Quantity', 'wc-vendors');
    pll_register_string('vendor_comments', 'Comments', 'wc-vendors');
    pll_register_string('vendor_export_orders', 'Export orders', 'wc-vendors');
    
    pll_register_string('vendor_paypal_address', 'PayPal Address', 'wc-vendors');
    pll_register_string('vendor_paypal_info', 'Your PayPal address is used to send you your commission.', 'wc-vendors');
    pll_register_string('vendor_saller_info', 'Seller info', 'wc-vendors');
    pll_register_string('vendor_saller_info_details', 'This is displayed on each of your products.', 'wc-vendors');
    pll_register_string('vendor_settings', 'Settings', 'wc-vendors');
    pll_register_string('vendor_save', 'Save', 'wc-vendors');
    pll_register_string('vendor_shop_description', 'Shop Description', 'wc-vendors');
    pll_register_string('vendor_this_display_on', 'This is displayed on', 'wc-vendors');
    pll_register_string('vendor_ur_shop_page', 'your shop page', 'wc-vendors');
    pll_register_string('vendor_shop_name', 'Shop Name', 'wc-vendors');
    pll_register_string('vendor_shop_name_info', 'Your shop name is public and must be unique.', 'wc-vendors');
}
// vendors sign up messages
add_filter('wcvendors_application_denied_msg', 'vebdor_denied_msgs');

function vebdor_denied_msgs($massage) {
    if (function_exists('pll__')) {
        $massage = pll__('Application denied. You are an administrator.');
    } else {
        $massage = __('Application denied. You are an administrator.', 'wcvendors');
    }
    return $massage;
}

// check vendor access
if (class_exists('WCV_Vendor_Dashboard')) {
    remove_action('template_redirect', array('WCV_Vendor_Dashboard', 'check_access'));
    add_action('template_redirect', 'check_vendor_access');

    function check_vendor_access() {
        if (function_exists('pll_get_post')) {
            $vendor_dashboard_page = WC_Vendors::$pv_options->get_option('vendor_dashboard_page');
            $shop_settings_page = WC_Vendors::$pv_options->get_option('shop_settings_page');
        } else {
            $vendor_dashboard_page = pll_get_post(WC_Vendors::$pv_options->get_option('vendor_dashboard_page'));
            $shop_settings_page = pll_get_post(WC_Vendors::$pv_options->get_option('shop_settings_page'));
        }

        if ($vendor_dashboard_page && is_page($vendor_dashboard_page) || $shop_settings_page && is_page($shop_settings_page)) {
            if (!is_user_logged_in()) {
                wp_redirect(get_permalink(woocommerce_get_page_id('myaccount')), 303);
                exit;
            }
        }
    }

}

// vendor registeration checkbox strings
add_filter('wcvendors_vendor_registration_checkbox', 'vendor_reg_checkbox_string');

function vendor_reg_checkbox_string($string) {
    if (function_exists('pll__')) {
        $string = pll__('Apply to become a vendor?');
    } else {
        $string = __('Apply to become a vendor? ', 'wcvendors');
    }
    return $string;
}