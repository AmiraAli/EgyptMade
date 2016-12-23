<?php

require_once   'functions1.php';
require_once 'functions2.php';

// register wc vendor translate strings
add_action('wp_enqueue_scripts', 'register_theme_enqueue_styles');

function register_theme_enqueue_styles() {
    // custom script
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js');
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
}
