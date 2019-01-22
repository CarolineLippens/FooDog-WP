<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">
	
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
			
			<?php	$popular_posts_args = array(
				'meta_key' => 'my_post_viewed',
				'orderby' => 'meta_value_num',
'order'=> 'DESC',
'ignore_sticky_posts' => 1,
);

$popular_posts_loop = new WP_Query( $popular_posts_args);  

?>          
<div class="container-fluid">
	
	<div class="row mt-5 d-flex justify-content-center">
			        
            <?php $i = 0; while( $popular_posts_loop->have_posts() && $i < 1 ): $popular_posts_loop->the_post(); ?>
            <div class="col-md-5 m-0 ">
				<div class=" col-md-12 m-0 ">
					<?php if ( has_post_thumbnail()) : ?>
					<a href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
					<h2 class="categorie offset-1"><?php the_category(); ?></h2>
					<h3 class="title"><a class= "title" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
					<?php endif ?>
				</div>
            </div>
            <?php $i++; endwhile; ?>

            <div class="col-md-5 ">
				<div class="row">
				<?php $i = 0; while ($popular_posts_loop->have_posts() && $i < 4) : $popular_posts_loop->the_post(); ?> 
				<div class="col-md-6 ">
					<?php if ( has_post_thumbnail()) : ?>
					<a href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
					<h3 class="title"><a class= "title" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
					<?php endif ?>
				</div>
				<?php $i++; endwhile ?> 
			</div>
		</div>          
    </div>
</div> <!-- end #content -->
<div class=" col-md-9 categorieMarginAccueil">
	<h5 class="title_categorie_footer offset-3 mt-3 mb-3">Featured Post</h5>
	<?php
			 $catquery = new WP_Query( 'cat=9&posts_per_page=3' ); 
			 ?>
		<div class="row">
			
			<!-- Do the right sidebar check -->
<?php/* get_template_part( 'global-templates/right-sidebar-check' );*/ ?>
			<?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
			<article class="col-12 mb-5 d-flex" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="container-fluid end">
	<div class="row">
		<div class="entry-header col-6 m-0 p-0 ">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?> <!--Image-->
			</div><!--div image -->
			<div class="entry-content col-5 p-0 margin">
			<h2 class="post-categories col-10 offset-1"><?php the_category('<p></p>'); ?></h2>
				<div class="mb-5 mt-3 col-12 p-0 open">
					<?php
					the_title(
						sprintf( '<h2 class="entry-title col-12 title p-0 "><a href="%s" rel="bookmark" class="title">', esc_url( get_permalink() ) ),
						'</a></h2>'
						);
					?><!--Titre de l'article -->
				</div>
				<div class="m-2 mt-5 col-12 p-0 content">
					<?php echo the_excerpt() ?>
				</div>
				<div class="row">
					<div><i class="fa fa-share fa-lg border rounded-circle offset-5"></i></div>
					<p class="gray ml-4 mt-2">Share</p>
					</div>
			</div><!-- .entry-content -->
		</div>
	</div>
</article>
			<?php endwhile; ?>
		</div>
	</div>
	<h5 class="title_categorie_footer offset-3 mt-3 mb-3">Latest Post</h5>
			
			<div class="row">
				
				
				<main class="site-main col-md-12" id="main">
					
					<?php
				
				$recentPosts = new WP_Query();
				$recentPosts->query('showposts=6');
				
				?>
				<div class="row">
					<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
					<div class="col-md-6 open">
						<?php if ( has_post_thumbnail()) : ?>
						<a href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> » ><?php the_post_thumbnail('large'); ?></a>
						<h2 class="post-categories "><?php the_category(); ?></h2>
						<h3 class="title"><a class= "title" href=<?php the_permalink(); ?> title= »<?php the_title_attribute(); ?> »><?php the_title(); ?></a></h3>
						<div class="m-2  col-12 p-0 content">
							<?php echo the_excerpt() ?>
						</div>
						<?php endif ?>
					</div>
					<?php endwhile; ?>
				</div>
			</main><!-- #main -->
			
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			
			
		</div><!-- .row -->
		
	</div><!-- #content -->
	
</div><!-- #index-wrapper -->

<?php get_footer(); ?>
