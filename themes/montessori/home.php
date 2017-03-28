<?php
/**
*Template Name: get involved Page
*
*@package Inhabitent Theme
*/

get_header(); ?>

    <div id="primary" class="content-about">
        <main id="main" class="site-main" role="main">
            <div class="get-and-back">
                <div>
                    <h3 class="get-title">
                        <?php echo the_title();?>
                    </h3>
                </div>
                <div>
                    <h3 class="get-back"><a href="#back-to-top">Back to top</a></h3>
                </div>
            </div>

            <?php 
            $menu = array(array('what-is-new', 'What is New'), array('suport-now', 'Support Now'));
            sub_menu($menu); 
            ?>

            <div class="get-container">
                <h2>What's New</h2>
                <section class="what-is-new">




<div class="get-involved-titles">
                    <!--<?php
                $args = array('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3 );
               // $product_posts = get_posts( $args ); // returns an array of posts
               $product_posts = new WP_Query($args);
                ?>-->

                    <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>

                    <?php //get_template_part( 'template-parts/content'); ?>


                  <ul class="nav-t nav-tabs">
                   
                  <li class="active">  <button class="tab1"  type="button">     <h4>
    
                
                <?php 
                the_title();
                //the_content(); ?>
 
                  

                </h4>
</button>
              </li>
                </ul>
                    <?php endwhile; // End of the loop. ?>  
                 
</div>
                    <div class="get-involved-content">
                        <!--<?php
                $args = array('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3 );
               // $product_posts = get_posts( $args ); // returns an array of posts
               $product_posts = new WP_Query($args);
                ?>-->

                        <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
                      
<div id="tab1" class="tab-content active">
                        <div class="montessori-first-textarea">
                            <?php echo CFS()->get('montessori_text_quote_first_textarea');?>
                        </div>
                        <div class="montessori-text-quote">
                            <div class="montessori-red-line-quote"></div>
                              <div class="montessori-quote-text">
                            <?php echo CFS()->get('montessori_text_quote');?>
                        </div>
                        </div>
                        </div>
                        <div class="tab-content hide">
                        <img src="<?php echo CFS()->get('montessori_text_picture');?>">
                        <div class="montessori-second-textarea">
                            <?php echo CFS()->get('montessori_interview_second_textarea');?>
                        </div>
</div>
                        <?php endwhile; // End of the loop. ?>
                          <a href="#" class="express-your-interest">Express Your Interest</a>
                    </div>
                </section>

                 <div class="montessori-line2"></div>
                <section class="support-now">
                     <?php echo CFS()->get('support_now_title');?>
                         <?php echo CFS()->get('support_now_sub_title');?>
                             <?php echo CFS()->get('support_now_pictures_title');?>
                                 <?php echo CFS()->get('support_now_first_picture');?>
                                   



                                   
                    </section>


                <?php get_footer();?>