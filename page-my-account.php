<?php
/**
 * Template Name: My Account
 */

get_header(); ?>

<header data-v-7a8dce87="">
   <div data-v-7a8dce87="" class="text">
      <div data-v-7a8dce87="" class="background"></div>
      <h1 class="header" data-v-7a8dce87="">ACCOUNT</h1>
      <p class="header" data-v-7a8dce87="">A personalized space where users can manage their profile and settings, which allows users to have a more secure experience adapted to their needs on the website.</p>
   </div>
</header>

<main data-v-43663689 id="main" class="account-main">
    <?php
    echo do_shortcode( '[woocommerce_my_account]' );
    ?>
</main>

<main data-v-4beb8d90="">
            <div class="where" data-v-4beb8d90="">
               <div class="background opacity " data-v-4beb8d90=""></div>               
            </div>
            <div data-aos="fade-up" class="text" data-v-4beb8d90="">
               <div class="text1" data-v-4beb8d90="">
                  <div class="text11" data-v-4beb8d90="">
                     <h2>Exclusive Customization Tool</h2>
                  </div>
                  <div class="text12" data-v-4beb8d90="">
                     <p>Using our exclusive customization tool, you can personalize in a very easy way any piece from our collection or even create a new artwork from your own image. Create a stunning pixelated wood art masterpiece that reflects your personal style.</p>
                  </div>                  
                  <a href="/product/image-customized/" class="button1" data-v-4beb8d90="">Customize Yours</a>
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

<?php get_footer(); ?>
