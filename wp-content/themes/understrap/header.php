<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container-fluid icon_container">

<div class="row">
<div class="col-md-12 img_icon_header_container d-flex justify-content-end ">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/facebook.png" alt="" class="img_icon_header">


<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/twitter.png" alt="" class="img_icon_header">


<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/insta.png" alt="" class="img_icon_header">

<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/search.png" alt="" class="img_icon_header">



</div>
</div>

</div>

<div class="site" id="page">

</div>
<div class="container titre_header">
<?php bloginfo( 'name' ); ?>
</div>
    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

        <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-expand container">

        <?php if ( 'container' == $container ) : ?>
            <div class="container" >
        <?php endif; ?>

                    <!-- Your site title as branding in the menu -->


                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>
            <?php if ( 'container' == $container ) : ?>
            </div><!-- .container -->
            <?php endif; ?>

        </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->