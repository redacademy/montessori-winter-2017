
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
         <p class="welcome">Welcome!</p>
         <p class="border"></p>
         <p class="support">The New Westminster Montessori Society supports the public Montessori Programs at
         Richard McBride and Connaught Heights elementary schools</p>
         <a href="#" class="myButton">Our Society Role</a>
         </div><!--welcome-->
         </div><!--hero-->
         <section class="quick-links">
         <h2>Quick Links</h2>
         </section>
         <section class="we-need">
         <h2>We Need Your Support</h2>
         <div class="pie-graph"></div>
         </section>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/front-page', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<p>FRONTPAGE</p>

<?php get_footer(); ?>
