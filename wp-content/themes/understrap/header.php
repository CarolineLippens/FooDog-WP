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
<?php if (is_single()) : ?>

<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg p-4">

		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'menu_hamburger',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		); ?>

    </div>
  </div>
	
</div>
<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

<nav class="navbar navbar-light bg">

<?php if ( 'container' == $container ) : ?>
	<div class="container-fluid" >
<?php endif; ?>

			<!-- Your site title as branding in the menu -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div >
<a  class="container titre_header_singlePage" href="<?php bloginfo( 'url' ); ?>">
<?php bloginfo( 'name' ); ?>
</a>
</div>


		
	<?php if ( 'container' == $container ) : ?>
	<!-- input -->
<div  class="div_input_header">
Digest in Your inbox <input type="text" name="email" placeholder="YOUR EMAIL" class="input_header"><br>
<button class="button_input_header">sign up</button>



</div>

		
		<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/farmerdog.jpg" alt="" class="icon_img_header_single">
<button type="button" data-toggle="modal" data-target="#infos" class="btn loupe">
	
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img class="imageNav" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/search.png"></a>
                        </li>
                    </button>
                    <div class="modal" id="infos">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <?php
								if( is_active_sidebar( 'search_emplacement_single' ) ):
								dynamic_sidebar( 'search_emplacement_single' );
								endif;
								?>
                            </div>
                        </div>
                    </div>
				</ul>

	</div><!-- .container -->
	

	<?php endif; ?>
</nav><!-- .site-navigation -->
</div>




<?php else: ?>
<div class="container-fluid icon_container">

<div class="row">
<div class="col-md-12 img_icon_header_container d-flex justify-content-end ">
	<a href="https://www.facebook.com/FooDogUAI/">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/facebook.png" alt="" class="img_icon_header">
	</a>
	<a href="https://twitter.com/dog_rates">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/twitter.png" alt="" class="img_icon_header">
	</a>
	<a href="https://www.instagram.com/floydandbonnie/">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/insta.png" alt="" class="img_icon_header">
	</a>

<button type="button" data-toggle="modal" data-target="#infos" class="btn loupe">
	
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img class="imageNav" src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/search.png"></a>
                        </li>
                    </button>
                    <div class="modal" id="infos">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <?php
								if( is_active_sidebar( 'search_emplacement_single' ) ):
								dynamic_sidebar( 'search_emplacement_single' );
								endif;
								?>
                            </div>
                        </div>
                    </div>
				</ul>

</div>
</div>

</div>

<div class="site" id="page">

</div>
<div >
	<a  class="container titre_header" href="<?php bloginfo( 'url' ); ?>">
<?php bloginfo( 'name' ); ?>
</a>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<?php endif; ?>