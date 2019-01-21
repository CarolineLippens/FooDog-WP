<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="container-fluid d-flex justify-content-center wrapper-footer" id="wrapper-footer">
<div class="row container  row-footer">	


<div class="col-md-4 menu_footer">
	<p class="title_categorie_footer">catégorie</p>
<?php wp_nav_menu( array('theme_location' => 'footer-menu','menu_class' => 'link_footer') ); ?> <!--position menu-->
</div>


 <div class="col-md-4">
            <a href="#"class="title_categorie_footer">Popular Posts</a>
            <div>

               <?php /*
                     if( is_active_sidebar( 'zone-widgets-2' ) ):
                     dynamic_sidebar( 'zone-widgets-2' );
                     endif;
            */   ?>

               <?php
$popular_posts_args = array(
 'posts_per_page' => 3,
 'meta_key' => 'my_post_viewed',
 'orderby' => 'meta_value_num',
 'order'=> 'DESC',
 'ignore_sticky_posts' =>1,
);
 
$popular_posts_loop = new WP_Query( $popular_posts_args );
 

?>

               <?php  while( $popular_posts_loop->have_posts() ): $popular_posts_loop->the_post(); ?>
               <div class="footer_article_div">
                  <?php if (has_post_thumbnail()) : ?>
                  <a class="caro-img" href="" title=Â»<?php the_title_attribute(); ?> Â» >
                     <?php the_post_thumbnail(); ?></a>
                  <h3 class="title2"><a class="block" href="" title=Â»<?php the_title_attribute(); ?> Â»>
                        <?php the_title(); ?></a></h3>
                  <?php endif ?>
               </div>
               <?php  endwhile;
wp_reset_query(); ?>
               <!--
               <a href="</*?php the_permalink() ?>"> - <?php the_title(); ?></a>
                 
                      -->
            </div>
         </div>

<div class="col-md-4">

<p class="title_categorie_footer">Instagram</p>
<a href="https://instawidget.net/v/tag/cutedog" id="link-fb593c1139f00ac781837cb00eef404f31acc01fae8c4b82854d419890b0ea27">#cutedog</a>
<script src="https://instawidget.net/js/instawidget.js?u=fb593c1139f00ac781837cb00eef404f31acc01fae8c4b82854d419890b0ea27&width=300px"></script>
</div>




</div><!--endrow-->
</div> <!--endcontainer-->


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 img_icon_footer_container d-flex justify-content-center">
                  <div class="icoon_footer">
<a href="https://www.facebook.com/FooDogUAI/">                
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/facebook2.png" alt="" class="img_icon_footer">
</a>  
<a href="https://twitter.com/dog_rates">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/twitter2.png" alt="" class="img_icon_footer">
</a>  
<a href="https://www.instagram.com/floydandbonnie/">
<img src="http://localhost/FooDog-WP/wp-content/uploads/2019/01/insta2.png" alt="" class="img_icon_footer">
                  </div>
</a>  

		</div>
	</div>
</div>


<?php wp_footer(); ?>


</body>

</html>
