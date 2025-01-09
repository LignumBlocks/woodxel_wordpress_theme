<?php
/**
 * Empty cart page
 *
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;
if ( version_compare( WC_VERSION, '3.5.0', '<' ) ) {
	wc_print_notices();
}

?>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<div class="eut-empty-cart cart-empty">
	<div class="eut-empty-icon-wrapper">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g id="eut-bag"><path d="M96.401,95.986l-7.14-57.144c-0.223-1.787-1.742-3.128-3.543-3.128H71.65c0.047-4.796-0.035-9.546-0.559-13.878 c-0.899-7.448-3.048-12.817-6.569-16.414C61,1.824,56.113,0,50,0c0,0,0.001,0,0,0c-6.112,0-10.999,1.825-14.522,5.423 c-3.521,3.597-5.67,8.965-6.569,16.414c-0.522,4.332-0.604,9.082-0.558,13.877H14.286c-1.801,0-3.32,1.342-3.544,3.129 L3.599,95.986c-0.127,1.016,0.189,2.037,0.867,2.807C5.144,99.561,6.119,100,7.143,100h85.715c1.024,0,1.999-0.439,2.678-1.207 C96.213,98.024,96.528,97.002,96.401,95.986z M40.582,10.42C42.74,8.215,45.821,7.143,50,7.143s7.26,1.072,9.419,3.277 c4.655,4.755,5.193,14.74,5.089,25.295H35.493C35.389,25.16,35.927,15.175,40.582,10.42z M11.188,92.857l6.25-50h11.039 c0.049,2.379,0.094,4.808,0.094,7.143c0,1.973,1.6,3.571,3.571,3.571c1.973,0,3.572-1.599,3.572-3.571 c0-2.355-0.045-4.773-0.094-7.143h28.758c-0.049,2.369-0.093,4.787-0.093,7.143c0,1.973,1.599,3.571,3.571,3.571 s3.571-1.599,3.571-3.571c0-2.335,0.045-4.764,0.095-7.143h11.038l6.25,50H11.188z"/></g><g id="eut-empty"><path fill="#231F20" d="M55.344,70.812l8.484-8.484c1.562-1.562,1.562-4.095,0-5.656c-1.561-1.562-4.096-1.562-5.656,0 l-8.484,8.484l-8.484-8.484c-1.562-1.562-4.095-1.562-5.657,0c-1.562,1.562-1.562,4.095,0,5.656l8.484,8.484l-8.484,8.484 c-1.562,1.562-1.562,4.095,0,5.656c0.781,0.781,1.805,1.172,2.829,1.172s2.047-0.391,2.829-1.172l8.484-8.484l8.484,8.484 c0.78,0.781,1.805,1.172,2.828,1.172s2.048-0.391,2.828-1.172c1.562-1.562,1.562-4.095,0-5.656L55.344,70.812z"/></g></svg>
	</div>
	<div class="eut-h6"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></div>
	<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<a class="link eut-link-text eut-text-primary-1 eut-text-hover-black" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
		<?php echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to shop', 'woocommerce' ) ) ); ?>
	</a>
	<?php endif; ?>
</div>

<main video-section-comp="" class="padding-out">
            <div class="where" video-section-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video autoplay muted loop class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/the_son_of-_man.mp4">
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
