<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 8 );


/* add_action( 'woocommerce_single_product_summary', 'display_dimensions', 7 );
function display_dimensions() {
    global $product;

    $dimensions = get_post_meta( $product->get_id(), 'dimensions', true );

    if ( $dimensions ) {
        echo '<div data-v-4935e4b1 class="text1">';
        echo '<p>Dimensions: ' . esc_html( $dimensions ) . '</p>';
        echo '<p>';
        echo '<a href="/product/image-customized" class="link" style="color: #2C2C2C;
        font-size: 18px;
        font-family: Roboto-Bold;
        font-weight: 700;
        text-decoration: underline;
        word-wrap: break-word;">Choose another size and price</a>';
        echo '</p>';
        echo '</div>';
    }
} */


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<?php if ( get_the_ID() == 525 ) : ?>
			<!-- Espacio reservado para la app React -->
        <div id="root" data-v-d974372f class="MAIN">

        </div>
	<?php else : ?>
    <main data-v-d974372f id="product-<?php the_ID(); ?>" class="MAIN">

        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>

        <section data-v-d974372f class="right">
            <main data-v-4935e4b1 data-v-d974372f> 

            <?php
            /**
             * Hook: woocommerce_single_product_summary.
             *
             * @hooked woocommerce_template_single_title - 5
             * @hooked woocommerce_template_single_rating - 10
             * @hooked woocommerce_template_single_price - 10
             * @hooked woocommerce_template_single_excerpt - 20
             * @hooked woocommerce_template_single_add_to_cart - 30
             * @hooked woocommerce_template_single_meta - 40
             * @hooked woocommerce_template_single_sharing - 50
             * @hooked WC_Structured_Data::generate_product_data() - 60
             */
            do_action( 'woocommerce_single_product_summary' );

            ?>
            </main>
            <main data-v-d974372f="" data-v-101211cc="">
            <?php global $product;
            $dimensions = get_post_meta( $product->get_id(), 'dimensions', true );
            $blocks = (int)24 * (int)24;
            if (preg_match('/(\d+)\D*x\D*(\d+)/', $dimensions, $matches)) {
                // Los números están en $matches[1] y $matches[2]
                $numero1 = (int)$matches[1];
                $numero2 = (int)$matches[2];
                // Calcular el producto
                $blocks = $numero1 * $numero2;
            }

            $customized_url = get_site_url(null, '/product/image-customized/', 'https');
            $change_url = $customized_url."?hidden_image_url=".get_post_meta( $product->get_id(), 'hidden_image_url', true );
            
            ?>

                  <div class="part" data-v-101211cc="">
                     <h2>Description</h2>
                     <div class="info" data-v-101211cc="">
                        <p><span data-v-101211cc="">Dimensions:</span>&nbsp;<?php echo(esc_html( $dimensions )); ?> 
                        <a href="<?php echo $change_url;?>" class="link" style="margin-left: 20px; color: #FD3032; font-size: 16px; font-weight: 700; word-wrap: break-word; line-height: 34px">Choose another size</a></p>
                        <p><span data-v-101211cc="">Blocks count:</span>&nbsp;<?php echo(esc_html( $blocks )); ?></p>
                        <p><span data-v-101211cc="">Materials:</span>&nbsp;Poplar solid wood and water base paint.</p>
                        <p><span data-v-101211cc="">Frame:</span>&nbsp;Floating Black frame of 1″ Depth.</p>
                     </div>
                     <p>Each piece is handcrafted with precision, using high-quality woods and eco-friendly finishes. Every wooden block is meticulously cut, sanded, painted, and hand-placed by our skilled artists. This artwork stands as a testament to our commitment to sustainability and artistic excellence, making it a striking addition to any collection. </p>
                     <h2>Features</h2>
                     <div class="info2" data-v-101211cc="">
                        <p><span data-v-101211cc="">Handcrafted Design:</span> Each piece of pixel art wall decor is unique and made by dedicated artisans with care and attention to detail.</p>
                        <p><span data-v-101211cc="">Customized Design:</span> Expertly crafted with meticulous precision, this pixel art wall decor piece brings a unique and personalized touch to any space.</p>
                        <p><span data-v-101211cc="">Versatile Decor:</span> Perfect for living rooms, offices, studios, and more, this piece of pixel art wall.</p>
                        <p><span data-v-101211cc="">Ready to hang:</span> Delivered ready and easy to hang on the wall.</p>
                     </div>
                  </div>
               </main>

        </section>

        
    </main>
    <?php endif; ?>
    <main data-v-7da4b8f3 data-v-d974372f>
        <hr data-v-7da4b8f3="">
        <section data-v-7da4b8f3="" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text">
            <div data-v-7da4b8f3="" class="text1">
                <div data-v-7da4b8f3="" class="text11">
                    <h2 data-v-7da4b8f3="">Related</h2>
                </div>
                <div class="link" data-v-7da4b8f3="">
                    <a href="/high-end-wood-wall-art-gallery" data-v-7da4b8f3="" style="color: #2C2C2C;
                    font-size: 18px;
                    font-family: Roboto-Bold;
                    text-decoration: underline;
                    word-wrap: break-word">View all</a>
                </div>
            </div>
        </section>

        <?php
        $related_products = wc_get_related_products( $product->get_id(), 3 );
        ?>        

            <!--carousel-->

        <div data-v-857932b3="" class="carousel swiper-other-container">
            <div class="swiper-wrapper">
                <?php

                    if ( $related_products ) :
                        foreach ( $related_products as $related_id ) :
                            $related_product = wc_get_product( $related_id );
                            $image_url       = wp_get_attachment_url( $related_product->get_image_id() );
                            $title           = $related_product->get_name();
                            $price           = $related_product->get_price_html();
                            $permalink       = get_permalink( $related_id );
                            $dimensions = get_post_meta($related_id, 'dimensions', true);
                    ?>
                <a data-v-857932b3="" href="<?php echo esc_url($permalink); ?>" class="swiper-slide">
                    <div data-v-857932b3="">
                        <img data-v-857932b3="" src="<?php echo esc_url($image_url); ?>" alt=""></div>
                    <div class="item-text">
                        <div data-v-857932b3="" class="item-text-left">
                            <div class="product-name"><?php echo esc_html( $title ); ?></div>
                            <p class="product-dim"><?php echo esc_html( $dimensions ); ?></p>
                        </div>
                        <div class="item-text-right">
                            <p class="product-price"><?php echo $price; ?></p>
                        </div>
                    </div>
                </a>
            
                <?php
                        endforeach;
                        endif;
                        ?>
            </div>
        </div>
    </main>
    <main video-section-comp="">
            <div class="where" video-section-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video autoplay muted loop class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/charlie_chaplin.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2024/12/charlie_chaplin.mp4" type="video/mp4">
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

document.addEventListener("DOMContentLoaded", () => {

    const swiper = new Swiper('.swiper-other-container', {
        slidesPerView: 1,
        spaceBetween: 40,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            }
        },        
    });
    var checkbox = document.getElementById('confirm-checkbox');
    var button = document.querySelector('.confirm-button');
    
    if (checkbox && button) {
        checkbox.checked = false;
        button.classList.add('disabled');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                button.classList.remove('disabled');
            } else {
                button.classList.add('disabled');
            }
        });
    }

    const message = document.querySelector('.woocommerce-message');

    if (message) {
      setTimeout(() => {
        // Aplica el efecto de ocultar
        message.style.transition = 'opacity 0.5s';
        message.style.opacity = '0'; // Desaparece gradualmente

        setTimeout(() => {
          message.style.display = 'none'; // Lo elimina visualmente
          console.log("Mensaje ocultado.");
        }, 500); // Da tiempo para que termine la transición
      }, 3000); // Espera 3 segundos antes de empezar a ocultarlo
    }
});
   
</script>

