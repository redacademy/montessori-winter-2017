<?php
/**
*Template Name: nw program Page
*
*@package Montessori Theme
*/

get_header(); ?>

    <div id="primary" class="content-nw-program">
        <main id="main" class="site-main" role="main">
            <div class="nw-and-back">
                <div>
                    <h3 class="nw-title">
                       <?php echo the_title();?>
                    </h3>
                </div>
                <div>
                    <h3 class="nw-back"><a href="#back-to-top">Back to top</a></h3>
                </div>
            </div>
            <div class="nw-navigation-sub-menu">
                <ul>
                    <div class="back">
                        <li><a href="#back-top">Back to top</a></li>
                    </div>
                    <li><a href="#nw-program-sub">NW Program</a></li>
                    <li><a href="#funding-sub">Funding</a></li>
                    <li><a href="#Schools-sub">Schools and Teachers</a></li>
                    <li><a href="#how-to-sub">How to Enroll</a></li>
                </ul>
            </div>
            <!--navigation-sub-menu-->
            <div class="nw-container">
                <section class="why-montessori">
         
               <?php echo CFS()->get('why_montessori_title');?>
                      <?php echo CFS()->get('why_montessori_text');?>
                    <img src="<?php echo CFS()->get('why_montessori_picture');?>">
                    <?php echo CFS()->get('why_montessori_quote');?>
                     
                     
                     
                      
                    <div class="daily-schedule">
                        <div class="morning-schedule"></div>
                        <div class="afternoon-schedule"></div>
                    </div>
                    <!--daily-schedule-->
                </section>

                <section class="nw-funding">
                    <div class="where-is-coming-from">
                    </div>
                    <div class="how-money">
                    </div>
                </section>

                <section class="school-and-teachers">
                    <div class="richard-elementary">
                    </div>
                    <div class="con-elementary">
                    </div>
                    <div class="nw-teachers">
                    </div>
                    <div class="list-of-schools">
                    </div>
                </section>

                <section class="how-to-enroll">
                    <div class="when-start">
                    </div>
                    <div class="how-apply">
                    </div>
                </section>

                
        </main>
        </div>
        <?php get_footer();?>