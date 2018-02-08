<?php
/**
 * @package sparkling
 */
?>
 
<div class="col-lg-4">        
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('du-an')); ?>>
        <div class="blog-item-wrap">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail( 'du-an_thumb', array( 'class' => 'du-an_thumb' )); ?>
            </a>
            <div class="post-inner-content">
                <header class="entry-header page-header">
                    <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <!-- <?php
                    if ( get_theme_mod( 'sparkling_excerpts' ) == 1 ) :
                        the_excerpt();?>
                    <?php else :
                        the_content( esc_html__( 'Read More', 'sparkling' ) );
                    endif;
                        ?> -->
                 </div><!-- .entry-content -->
     
            </div>
        </div>
    </article><!-- #post-## -->
</div>
