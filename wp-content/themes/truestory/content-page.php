<article class="truestory-page-article">
 
       <?php truestory_remove_header_lack_error(); ?>

               <div class="truestory-page-header">
                <h2><?php the_title(); ?></h2>
               </div>

              

                <?php if(has_post_thumbnail()): ?>
                 <?php $truestory_tn_list_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                 <div class="truestory-tr_page_thumbnail" style="background-image:url('<?php echo esc_url($truestory_tn_list_url); ?>'); background-size:cover; background-position:center center;"></div>
                <?php endif; ?>

          <div class="page_content_frame">

               <div class="truestory-tr_page_content">

                <?php the_content(); ?>
                
               
               </div>
               <div class="truestory-tr_page_footer">
         <a class=" fa fa-home truestory-tr_page_content_bth" href="/wordpress">&nbsp;Back To Home Page</a>
               <div class="truestory-tr_page_share">
                <?php if(!get_theme_mod('page_show_share')==false) : ?>
    <div class="meta-share">

      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
      <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
      <?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
      <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
      <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a>
    </div>
    <?php endif; ?>
               </div>

             </div>
           </div>




</article>

  
  <?php comments_template(''); ?>
