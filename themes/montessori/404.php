<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Montesorri_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main 404-not-found" role="main">
			<section class="content-404">
				<img class= "image-404" src="<?php bloginfo('stylesheet_directory');?>/images/history/Group 94.png" alt="Follow the Child">
				<div class="message-n-button">
					<h1 class="page-title-404">"Oops! Looks like that isn't related to NW Montessori Society! Click on the button below to go back to home page"</h1>
					<a class="home-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
