<?php

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


	/**
	 * Register shop, single product ,product category
	 */



	/**
	 * Rgister cart, checkout
	 */
	pll_register_string('have_a_coupon?', 'Have a coupon?', 'checkout');
	//Click here to enter your code
	pll_register_string('click_here_to_enter_your_code', 'Click here to enter your code', 'checkout');
	//Coupon code
	pll_register_string('coupon_code', 'Coupon code', 'checkout');
	//Apply Coupon
	pll_register_string('apply_Coupon', 'Apply Coupon', 'checkout');
	//Billing Details
	pll_register_string('billing_details', 'Billing Details', 'checkout');
	//First name
	pll_register_string('first_name', 'First Name', 'checkout');
	//CART TOTALS
	pll_register_string('cart_totals', 'Cart Totals', 'checkout');
	//Subtotal
	pll_register_string('subtotal', 'Subtotal', 'checkout');
	//Total
	pll_register_string('total', 'Total', 'checkout');
	//Proceed to Checkout
	pll_register_string('proceed_to_checkout', 'Proceed to Checkout', 'checkout');
	//Update Cart
	pll_register_string('update_cart', 'Update Cart', 'checkout');
	//Additional Information
	pll_register_string('additional_information', 'Additional Information', 'checkout');

	pll_register_string('hello', 'Hello (not? Sign out)', 'myAcount');
	pll_register_string('from_your_account_dashboard_you_can_view_your', 'From your account dashboard you can view your', 'myAcount');

	//, manage your
	pll_register_string('manage_your', 'manage your', 'myAcount');
	//and
		pll_register_string('and', 'and', 'myAcount');
		//Sign Out
		pll_register_string('Sign_Out', 'Sign Out', 'myAcount');
		
}
