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
            <div class= "entry-header-container"> 
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <a class="scroller" href="#back-top">Back to top</a>
                </header><!-- .entry-header -->
            </div>

            <div class="entry-content" id="back-top">
                <p class="in-touch">Getting in touch is easy!</p>
                <p class="send-message">Send us a message</p>
                &nbsp;

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // End of the loop. ?>
                &nbsp;

                <p class="contact-brand">New Westminster Montessori Society</p>
                <p class="address">Suite 379 104-1015 Columbia St.</p>
                <p class="address">New Westminster BC, V3M 6V3</p>
                <p class="address">info@newwestmontessori.ca</p>
                <p class="like_us">

                    <a class="fb-link" href="http://www.facebook.com">
                    <a href="http://www.facebook.com">
                        <img class="alignnone wp-image-74 fb_img" src="//localhost:3000/montessori_school/wp-content/uploads/2017/03/Facebook-Logo-1.png" alt="" width="40.8" height="39" />
                    </a> Like us on Facebook
                </p>
            </div>
        </article>
    </main>
     </div>
 <?php get_footer();?>