<?php
/**
 * Checkout coupon form
 *
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

$info_message = apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'woocommerce' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'woocommerce' ) . '</a>' );
wc_print_notice( $info_message, 'notice' );
?>

<form class="checkout_coupon coupon" method="post" style="display:none">

	<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
	<input type="submit" class="eut-btn eut-coupon-btn button2" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>" />

	<div class="clear"></div>
</form>
