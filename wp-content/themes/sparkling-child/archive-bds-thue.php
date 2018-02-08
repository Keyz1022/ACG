<?php
/**
 * Template Name: Category BĐS Thuê
 *
 * Template của Category BĐS Thuê
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
	                    	<a href="http://localhost/acg/category/bds-cho-thue/cho-thue-can-ho-chung-cu/" target="_self">
	                    		<i class="fa fa-angle-right"></i> Cho thuê căn hộ chung cư</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-nha-rieng/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê nhà riêng</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-nha-mat-pho/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê nhà mặt phố</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-nha-tro-phong-tro/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê nhà trọ, phòng trọ</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-van-phong/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê văn phòng</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-cua-hang-ki-ot/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê cửa hàng, ki-ốt</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-kho-nha-xuong-dat/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê kho, nhà xưởng, đất</a>
		                </li>
		                <li>
		                    <a href="http://localhost/acg/category/bds-cho-thue/cho-thue-loai-bat-dong-san-khac/" target="_self">
		                    	<i class="fa fa-angle-right"></i> Cho thuê loại bất động sản khác</a>
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
					get_template_part( 'template-parts/content', 'archive-bds-thue' );

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
