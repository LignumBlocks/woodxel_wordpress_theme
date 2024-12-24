<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 *
 * @package Woodxel
 */

get_header();
?>
<main class="contact-us">
    <header data-v-fc68e082="">
    <div data-v-fc68e082="" class="text">
        <div data-v-fc68e082="" class="background"></div>
        <h1 class="header" data-v-fc68e082="">CONTACT US</h1>
        <p class="header" data-v-fc68e082="">Its purpose is to provide users with an easy and direct way to ask questions, request more information, or report problems related to products or services.</p>
    </div>
    </header>

    <main data-v-24f50242="">
        <div class="texts" data-v-24f50242="">
            <div class="p1" data-v-24f50242="">
                <div class="text11" data-v-24f50242="">
                    <h2>Reach Out to Create Your Custom Pixelated Artwork with Woodxel</h1>
                    <p data-v-24f50242="">A communication bridge between the company and its visitors.</p>
                </div>
                <p >We’re excited to help you bring your vision to life with our custom pixelated artwork. Whether you have a specific idea in mind or need guidance in creating your perfect piece, our team at Woodxel is here to assist you every step of the way.</p>
                <p >Fill out the form below to start your journey towards a unique and personalized masterpiece that reflects your style and taste. Let’s create something extraordinary together!</p>
                <p >At Woodxel, we’re passionate about turning your ideas into reality through&nbsp;<a href="" data-v-dacab06c="">custom pixelated artwork</a>. Whether you’re looking for a unique gift or a personalized piece to elevate your space, our team is here to help.</p>
                <p >From the moment you reach out, we ensure a seamless experience, guiding you through the process of creating your own custom pixelated masterpiece. Learn more about the importance of&nbsp;<a href="" data-v-dacab06c="">environmentally responsible practices</a>&nbsp;in art creation as we craft a piece that truly reflects your style and vision. </p>
            </div>
            <div class="p2" data-v-24f50242="">
                <?php echo do_shortcode( '[contact-form-7 id="48407bb" title="woodxel contact new"]' ); ?>
            </div>
            
        </div>
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
get_footer();
