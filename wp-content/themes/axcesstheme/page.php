<?php
/**
 * Template Name: standard page
 *
 * @package WordPress
 * @subpackage axcesstheme
 * @since axcesstheme 1.0
 */

get_header(); ?>
        <?php
            if (is_page()) {
                if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="container-fluid">
                        <div class="row">
                            <section class="col-12 col-md-8 offset-md-1 my-5">
                                <nav aria-label="breadcrumb" class="mt-3">
                                    <ol class="breadcrumb">
                                        <li class="bwg-breadcrumb-item-active">
                                            <a href="/">Accueil</a> / <a href=" <?= the_permalink();
                                            ?>"><?php
                                                the_title();
                                           ?></a>
                                        </li>
                                    </ol>
                                </nav>
                                <div class="jumbotron current-page">
                                    <?php the_post_thumbnail('full');?>
                                    <div class="corpus">
                                        <?php the_content();?>
                                    </div>
                                </div>
                            </section>
                            <div class="col-12 col-md-2 my-5">
                                <?php get_sidebar('main'); ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif;
            }
get_footer();