<?php
/**
 * Template Name: standard page
 *
 * @package WordPress
 * @subpackage axcesstheme
 * @since axcesstheme 1.0
 */

get_header();

	if (is_page()) { 
		if (have_posts()) : while (have_posts()) : the_post();?>
		
		<h2><?php the_title();?></h2> 
		<p><?php the_content();?></p>

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif;
			

	}

		
get_footer();