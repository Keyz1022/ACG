<?php
/**
 * Single Post Template: Dự Án
 * 
 * @package sparkling
 */
get_header(); ?>

	<div id="primary" class="container content-area single-du-an">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-du-an' );

				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
				endif;
		endwhile; // end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
