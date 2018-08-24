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
                            <section class="col-12 col-md-9">
                                <nav aria-label="breadcrumb" class="mt-3">
                                    <ol class="breadcrumb">
                                        <li class="bwg-breadcrumb-item-active">
                                            <a href="/">Home</a> / <a href=" <?= the_permalink();
                                            ?>"><?php
                                                the_title();
                                           ?></a>
                                        </li>
                                    </ol>
                                </nav>
                                <?php the_content();?>
                            </section>
                            <div class="col-12 col-md-3">
                                <?php get_sidebar('main'); ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif;
            }
get_footer();