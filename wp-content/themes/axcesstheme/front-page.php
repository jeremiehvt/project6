<?php get_header();?>

<?php

	if ( is_front_page() && is_home() ) {

	  ?>
	  
		
		<div class="col-6 offset-3 my-5">
			<div class="jumbotron">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="row">
						<div class="col-6">
							<div class="card">	
								<div class="card-body">
									<h4 class="card-txt"><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
									<p class="card-txt"><?php the_excerpt();?></p>
									<p class="card-txt"><a href="<?php the_permalink();?>">lire</a></p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">par : <span class="font-italic"><?php the_author();?></span><span class="float-right">le <?php the_date();?></span></li>
								</ul>
							</div>
						</div>						
					</div>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>			
		  	</div>
		</div>	
		
	
	  	
		
	<?php } elseif ( is_front_page() ) {

	    // static homepage
		if (have_posts()) : while (have_posts()) : the_post();?>
			
			<?php get_template_part('page');

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