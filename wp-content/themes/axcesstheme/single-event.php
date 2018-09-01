<?php
/**
 * Created by PhpStorm.
 * User: havartjeremie
 * Date: 27/08/2018
 * Time: 11:04
 */

get_header(); ?>
<div class="container">
    <div class="row">

        <?php if (is_single()) : while (have_posts()) : the_post(); ?>
            <article class="col-12 col-md-9 mt-3" id="event">
                <nav aria-label="breadcrumb" class="col-12 m-0 p-0">
                    <ol class="breadcrumb">
                        <li class="bwg-breadcrumb-item-active">
                            <a href="/">Accueil</a> /
                            <?php the_category(' ');?> /
                            <a href=" <?php the_permalink(); ?>">
                                <?php the_title();?></a>
                        </li>
                    </ol>
                </nav>
                <div class="card">

                    <?php the_content();?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">par :
                            <span class="font-italic">
                            <?php the_author();?>
                        </span>
                            <span class="float-right">le
                                <?= get_the_date(); ?>
                        </span>
                        </li>
                        <li class="list-group-item"
                        <span class="font-italic">
                            <?php previous_post_link('%link', 'précédent');?>
                        </span>
                        <span class="float-right"><?php next_post_link('%link', 'suivant'); ?>
                        </span>
                        </li>
                    </ul>

                </div>
            </article>
            <div class="col-12 col-md-2 mt-3 mb-5">
                <?php get_sidebar('main'); ?>
            </div>
        <?php endwhile ; endif; ?>
    </div>
</div> <?php get_footer();
