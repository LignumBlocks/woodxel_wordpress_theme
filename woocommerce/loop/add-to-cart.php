<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
$product_get_id = method_exists( $product, 'get_id' ) ? $product->get_id() : $product->id;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product_get_id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : engic_eutf_woo_add_to_cart_class( $product ) ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
