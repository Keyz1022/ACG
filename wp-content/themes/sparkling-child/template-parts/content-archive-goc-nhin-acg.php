<?php
/**
 * @package sparkling
 */
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(array('goc-nhin-acg')); ?>>
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

            <div class="entry-content">
                <?php
                if ( get_theme_mod( 'sparkling_excerpts' ) == 1 ) :
                    the_excerpt();?>
                <?php else :
                    the_content( esc_html__( 'Read More', 'sparkling' ) );
                endif;
                    ?>
             </div><!-- .entry-content -->
        </div>
    </div>
</article><!-- #post-## -->
