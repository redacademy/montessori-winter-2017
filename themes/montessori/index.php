<h1>INDEX.PHP</h1>
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>




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
                            <div id="tab<?php $post_id ?>" class="tab-content active">
                            <div class="middle-school-textarea">
                                <?php echo CFS()->get('montessori_in_the_middle_school_textarea');?>
                            </div>
                            <div class="middle-school-quote">
                               
                                <div class="middle-school-quote-text">
                                    <?php echo CFS()->get('montessori_in_the_middle_school_quote');?>
                                </div>
                            </div>
                            <?php $picture = CFS()->get('picture'); 
                            if (!empty($picture)) : ?>
                            <div class="picture">
                                <img src="<?php echo $picture; ?>"/>
                            </div>
                            <?php endif; ?>
                            <div class="middle-school-second-textarea">
                                <div class="second-textarea">
                                    <?php echo CFS()->get('montessori_in_the_middle_school_second_textarea');?>
                                </div>
                            </div>
                            </div>
                             <?php endwhile; // End of the loop. ?>
                             <?php wp_reset_postdata(); ?>
                            <a href="#" class="express-your-interest">Express Your Interest</a>
                    </div>
                </section>


                <section class="support-now">
                    <!--<h2>Support Now</h2>
                    <h4>Did you Know...</h4>-->
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
                        </div>
                        </div>
                        <div class="bracket-image"></div>

                        <div class="contribution-image"></div>
                        <div class="donation-volunteer-buttons">

                            <a href="#" class="make-donation">Make a Donation</a>
                            <a href="#" class="become-volunteer">Become a Volunteer</a>
                        </div>

                        <div class="paypal-imagen">
                            <a href="#"><img src="../../images/paypal.png" /></a>
                        </div>
                </section>


                <?php get_footer();?>
