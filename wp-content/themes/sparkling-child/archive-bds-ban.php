<?php
/**
 * Template Name: Category BĐS Bán
 *
 * Template của Category BĐS Bán
 *
 * @package sparkling
 */

 get_header(); ?>

 <div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">
	 	<div class="container">
		 	<div class="leftList col-lg-3">
	        	<nav class="block-leftMenu">		           
					<?php
					$parent = get_category($cat);
					$id_cate = $parent->parent;
					if ($id_cate == 0) {
						$child_arg = array( 'hide_empty' => false, 'parent' => $parent->term_id );
						$child_cat = get_terms( 'category', $child_arg );
					     echo '<ul>';
					         foreach( $child_cat as $child_term ) {
					             echo '<li><a href="'.get_category_link($child_term->term_id ).'" target="_self"><i class="fa fa-angle-right"></i>'.$child_term->name . '</a></li>'; //Child Category
					         }
					     echo '</ul>'; 
					}
					else{ 
						$mCategory = get_categories('&child_of=0&hide_empty');
						$cat = single_cat_title("", false);
						$cId = get_cat_id($cat);	
						foreach ($mCategory as $vale) {					
						    if($vale->cat_ID === $cId){
							$pId = $vale->parent;
							$pCat = get_category($pId);
							$pName = $pCat->name;		
							}					
						    }
						    // echo '<strong>'.$pName.'</strong>';				
						echo '<ul>';						
						$rCategory = get_categories( '&child_of='.$pId.'&hide_empty&orderby=name' );    
						foreach ($rCategory as $val) {
						    if ( $val->cat_ID === $cId ) { $current = '<a href="'.get_bloginfo("siteurl").'/category/'.$val->slug.'" alt="'.$val->cat_ID.'"><i class="fa fa-angle-right"></i>'.$val->name.'</a>'; }
						    else { $current = '<a href="'.get_bloginfo("siteurl").'/category/'.$val->slug.'" alt="'.$val->cat_ID.'"><i class="fa fa-angle-right"></i>'.$val->name.'</a>'; }
						    echo '<li>'.$current.'</li>';		
						    }
						echo '</ul>';
					}						
					?>
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
					get_template_part( 'template-parts/content', 'archive-bds-ban' );

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
