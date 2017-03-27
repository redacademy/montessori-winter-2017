<?php
/**
*Template Name: what is montessori Page
*
*@package Montessori Theme
*/

get_header(); ?>

<div id="primary" class="content-what-is-montessori">
    <main id="main" class="site-main" role="main">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <p class="scroller">Back to top</p>
            </header><!-- .entry-header -->
      </article>

                <section class="background">                    
                    <?php echo CFS()->get('what_is_Montessori_fields_pt1');?>
                    <?php echo CFS()->get('primary_title');?>
                    <br>
                    <?php echo CFS()->get('text_part_1');?>
                    <?php echo CFS()->get('the_quote');?>
                    <?php echo CFS()->get('text_part_2');?>
                </section>
                <br>
                <br>
                <br>
                <section class="philosophy">
                    <h1>Philosophy</h1>
                    <div class="blocks-container">    
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/follow-child.png" alt="Follow the Child">
                            <?php echo CFS()->get('Follow_the_child');?>
                            <?php echo CFS()->get('follow_the_child_title');?>
                            <?php echo CFS()->get('follow_the_child_text');?>
                            <p class="block-title">"Follow the Child"</p>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/multi-age.png" alt="Multi-age Group">
                            <?php echo CFS()->get('Multi_Age_Group');?>
                            <?php echo CFS()->get('multi_age_group_title');?>
                            <?php echo CFS()->get('multi_age_group_text');?>
                            <p class="block-title">Multi-Age Group</p>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/teachers.png" alt="Teachers">
                            <?php echo CFS()->get('Teachers');?>
                            <?php echo CFS()->get('teachers_title');?>
                            <?php echo CFS()->get('teachers_text');?>
                            <p class="block-title">Teachers</p>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/learning-periods.png" alt="Sensitive Periods of Learning">
                            <?php echo CFS()->get('Learning');?>
                            <?php echo CFS()->get('learning_title');?>
                            <?php echo CFS()->get('learning_text');?>
                            <p class="block-title">Sensitive periods of Learning</p> 
                            <!--<p class="block-title"></p>-->
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/prepped-enviro.png" alt="Prepared Environment">
                            <?php echo CFS()->get('Prepared_Environment');?>
                            <?php echo CFS()->get('environment_title');?>
                            <?php echo CFS()->get('environment_text');?>
                            <p class="block-title">Prepared Environment</p>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/respect.png" alt="Respect">
                            <?php echo CFS()->get('Respect');?>
                            <?php echo CFS()->get('respect_title');?>
                            <?php echo CFS()->get('respect_text');?>
                            <p class="block-title">Respect</p>
                        </div>
                    </div>
                </section>

                <section class="benefits">
                    <?php echo CFS()->get('what_is_Montessori_fields_pt2');?>
                    <?php echo CFS()->get('sec_title');?>
                    <?php echo CFS()->get('sec_text_part_1');?>
                    <?php echo CFS()->get('sec_quote');?>
                    <?php echo CFS()->get('sec_text_part_2');?>
                    <ul class="benefits-list">
                        <li>Students work toward becoming independent learners who are deeply engaged in their learning.</li>
                        <li>Students are able to progress at a pace appropriate to their learning needs.</li>
                        <li>Students work towards developing positive social and community skills.</li>
                        <li>Students nurture a respect for themselves, their classmates, the community, and of our earth. </li>
                        <li>Students develop an intrinsic joy of learning, self control, and concentration work. </li>
                    <ul>
                </section>

                <section class="montessori_materials">                    
                    <div class="materials">    
                        <?php echo CFS()->get('Montessori_Materials');?>
                        <h1><?php echo CFS()->get('montessori_materials_title');?></h1>
                        <br>
                        <?php echo CFS()->get('montessori_materials_quote');?>
                        <?php echo CFS()->get('montessori_materials_text');?>
                    </div>
                    <div class="materials">  
                        <?php echo CFS()->get('Montessori_Hundred_Board');?>
                        <h1><?php echo CFS()->get('montessori_hundred_board_title');?></h1>
                        <?php echo CFS()->get('montessori_hundred_board_quote');?>
                        <?php echo CFS()->get('montessori_hundred_board_text');?>
                    </div>
                    <div class="materials">
                        <?php echo CFS()->get('The_Binomial_Cube');?>
                        <h1><?php echo CFS()->get('the_binomial_cube_title');?></h1>
                        <br>    
                        <?php echo CFS()->get('the_binomial_cube_text');?>
                        <?php echo CFS()->get('the_binomial_cube_quote');?>
                    </div>    
                </section> 
                <br>
                <br>
                <br>
    </main>
</div>
 <?php get_footer();?>