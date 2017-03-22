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
                <div>
                    <h3 class="about-title">
                        <?php echo the_title();?>
                    </h3>
                </div>
                <div>
                    <h3 class="about-back"><a href="#back-to-top">Back to top</a></h3>
                </div>
            </div>
            <div class="navigation-sub-menu">
                <ul>
                    <div class="back">
                        <li><a href="#back-top">Back to top</a></li>
                    </div>

                    <li><a href="#our-history-sub">Our History</a></li>
                    <li><a href="#our-role-sub">Our Role</a></li>
                    <li><a href="#meetings">Meetings</a></li>
                    <li><a href="#board-members-sub">Board Members</a></li>
                    <li><a href="#news-letter">Newsletter</a></li>

                </ul>
            </div>
            <!--navigation-sub-menu-->


            <div class="about-container">
                <section class="our-history" id="our-history-sub">

                    <?php echo CFS()->get('text_and_quote');?>
                    <?php echo CFS()->get('title');?>
                    <?php echo CFS()->get('main_text');?>

                    <div class="about-quote">
                        <div class="red-line-quote"></div>
                        <div class="about-quote-text">
                    <?php echo CFS()->get('quote_text');?>
                    </div><!--about-quote-text-->
                    </div><!--about-quote-->

                </section>
                <div class="line2"></div>

                <section class="our-role" id="our-role-sub">

                    <?php echo CFS()->get('secondary_text_and_quote');?>
                    <?php echo CFS()->get('secondary_title');?>
                    <?php echo CFS()->get('secondary_text');?>

<div class="about-quote">
                        <div class="red-line-quote"></div>
                        <div class="about-quote-text">

                    <?php echo CFS()->get('secondary_quote');?>
                     </div><!--about-quote-text-->
                    </div><!--about-quote-->
                </section>
            </div>
            <div class="line2"></div>
            <section class="board-members" id="board-members-sub">
                <h2>Board Members</h2>
                <ul>
                    <?php
                        $fields = CFS()->get('board_members_title'); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                        <li>
                            <p><img src="<?php echo $field['board_member_picture']; ?>" /></p>
                            <p>
                                <?php echo $field['board_member_name']; ?>
                            </p>
                            <p class="about-job-title">
                                <?php echo $field['board_member_job_title']; ?>
                            </p>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                </ul>



                <!--<?php echo CFS()->get('	board_members_title');?>
                <?php echo CFS()->get('	board_member_picture');?>
                <?php echo CFS()->get('	board_member_name');?>
                <?php echo CFS()->get('board_member_job_title');?>-->

            </section>
            <h2>Members at Large</h2>
            <div class="members-at-large">
                <div class="set-one">
                    <div>
                        <?php echo CFS()->get('members_one');?>
                    </div>
                    <div>
                        <?php echo CFS()->get('members_two');?>
                    </div>
                </div>
                <div class="set-two">
                    <div>
                        <?php echo CFS()->get('members_three');?>
                    </div>
                    <div>
                        <?php echo CFS()->get('members_four');?>
                    </div>
                </div>
                <div class="set-three">
                    <div>
                        <?php echo CFS()->get('members_five');?>
                    </div>
                    <div>
                        <?php echo CFS()->get('members_six');?>
                    </div>
                </div>
            </div>
            <!--members at large-->
            <div class="line2"></div>
            <section class="meeting-minutes" id="meetings">
                <h2>Meeting Minutes</h2>
            </section>
            <div class="line2"></div>
            <section class="newsletter" id="news-letter">
                <h2>Newsletter</h2>
            </section>
            <div class="line2"></div>
            <section class="about-archives">
                <h2>Archives</h2>
            </section>
        </main>
    </div>
    <?php get_footer();?>