<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.0.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
?>
<section data-v-d974372f class="left">
	<div data-v-d974372f class="images">
		<?php do_action( 'woocommerce_product_thumbnails' ); ?>
	</div>
	<div id="main-product-image" data-v-d974372f class="image" style="<?php echo $post_thumbnail_id ? 'background-image: url(' . esc_url( wp_get_attachment_url( $post_thumbnail_id ) ) . '); background-size: cover; background-position: center;' : ''; ?>">		
	</div>
</section>
