<?php
/**
*Template Name: About Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

    <div id="primary" class="content-about">
        <main id="main" class="site-main" role="main">

            <section class="about-hero">
                <header class="entry-header custom-header">
                    <h2 class="">
                        <?php echo the_title();?>
                    </h2>
                </header>
            </section>

            <div class="about-container">

                <?php echo CFS()->get('title');?>
                <?php echo CFS()->get('main_text');?>
                <?php echo CFS()->get('quote_text');?>
            </div>
        </main>
    </div>
    <?php get_footer();?>