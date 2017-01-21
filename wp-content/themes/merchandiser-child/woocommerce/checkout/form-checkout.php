<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */
if (!defined('ABSPATH')) {
	exit;
}

echo '<div class="checkout-info">';

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout
if (!$checkout->enable_signup && !$checkout->enable_guest_checkout && !is_user_logged_in()) {
	echo apply_filters('woocommerce_checkout_must_be_logged_in_message', esc_html__('You must be logged in to checkout.', 'woocommerce'));
	return;
}

echo '</div>';

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters('woocommerce_get_checkout_url', WC()->cart->get_checkout_url());

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url($get_checkout_url); ?>" enctype="multipart/form-data">
	<div class="cover"></div> 
	<div class="checkout-row">

		<div class="checkout-col-main">

			<?php if (sizeof($checkout->checkout_fields) > 0) : ?>

				<?php do_action('woocommerce_checkout_before_customer_details'); ?>			

				<div class="col2-set" id="customer_details">
					<div class="col-1">
						<?php do_action('woocommerce_checkout_billing'); ?>
					</div>

					<div class="col-2">
						<?php do_action('woocommerce_checkout_shipping'); ?>
					</div>
				</div>

				<?php do_action('woocommerce_checkout_after_customer_details'); ?>			

			<?php endif; ?>

		</div>

		<div class="checkout-col-aside">

			<?php do_action('woocommerce_checkout_before_order_review'); ?>

			<h3 id="order_review_heading"><?php
				if (function_exists('pll_e')) {


					esc_html_e(pll__('Your order'), 'woocommerce');
				} else {
					esc_html_e('Your order', 'woocommerce');
				}
				?></h3>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action('woocommerce_checkout_order_review'); ?>
			</div>

			<?php do_action('woocommerce_checkout_after_order_review'); ?>

		</div>

	</div>

</form>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>
