<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> mi="body">
<!--div id="app" data-server-rendered="true" data-v-app=""-->

<header id="site-header" role="banner" aria-modal="true"> 
   <nav data-v-fed2614c="">
    <a href="/">
   <img 
    id="site-logo" 
    width="132" 
    style="max-width: 100%; height: auto;" 
    src="<?php 
        $custom_logo_id = get_theme_mod('custom_logo'); 
        if ($custom_logo_id) {
            $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
            echo esc_url($logo_url);
        } else {
            echo esc_url(get_template_directory_uri() . '/assets/images/default-logo.png'); // Ruta a un logo predeterminado
        }
    ?>" 
    alt="Site Logo">
    </a>
    <?php 
    wp_nav_menu( array(
        'theme_location' => 'primary', // Ubicación registrada
        'menu_class'     => 'nav-center', // Clase personalizada para el menú
        'container'      => 'div', // Contenedor opcional del menú
        'container_class'=> 'nav-container', // Clase del contenedor
    ) );
    ?>    

    <div class="nav-right" data-v-fed2614c="">
        <a href="/cart-2" class="shopping" data-v-fed2614c="">
        <svg width="40" height="35" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-fed2614c="">
            <path d="M27.9243 27.1H9.62509L5.15429 2.55103C5.10058 2.2561 4.94489 1.98935 4.71437 1.79728C4.48385 1.60521 4.19312 1.5 3.89286 1.5H1" stroke="#2C2C2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.26 33.5006C13.0302 33.5006 14.4652 32.0679 14.4652 30.3006C14.4652 28.5333 13.0302 27.1006 11.26 27.1006C9.48974 27.1006 8.05469 28.5333 8.05469 30.3006C8.05469 32.0679 9.48974 33.5006 11.26 33.5006Z" stroke="#2C2C2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M27.924 33.5006C29.6942 33.5006 31.1293 32.0679 31.1293 30.3006C31.1293 28.5333 29.6942 27.1006 27.924 27.1006C26.1538 27.1006 24.7188 28.5333 24.7188 30.3006C24.7188 32.0679 26.1538 33.5006 27.924 33.5006Z" stroke="#2C2C2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.4561 20.6994H28.5781C29.1787 20.6994 29.7601 20.489 30.2212 20.1049C30.6822 19.7207 30.9936 19.1872 31.101 18.5974L33.0493 7.89941H6.125" stroke="#2C2C2C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><rect x="25" y="1.5" width="14.0231" height="14" rx="7" fill="#FD3032"></rect><path d="M32.8857 4.63373V11.5H31.753V5.97784L30.0753 6.54651V5.61127L32.7494 4.63373H32.8857Z" fill="#FCF8EC"></path>
        </svg>
        </a>
        <button class="menu-button" data-v-fed2614c="">
            <div class="bar1" data-v-fed2614c=""></div>
            <div class="bar2" data-v-fed2614c=""></div>
        </button>
    </div>
    <section class="menu-desplegable" data-v-fed2614c="">

        <div class="menu-movil-container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_movil',
                'menu_class' => 'menu-movil-lista',
                'container' => false,
            ));
            ?>
        </div>
        
    </section></nav>

    
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-button');
            const menuContainer = document.querySelector('.menu-desplegable');
            const bar1 = document.querySelector('.bar1');
            const bar2 = document.querySelector('.bar2');

            menuToggle.addEventListener('click', function () {
                console.log("click")
                menuContainer.classList.toggle('menuActived');
                bar1.classList.toggle('active1');
                bar2.classList.toggle('active2');
            });
        });
    </script>

</header>