<!doctype html>
<html class="no-js eut-responsive" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<!-- viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />

		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">

		<?php wp_head(); ?>
	</head>

	<body id="eut-body" <?php body_class(); ?>>

		<!-- Theme Wrapper -->
		<div id="eut-theme-wrapper">

			<div id="eut-main-content" class="eut-error-404">
				<div class="eut-container">
					<div class="eut-section" data-full-height="yes">
						<div class="eut-row">
							<div class="eut-column eut-column-1">

								<div class="eut-align-center">

									<div id="eut-content-area">
									Not found
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>


		</div> <!-- end #eut-theme-wrapper -->

		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>