 <?php get_header(); ?>


    <div class="truestory_sub_container_single" >
       <div class="truestory-page-single">
         

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="truestory-page_single-content">

            <?php get_template_part('content','page'); ?>

        </section> <?php endwhile; ?> <?php endif; ?>
       

       </div>

        
     

    </div>
   <?php get_sidebar(); ?>

<?php get_footer(); ?>