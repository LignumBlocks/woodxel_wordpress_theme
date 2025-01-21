<?php
/**
 * Cart Page
 *
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>


<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

	<div class="grids" data-v-00bac199="">
        <div class="grid1" data-v-00bac199="">
                  <div class="grid-table" data-v-00bac199="">
                     <div class="title item" data-v-00bac199="">
                        <h2 data-v-00bac199="">Product</h2>
                     </div>
                     <div class="title item" data-v-00bac199="">
                        <h2 data-v-00bac199="">Price</h2>
                     </div>
                     <div class="title item" data-v-00bac199="">
                        <h2 data-v-00bac199="">Quantity</h2>
                     </div>
                     <div class="title item" data-v-00bac199="">
                        <h2 data-v-00bac199="">Subtotal</h2>
                     </div>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>
			<?php 
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { 
					$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
                     <div class="item image rayao" data-v-00bac199="">
					 	<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo str_replace( array( 'http:', 'https:' ), '', $thumbnail );
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
							}
						?>
                        <div class="item-text" data-v-00bac199="">                           
						   		<?php										
										if ( ! $product_permalink ) {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $product_name, $cart_item, $cart_item_key ) . '&nbsp;' );
										} else {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a class="link np" href="%s">%s</a>', esc_url( $product_permalink ), $product_name ), $cart_item, $cart_item_key ) );
										}

										do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

										// Meta data.
										echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

										// Backorder notification.
										if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
										}
								?>
							
							<div data-v-00bac199="">
								<?php 
								$dimensions = isset($cart_item['dimensions']) ? $cart_item['dimensions'] : get_post_meta($product_id, 'dimensions', true);								
								echo esc_html($dimensions);								
								?>
							</div>
                           <div class="cantidad hide" data-v-00bac199="">
						   <?php
								if ( $_product->is_sold_individually() ) {
									$min_quantity = 1;
									$max_quantity = 1;
								} else {
									$min_quantity = 0;
									$max_quantity = $_product->get_max_purchase_quantity();
								}

								$product_quantity = woocommerce_quantity_input(
									array(
										'input_name'   => "cart[{$cart_item_key}][qty]",
										'input_value'  => $cart_item['quantity'],
										'max_value'    => $max_quantity,
										'min_value'    => $min_quantity,
										'product_name' => $product_name,
									),
									$_product,
									false
								);

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
							?>
							</div>
                        </div>
                     </div>
                     <div class="item price hide2 rayao" data-v-00bac199="">
                        <div data-v-00bac199="">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</div>
                     </div>
                     <div class="row1 row item hide2 rayao" data-v-00bac199="">
                        <div class="cantidad" data-v-00bac199="">
						<?php
								if ( $_product->is_sold_individually() ) {
									$min_quantity = 1;
									$max_quantity = 1;
								} else {
									$min_quantity = 0;
									$max_quantity = $_product->get_max_purchase_quantity();
								}

								$product_quantity = woocommerce_quantity_input(
									array(
										'input_name'   => "cart[{$cart_item_key}][qty]",
										'input_value'  => $cart_item['quantity'],
										'max_value'    => $max_quantity,
										'min_value'    => $min_quantity,
										'product_name' => $product_name,
									),
									$_product,
									false
								);

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</div>
                     </div>
                     <div class="item rayao bajar" data-v-00bac199="">
                        <div class="subtotal bajar2" data-v-00bac199="">
                           <div class="subtotal-price" data-v-00bac199="">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
							</div>
                           <button class="delete" data-v-00bac199="">
							<?php 
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove</a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									/* translators: %s is the product name */
									esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
							?>
							</button>
                        </div>
                     </div>
				<?php 
				} 
			}

			do_action( 'woocommerce_cart_contents' );
			?>
			<?php do_action( 'woocommerce_cart_actions' ); ?>
			<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
			<?php do_action( 'woocommerce_after_cart_contents' ); ?>   

        	</div>
                <?php if ( wc_coupons_enabled() ) { ?>
					<div class="coupon" style="margin-top: 50px">
						<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
						<input type="submit" class="button2 eut-btn eut-coupon-btn" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>" />
						<?php do_action( 'woocommerce_cart_coupon' ); ?>
					</div>
					<?php } ?>
					<?php woocommerce_cross_sell_display(); ?>
        </div><!--grid1-->

			<div class="grid2" data-v-00bac199=""> 
				<?php woocommerce_cart_totals(); ?>
			</div>
    </div>
</form>

<?php do_action( 'woocommerce_after_cart' ); ?>

<main video-section-comp="" class="padding-out top-96">
            <div class="where" video-section-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video playsinline autoplay muted loop class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/the_son_of-_man.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2024/12/the_son_of-_man.mp4" type="video/mp4">
                                 Tu navegador no soporta la reproducción de video.
                              </video>
                        </div> 
                  </div>                  
               </div>
            </div>
            <div class="client fade-up" class="text" video-section-comp="">
               <div class="text1" video-section-comp="">
                  <div class="text11" video-section-comp="">
                     <h2>Exclusive Customization Tool</h2>
                  </div>
                  <div class="text12" video-section-comp="">
                  <p>Using our exclusive customization tool, you can personalize in a very easy way any piece from our collection or even create a new artwork from your own image. Create a stunning pixelated wood art masterpiece that reflects your personal style.</p>                  
                  </div>                  
                  <a href="/product/image-customized/" class="button1" video-section-comp="">Customize yours</a>
               </div>
            </div>
            
         </main>

		<script> 
			jQuery(function($){
				
				// Detecta el cambio en el campo de cantidad
				$('input.qty').on('change', function() {
					// Al cambiar la cantidad, habilita el botón de actualizar
					$('input[name="update_cart"]').prop('disabled', false);
				});
			});
		</script>

