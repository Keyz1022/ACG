<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('bds-ban')); ?>>
	<div class="blog-item-wrap">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<div class="avar">			
			<?php
			if ( is_page_template( 'page-fullwidth.php' ) ) {
				the_post_thumbnail( 'sparkling-featured-fullwidth', array(
					'class' => 'single-featured',
				) );
			} else {                    
				the_post_thumbnail( 'sparkling-featured', array(
				'class' => 'single-featured',
			) );
			}
			?>
		</div>
		</a>
	
		<div class="post-inner-content">
			<header class="entry-header page-header">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</header><!-- .entry-header -->

			<div class="entry-meta">
				<div class="bds_ban_info">
				   <?php $bds_ban_info = get_post_meta($post->ID, 'bds_ban_info', false); ?>
				   <div class="bds_ban_info_ul">
				      <?php
				      foreach ($bds_ban_info as $atts) {
				         foreach ($atts as $att) {?>
				            <div class="bds_ban_info_li">
				               <?php echo $att['name']; ?>: <?php echo $att['value']; ?>
				            </div> 
				         <?php }
				      }
				      ?>
				   </div>
				</div></pre>
			 </div><!-- .entry-meta -->
		</div>
	</div>
</article><!-- #post-## -->
