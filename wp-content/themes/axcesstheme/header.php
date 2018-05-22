<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>

    <body>
    	<header class="col-12 px-0 mx-0">
    		<?php if ( get_header_image() ) : ?>
			    <div class="col-12 px-0" id="site-header">
			        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			            <img src="<?php header_image(); ?>" width="100%" height="100%" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			        </a>
			    </div>
			<?php endif; ?>
    		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
					        echo '<img src="'. esc_url( $logo[0] ) .'">';
					} else {
					        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}?>
				</a>
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>					
				</div>
			</nav>
    	</header>
    