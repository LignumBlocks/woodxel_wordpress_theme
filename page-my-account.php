<?php
/**
 * Template Name: My Account
 */

get_header(); ?>

<header data-v-9bc466b2="" class="page">
        <div data-v-9bc466b2="">
            <h1 data-v-9bc466b2="">ACCOUNT</h1>
            <p data-v-9bc466b2="">A personalized space where users can manage their profile and settings, which allows users to have a more secure experience adapted to their needs on the website.</p>
        </div>
    </header>

<main data-v-43663689 id="main" class="account-main">
    <?php
    echo do_shortcode( '[woocommerce_my_account]' );
    ?>
</main>

<main video-section-comp="">
            <div class="where" video-section-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video autoplay muted loop class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/mona_lisa.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2024/12/mona_lisa.mp4" type="video/mp4">
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
      
<?php get_footer(); ?>
