<?php
/**
 * Cross-sells
 *
 * @package 	WooCommerce/Templates
 * @version     4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( version_compare( WC_VERSION, '3.0', '<' ) ) {

	$crosssells = WC()->cart->get_cross_sells();

	if ( sizeof( $crosssells ) == 0 ) return;

	$meta_query = WC()->query->get_meta_query();

	$args = array(
		'post_type'           => 'product',
		'ignore_sticky_posts' => 1,
		'no_found_rows'       => 1,
		'posts_per_page'      => apply_filters( 'woocommerce_cross_sells_total', $posts_per_page ),
		'orderby'             => $orderby,
		'post__in'            => $crosssells,
		'meta_query'          => $meta_query
	);

	$products = new WP_Query( $args );

	$woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );

	if ( $products->have_posts() ) : ?>

		<div class="eut-cross-sells eut-border eut-border-top eut-padding-top-md">

			<h5><?php esc_html_e( 'You may be interested in&hellip;', 'woocommerce' ) ?></h5>

			<?php woocommerce_product_loop_start(); ?>

				<?php while ( $products->have_posts() ) : $products->the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

		</div>

	<?php endif;
} else {

	if ( $cross_sells ) : ?>

		<div class="eut-cross-sells eut-border eut-border-top eut-padding-top-md">
		<?php
		$heading = apply_filters( 'woocommerce_product_cross_sells_products_heading', __( 'You may be interested in&hellip;', 'woocommerce' ) );

		if ( $heading ) :
		?>
			<h5><?php echo esc_html( $heading ); ?></h5>
		<?php endif; ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php foreach ( $cross_sells as $cross_sell ) : ?>

					<?php
						$post_object = get_post( $cross_sell->get_id() );

						setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

						wc_get_template_part( 'content', 'product' );
					?>

				<?php endforeach; ?>

			<?php woocommerce_product_loop_end(); ?>

		</div>

	<?php endif;
}

wp_reset_query();
