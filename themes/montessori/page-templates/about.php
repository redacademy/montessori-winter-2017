<?php
/**
*Template Name: About Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

    <div id="primary" class="content-about">
        <main id="main" class="site-main" role="main">
               
<p>you are in about page</p>
            <div class="about-container">
<section class="our-history">
                <?php echo CFS()->get('text_and_quote');?>
                <?php echo CFS()->get('title');?>
                <?php echo CFS()->get('main_text');?>
                <?php echo CFS()->get('quote_text');?>
                 </section>
                 
            <section class="our-role">
                <?php echo CFS()->get('secondary_text_and_quote');?>
                <?php echo CFS()->get('secondary_title');?>
                <?php echo CFS()->get('secondary_text');?>
                <?php echo CFS()->get('secondary_quote');?>
                 </section>
            </div>
             <section class="board-members">
                 <h2>Board Members</h2>
         </section>
         <div class="members at large">
             <h3>Members at Large</h3>
             </div><!--members at large-->
             <section class="meeting-minutes">
                 <h2>Meeting Minutes</h2>
                 </section>
                 <section class="newsletter">
                     <h2>Newsletter</h2>
                     </section>
        </main>
    </div>
    <?php get_footer();?>