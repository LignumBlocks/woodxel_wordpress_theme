<?php
/**
 * Template Name: Innovation
 * Template Post Type: page
 *
 * @package Woodxel
 */

get_header();
?>
<div class="innovation-container">   
   <header data-v-9bc466b2="" class="page">
        <div data-v-9bc466b2="">
            <h1 data-v-9bc466b2="">HANDCRAFTED ARTISTIC INNOVATION</h1>
        </div>
    </header>

   <main data-v-7d6f6b18="">      
      <div class="where" data-v-7d6f6b18="">
         <div class="background-container one"></div>
      </div>
      <div data-aos-anchor-placement="center-bottom" class="text fade-up" data-v-7d6f6b18="">
         <div class="text1" data-v-7d6f6b18="">            
               <div class="customization-tool">
                  <span class="number">01</span>
                  <h2>Exclusive Customization Tool</h2>
               </div>
               <p>At Woodxel, we empower you to create a one-of-a-kind piece of custom pixelated wood art using our exclusive customization tool. This innovative platform allows you to:
               Upload Your Image: Transform personal memories into stunning, tangible works of art.
               Real-Time Customization: View your design, instantly, in real-time, adjust the size and refine the details.
               Tailored to Your Style: Select the perfect combination of wood tones and pixel precision to match your vision.</p>
             
               <p>The artisanal process in the creation of custom pixelated art paintings is essential for the personalization of the commission. </p>         
           
               <p style="margin-bottom: 0">Each work is unique, reflecting not only the client's specifications but also the artist's vision and personal touch, making each piece an expression of individuality and creativity. This added value is manifested in the authenticity and exclusivity of the final product, elements highly appreciated in the contemporary art market.</p>
            
         </div>
      </div>
   </main>

   <main class="image-order">
      
      <div data-v-56ed5e91="" class="text" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
         <div data-v-56ed5e91="" class="text1">
            <div class="customization-tool">
               <span class="number">02</span>
               <h2>The Artisanal Process: </br>
               Bringing Your Vision to Life</h2>
            </div>
            <p >Once your custom design is commissioned, the journey to crafting your pixelated wooden masterpiece begins. Our artisans follow a meticulous process to ensure every detail reflects the highest standards of artistic craftsmanship and innovative design.</p>
            <p style= "margin-bottom: 0">The process starts with the careful selection of sustainably sourced wood, which is cut into precision-crafted blocks to form the foundation of your artwork. Next, each block is hand-painted to match the exact colors of your design, ensuring depth, vibrancy, and consistency. Finally, the blocks are assembled one by one in a painstakingly precise arrangement. This labor-intensive process combines creativity, expertise, and dedication to deliver a stunning piece that is as unique as the story it tells.</p>
         </div>
      </div>

      <div class="images">
         <div data-v-56ed5e91="" class="images-container">
            <div data-v-56ed5e91="" class="img1 img" >
               <img data-v-56ed5e91="" src="http://w2.local/wp-content/uploads/2024/12/i4.png" alt="">
            </div>
            <div data-v-56ed5e91="" class="img2 img active" >
               <img data-v-56ed5e91="" src="http://w2.local/wp-content/uploads/2024/12/i3.png" alt="">
            </div>
            <div data-v-56ed5e91="" class="img3 img" >
               <img data-v-56ed5e91="" src="http://w2.local/wp-content/uploads/2024/12/i2.png" alt="">
            </div>            
         </div>
      </div>
   </main>

   <main data-v-7d6f6b18="" class="section-3">      
      <div class="where" data-v-7d6f6b18=""> 
         <div class="background-container two"></div>
      </div>
      <div cdata-aos-anchor-placement="center-bottom" class="text fade-up" data-v-7d6f6b18="">
         <div class="text1" data-v-7d6f6b18="">            
               <div class="customization-tool">
                  <span class="number">03</span>
                  <h2>The Final Masterpiece:<br/>
                  Art That Resonates With You </h2>
               </div>
               <p>The final result of the Woodxel process is a one-of-a-kind, handcrafted pixelated wooden masterpiece, meticulously created to reflect your story, your vision, and your space.</p>             
               <p>Each block, carefully hand-painted and precisely assembled, comes together to form a vibrant, gallery-worthy artwork that is both visually captivating and functionally innovative. Beyond its stunning aesthetic, your masterpiece is engineered with acoustic-enhancing properties, designed to balance and improve the sound quality of any space.</p>
               <p style="margin-bottom: 0">This is more than decor—it’s a fusion of artistic craftsmanship, acoustic functionality, and personal expression. Whether showcased in your living room, office, or studio, your piece transforms the atmosphere, bringing harmony to both the visual and auditory experience. With Woodxel, you don’t just own art; you own a masterpiece that resonates.</p>
         </div>
      </div>
   </main>

   <main video-section-comp="">
            <div class="where" video-section-comp="">
               <div class="swiper-video-container">
                  <div class="swiper-wrapper">
                        <!-- Video 1 -->
                        <div class="swiper-slide">
                              <video style="object-position: center" playsinline autoplay muted loop class="carousel-video" data-video="http://w2.local/wp-content/uploads/2025/01/the_starry_night.mp4">
                                 <source src="http://w2.local/wp-content/uploads/2025/01/the_starry_night.mp4" type="video/mp4">
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
   document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.images-container .img');
    let currentIndex = 0;

    function showNextImage() {
        // Oculta todas las imágenes
        images.forEach((img) => img.classList.remove('active'));

        // Muestra la siguiente imagen
        images[currentIndex].classList.add('active');

        // Incrementa el índice para la próxima imagen
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Cambia la imagen cada 3 segundos
    setInterval(showNextImage, 3000);
});


</script>
   


</div>

<?php
get_footer();
