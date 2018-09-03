<?php get_header();?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-9 my-5">
                <div class="container-fluid">
                    <div class="row">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-4 my-3">
                                <article class="card">
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
                                </article>
                            </div>
                        <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <aside class="col-12 col-md-2">
                <?php get_sidebar('main'); ?>
            </aside>
        </div>
    </div>

<?php get_footer();?>