<div class="truestory-featured-articles-second">
      <?php
    
      $featured_cat = get_theme_mod( 'truestory_featured_category' );
      $number = get_theme_mod('truestory_featured_number');
    
    ?>
      <article  data-width="100%" data-ratio="700/467"  data-maxwidth="1200" data-minwidth="300" data-minheight="300" data-height="100%" data-autoplay="<?php if(get_theme_mod('fslider-autoslide')): echo esc_attr(get_theme_mod('fslider-autoslide')); else: ?>true<?php endif;?>"  data-shuffle="<?php if(get_theme_mod('fslider-shuffle')): echo esc_attr(get_theme_mod('fslider-shuffle')); else: ?>false<?php endif;?>" class="fotorama">
            <?php $feat_query = new WP_Query( array( 'cat' => $featured_cat, 'showposts' => $number ) ); ?>
    <?php if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post(); ?>
    <?php
           $thumb_id = get_post_thumbnail_id();
           $thumb_url = wp_get_attachment_image_src($thumb_id,'onfeatured-thumbnail', true);
?>

        <div data-fit="cover" class="truestory-img-gardient" style="background-image:url('<?php echo esc_url($thumb_url[0]); ?>');">
         <div class="truestory-featured-articles-info-wrapper">
         <div class="truestory-f-inside-soft-bg"></div>
         <div class="truestory-featured-articles-info-second">
          <div class="inside-f-info">
        <?php if(get_theme_mod('truestory_hide_fcat')==false): ?>
        <?php truestory_category('&nbsp;&nbsp;'); ?><br>
      <?php endif; ?>
        
       
        <h3 class="truestory-featured-articles-title-h3-second">
        <a href="<?php echo get_permalink(); ?>" class="truestory-featured-articles_title-second" ><?php the_title(); ?></a>
        </h3>

       <div class="truestory-featured-articles_body-second_wrapp"><p class="truestory-featured-articles_body-second"><?php  echo truestory_string_limit_words(get_the_excerpt(),60); printf(".."); ?></p></div>
        
        
      
        <a class="truestory-truestory-featured-articles_readmore-second" href="<?php echo get_permalink(); ?>"><?php if(get_theme_mod('read_more_alternative')): echo esc_html(get_theme_mod('read_more_alternative')); else: ?>read more<?php endif;?></a>

       </div></div></div></div>
       <?php endwhile; endif; ?>
      </article>

     
      
     
      </div>
