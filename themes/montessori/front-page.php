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
                <div class="main-picture"> </div>
                <!--main-pic-->
                <div class="welcome-text">
                    <p class="welcome">Welcome!</p>
                    <p class="border"></p>
                    <p class="support">The New Westminster Montessori Society supports the public Montessori Programs at Richard McBride and
                        Connaught Heights elementary schools</p>
                    <a href="#" class="myButton">Our Society Role</a>
                </div>
                <!--welcome-->
            </div>
            <!--hero-->
            <section class="quick-links">
                <h2>Quick Links</h2>
                <div class="benefits-of">
                    <div> <a href="#" class="benefits-button">Benefits of Montessori</a></div>
                    <ul>
                        <li>Children learn at their own individual pace.</li>
                        <li>Students become independient learners in a process of discovery.</li>
                        <li>Children develop an intrinsic joy of learning, positive social, and community skills.</li>
                    </ul>
                    </div>
                    <div class="nw-program">
                           <a href="#" class="nw-button">NW Program</a>
                           <div class="parra">
                        <p>In New Westminster, the Montessori stream is unique as we are such a small school district.</p>
                        <p>Teachers don't move or change schools very often and are more dedicated to provide the best education to all of our children.</p>
                        </div>
                        </div>
                        <div class="get-involved">
                            <a href="#" class="get-button">Get Involved</a>
                            <p>Parents' help is an essential in order to keep the Montessori program continuing to operate and expand in New Westminster Public school system.</p>
                            </div>
            </section>
            <div class="line"></div>
            <div>
            <section class="we-need">
                <h2>We Need Your Support</h2>
                <p>The New Westminster Montessori Society is a volonteer run registered charity committed to promoting and
                    developing Montessori education in the public school system. We have committed to the school Board 
                    to provide all of the materials needed for all existing and new Montessori classrooms.</p>
                    <p class="quote-voluntering">Volunteering and donations are essential in order for the Montessori program to continue to operate and provide the 
                        best education to all our children.</p>
                    <p>It cost approximately $15,000 to properly equip a classroom with Montessori
                        materials, with ongoing cost each year.</p>
                        <p>This amount can be raised if all parents in the program donate $100 per child per year
                            or $10 per month for 10 months. All donations are strictly voluntary, tax-deductible, and not
                            mandatory.</p>    
                <div class="pie-graph"></div>
                
            </section>
            <section class="featured">
                <h2>Featured News</h2>
            </section></div>
            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/front-page', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
  

    <?php get_footer(); ?>