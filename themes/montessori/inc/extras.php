<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function change_sort_order($query){
    if(is_post_type_archive()):
        //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
        //Set the order ASC or DESC
        $query->set( 'order', 'ASC' );
        //Set the orderby
        $query->set( 'orderby', 'title' );
    endif;    
};
add_action( 'pre_get_posts', 'change_sort_order');

function blog_change_sort( $query ) {
  
    
    if( is_post_type_archive('products') ) {
        $query->set('posts_per_page',1);
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'blog_change_sort');


while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content'); ?>

				<?php the_post_navigation(); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

					<?php endwhile; // End of the loop. ?>