<?php
/**
 *
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('du-an'); ?>>
	<div class="post-inner-content">
		<header class="entry-header page-header">
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	</div>

	<?php if ( get_the_author_meta( 'description' ) ) :  ?>
		<div class="post-inner-content secondary-content-box">
	  <!-- author bio -->
	  <div class="author-bio content-box-inner">

		<!-- avatar -->
		<div class="avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ) , '60' ); ?>
		</div>
		<!-- end avatar -->

		<!-- user bio -->
		<div class="author-bio-content">

		  <h4 class="author-name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></h4>
		  <p class="author-description">
				<?php echo get_the_author_meta( 'description' ); ?>
		  </p>

		</div><!-- end .author-bio-content -->

	  </div><!-- end .author-bio  -->

		</div>
		<?php endif; ?>

</article><!-- #post-## -->
