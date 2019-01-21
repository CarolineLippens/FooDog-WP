<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
		
<?php else : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
		<div class="row">
			<div class="container">
<div class="pub_chien">


	<a href="https://www.facebook.com/FooDogUAI/" class="lien_sidebar">
	<div class="sidebar_facebook">
		<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/facebook2.png" alt="" class="img_pub">
		<p class="text_follow_pub">21562 fans</p>
		<p class="like_sidebar1">like</p>
	</div>
	</a>


	<a href="https://twitter.com/dog_rates" class="lien_sidebar">
	<div class="sidebar_twitter">
		<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/twitter2.png" alt="" class="img_pub">
		<p class="text_follow_pub">1401 followers</p>
		<p class="like_sidebar2">follow</p>

	</div>
	</a>


	<a href="https://www.instagram.com/floydandbonnie/" class="lien_sidebar">
	<div class="sidebar_instagram">
		<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/insta2.png" alt="" class="img_pub">
		<p class="text_follow_pub">23538 followers</p>
		<p class="like_sidebar3">follow</p>

	</div>
	</a>


	<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/bannière.jpg" alt="">
</div>
</div>
</div>
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
</div>