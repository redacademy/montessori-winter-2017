<?php
/**
*Template Name: what is montessori Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

<div id="primary" class="content-what-is-montessori">
  <main id="main" class="site-main" role="main">

      <section class="about-hero">
      <header class="entry-header custom-header">
      <h2 class=""><?php echo the_title();?></h2>
      </header>
      </section>
<p>you are in montessori page</p>
      <div class="about-container">
     <h2>Our Story</h2>
                <?php echo CFS()->get('text_and_quote');?>
                <?php echo CFS()->get('title');?>
                <?php echo CFS()->get('main_text');?>
                <?php echo CFS()->get('quote_text');?>
                <?php echo CFS()->get('secondary_text_and_quote');?>
                <?php echo CFS()->get('secondary_title');?>
                <?php echo CFS()->get('secondary_text');?>
               
     </div>
         </main>
     </div>
 <?php get_footer();?>