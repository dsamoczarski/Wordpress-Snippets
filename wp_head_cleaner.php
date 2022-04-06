<?php
// muss in der functions.php hinterlegt werden

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'feed_links_extra', 3); 
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wc_products_rss_feed');

function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

add_filter('after_setup_theme', 'remove_shortlinks');
function remove_shortlinks() {
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action( 'template_redirect', 'wp_shortlink_header', 11);
}


?>