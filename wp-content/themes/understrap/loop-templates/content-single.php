<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="container d-flex">
	<div>
		<div>
				<h4 class="style_categories">
				<?php
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo esc_html( $categories[0]->name );} 
				?><!-- pour afficher le nom de la categorie -->
				</h4> 

				<h1><?php the_title()?></h1>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			
		
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> <!-- pour afficher les images -->
				
				<div class="container b"> <!-- container de la barre de reseaux sociaux -->
				
				<div class="container barre_reseaux1">  
					<div class="row col-lg-12">
						<div class="col-lg-4 bloc_logo">
						<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/farmerdog.jpg" alt="" class="icon_img_header_single">
						</div>
						<div class="col-lg-4 bloc_comment">
							<a href="#"  class="share bt_c"><i class="fa fa-comment comment"></i> <b class="comment">comment</b></a>
						</div>
						<div class="col-lg-4 bloc_share">	
							<p class="pr-2"><b>share</b></p>
							<div class="row">

	<a href="https://www.facebook.com/FooDogUAI/">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/facebook2.png" alt="" class="img_icon_single1">
	</a>
	<a href="https://twitter.com/dog_rates">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/twitter2.png" alt="" class="img_icon_single2">
	</a>
	<a href="https://www.instagram.com/floydandbonnie/">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/insta2.png" alt="" class="img_icon_single3">
	</a>
		
				</div>
						</div>
					</div>
				</div>
				<?php the_content()?>

					<?php echo get_the_author_meta('display_name', $author_id); ?> <!--afficher le nom de l'auteur de l'article-->
					<hr>
					<div class="row barre_reseaux">
						<p><b>share</b></p>
						<div class="comment"><a href="#"  class="share bt_c"><i class="fa fa-comment comment"></i><b class="comment">comment</b></a></div>
						<div><a href="#"  class="share bt_f"><i class="fa fa-facebook-f white"></i> <b class="white">share</b></a></div>
						<div><a href="#"  class="share bt_t"><i class="fa fa-twitter-square white"></i> <b class="white">tweet</b></a></div>
						<div><a href="#"  class="share bt_p"><i class="fa fa-pinterest-square white"></i> <b class="white">pint it</b></a></div>
					</div>
					<hr>
					<h2 class="titre_News">Suscribe to the DIGEST Newletter</h2>
					<h6>Get health and wellness tips about your dog delivered to your inbox</h6>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<span class="input-group-text" id="basic-addon2">SIGN UP</span>
						</div>
					</div>
				</div>
				<div class="container under_input_group "><!-- container de la under_input_group -->
					<hr>
					<div class="row ">
						<div class="col-lg-6 superfood">
							<?php previous_post_link('%link', '< PREVIOUS ARTICLE ', TRUE); ?> <br>
							<?php previous_post_link('<strong>%link</strong>'); ?> 

						</div>
						<div class="col-lg-6"></div>
					</div>
					
				</div>
				<!--<hr align="center" width="100%" color="midnightblue" size="3"> -->

	<!--you migth also like-->
				<?php


			$latestPosts_args = array (
				"posts_per_page" => 3,
				"orderby" => "rand",
				"ignore_sticky_posts" => 1,
			);

			$latestPosts = new WP_Query($latestPosts_args);
			?>
        <div class="container">

			<!--barre en dessous de la You Might also like-->
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h5>You Might also like</h5>
					</div>
					<div class="col-lg-6">
						<hr> 
					</div>
				</div>

			</div>
			<div class="row">
				<?php  while( $latestPosts->have_posts()): $latestPosts->the_post(); ?>
				<div class="col-lg-4">
				<?php if ( has_post_thumbnail()) : ?>
				<a class="test_image" href=<?php// the_permalink(); ?> <?php //the_title_attribute(); ?> <?php the_post_thumbnail("medium"); ?></a>
				<h6 class="title_loop"><a class= "title_loop" href=<?php the_permalink(); ?> title= Â»<?php the_title_attribute(); ?> Â»><?php the_title(); ?></a></h6>
				<?php endif ?>
			</div>
			<?php endwhile; ?>
			
			
		</div>
		<hr>
		<h5>LEAVE A RESPONSE</h5>
</div>

</article><!-- #post-## -->
<footer class="entry-footer">
		<?php //understrap_entry_footer(); ?>
</footer><!-- .entry-footer -->

