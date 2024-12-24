<?php get_header(); ?>

<?php the_post(); ?>


		<div id="page-main-content">			
			<div class="eut-container">

				<!-- Content Area -->
				<div id="page-content-area">

					<!-- Content -->
					<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

					</div>

				</div>


			</div>

		</div>

	<?php get_footer(); ?>


//Omit closing PHP tag to avoid accidental whitespace output errors.
	