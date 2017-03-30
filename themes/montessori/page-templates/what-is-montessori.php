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
                    <h1 class= "section-title"><?php echo CFS()->get('primary_title');?></h1>
                        <?php echo CFS()->get('text_part_1');?>
                        <div class ="right-quote"><?php echo CFS()->get('the_quote');?></div>
                        <?php echo CFS()->get('text_part_2');?>                    
                </section>

                <section class="montessori-info">
                    <h1 class= "section-title">Philosophy</h1>
                    <div class="blocks-container">    
                        <div class= "philosophy-blocks1">
                            <img class= "block-image1" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/follow-child.png" alt="Follow the Child">
                            <h3 class="content-title"><?php echo CFS()->get('follow_the_child_title');?></h3>                            
                            <div class= "block-content1">
                                <p class="read"><?php echo CFS()->get('follow_the_child_text');?></p>
                            </div>    
                        </div>
                        <div class= "philosophy-blocks2">
                            <img class= "block-image2" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/multi-age.png" alt="Multi-age Group">
                            <h3 class="content-title"><?php echo CFS()->get('multi_age_group_title');?></h3>
                            <div class= "block-content2">    
                                <p class="read"><?php echo CFS()->get('multi_age_group_text');?></p>
                            </div>
                        </div>
                        <div class= "philosophy-blocks3">
                            <img class= "block-image3" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/teachers.png" alt="Teachers">
                            <h3 class="content-title"><?php echo CFS()->get('teachers_title');?></h3>                            
                            <div class= "block-content3">    
                                <p class="read"><?php echo CFS()->get('teachers_text');?></p>
                            </div>
                        </div>
                        <div class= "philosophy-blocks4">
                            <img class= "block-image4" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/learning-periods.png" alt="Sensitive Periods of Learning">
                            <h3 class="content-title"><?php echo CFS()->get('learning_title');?></h3>                            
                            <div class= "block-content4">
                                <p class="read"><?php echo CFS()->get('learning_text');?></p>
                            </div>
                        </div>
                        <div class= "philosophy-blocks5">
                            <img class= "block-image5" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/prepped-enviro.png" alt="Prepared Environment">
                            <h3 class="content-title"><?php echo CFS()->get('environment_title');?></h3>                           
                            <div class= "block-content5">
                                <p class="read"><?php echo CFS()->get('environment_text');?></p>
                            </div>
                        </div>
                        <div class= "philosophy-blocks6">
                            <img class= "block-image6" src="<?php bloginfo('stylesheet_directory');?>/images/philosophy/respect.png" alt="Respect">
                            <h3 class="content-title"><?php echo CFS()->get('respect_title');?></h3>
                            <div class= "block-content6">
                                <p class="read"><?php echo CFS()->get('respect_text');?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="montessori-info">
                    <h1 class= "section-title"><?php echo CFS()->get('sec_title');?></h1>
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
                        <h1 class= "section-title"><?php echo CFS()->get('montessori_materials_title');?></h1>
                        <?php echo CFS()->get('montessori_materials_quote');?>
                        <?php echo CFS()->get('montessori_materials_text');?>
                    </div>
                    <div class="materials">  
                        <h1 class= "section-title"><?php echo CFS()->get('montessori_hundred_board_title');?></h1>
                        <?php echo CFS()->get('montessori_hundred_board_quote');?>
                        <?php echo CFS()->get('montessori_hundred_board_text');?>
                    </div>
                    <div class="materials">
                        <h1 class= "section-title"><?php echo CFS()->get('the_binomial_cube_title');?></h1>
                        <?php echo CFS()->get('the_binomial_cube_text');?>
                        <?php echo CFS()->get('the_binomial_cube_quote');?>
                    </div>    
                </section> 
    </main>
</div>
 <?php get_footer();?>