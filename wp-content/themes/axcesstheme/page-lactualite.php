<?php
/**
 * Created by PhpStorm.
 * User: havartjeremie
 * Date: 21/08/2018
 * Time: 17:37
 */

get_header();

if (is_page()) {
    if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="container-fluid">
            <div class="row">
                <section class="col-12 col-md-8 offset-md-1 my-5">
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="bwg-breadcrumb-item-active">
                                <a href="/">Accueil</a> / <a href=" <?php the_permalink();?>"><?php
                                    the_title();?></a>
                            </li>
                        </ol>
                    </nav>

                    <div class="jumbotron current-page">
                        <?php the_post_thumbnail('full');?>
                        <div class="corpus">
                            <?php the_content();?>
                        </div>
                    </div>

                    <div class="row">

                        <?php  global $post;
                        $args = array(
                            'posts_per_page' => 10,
                            'category' => 0,
                            'category_name' => 'actualites'
                        );

                        $recentposts = get_posts($args);

                        foreach ($recentposts as $post) : setup_postdata($post); ?>

                            <article class="col-12 col-md-4 my-3">
                                <div class="card">
                                    <img src="<?php if (has_post_thumbnail()) :
                                        the_post_thumbnail_url('medium'); endif ?>"/>
                                    <div class="card-body">
                                        <div class="card-category">
                                            <span class="label-category-span">categorie(s) :
                                            </span>
                                            <span class="category-span badge
                                                badge-light"><?php
                                                the_category( ' / ')
                                                ?></span>
                                        </div>
                                        <h4 class="card-txt">
                                            <a href="<?php the_permalink();?>"
                                               rel="bookmark"><?php the_title();?>

                                            </a><br>
                                        </h4>
                                        <p class="card-txt"><?php the_excerpt();?></p>
                                        <p class="card-txt">
                                            <a id="read-more" class="btn btn-primary" href="<?php
                                            the_permalink();
                                            ?>">lire l'article</a>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">auteur :
                                            <span class="font-italic">
                                                <?php the_author();?>
                                            </span>
                                            <span class="float-right font-italic">le
                                                <?= get_the_date(); ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </article>

                        <?php endforeach;
                        wp_reset_postdata();
                        ?>
                    </div>
                </section>
                <div class="col-12 col-md-2 my-5 d-none d-sm-none d-md-block">
                    <?php get_sidebar('main'); ?>
                </div>
            </div>
        </div>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no page matched your criteria.' ); ?></p>
    <?php endif;
}
?>

<?php

get_footer();