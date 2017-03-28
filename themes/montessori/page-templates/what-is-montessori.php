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

                <section class="montessori-info history-of-montessori">                    
                    <?php echo CFS()->get('primary_title');?>
                    <br>
                        <?php echo CFS()->get('text_part_1');?>
                        <div class ="right-quote"><?php echo CFS()->get('the_quote');?></div>
                        <?php echo CFS()->get('text_part_2');?>                    
                </section>
                <br>
                <br>
                <br>
                <section class="montessori-info">
                    <h1>Philosophy</h1>
                    <div class="blocks-container">    
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/follow-child.png" alt="Follow the Child">
                            <div class= "block-content">
                                <h3 class="block-title"><?php echo CFS()->get('follow_the_child_title');?></h3>
                                <?php echo CFS()->get('follow_the_child_text');?>
                            </div>    
                            <h3 class="block-title">"Follow the Child"</h3>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/multi-age.png" alt="Multi-age Group">
                            <div class= "block-content">    
                                <h3 class="block-title"><?php echo CFS()->get('multi_age_group_title');?></h3>
                                <?php echo CFS()->get('multi_age_group_text');?>
                            </div>
                            <h3 class="block-title">Multi-Age Group</h3>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/teachers.png" alt="Teachers">
                            <div class= "block-content">    
                                <h3 class="block-title"><?php echo CFS()->get('teachers_title');?></h3>
                                <?php echo CFS()->get('teachers_text');?>
                            </div>
                            <h3 class="block-title">Teachers</h3>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/learning-periods.png" alt="Sensitive Periods of Learning">
                            <div class= "block-content">
                                <h3 class="block-title"><?php echo CFS()->get('learning_title');?></h3>
                                <?php echo CFS()->get('learning_text');?>
                            </div>
                            <h3 class="block-title">Sensitive periods of Learning</h3> 
                            <!--<p class="block-title"></p>-->
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/prepped-enviro.png" alt="Prepared Environment">
                            <div class= "block-content">
                                <h3 class="block-title"><?php echo CFS()->get('environment_title');?></h3>
                                <?php echo CFS()->get('environment_text');?>
                            </div>
                            <h3 class="block-title">Prepared Environment</h3>
                        </div>
                        <div class= "philosophy-blocks">
                            <img class= "block-image" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/respect.png" alt="Respect">
                            <div class= "block-content">
                                <h3 class="block-title"><?php echo CFS()->get('respect_title');?></h3>
                                <?php echo CFS()->get('respect_text');?>
                            </div>    
                            <h3 class="block-title">Respect</h3>
                        </div>
                    </div>
                </section>

                <section class="montessori-info">
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

                <section class="montessori-info">                    
                    <div class="materials">    
                        <h1><?php echo CFS()->get('montessori_materials_title');?></h1>
                        <br>
                        <?php echo CFS()->get('montessori_materials_quote');?>
                        <?php echo CFS()->get('montessori_materials_text');?>
                    </div>
                    <div class="materials">  
                        <h1><?php echo CFS()->get('montessori_hundred_board_title');?></h1>
                        <?php echo CFS()->get('montessori_hundred_board_quote');?>
                        <?php echo CFS()->get('montessori_hundred_board_text');?>
                    </div>
                    <div class="materials">
                        <h1><?php echo CFS()->get('the_binomial_cube_title');?></h1>
                        <br>
                        <?php echo CFS()->get('the_binomial_cube_text');?>
                        <div class ="right-quote"><?php echo CFS()->get('the_binomial_cube_quote');?></div>                         
                    </div>    
                </section> 
                <br>
                <br>
                <br>
    </main>
</div>
 <?php get_footer();?>