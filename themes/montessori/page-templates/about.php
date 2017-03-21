<?php
/**
*Template Name: About Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

    <div id="primary" class="content-about">
        <main id="main" class="site-main" role="main">
            <div class="about-and-back">
   <div><h3 class="about-title"><?php echo the_title();?></h3></div>
    <div><h3 class="about-back"><a href="#back-to-top">Back to top</a></h3></div>
   </div>
<div class="navigation-sub-menu">
			<ul>
                <div class="back"><li><a href="#back-top">Back to top</a></li></div>
             
				<li><a href="#our-history-sub">Our History</a></li>
				<li><a href="#our-role">Our Role</a></li>
				<li><a href="#meetings">Meetings</a></li>
				<li><a href="#board-members">Board Members</a></li>
                <li><a href="#news-letter">Newsletter</a></li>
             
			</ul>
		</div><!--navigation-sub-menu-->



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
                <?php echo CFS()->get('	board_members_title');?>
                <?php echo CFS()->get('	board_member_picture');?>
                <?php echo CFS()->get('	board_member_name');?>
                <?php echo CFS()->get('board_member_job_title');?>

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