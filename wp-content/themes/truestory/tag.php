<?php get_header(); ?>


<div class="truestory_sub_container_single">

<div class="truestory-posts-category">
<div class="truestory-category-query">
<h2> *&nbsp;<?php printf( esc_html__( '%s', 'truestory' ), single_tag_title( '', false ) ); ?>&nbsp;* </h2>
</div><br><br>
<?php if(have_posts()) :?>
 <section
          <?php if (get_theme_mod('truestory_choose_post_template') == 'full-posts') :?>  class="truestory-full-posts" 
        <?php elseif(get_theme_mod('truestory_choose_post_template') == 'list'): ?> class="list"
          <?php elseif(get_theme_mod('truestory_choose_post_template') == 'long'): ?> class="long" <?php endif;?> >
          <?php truestory_remove_header_lack_error(); ?>
     
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <section class="truestory-full-posts_tag">

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
        <?php else: ?>

     <article class="truestory-full_posts-content">
      
        <p><?php esc_html_e( 'This tag contains no posts at the moment', 'truestory' ); ?></p>
        
      </article>

     <?php endif; ?>

</div>

<?php if(!get_theme_mod('truestory_disable_sidebar')):?><?php get_sidebar(); ?><?php endif; ?>


 </div><br>
<?php get_footer(); ?>