<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * @package Woodxel
 */

get_header();
?>
<main class="blog">
    <main data-v-8a669d02="">
    <section data-v-8a669d02="" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text">
        <div data-v-8a669d02="" class="text1">
            <div data-v-8a669d02="" class="text11">
                <h2>OUR BLOG</h2>
                <p data-v-8a669d02="">Looking to transform your space?&nbsp;Our&nbsp;custom wall art panels&nbsp;bring your unique vision to life with ease.</p>
            </div>
        </div>
    </section>
    <section data-v-8a669d02="" class="gallery-images1">
        <section data-v-8a669d02="" class="images-grid">
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 10,
                'paged'          => $paged,
            );
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
        ?>

            <a href="<?php the_permalink(); ?>" class="card">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="card-image">
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'medium-large' ) ); ?>" alt="<?php the_title_attribute(); ?>" >
                    </div>             
                <?php endif; ?>

                <div class="card-content">
                <h3><?php the_title(); ?></h3>
                <p>
                    <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                </p>
                </div>
            </a>

            <?php
                endwhile;

                // Navegación de paginación
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '« Prev', 'textdomain' ),
                    'next_text' => __( 'Next »', 'textdomain' ),
                ) );

            else :
                echo '<p>No posts found.</p>';
            endif;

            wp_reset_postdata();
            ?>
            
        </section>
        <div data-v-8a669d02="" class="change-grid">
            <button data-v-8a669d02="">
                <svg data-v-8a669d02="" width="48" height="76" viewBox="0 0 48 76" fill="none" stroke="#2C2C2C" xmlns="http://www.w3.org/2000/svg" class="prev">
                <path d="M10 10L38 38L10 66" stroke-width="8.38754"></path>
                </svg>
            </button>
            <p data-v-8a669d02=""><span data-v-8a669d02="">1</span> of 2</p>
            <button data-v-8a669d02="">
                <svg data-v-8a669d02="" width="48" height="76" viewBox="0 0 48 76" fill="none" stroke="#2C2C2C" xmlns="http://www.w3.org/2000/svg" class="opacity next">
                <path d="M10 10L38 38L10 66" stroke-width="8.38754"></path>
                </svg>
            </button>
        </div>
    </section>
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
