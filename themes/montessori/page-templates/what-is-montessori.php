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
                    <?php echo CFS()->get('text_part_1');?>
                    <?php echo CFS()->get('the_quote');?>
                    <?php echo CFS()->get('text_part_2');?>
                </section>

                <section class="philosophy">
                </section>

                <section class="benefits">
                    <?php echo CFS()->get('what_is_Montessori_fields_pt2');?>
                    <?php echo CFS()->get('sec_title');?>
                    <?php echo CFS()->get('sec_text_part_1');?>
                    <?php echo CFS()->get('sec_quote');?>
                    <?php echo CFS()->get('sec_text_part_2');?>
                </section 

    </main>
</div>
 <?php get_footer();?>