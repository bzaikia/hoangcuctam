<?php get_header(); ?>


<div class="truestory_sub_container_single">

<div class="truestory-posts-category">
<div class="truestory-category-query">
<h2> *&nbsp;<?php the_post(); echo get_the_author(); ?>&nbsp;* </h2>
</div>
 <section
          <?php if (get_theme_mod('truestory_choose_post_template') == 'full-posts') :?>  class="truestory-full-posts" 
        <?php elseif(get_theme_mod('truestory_choose_post_template') == 'list'): ?> class="list"
          <?php elseif(get_theme_mod('truestory_choose_post_template') == 'long'): ?> class="long" <?php endif;?> >
          <?php truestory_remove_header_lack_error(); ?>
     
       <?php rewind_posts(); if (have_posts()) : while (have_posts()) : the_post(); ?>
       <section class="truestory-full-posts-category">

      <?php if(get_theme_mod('truestory_choose_post_template') == 'list') : ?>

     <?php get_template_part('content','list'); ?>

        <?php elseif(get_theme_mod('truestory_choose_post_template')=='long'): ?>

        <?php get_template_part('content','long'); ?>
        <?php else: ?>
        <div <?php post_class("full-posts"); ?> id="post-<?php the_ID(); ?>" >
        <?php get_template_part('content'); ?>
      </div>
      <?php endif; ?>
    </section>
     <?php endwhile; ?>
     
     <?php truestory_pagination(); ?>
     
     </section>
     <?php endif; ?>

</div>

<?php if(!get_theme_mod('truestory_disable_sidebar')):?><?php get_sidebar(); ?><?php endif; ?>


 </div><br>
<?php get_footer(); ?>