<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 8.1.0
 */

defined( 'ABSPATH' ) || exit;

if ( $order ) :

$order_get_id = method_exists( $order, 'get_id' ) ? $order->get_id() : $order->id;

do_action( 'woocommerce_before_thankyou', $order_get_id );

?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<div class="eut-h4 eut-align-center"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></div>

		<p class="eut-align-center">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<div class="eut-h2 eut-align-center"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></div>

		<ul class="order_details">
			<li class="order">
				<span class="eut-link-text eut-heading-color"><?php esc_html_e( 'Order number:', 'woocommerce' ); ?></span>
				<strong><?php echo wp_kses_post( $order->get_order_number() ); ?></strong>
			</li>
			<li class="date">
				<span class="eut-link-text eut-heading-color"><?php esc_html_e( 'Date:', 'woocommerce' ); ?></span>
				<strong><?php echo wc_format_datetime( $order->get_date_created() ); ?></strong>
			</li>
			<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
			<li class="email">
				<span class="eut-link-text eut-heading-color"><?php esc_html_e( 'Email:', 'woocommerce' ); ?></span>
				<strong><?php echo wp_kses_post( $order->get_billing_email() ); ?></strong>
			</li>
			<?php endif; ?>
			<li class="total">
				<span class="eut-link-text eut-heading-color"><?php esc_html_e( 'Total:', 'woocommerce' ); ?></span>
				<strong class="eut-text-primary-1"><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
			</li>
			<?php if ( $order->get_payment_method_title() ) : ?>
			<li class="method">
				<span class="eut-link-text eut-heading-color"><?php esc_html_e( 'Payment method:', 'woocommerce' ); ?></span>
				<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>

	<?php endif; ?>

	<div class="eut-thankyou-content">
		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order_get_id ); ?>
		<?php do_action( 'woocommerce_thankyou', $order_get_id ); ?>
	</div>

<?php else : ?>

	<div class="eut-h2 eut-align-center"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></div>

<?php endif;
