<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article class="col-12 mb-2 d-flex" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-header col-6 m-0 p-0">
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> <!--Image-->
	
</div><!--div image -->
	<div class="entry-content col-6 ">
		<div class="m-3">
		<?php
		 echo single_cat_title(); 
		the_title(
			sprintf( '<h2 class="entry-title col-12 "><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?><!--Titre de l'article -->
		</div>
		<div class="m-2 mt-3">
		<?php the_content(); ?>
		</div>
		<div><i class="fas fa-share"></i> Share</div>[icon name= »flag » class= »2x spin border »]

	</div><!-- .entry-content -->

</article><!-- #post-## -->
