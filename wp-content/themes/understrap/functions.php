<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
function count_post_visits() {
    if( is_single() ) {
    global $post;
    $views = get_post_meta( $post->ID, 'my_post_viewed', true );
    if( $views == '' ) {
    update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
    } else {
    $views_no = intval( $views );
    update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
    }
    }
   }
   add_action( 'wp_head', 'count_post_visits' );


   register_sidebar( array(
    'name'          => __( 'search_bar', 'understrap' ),
    'id'            => 'search_emplacement',
    'description'   => __( 'ouverture de la search bar', 'dossierdevotretheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title th3">',
    'after_title'   => '</div>',
) );
register_nav_menus( array(
    'footer-menu' => 'menu footer',
    ));
    register_sidebar( array(
        'name'          => __( 'search_bar_single', 'understrap' ),
        'id'            => 'search_emplacement_single',
        'description'   => __( 'ouverture de la search bar', 'dossierdevotretheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-title th3">',
        'after_title'   => '</div>',
    ) );