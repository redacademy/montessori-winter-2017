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
                          $product_posts = new WP_Query($args);
                         ?>-->
                        <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
                        <?php //get_template_part( 'template-parts/content'); ?>
                        <ul class="nav-t nav-tabs">
                            <li class="active">
                                <h4>
                                    <a href="#tab1">
                                        <?php 
                           the_title();
                         //the_content(); ?>

                                    </a>
                            </li>
                            </h4>
                            </li>
                        </ul>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                    <div class="get-involved-content">
                        <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
                        <div id="tab1" class="tab-content active">
                            <div class="middle-school-textarea">
                                <?php echo CFS()->get('montessori_in_the_middle_school_textarea');?>
                            </div>
                            <div class="middle-school-quote">
                                <div class="montessori-red-line-quote">
                                </div>
                                <div class="middle-school-quote-text">
                                    <?php echo CFS()->get('montessori_in_the_middle_school_quote');?>
                                </div>
                            </div>
                            <div class="middle-school-second-textarea">
                                <div class="second-textarea">
                                    <?php echo CFS()->get('montessori_in_the_middle_school_second_textarea');?>
                                </div>
                            </div>
                            <?php endwhile; // End of the loop. ?>
                            <a href="#" class="express-your-interest">Express Your Interest</a>
                        </div>
                        <div id="tab2" class="tab-content hide">
                            <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
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
                        <div id="tab1" class="tab-content hide">
                            <div class="interview-picture">
                                <!--<img src="<?php echo CFS()->get('montessori_text_picture');?>">-->
                            </div>
                            <div class="montessori-second-textarea">
                                <?php echo CFS()->get('montessori_interview_second_textarea');?>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="support-now">
                    <div class="support-title">
                        <?php echo CFS()->get('support_now_title');?>
                    </div>
                    <div class="support-sub-title">
                        <?php echo CFS()->get('support_now_sub_title');?>
                    </div>
                    <div class="carousel" data-flickity='{ "autoPlay": true, "cellAlign": "left" }'>
                        <div class="carousel-cell">
                            <ul>
                                <?php
                                $fields = CFS()->get('support_now_pictures_title'); // returns an array of posts
                                if(!empty($fields)):
                                foreach ( $fields as $field ):?>
                                    <li>
                                        <p><img src="<?php echo $field['support_now_first_picture']; ?>" /></p>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                            </ul>
                            <?php endwhile; // End of the loop. ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>

                    <div class="bracket-image"></div>

                    <div class="contribution-image"></div>
                    <div class="donation-volunteer-buttons">
                        <a href="#" class="make-donation">Make a Donation</a>
                        <a href="#" class="become-volunteer">Become a Volunteer</a>
                    </div>
                    <div class="paypal-cheque-united-buttons">
                        <div class="paypal-link">
                            <a href="https://www.paypal.com/signin" class="paypal">PayPal</a>
                        </div>
                        <div class="by-cheque">
                            <a href="#" class="by-cheque">By Cheque</a>
                        </div>
                        <div class="united-way">
                            <a href="#" class="united-way">United Way</a>
                        </div>
                    </div>
                </section>


                <?php get_footer();?>