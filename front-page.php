<?php
get_header(); // Incluye el header.php
?>
<main class="video-section" aria-modal="true">
   <div class="content">
      <h1 class="home-title">Custom Handcrafted Pixel Art</h1>
      <p>Transform Any Image Into a Unique Pixelated Wood Art Piece, where each piece is meticulously crafted with precision and artistry to bring out the finest details.</p>
      <a aria-current="page" href="/image-customized" class="router-link-active router-link-exact-active button1" data-v-194c7055="">Customize yours</a>
   </div>
</main>

<main id="main-content" aria-modal="true">
<main class="content-section" aria-modal="true">
      <div class="gallery-text" data-v-e2679564="">
         <div data-v-e2679564="">
            <h2>Explore Our Gallery</h1>
         </div>
        <a href="/high-end-wood-wall-art-gallery" class="link" >View all</a>
      </div>
      <section class="carousel2" data-v-e2679564="" data-v-13f77b72="">         
         <div class="swiper-home-container" style="position: relative" data-v-13f77b72="">
            <div class="swiper-wrapper">
               <?php
               // Obtener productos de la categoría "front"
               $args = [
                     'limit' => -1, // Todos los productos
                     'category' => ['front'], // Slug de la categoría
                     'status' => 'publish' // Solo productos publicados
               ];

               $query = new WC_Product_Query($args);
               $products = $query->get_products();
               if (!empty($products)) {
                     foreach ($products as $product) {
                        // Obtener detalles del producto
                        $title = $product->get_name();
                        $price = $product->get_price_html();
                        $image = wp_get_attachment_url($product->get_image_id());
                        $link = get_permalink($product->get_id());
                        $dimensions = get_post_meta($product->get_id(), 'dimensions', true); // Obtener el custom field
               ?>
               <!--[-->
               <div class="swiper-slide" data-v-13f77b72="">
                  <a href="<?php echo esc_url($link); ?>" data-v-13f77b72="">
                     <div class="image" data-v-13f77b72="">
                        <img src="<?php echo esc_url($image); ?>" alt="" data-v-13f77b72=""></div>                     
                  </a>
               </div>

               <?php
               }
               } else {
                     echo '<p>No products found in the "front" category.</p>';
               }
               ?>
            </div>           
         </div>

         
      </section>
   </main>
   
   
   <main data-v-194c7055="">
      <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text" data-v-194c7055="">
         <div class="text1" data-v-194c7055="">
            <h2>Exclusive Customization Tool</h2>
            <p >Unleash your creativity with our exclusive customization tool, designed to make crafting your masterpiece effortless. Personalize any design from our curated gallery or transform your own image into a unique work of custom pixelated wood art.</p>
            <p >Bring your vision to life with a piece that not only reflects your personal style but also enhances your space with its artistic craftsmanship and functional acoustic design.</p>
         </div>
         <a aria-current="page" href="/image-customized" class="router-link-active router-link-exact-active button1" data-v-194c7055="">Customize yours</a>
      </div>
      <div class="wave" data-v-194c7055="">
         <div class="before-wrapper">
            <div class="wave-wrapper">
            <?php echo do_shortcode('[bafg id="3473"]'); ?>
            <!--img src="/assets/HomeWave-lKWzK8T_.jpg" alt="" data-v-194c7055=""-->
            </div>
         </div>
      </div>
   </main>

   <main data-v-56ed5e91="">
            <div class="images" data-v-56ed5e91="">
               
            </div>
            <div class="text" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-v-56ed5e91="">
               <div class="text1" data-v-56ed5e91="">
                  <h2>Handcrafted Artistic Innovation</h2>
                  <p >At Woodxel, we are driven by a passion for turning cherished memories into functional works of art. Our handcrafted pieces not only elevate your decor but also contribute to a more balanced and harmonious acoustic environment.</p>
                  <p >Each creation reflects a perfect balance of artistic craftsmanship, sustainable materials, and innovative design, delivering unmatched beauty and functionality. Whether for your home, office, or studio, Woodxel’s designs transform your space with style and purpose.</p>
               </div>
               <a href="/innovation" class="button1" data-v-56ed5e91="">Learn more about</a>
            </div>
         </main>

         <main data-v-5cdffde3="">
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text" data-v-5cdffde3="">
               <div class="text1" data-v-5cdffde3="">
                  <h2>About Us</h2>
                  <p >At the heart of our company is the passion and talent of our founder, a visionary artist who transformed his love of pixel art and craftsmanship into a way of life.</p>
                  <p >Each work we create is a tribute to his creativity, meticulously carved from wood to capture the essence of the digital age in a tangible form. Our commitment is to art, quality and originality, ensuring that each piece is as unique as its creator and story.</p>
               </div>
               <a href="/pixelated-wood-art-masterpieces-about-us" class="button1" >Learn more about</a>
            </div>
            <div class="about-image" data-v-5cdffde3="">
               
            </div>
         </main>         

         <main client-opp-comp="">
            <div class="where" client-opp-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                           <img class="carousel-image-shot" src="http://w2.local/wp-content/uploads/2024/12/interview1.png" alt="Descripción de la imagen 1">
                           <div class="play-icon interview" data-video-url="http://w2.local/wp-content/uploads/2024/12/customer_chapling.mp4">
                           <svg fill="#FFFFFF" height="80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                              viewBox="0 0 512 512" xml:space="preserve">
                           <g>
                              <g>
                                 <path d="M500.203,236.907L30.869,2.24c-6.613-3.285-14.443-2.944-20.736,0.939C3.84,7.083,0,13.931,0,21.333v469.333
                                    c0,7.403,3.84,14.251,10.133,18.155c3.413,2.112,7.296,3.179,11.2,3.179c3.264,0,6.528-0.747,9.536-2.24l469.333-234.667
                                    C507.435,271.467,512,264.085,512,256S507.435,240.533,500.203,236.907z"/>
                              </g>
                           </g>
                           </svg>
                           </div>
                        </div>
                  </div>                  
               </div>
            </div>
            <div class="client fade-up text" client-opp-comp="">
               <div class="text1" client-opp-comp="">
                  <div class="text11" client-opp-comp="">
                     <h2>Transformative Client Experiences</h2>
                  </div>
                  <div class="text12" client-opp-comp="">
                  <p>Our clients trust us to transform their cherished memories into functional wooden art that brings new life to their spaces. From enriching living rooms to enhancing professional studios, our acoustic wooden art balances visual elegance with sound harmony.</p>
                  <p>Every piece we create is designed to resonate with your story, combining artistic craftsmanship and thoughtful functionality. Let us help you craft a masterpiece that not only decorates but also elevates your environment.</p>
                  </div>                  
                  <a href="/product/image-customized/" class="button1" client-opp-comp="">Customize yours</a>
               </div>
            </div>
            
         </main>

         <main data-v-1fa46bc7="" class="hm">
            <div class="gallery-text" data-v-1fa46bc7="">
               <div data-v-1fa46bc7="">
                  <h2 class="blog-section">Our Blog</h2>
               </div>
               <a href="/blog-custom-wall-art-panels" class="link" >View all articles</a>
            </div>
            <section class="flex-items" data-v-1fa46bc7="">
               <?php
               // Configuración para obtener los últimos 3 posts
               $args = [
                  'post_type'      => 'post',
                  'posts_per_page' => 3,
                  'post_status'    => 'publish',
               ];
               $query = new WP_Query($args);

               if ($query->have_posts()) :
                  $index = 1;
                  while ($query->have_posts()) :
                     $query->the_post();

                     // Variables para cada post
                     $title = get_the_title();
                     $excerpt = wp_trim_words(get_the_excerpt(), 20, '...');
                     $permalink = get_permalink();
                     $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium-large') : ''; // URL de la imagen destacada
                     $is_first = ($index === 1);
               ?>
                  <?php if ($is_first) : ?>
               <div class="item1Ref item1 item" data-v-1fa46bc7="" style="background-image: url('<?php echo esc_url($thumbnail); ?>');">
                  <div class="item1Ref2 item-content item-content1" data-v-1fa46bc7="" >
                     <h2 ><?php echo esc_html($title); ?></h2>
                     <p ><?php echo esc_html($excerpt); ?></p>
                     <a href="<?php echo esc_url($permalink); ?>" class="button1" data-v-1fa46bc7="">Read the article</a>
                  </div>
               </div>
               <div class="items" data-v-1fa46bc7="">
               <?php else : ?>
                  <div class="item2 item" data-v-1fa46bc7="" style="background-image: url('<?php echo esc_url($thumbnail); ?>');">
                     <div class="item-content item-content2" data-v-1fa46bc7="">
                        <h2>Luxury Homes: The beauty of pixeleted art decor</h2>
                        <p>Luxury pixelated art decor represents the perfect fusion of luxury and innovation, a hallmark of exceptional home design. Introducing the latest…</p>
                        <a href="<?php echo esc_url($permalink); ?>" class="button1" data-v-1fa46bc7="">Read the article</a>
                     </div>
                  </div>
               <?php endif; ?>
               <?php
                     $index++;
                  endwhile;
                  wp_reset_postdata();
               else :
                  echo '<p>No posts found.</p>';
               endif;
               ?>
               </div>
            </section>
         </main>

</main>

<script>
   document.addEventListener("DOMContentLoaded", () => {

      const swiper_gallery = new Swiper('.swiper-home-container', {
        speed: 400,
        slidesPerView: 1,
        spaceBetween : 10,       
        autoplay: {
        delay: 2500,
        disableOnInteraction: false,
         },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });

   const swiper = new Swiper('.swiper-video-container', {
      slidesPerView: 1,
    });




   document.querySelectorAll('.play-icon').forEach(icon => {
   icon.addEventListener('click', function() {
        const videoUrl = this.getAttribute('data-video-url');
        
        // Cargar la URL del video en el popup
        const videoElement = document.querySelector('#popup-video-source');
        videoElement.setAttribute('src', videoUrl);

        // Obtener el elemento de video y reproducirlo
        const videoPopup = document.querySelector('#video-popup');
        videoPopup.load(); // Vuelve a cargar el video para asegurarse de que se cargue el nuevo src
        videoPopup.play(); // Reproduce el video

        // Abrir el popup (usando Popup Maker)
        if (typeof PUM !== 'undefined' && PUM.open) {
            PUM.open(4279); // 123 es el ID del popup de Popup Maker
        }
    });
   });
});

</script>

<?php
get_footer(); // Incluye el footer.php
?>
