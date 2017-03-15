
 <?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-front-page">
		<main id="main" class="site-main" role="main">
         <div class="hero">
         <div class="main-picture"> </div><!--main-pic-->
         <div class="welcome-text">
         <p>Welcome!</p>
         <p>The New Westminster Montessori Society supports the public Montessori Programs at
         Richard McBride and Connaught Heights elementary schools</p>
         <a href="#" class="myButton">Our Society Role</a>
         </div><!--welcome-->
         </div><!--hero-->
        
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<p>FRONTPAGE</p>

<?php get_footer(); ?>
