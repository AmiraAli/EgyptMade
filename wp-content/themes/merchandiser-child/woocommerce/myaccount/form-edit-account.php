<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post">

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
		<label for="account_first_name"><?php
		if (function_exists('pll_e')) {
				_e(pll__('First name'), 'woocommerce');
			} else {
				_e( 'First name', 'woocommerce' );
			}
		 ?> <span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
	</p>
	<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
		<label for="account_last_name"><?php 
		if (function_exists('pll_e')) {
				_e(pll__('Last name'), 'woocommerce');
			} else {
				_e( 'Last name', 'woocommerce' );
			}
		
		
		 ?> <span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
		<label for="account_email"><?php
		if (function_exists('pll_e')) {
				_e(pll__('Email address'), 'woocommerce');
			} else {
				_e( 'Email address', 'woocommerce' );
			}
		
		 ?> <span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
	</p>

	<fieldset>
		<legend><?php
		if (function_exists('pll_e')) {
				_e(pll__('Password Chang'), 'woocommerce');
			} else {
				_e( 'Password Chang', 'woocommerce' );
			}
		
		
		 ?></legend>

		<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
			<label for="password_current"><?php
			if (function_exists('pll_e')) {
				_e(pll__('Current Password (leave blank to leave unchanged)'), 'woocommerce');
			} else {
				_e( 'Current Password (leave blank to leave unchanged)', 'woocommerce' );
			}
			 ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" />
		</p>
		<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
			<label for="password_1"><?php
			if (function_exists('pll_e')) {
				_e(pll__('New Password (leave blank to leave unchanged)'), 'woocommerce');
			} else {
				_e( 'New Password (leave blank to leave unchanged)', 'woocommerce' );
			}
			 ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" />
		</p>
		<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
			<label for="password_2"><?php
			if (function_exists('pll_e')) {
				_e(pll__('Confirm New Password'), 'woocommerce');
			} else {
				_e( 'Confirm New Password', 'woocommerce' ); 
			}
			?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" />
		</p>
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details' ); ?>
		<input type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php
		if (function_exists('pll_e')) {
				esc_attr_e(pll__('Save changes'), 'woocommerce');
			} else {
				esc_attr_e( 'Save changes', 'woocommerce' );
			}
		
		?>" />
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
