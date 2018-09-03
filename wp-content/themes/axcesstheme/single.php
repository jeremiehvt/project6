<?php

get_header(); ?>
<div class="container">
   <div class="row single-post">
       <nav aria-label="breadcrumb" class="col-12 col-md-9 mt-md-4">
           <ol class="breadcrumb">
               <li class="bwg-breadcrumb-item-active">
                   <a href="/">Accueil</a> / <?= get_category_parents(get_the_ID(),true, ' ')
                       ; ?> /
                   <?php the_category(' ');?> /
                   <a href=" <?php the_permalink(); ?>">
                       <?php the_title();?></a>
               </li>
           </ol>
       </nav>
   <?php if (is_single()) : while (have_posts()) : the_post(); ?>
        <article class="col-12 col-md-9">
            <div class="card">
                <img src="<?php if (has_post_thumbnail()) :
                    the_post_thumbnail_url(); endif ?>"/>
                <div class="card-body">
                    <h4 class="card-txt">
                        <?php the_title();?>
                    </h4>
                    <p class="card-txt"><?php the_content();?></p>
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
                    <li class="list-group-item axcess-pagination">
                        <span>
                            <?php previous_post_link('%link', 'précédent');?>
                        </span>
                        <span class="float-right"><?php next_post_link('%link', 'suivant')
                            ; ?>
                        </span>
                    </li>
                </ul>
            </div>
        </article>
       <aside class="col-12 col-md-2 mt-2">
           <?php get_sidebar('main'); ?>
       </aside>
    <?php endwhile ; endif; ?>
   </div>
</div>
<?php get_footer();