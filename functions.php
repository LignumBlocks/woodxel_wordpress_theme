<?php

function tool_enqueue_styles_and_scripts() {

    if ( is_single(525) ) {
        wp_enqueue_style( 'tool-style', site_url() . '/wp-content/uploads/dist/index.CyLRoxf5.css' );
        wp_enqueue_script( 'tool-script', site_url() . '/wp-content/uploads/dist/index.CSVxPSPw.js', array(), false, true );
		
        wp_localize_script('tool-script', 'wpApiSettings', array(
            'root' => esc_url_raw(rest_url()),
            'nonce' => wp_create_nonce('wp_rest') // Generación del nonce
        ));
        // Añadir el atributo type="module" al script encolado
        add_filter( 'script_loader_tag', 'add_module_type_to_custom_script', 10, 2 );
    }
}
add_action( 'wp_enqueue_scripts', 'tool_enqueue_styles_and_scripts' );

function add_module_type_to_custom_script($tag, $handle) {
    if ('tool-script' !== $handle) {
        return $tag;
    }
    return str_replace('<script ', '<script type="module" ', $tag);
}

function enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', [], '9.0.0');
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', [], '9.0.0', true);

    if (class_exists('WooCommerce')) { // Solo si WooCommerce está activo
        wp_enqueue_script(
            'ocultar-mensaje', 
            get_template_directory_uri() . '/js/messages.js', 
            array(), 
            '1.0', 
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

function woodxel_enqueue_assets() {
    // Registrar estilos generados
    //wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', [], null);
    wp_enqueue_style('app-css', get_template_directory_uri() . '/css/app.css', [], null);
    wp_enqueue_style('gallery-css', get_template_directory_uri() . '/css/GalleryView.css', [], null);
    wp_enqueue_style('chapling-css', get_template_directory_uri() . '/css/ChaplingComp.css', [], null);
    wp_enqueue_style('about-css', get_template_directory_uri() . '/css/AboutView.css', [], null);
    wp_enqueue_style('item-css', get_template_directory_uri() . '/css/ItemView.css', [], null);
    wp_enqueue_style('customize-css', get_template_directory_uri() . '/css/CustomizeView.css', [], null);
    wp_enqueue_style('innovation-css', get_template_directory_uri() . '/css/InnovationView.css', [], null);
    wp_enqueue_style('blog-css', get_template_directory_uri() . '/css/BlogView.css', [], null);
    wp_enqueue_style('blog1-css', get_template_directory_uri() . '/css/Blog5View.css', [], null);
    wp_enqueue_style('other-articles-css', get_template_directory_uri() . '/css/OtherArticlesComp.css', [], null);
    wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/ContactView.css', [], null);
    wp_enqueue_style('terms-css', get_template_directory_uri() . '/css/TermsView.css', [], null);
    wp_enqueue_style('privacy-css', get_template_directory_uri() . '/css/PrivacyView.css', [], null);
    wp_enqueue_style('account-css', get_template_directory_uri() . '/css/AccountView.css', [], null);
    wp_enqueue_style('grid-css', get_template_directory_uri() . '/css/grid.css', [], null);
    wp_enqueue_style('woocommerce-custom-css', get_template_directory_uri() . '/css/woocommerce-custom.css', [], null);
    wp_enqueue_style('basic-css', get_template_directory_uri() . '/css/basic.css', [], null);
    wp_enqueue_style('client-opinion-css', get_template_directory_uri() . '/css/ClientOpinion.css', [], null);
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.css', [], null);
    wp_enqueue_style('video-section-css', get_template_directory_uri() . '/css/video_section.css', [], null);
    wp_enqueue_style('shopping-css', get_template_directory_uri() . '/css/ShoppingView.css', [], null);


    wp_enqueue_style('principal-layout-css', get_template_directory_uri() . '/css/PrincipalLayout.css', [], null);

    //wp_enqueue_style('vue-css', get_template_directory_uri() . '/dist/assets/vue.css', [], null);
    wp_enqueue_style('home-css', get_template_directory_uri() . '/css/HomeView.css', [], null);
    wp_enqueue_style('navcomp-css', get_template_directory_uri() . '/css/NavComp.css', [], null); 
    /* 
    wp_enqueue_style('blog2-css', get_template_directory_uri() . '/dist/assets/Blog2View.css', [], null);
    wp_enqueue_style('blog3-css', get_template_directory_uri() . '/dist/assets/Blog3View.css', [], null);
    wp_enqueue_style('blog4-css', get_template_directory_uri() . '/dist/assets/Blog4View.css', [], null);
    wp_enqueue_style('blog5-css', get_template_directory_uri() . '/dist/assets/Blog5View.css', [], null);
    wp_enqueue_style('item-css', get_template_directory_uri() . '/dist/assets/ItemView.css', [], null);

  */ 
}
add_action('wp_enqueue_scripts', 'woodxel_enqueue_assets');

function custom_rest_cors() {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Credentials: true');
}
add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', 'custom_rest_cors');
}, 15);

function woodxel_theme_setup() {
    // Habilitar soporte para logo personalizado
    add_theme_support('custom-logo', [
        'height'      => 100,  // Altura predeterminada del logo
        'width'       => 100,  // Ancho predeterminado del logo
        'flex-height' => true, // Permitir altura flexible
        'flex-width'  => true, // Permitir ancho flexible
    ]);

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'woodxel' ),
        'menu_movil' => __('Menu for Moviles', 'woodxel'),
    ) );
}
add_action('after_setup_theme', 'woodxel_theme_setup');

// Añadir soporte para WooCommerce
function woodxel_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woodxel_woocommerce_support');

add_filter( 'woocommerce_show_page_title', '__return_false' );

add_filter( 'wpcf7_form_elements', 'customize_wpcf7_form_elements' );

function customize_wpcf7_form_elements( $form ) {
    // Editar el HTML del formulario aquí.
    $form = str_replace(
        '<p>', // Reemplaza este elemento.
        '', // Con este elemento.
        $form
    );
    $form = str_replace(
        '</p>',
        '',
        $form
    );

    $form = preg_replace_callback(
        '/<(input|textarea|button)\b([^>]*)>/i',
        function( $matches ) {
            // Si el atributo data-v-dacab06c no existe, agregarlo
            $element = sprintf(
                '<%s %s data-v-24f50242>',
                $matches[1], // Elemento (input, textarea, button)
                $matches[2]  // Atributos existentes
            );

            // Si el elemento es un input del tipo submit, eliminar todas las clases y dejar solo "button2"
            if ( $matches[1] === 'input' && strpos( $matches[2], 'type="submit"' ) !== false ) {
                // Eliminar la clase existente (si hay) y agregar únicamente "button2"
                $element = preg_replace(
                    '/class="[^"]*"/i', // Buscar cualquier clase existente
                    'class="button2"',  // Reemplazar con "button2"
                    $element
                );

                // Si no tiene una clase, añadirla directamente como única clase
                if ( strpos( $element, 'class=' ) === false ) {
                    $element = str_replace(
                        $matches[1], 
                        sprintf('%s class="button2"', $matches[1]),
                        $element
                    );
                }
                
            }

            return $element;
        },
        $form
    );

    return $form;
}
