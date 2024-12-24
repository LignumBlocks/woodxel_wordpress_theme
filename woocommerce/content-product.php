<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
$title = $product->get_name();
$price = $product->get_price_html();
$image = wp_get_attachment_url($product->get_image_id());
$link = get_permalink($product->get_id());
$dimensions = get_post_meta($product->get_id(), 'dimensions', true); // Obtener el custom field

?>
<a data-v-0b4006ed="" href="<?php echo esc_url($link); ?>" class="grid-item">
	<div data-v-0b4006ed="" class="image">
		<img data-v-0b4006ed="" src="<?php echo esc_url($image); ?>" alt="">
	</div>
	<div data-v-0b4006ed="" class="item-text">
		<div data-v-0b4006ed="" class="item-text-left">
			<div class="product-name"><?php echo esc_html($title); ?></div>
			<p class="product-name"><?php echo esc_html($dimensions);?></p>
		</div>
		<div data-v-0b4006ed="" class="item-text-right">
			<p class="product-price"><?php echo $price; ?></p>
		</div>
	</div>
</a>

