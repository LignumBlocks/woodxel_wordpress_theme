<?php
get_header(); // Incluye el encabezado del sitio

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <main data-v-9df49687="" class="MAIN">
            <section data-v-9df49687="" class="left">
                <h1 data-v-9df49687=""><?php the_title(); ?></h1>
                <div 
                    data-v-9df49687="" 
                    class="image"
                    style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>'); ">
                </div>
            </section>
            <section data-v-9df49687="" class="right">
                <main data-v-6752f03b="" data-v-9df49687="">
                <?php the_content(); ?>
                </main>                
                
            </section>
        </main>

    <?php endwhile;
else :
    echo '<p>No posts found!</p>';
endif;
?>
    <?php
    $current_post_id = get_the_ID(); 

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3, 
        'post__not_in'   => array( $current_post_id ),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>

    <main data-v-9b65d5a6="" data-v-9df49687="">
        <section data-v-9b65d5a6="" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="text">
            <div data-v-9b65d5a6="" class="text1">
                <div data-v-9b65d5a6="" class="text11">
                    <h2>OTHER ARTICLES</h2>
                    <p data-v-9b65d5a6="" class="p">Immerse yourself in the world of pixel art and enrich your knowledge</p>
                </div>
                <div data-v-9b65d5a6="" class="link">
                    <a data-v-9b65d5a6="" href="/blog-custom-wall-art-panels" class="real-link">View all articles</a>
                </div>
            </div>
        </section>       

        <!--carousel-->

        <div class="other-content">
            <div class="swiper-others-container" style="position: relative" data-v-13f77b72="">
                <div class="swiper-wrapper">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <a data-v-4dac2dbf="" href="<?php the_permalink(); ?>" class="swiper-slide card">
                        <div class="card-image">
                            <img data-v-4dac2dbf="" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>" alt="<?php the_title_attribute(); ?>">
                        </div>
                        <div data-v-4dac2dbf="" class="card-content" style="background-color: unset">
                            <h3><?php the_title(); ?></h3>
                            <p ><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                        </div>
                    </a>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </main>
    <?php
    endif;
    wp_reset_postdata();
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-others-container', {
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },            
            },
        });
    });
    </script>
<?php
get_footer();