<?php
/**
 * Created by PhpStorm.
 * User: havartjeremie
 * Date: 16/08/2018
 * Time: 14:21
 */


if (is_front_page()) {
    if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="container-fluid">
            <div class="row">
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
            </div>
        </div>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif;

}
