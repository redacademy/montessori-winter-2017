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
                    <li><a href="#schools-sub">Schools and Teachers</a></li>
                    <li><a href="#how-to-sub">How to Enroll</a></li>
                </ul>
            </div>
            <!--navigation-sub-menu-->
            <div class="nw-container">
                <section class="why-montessori" id="nw-program-sub">
                    <div class="nw-why-montessori-title">
                        <?php echo CFS()->get('why_montessori_title');?>
                    </div>
                    <div class="nw-text-and-picture">
                        <div class="nw-montessori-text">
                            <?php echo CFS()->get('why_montessori_text');?>
                        </div>
                        <img src="<?php echo CFS()->get('why_montessori_picture');?>">
                    </div>
                    <div class="nw-quote">
                        <div class="red-line-quote"></div>
                        <div class="nw-quote-text">
                            <?php echo CFS()->get('why_montessori_quote');?>
                        </div>
                        <!--nw-quote-text-->
                    </div>
                    <!--nw-quote-->

                    <div class="daily-schedule">
                        <div class="daily-title">
                            <?php echo CFS()->get('daily_schedule_title');?>
                        </div>
                        <div class="test">
                        <div class="schedules">
                            <div class="morning-schedule-title">
                                <?php echo CFS()->get('morning_schedule_title');?>
                            </div>

                            <div class="first-morning">
                                <ul>
                                    <li>
                                        <?php echo CFS()->get('first_morning_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('second_morning_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('third_morning_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('fourth_morning_schedule');?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="afternoon-sch">
                            <div class="afternoon-schedule">
                                <?php echo CFS()->get('afternoon_schedule_title');?>
                            </div>
                            <div class="first-afternoon">
                                <ul>
                                    <li>
                                        <?php echo CFS()->get('first_montessori_afternoon_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('second_afternoon_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('third_afternoon_schedule');?>
                                    </li>
                                    <li>
                                        <?php echo CFS()->get('fourth_afternoon_schedule');?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!--daily-schedule-->
                </section>
                <div class="nw-line2"></div>
                <section class="nw-funding" id="funding-sub">
                    <div class="nw-funding-title">
                        <?php echo CFS()->get('funding_title');?>
                    </div>
                    <div class="where-is-coming-from">
                        <?php echo CFS()->get('funding_sub_title');?>
                    </div>
                    <div class="funding-first-text">
                        <?php echo CFS()->get('funding_first_text');?>
                    </div>
                    <div class="funding-quote-picture">
                    <div class="funding-first-quote">
                        <div class="red-line-quote"></div>
                        <div class="funding-quote-text">
                            <?php echo CFS()->get('funding_quote');?>
                        </div>
                    </div>
                    <img src="<?php echo CFS()->get('funding_picture');?>">
                    </div>
                    <div class="funding-second-text">
                        <?php echo CFS()->get('second_funding_text');?>
                    </div>

                    <div class="how-money">
                        <div class="how-money-title">
                            <?php echo CFS()->get('how_money_is_spent_title');?>
                        </div>
                        <div class="how-money-picture-and-text">
                        <img src="<?php echo CFS()->get('how_money_picture');?>">
                        <div class="how-money-text">
                            <?php echo CFS()->get('how_money_is_spent_text');?>
                        </div>
                        </div>
                    </div>
                    <a href="#" class="donate-now">Donate Now</a>
                </section>
     <div class="nw-line2"></div>
                <section class="school-and-teachers" id="schools-sub">
                    <div class="schools-and-teachers-title">
                        <?php echo CFS()->get('schools_and_teachers_title');?>
                    </div>
                    <div class="schools-and-teachers-sub">
                        <?php echo CFS()->get('schools_and_teachers_sub_title');?>
                    </div>
                    <div class="schools-text-and-picture">
                        <div class="school-text-and-address">
                    <div class="schools-text">
                        <?php echo CFS()->get('schools_and_teachers_text');?>
                    </div>
                    <div class="school-address">
                        <?php echo CFS()->get('schools_and_teachers_address');?>
                       <div> <?php echo CFS()->get('schools_and_teachers_phone');?></div>
                    </div>
                    </div>
                    <img src="<?php echo CFS()->get('first_school_picture');?>">
                    </div>

                    <div class="second-school-title">
                        <?php echo CFS()->get('second_school');?>
                    </div>
                    <div class="second-school-text-and-picture">
                        <div class="second-school-text-address">
                    <div class="second-school-text">
                        <?php echo CFS()->get('second_school_text');?>
                    </div>
                    <div class="school-address">
                        <?php echo CFS()->get('second_school_address');?>
                      <div>  <?php echo CFS()->get('second_school_phone');?></div>
                    </div>
                    </div>
                    <img src="<?php echo CFS()->get('second_school_picture');?>">
</div>
<div class="nw-line2"></div>
                    <div class="nw-teachers">

                        <h2>Teachers</h2>
                        <ul>
                            <?php
                        $fields = CFS()->get('teachers_loop'); // returns an array of posts
                        if(!empty($fields)):
                            foreach ( $fields as $field ):?>
                                <li>
                                    <p><img src="<?php echo $field['teachers_picture']; ?>" /></p>
                                    <p>
                                        <?php echo $field['teachers_name']; ?>
                                    </p>
                                    <p class="nw-grade">
                                        <?php echo $field['teachers_teaching_grade']; ?>
                                    </p>
                                </li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                        </ul>


                    </div>
                    <div class="nw-line2"></div>
                    <div class="list-of-schools">
                        <div class="private-schools-title">
                            <?php echo CFS()->get('list_of_private_schools_title');?>
                        </div>
                        <p class="nw-list-of-schools">

                            <?php echo CFS()->get('list_of_schools');?>
                        </p>
                    </div>
                </section>
                <div class="nw-line2"></div>
                <section class="how-to-enroll" id="how-to-sub">
                    <div class="nw-how-to-enroll-title">
                        <?php echo CFS()->get('how_to_enroll_title');?>
                    </div>
                    <div class="how-to-enroll-quote">
                        <div class="red-line-quote"></div>
                        <div class="how-to-enroll-quote-text">
                            <?php echo CFS()->get('how_to_enroll_quote');?>
                        </div>
                    </div>
                    <div class="how-to-enroll-sub-title">
                        <?php echo CFS()->get('how_to_enroll_first_subtitle');?>
                    </div>
                    <p class="how-to-text">
                        <?php echo CFS()->get('how_to_enroll_first_text');?>
                    </p>
                    <p class="how-apply-sub-title">
                        <?php echo CFS()->get('how_to_apply_sub_title');?>
                    </p>
                    <div class="how-to-list-and-picture">
                    <div class="how-to-text-area">
                        <?php echo CFS()->get('how_to_apply_text_area');?>
                    </div>
                    <div class="picture-and-button">
                    <img src="<?php echo CFS()->get('how_to_apply_picture');?>">
                     <a href="#" class="official-school">Official School Board Website</a>
                     </div>
</div>
                   
                </section>


        </main>
        </div>
        <?php get_footer();?>