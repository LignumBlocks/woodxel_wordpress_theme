<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'woocommerce_before_shop_loop', 'custom_woocommerce_catalog_ordering', 30 );

function custom_woocommerce_catalog_ordering() {
   // Obtenemos las opciones de ordenamiento
   $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
       'menu_order' => __( 'Default sorting', 'woocommerce' ),
       'date'       => __( 'Sort by latest', 'woocommerce' ),
       'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
       'price-desc' => __( 'Sort by price: high to low', 'woocommerce' ),
   ) );

   // Obtener el ordenamiento actual seleccionado
   $orderby = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : apply_filters( 'woocommerce_default_catalog_orderby', 'menu_order' );

   echo '<section data-v-0b4006ed="" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text">';
   echo '<div data-v-0b4006ed="" class="text1">';
   echo '<div data-v-0b4006ed="" class="text11">
               <h2>PRODUCT GALLERY</h1>
               <p data-v-0b4006ed="">Discover the Endless Possibilities of Our Wall Art Panels</p>
         </div>';
   echo '<div data-v-0b4006ed="" class="menu">';

   // Abrimos el formulario
   echo '<form method="get">';
   
   // Agregamos los campos ocultos necesarios para preservar los parámetros existentes en la URL
   foreach ( $_GET as $key => $value ) {
       if ( 'orderby' === $key || 'submit' === $key ) {
           continue; // Saltar el campo 'orderby' porque ya lo estamos renderizando
       }
       echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '" />';
   }
   
   // Construimos el select
   echo '<select id="orderby" class="orderby custom-class" name="orderby" style="
       width: 80%; background-color: var(--tertiary); padding: 10px 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center; color: #ffffff;" onchange="this.form.submit()">';
   
   foreach ( $catalog_orderby_options as $id => $name ) {
       echo '<option value="' . esc_attr( $id ) . '" ' . selected( $orderby, $id, false ) . '>' . esc_html( $name ) . '</option>';
   }

   echo '</select>';
   
   // Cerramos el formulario
   echo '</form>';
   echo '</div>';
   echo '</div>';
   echo '</section>';
}

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

?>
<main data-v-0b4006ed>
<?php

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	?>
	<section data-v-0b4006ed class="gallery-images1">
		<section data-v-0b4006ed class="images-grid">
	<?php


	//woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	//woocommerce_product_loop_end();
	?>
		</section>
	</section>
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );


?>
</main>
    <main data-v-4beb8d90="">
            <div class="where" data-v-4beb8d90="">
               <div class="background opacity " data-v-4beb8d90=""></div>               
            </div>
            <div data-aos="fade-up" class="text" data-v-4beb8d90="">
               <div class="text1" data-v-4beb8d90="">
                  <div class="text11" data-v-4beb8d90="">
                     <h2>EXCLUSIVE CUSTOMIZATION TOOL</h2>
                  </div>
                  <div class="text12" data-v-4beb8d90="">
                     <p>Using our exclusive customization tool, you can personalize in a very easy way any piece from our collection or even create a new artwork from your own image. Create a stunning pixelated wood art masterpiece that reflects your personal style.</p>
                  </div>                  
                  <a href="/product/image-customized/" class="button1" data-v-4beb8d90="">CUSTOMIZE YOURS</a>
               </div>
            </div>
            
         </main>

<script>
   document.addEventListener("DOMContentLoaded", function () {
    // Seleccionar el elemento dentro de la clase "where"
    const whereElement = document.querySelector(".where .background.opacity");

    if (whereElement) {
        // Función para alternar la clase
        setInterval(() => {
            if (whereElement.classList.contains("opacity")) {
                whereElement.classList.remove("opacity");
            } else {
                whereElement.classList.add("opacity");
            }
        }, 3000); // Cambia cada 3 segundos
    }
   });
</script>
<?php


get_footer( 'shop' );
