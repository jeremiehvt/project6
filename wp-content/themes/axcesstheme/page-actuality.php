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
                <section class="col-12 col-md-9">
                    <p><a href=" <?= the_permalink();?>"><?php the_title();?></a></p>
                    <?php the_content();?>

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
                                    <div class="card-body">
                                        <h4 class="card-txt">
                                            <a href="<?php the_permalink();?>"
                                               rel="bookmark"><?php the_title();?>
                                            </a>
                                        </h4>
                                        <p class="card-txt"><?php the_excerpt();?></p>
                                        <p class="card-txt">
                                            <a href="<?php the_permalink();?>">lire</a>
                                        </p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">par :
                                            <span class="font-italic">
                                                <?php the_author();?>
                                            </span>
                                            <span class="float-right">le
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
                <div class="col-12 col-md-3">
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