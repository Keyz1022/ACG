<?php
/**
 * Template Name: Category Dự án
 *
 * Template của Category Dự án
 *
 * @package sparkling
 */

 get_header(); ?>

 <div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">
	 	<div class="container">
		 	<div class="leftList col-lg-3">
	        	<nav class="block-leftMenu">		        	
		            <ul >
		                <li>
		                    <a href="http://localhost/acg/category/du-an/can-ho/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Căn hộ</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/du-an/dat-nen/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Đất nền</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/du-an/khu-nghi-duong/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Khu nghỉ dưỡng</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/du-an/biet-thu/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Biệt thự</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/du-an/officetel-office-hotel/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Officetel (Office + Hotel)</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/du-an/kcn/" target="_self">
		                    	<i class="fa fa-angle-right"></i> KCN</a>
		                </li>
		            </ul>
	        	</nav>
		    </div>
		    <div class="block-newsList col-lg-9">
				<?php
				if ( have_posts() ) : ?>
					<h2>Dự án</h2>
					<header class="page-header">
						<?php
						 //the_archive_title( '<h1 class="page-title">', '</h1>' );
						 // the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', 'archive-du-an' );

					endwhile;
				 else :
						get_template_part( 'template-parts/content', 'none' );

				 endif; ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
