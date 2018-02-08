<?php
/**
 * Nhúng tập tin /inc/init.php vào để load một số chức năng trong website
 */
require dirname( __FILE__ ) . '/inc/init.php';

/**
 * Xóa style.css của child-theme.
 */
function remove_default_styles() {
    wp_dequeue_style( 'sparkling-style' );
}
add_action('wp_print_styles', 'remove_default_styles', 10 );

/**
 * Đăng ký handle cho style.css của theme mẹ
 * Và sử dụng như một thành phần phụ thuộc của style.css theme con
 */
function acg_load_theme_style() {
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
}
add_action('wp_enqueue_scripts', 'acg_load_theme_style', 15 );

function acg_home($query) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '37' );
        // posts_per_page="4" tax_term="37" order="desc" orderby="modified"
    }
}
add_filter('pre_get_posts', 'acg_home');
?>