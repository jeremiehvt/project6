<?php get_header();?>

<?php

	if ( is_front_page() && is_home() ) {

	  if (have_posts()) : while (have_posts()) : the_post();?>

		<h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
		

		<?php the_excerpt();?>
		<?php the_author();?>
		<?php the_date();?>
		

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif;

	} elseif ( is_front_page() ) {

	    // static homepage
		if (have_posts()) : while (have_posts()) : the_post();?>
			
			<?php get_template_part('home');

		endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif;

	} elseif ( is_home() ) {
	  if (have_posts()) : while (have_posts()) : the_post();?>

		<h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
		

		<?php the_excerpt();?>
		<?php the_author();?>
		<?php the_date();?>
		

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif;
	} else {
	  //everything else
	}
?>
	
<?php get_footer();?>