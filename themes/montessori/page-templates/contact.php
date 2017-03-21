<?php
/**
*Template Name: contact Page
*
*@package Montessori School Theme
*/

get_header(); ?>

<div id="primary" class="content-contact">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <p class="scroller">Back to top</p>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // End of the loop. ?>
            </div>
        </article>
    </main>
     </div>
 <?php get_footer();?>