<?php
get_header(); // Incluye el header.php
?>


<main id="main-content">
<main class="video-section">
   <div class="content">
      <h1>Custom Handcrafted Pixel Art</h1>
      <p>Transform Any Image Into a Unique Pixelated Wood Art Piece, where each piece is meticulously crafted with precision and artistry to bring out the finest details.</p>
      <a aria-current="page" href="/image-customized" class="router-link-active router-link-exact-active button1" data-v-194c7055="">Customize Yours</a>
   </div>
</main>
   <main class="content-section">
      <div class="gallery-text" data-v-e2679564="">
         <div class="text" data-v-e2679564="">
            <h2>Gallery</h1>
            <p>Discover the magic of pixelated art and get your hands on a unique piece today</p>
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
               <div class="page swiper-slide" data-v-13f77b72="">
                  <a href="<?php echo esc_url($link); ?>" data-v-13f77b72="">
                     <div class="image" data-v-13f77b72="">
                        <img src="<?php echo esc_url($image); ?>" alt="" data-v-13f77b72=""></div>
                     <!-- <div class="show text unshow2" data-v-13f77b72="">
                        <div class="text-left" data-v-13f77b72="">
                           <div class="product-name"><?php echo esc_html($title); ?></div>
                           <p class="product-dim"><?php echo esc_html($dimensions);?></p>
                        </div>
                        <p class="product-price"><?php echo $price; ?></p>
                     </div> -->
                  </a>
               </div>

               <?php
               }
               } else {
                     echo '<p>No products found in the "front" category.</p>';
               }
               ?>
            </div>
            <button class="swiper-button-prev" data-v-13f77b72="">
               <svg width="48" height="76" viewBox="0 0 48 76" fill="none" stroke="#2C2C2C" xmlns="http://www.w3.org/2000/svg" class="icon1" data-v-13f77b72="">
                  <path d="M10 10L38 38L10 66" stroke-width="8.38754"></path>
               </svg>
            </button>
            <button class="swiper-button-next" data-v-13f77b72="">
               <svg width="48" height="76" viewBox="0 0 48 76" fill="none" stroke="#2C2C2C" xmlns="http://www.w3.org/2000/svg" class="icon2" data-v-13f77b72="">
                  <path d="M10 10L38 38L10 66" stroke-width="8.38754"></path>
               </svg>
            </button>

            <style>.swiper-button-prev:after, .swiper-button-next:after{content: ''}</style>
         </div>

         
      </section>
   </main>
   <main data-v-194c7055="">
      <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text" data-v-194c7055="">
         <div class="text1" data-v-194c7055="">
            <h2>Exclusive Customization Tool</h2>
            <p >Using our exclusive customization tool, you can personalize in a very easy way any piece from our collection or even create a new artwork from your own image. Create a stunning pixelated wood art masterpiece that reflects your personal style.</p>
         </div>
         <a aria-current="page" href="/image-customized" class="router-link-active router-link-exact-active button1" data-v-194c7055="">Customize Yours</a>
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
               <div class="images-container" data-v-56ed5e91="">
                  <div class="img1 img" style="order:1;" data-v-56ed5e91=""><img src="http://w2.local/wp-content/uploads/2024/12/innovation1.jpg" alt="" data-v-56ed5e91=""></div>
                  <div class="img2 img" style="order:2;" data-v-56ed5e91=""><img src="http://w2.local/wp-content/uploads/2024/12/innovation2.jpg" alt="" data-v-56ed5e91=""></div>
                  <div class="img3 img" style="order:3;" data-v-56ed5e91=""><img src="http://w2.local/wp-content/uploads/2024/12/innovation3.jpg" alt="" data-v-56ed5e91=""></div>
                  <div class="img3 img" style="order:4;" data-v-56ed5e91=""><img src="http://w2.local/wp-content/uploads/2024/12/innovation4.jpg" alt="" data-v-56ed5e91=""></div>
               </div>
            </div>
            <div class="text" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-v-56ed5e91="">
               <div class="text1" data-v-56ed5e91="">
                  <h2>Handcrafted Artistic Innovation</h2>
                  <p >We are a vibrant collective of experienced craftsmen, united by a passion for transforming memories into masterpieces of pixelated wood art. </p>
                  <p >That not only have an artistic purpose but, due to their structure, disperse the incident sound energy evenly and in different directions, thus creating an enveloping sound that improves the acoustics of any space.</p>
               </div>
               <a href="/innovation" class="button1" data-v-56ed5e91="">Learn More About</a>
            </div>
         </main>

         <main data-v-5cdffde3="">
            <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text" data-v-5cdffde3="">
               <div class="text1" data-v-5cdffde3="">
                  <h2>About Us</h2>
                  <p >At the heart of our company is the passion and talent of our founder, a visionary artist who transformed his love of pixel art and craftsmanship into a way of life.</p>
                  <p >Each work we create is a tribute to his creativity, meticulously carved from wood to capture the essence of the digital age in a tangible form. Our commitment is to art, quality and originality, ensuring that each piece is as unique as its creator and story.</p>
               </div>
               <a href="/pixelated-wood-art-masterpieces-about-us" class="button1" >Learn More About</a>
            </div>
            <div class="about-image" data-v-5cdffde3="">
               <div class="left" data-v-5cdffde3="">
                  <div class="recorte-contenedor" data-v-5cdffde3="">
                     <div class="recorte" data-v-5cdffde3=""></div>
                  </div>
                  <div class="man" data-v-5cdffde3=""><img src="http://w2.local/wp-content/uploads/2024/12/about.png" alt="" data-v-5cdffde3=""></div>
               </div>
               <div class="right" data-v-5cdffde3="">
                  <div class="right-background" data-v-5cdffde3=""></div>
               </div>
            </div>
         </main>

         <main client-opp-comp="">
            <div class="where" client-opp-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video controls class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/customer_chapling.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2024/12/customer_chapling.mp4" type="video/mp4">
                                 Tu navegador no soporta la reproducción de video.
                              </video>
                        </div>
                        <!-- Agrega más videos aquí -->
                        <div class="swiper-slide">
                              <video controls class="carousel-video" data-video="http://w2.local/wp-content/uploads/2024/12/customer_chapling.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2024/12/customer_chapling.mp4" type="video/mp4">
                                 Tu navegador no soporta la reproducción de video.
                              </video>
                        </div>
                  </div>
                  <!-- Botones de navegación -->
                  <!-- <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div> -->
               </div>
            </div>
            <div data-aos="fade-up" class="text" client-opp-comp="">
               <div class="text1" client-opp-comp="">
                  <div class="text11" client-opp-comp="">
                     <h2>Transformative Client Experiences</h2>
                  </div>
                  <div class="text12" client-opp-comp="">
                  <p>We are a vibrant collective of experienced craftsmen, united by a passion for transforming memories into masterpieces of pixelated wood art.</p>
                  <p>That not only have an artistic purpose but, due to their structure, disperse the incident sound energy evenly and in different directions, thus creating an enveloping sound that improves the acoustics of any space.</p>
                  </div>                  
                  <a href="/product/image-customized/" class="button1" client-opp-comp="">Customize Yours</a>
               </div>
            </div>
            
         </main>

         <main data-v-1fa46bc7="">
            <div class="gallery-text" data-v-1fa46bc7="">
               <div class="text" data-v-1fa46bc7="">
                  <h2 class="blog-section">Our Blog</h2>
                  <p data-v-1fa46bc7="">Immerse yourself in the world of pixel art and enrich your knowledge</p>
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
                     <a href="<?php echo esc_url($permalink); ?>" class="button1" data-v-1fa46bc7="">Read The Article</a>
                  </div>
               </div>
               <div class="items" data-v-1fa46bc7="">
               <?php else : ?>
                  <div class="item2 item" data-v-1fa46bc7="" style="background-image: url('<?php echo esc_url($thumbnail); ?>');">
                     <div class="item-content item-content2" data-v-1fa46bc7="">
                        <h2 >Luxury Homes: The beauty of pixeleted art decor</h2>
                        <p >Luxury pixelated art decor represents the perfect fusion of luxury and innovation, a hallmark of exceptional home design. Introducing the latest…</p>
                        <a href="<?php echo esc_url($permalink); ?>" class="button1" data-v-1fa46bc7="">Read The Article</a>
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
   
   <!-- Modal -->
   <div id="video-modal" class="modal" style="display: none;">
      <div class="modal-content">
         <span class="close-modal">&times;</span>
         <video controls id="modal-video" class="full-width-video">
               <source src="" type="video/mp4">
               Tu navegador no soporta la reproducción de video.
         </video>
      </div>
   </div>        

              

</main>

<script>
   document.addEventListener("DOMContentLoaded", () => {
      const swiper = new Swiper('.swiper-video-container', {
        slidesPerView: 1,        
    });

    /* // Seleccionar elementos del modal
    const modal = document.getElementById('video-modal');
    const modalVideo = document.getElementById('modal-video');
    const closeModal = document.querySelector('.close-modal');

    // Agregar evento a cada video en el carrusel
    document.querySelectorAll('.carousel-video').forEach(video => {
        video.addEventListener('click', () => {
            const videoSrc = video.getAttribute('data-video');
            modalVideo.querySelector('source').src = videoSrc;
            modalVideo.load(); // Recargar el video en el modal
            modal.style.display = 'flex'; // Mostrar el modal
        });
    });

    // Cerrar el modal
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        modalVideo.pause(); // Detener el video al cerrar el modal
    });

    // Cerrar el modal al hacer clic fuera del contenido
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            modalVideo.pause();
        }
    }); */
});

</script>

<?php
get_footer(); // Incluye el footer.php
?>
