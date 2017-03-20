 <?php get_header(); ?>


    <div class="truestory_sub_container_single" >
       <div class="posts-single">
         

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="truestory-full-posts_single">

            <?php get_template_part('content'); ?>

        </section> <?php endwhile; ?> <?php endif; ?>
       

       </div>

        
      <?php if(!get_theme_mod('truestory_disable_sidebar')):?><?php get_sidebar(); ?><?php endif; ?>

    </div>
 


<?php get_footer(); ?>