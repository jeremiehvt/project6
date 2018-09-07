<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage acxesstheme
 * @since acxesstheme 1.0
 */

get_header(); ?>

<div class="container-fluid">
            <div class="row">
                <section class="col-12 col-md-8 offset-md-1 my-3">
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="bwg-breadcrumb-item-active">
                               
                            </li>
                        </ol>
                    </nav>
                    <div class="jumbotron page-content">
                      <h1 id="homepage-actuality-title"> 
                      	<?php _e( 'Ressource non trouvée.', 'acxesstheme' ); ?>
                      </h1>
                      <p>
                      	<a href="/"> <?php _e( 'Retour page d\'accueil >', 'acxesstheme' ); ?></a>
                      </p>
                </section>
                <aside class="col-12 col-md-2">
                    <?php get_sidebar('main'); ?>
                </aside>
            </div>
        </div>
<?php get_footer(); ?>
