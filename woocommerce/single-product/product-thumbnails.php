<?php
/**
 * Single Product Thumbnails
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$main_image_id = $product->get_image_id();

if ( $attachment_ids && $main_image_id ) {
    // Mostrar imagen principal como la primera
    echo '<div data-v-d974372f="" class="item active">';
    echo '<img data-v-d974372f="" src="' . esc_url( wp_get_attachment_url( $main_image_id ) ) . '" alt="' . esc_attr( $product->get_name() ) . '">';
    echo '</div>';

    // Mostrar las imágenes de la galería
    $gallery_images = array_slice( $attachment_ids, 0, 2 ); // Tomar solo las dos primeras imágenes
    foreach ( $gallery_images as $attachment_id ) {
        $thumbnail_url = wp_get_attachment_url( $attachment_id );
        echo '<div data-v-d974372f="" class="item">';
        echo '<img data-v-d974372f="" src="' . esc_url( $thumbnail_url ) . '" alt="' . esc_attr( $product->get_name() ) . '">';
        echo '</div>';
    }
}
