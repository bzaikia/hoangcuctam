<?php get_header(); ?>





  
    <section class="truestory-sub_container" >
      <?php truestory_remove_header_lack_error(); ?>
      <main>
        
       <div class="posts">
       <?php $truestory_special_ann_title=get_theme_mod('truestory-special-ann-title'); ?>
       <?php $truestory_special_ann_desc=get_theme_mod('truestory-special-ann-desc'); ?>
        <?php if(get_theme_mod('truestory-special-ann-disable')==false):?>
        <?php if(get_theme_mod('truestory-special-ann-title') OR get_theme_mod('truestory-special-ann-desc') ): ?>  
        <div class="truestory-announcement">
        <?php if(get_theme_mod('truestory-special-ann-title') OR get_theme_mod('truestory-special-ann-desc') ): ?>  <div class="truestory-ann_soft_bg">
          <?php if(!empty($truestory_special_ann_title)) : ?>
           <?php if(get_theme_mod('truestory-special-ann-title')): ?> <span><?php echo esc_attr(get_theme_mod('truestory-special-ann-title')); ?></span><?php endif; ?><?php endif; ?>
           <?php if(!empty($truestory_special_ann_title) AND !empty($truestory_special_ann_desc)) : ?> <br><br> <?php endif; ?>
           <?php if(get_theme_mod('truestory-special-ann-desc')): ?> <p><?php echo esc_attr(get_theme_mod('truestory-special-ann-desc')); ?></p><?php endif; ?>
         
        </div>
      <?php endif; ?>
        </div>
         <br>
      <?php endif; ?>
       
      <?php endif;?>
        
          <section
          <?php if (get_theme_mod('truestory_choose_post_template') == 'full-posts') :?>  class="truestory-full-posts" 
        <?php elseif(get_theme_mod('truestory_choose_post_template') == 'list'): ?> class="list"
          <?php elseif(get_theme_mod('truestory_choose_post_template') == 'long'): ?> class="long" <?php endif;?> >
          <?php truestory_remove_header_lack_error(); ?>
          <?php $featured_cat_ID = get_theme_mod( 'truestory_featured_category' ); ?>
          <?php $exclude_fcat_query_args = array( 'category__not_in' => $featured_cat_ID, 'paged'=> $paged  );
          $exclude_fcat_query = new WP_Query( $exclude_fcat_query_args );

          // Tweking The Pagination To Work With The New Query
          $temp_query = $wp_query;
          $wp_query   = NULL;
          $wp_query   =$exclude_fcat_query;

         
          ?>

        <?php if ($exclude_fcat_query->have_posts()) : while ($exclude_fcat_query->have_posts()) : $exclude_fcat_query->the_post(); ?>

      <?php if(get_theme_mod('truestory_choose_post_template') == 'list') : ?>

     <?php get_template_part('content','list'); ?>

        <?php elseif(get_theme_mod('truestory_choose_post_template')=='long'): ?>

        <?php get_template_part('content','long'); ?>
        <?php else: ?>
        <div <?php post_class("truestory-full-posts"); ?> id="post-<?php the_ID(); ?>" >
        <?php get_template_part('content'); ?>
      </div>
      <?php endif; ?>

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php truestory_pagination(); ?>
     <?php $wp_query = NULL; ?>
     <?php $wp_query = $temp_query; ?>
     
     </section>
    
    <?php endif; ?>



    
      
    </div>
        </main>
        <?php if(!get_theme_mod('truestory_disable_sidebar')):?><?php get_sidebar(); ?><?php endif; ?>

    </section>

<?php get_footer(); ?>