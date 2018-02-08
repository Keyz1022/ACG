acg<?php
/**
 * Template Name: Category Góc nhìn ACG
 *
 * Template của Category Góc nhìn ACG
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
		                    <a href="http://localhost/acg/category/goc-nhin-acg/bao-cao-phan-tich/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Báo cáo phân tích</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/goc-nhin-acg/van-phong-phap-luat-bat-dong-san/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Văn bản pháp luật bất động sản</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/goc-nhin-acg/thu-vien-bat-dong-san/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Thư viện bất động sản</a>
		                </li>
		            </ul>
	        	</nav>
		    </div>
		    <div class="newsList col-lg-9">
				<?php
				if ( have_posts() ) : ?>
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
						get_template_part( 'template-parts/content', 'archive-goc-nhin-acg' );

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
