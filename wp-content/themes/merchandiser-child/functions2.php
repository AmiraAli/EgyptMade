<?php

if (function_exists('pll_register_string')) {

    /**
     * Rgister cart, checkout
     */
//	downloads
	//Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.
	pll_register_string('thanks', 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'checkout');
	//Thank you. Your order has been received.
	pll_register_string('Thank you. Your order has been received.', 'Thank you. Your order has been received.', 'checkout');
	pll_register_string('Dashboard', 'Dashboard', 'checkout');
	pll_register_string('downloads', 'Downloads', 'checkout');
	pll_register_string('orders', 'Orders', 'checkout');
	pll_register_string('addresses', 'Addresses', 'checkout');
	//Account Details  
    pll_register_string('Account Details', 'Account Details', 'checkout');
    pll_register_string('Logout', 'Logout', 'checkout');
    //No downloads available yet.
	 pll_register_string('No downloads available yet.', 'No downloads available yet.', 'checkout');
	 //Go Shop
	  pll_register_string('Go Shop', 'Go Shop', 'checkout');
    //The following addresses will be used on the checkout page by default.
	  pll_register_string('The following addresses will be used on the checkout page by default.', 'The following addresses will be used on the checkout page by default.', 'checkout');
	//Billing Address
	   pll_register_string('Billing Address', 'Billing Address', 'checkout');
	   //Shipping Address
	    pll_register_string('Shipping Address', 'Shipping Address', 'checkout');
		//You have not set up this type of address yet.
		 pll_register_string('You have not set up this type of address yet.', 'You have not set up this type of address yet.', 'checkout');
		
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

	//Last Name
	 pll_register_string('Last_Name', 'Last Name', 'checkout');
	 //Company Name
	  pll_register_string('Company Name', 'Company Name', 'checkout');
	 //Email Address
	  pll_register_string('Email Address', 'Email Address', 'checkout');
	 //Phone
	  pll_register_string('Phone', 'Phone', 'checkout');
	 //Country
	  pll_register_string('Country', 'Country', 'checkout');
	 //Town / City
	  pll_register_string('Town_City', 'Town / City', 'checkout');
	 //State/County
	 pll_register_string('State_County', 'State / County', 'checkout');
	 //Postcode / ZIP 
	 pll_register_string('Postcode_ZIP', 'Postcode / ZIP', 'checkout');
	 //Address
	  pll_register_string('address', 'Address', 'checkout');
	  //Your order
	   pll_register_string('Your order', 'Your order', 'checkout');
    /**
     * Rgister cart, checkout
     */
    //, manage your
    pll_register_string('manage_your', 'manage your', 'myAcount');
    //and
    pll_register_string('and', 'and', 'myAcount');
    //Sign Out
    pll_register_string('Sign_Out', 'Sign out', 'myAcount');
    //No products in the cart

    pll_register_string('no_products_in_the_cart', 'No products in the cart', 'myAcount');
    //Your cart is currently empty.
    pll_register_string('your_cart_is_currently_empty.', 'Your cart is currently empty.', 'myAcount');
    //Hello
    pll_register_string('hello', 'Hello', 'myAcount');
    //Return To Shop
    pll_register_string('Return_To_Shop', 'Return To Shop', 'myAcount');
    pll_register_string('not', 'not', 'myAcount');
    //recent orders
    pll_register_string('recent_orders', 'recent orders', 'myAcount');
    //manage_your
    pll_register_string('manage_your', 'manage your', 'myAcount');
    //shipping_and_billing_addresses
    pll_register_string('shipping_and_billing_addresses', 'shipping and billing addresses', 'myAcount');
    //edit_your_password_and_account_details
    pll_register_string('edit_your_password_and_account_details', 'edit your password and account details', 'myAcount');
    //Username or email address
    pll_register_string('Username_or_email_address', 'Username or email address', 'myAcount');
    //Login
    pll_register_string('Login', 'Login', 'myAcount');
    //Password
    pll_register_string('password', 'Password', 'myAcount');
    //Lost your password?
    pll_register_string('Lost_your_password?', 'Lost your password?', 'myAcount');
    //Register
    pll_register_string('Register', 'Register', 'myAcount');
    //Remember me
    pll_register_string('Remember_me', 'Remember me', 'myAcount');
    //Email address
    pll_register_string('email_address', 'Email address', 'myAcount');
    //Username
    pll_register_string('Username', 'Username', 'myAcount');
    //First name
    pll_register_string('First name', 'First name', 'myAcount');
    //Last name
    pll_register_string('Last name', 'Last name', 'myAcount');
    //Current Password (leave blank to leave unchanged)
    pll_register_string('Current Password (leave blank to leave unchanged)', 'Current Password (leave blank to leave unchanged)', 'myAcount');
    //Password Change
    pll_register_string('Password Chang', 'Password Chang', 'myAcount');
    //New Password (leave blank to leave unchanged)
    pll_register_string('New Password (leave blank to leave unchanged)', 'New Password (leave blank to leave unchanged)', 'myAcount');
    //Confirm New Password
    pll_register_string('Confirm New Password', 'Confirm New Password', 'myAcount');
    //Save changes
    pll_register_string('Save changes', 'Save changes', 'myAcount');
    //Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.

    pll_register_string('Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'myAcount');
    //Username or email
    pll_register_string('Username_or_email', 'Username or email', 'myAcount');
    //Reset Password
    pll_register_string('Reset Password', 'Reset Password', 'myAcount');
	
	
	
	
	
	
}