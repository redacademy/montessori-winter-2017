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
                    <div class="get-involved-titles" >
                        <!--<?php
                          $args = array('post_type' => 'post', 'order' => 'DSC', 'posts_per_page' => 3 );
                          $product_posts = new WP_Query($args);
                         ?>-->
                        <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
                        <?php //get_template_part( 'template-parts/content'); ?>
                        
                        <ul class="nav-tabs"  >
                            
                            <li>
                                <h4  >
                                    		<a class="tab-link current" data-tab="tab-1">
                                  
                                        <?php 
                                    the_title();
                                        ?>

                                    </a>
                            </li>
                            </h4>
                            </li>
                        </ul>
                        <?php endwhile; // End of the loop. ?>
                    </div>
                    <div class="get-involved-content">
                        <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>
                       	<div id="tab-1" class="tab-content current">
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
                        <div id="tab-2" class="tab-content">
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
                <div class="cheque-and-united-text">
                    <div class="make-cheque">
                        <p>Make cheque to <b>New Westminster Montessori Society</b> and send it to our mailing address: Suite
                            379, 104-1015 Columbia Street New Westminster BC, V3M 6V3.</p>
                        <p>Or bring the cheque in person to the <b>monthly board meeting.</b>
                            <p>The Board Meetings are held on the last Wednesday od each month at 6:30pm in the Library of Richard
                                McBride Elementary, 331 Richmond St, New Westminster.</p>

                    </div>
                    <div class="the-united-way">
                        <p>The United Way is an easy way to donate to the Montessori program. You can make contributions through
                            your employer by filling out the form. Our requisites:</p>
                        <p><b>Donor Designation category:</b> New Westminster Montessori Society</p>
                        <p><b>Charity number:</b> 86867 6743 RR0001</p>
                        <p><b>Address:</b> New Westminster Montessori Society, Suite 379, 104-1015 Columbia Street New Westminster
                            BC, V3M 6V3</p>

                    </div>
                </div>

                <div class="become-volunteer-buttons">
                    <div class="in-person">
                        <a href="#" class="paypal">In Person</a>
                    </div>
                    <div class="volunteer-online">
                        <a href="#" class="online">Online</a>
                    </div>
                    <div class="volunteer-email">
                        <a href="#" class="by-email">By Email</a>
                    </div>
                </div>
                <div class="volunteer-text">
                <div class="in-person-text">
                    <p>To enquire about volunteer opportunities <b>in person</b> attend the next Monthly Board Meeting.</p>
                    <p>The Board Meetings are held on the last Wednesday of each month at 6:30pm in the Library of Richard McBride Elementary, 331 Richmond St, New Westminster.</p>
                    </div>
                    <div class="apply-online-text">
                        <p><b>Apply online</b> through contact form to learn about current volunteer opportunities.</p>
                        </div>
                        <div class="apply-now-button">
                            <a href="#" class="apply-text-online">Apply</a> 
                        </div>
                        <div class="apply-by-email">
                            <p>Send an email to <b>info@newwestmontessori.ca</b> to express your interest in volunteering and request information about current opportunities.</p>
                            </div>
</div>
                <?php get_footer();?>