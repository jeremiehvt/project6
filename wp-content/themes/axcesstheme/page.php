<?php
/**
 * Template Name: standard page
 *
 * @package WordPress
 * @subpackage axcesstheme
 * @since axcesstheme 1.0
 */

get_header();

	if (is_page()) { ?>
		
		<h2><?php the_title();?></h2> 
		<p><?php the_content();?></p>
		
			
	<?php
	}

get_footer();