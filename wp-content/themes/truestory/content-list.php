<article>
<?php if(!has_post_format('video') AND !has_post_format('audio') AND !has_post_format('quote') AND !has_post_format('aside') AND !has_post_format('link')): ?>
<?php 
$truestory_tn_list_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<?php if(has_post_thumbnail()) :?>
  <div class="truestory-list-posts_thumbnail" style="display: inline-block;height:290px; background-image:url('<?php echo esc_url($truestory_tn_list_url); ?>'); background-size:cover; background-position:center center;">
    
  </div>

<?php endif; ?>
  <div class="truestory-list-posts_major_infos" <?php if(!has_post_thumbnail()): ?> style="width:95% margin-top:30px;"  <?php endif; ?>>
   <div class="truestory-list-posts_info">
         
         <h4 class="truestory-list-posts_title" ><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>


<div class="truestory-list-posts_content">
  <p><?php  echo truestory_string_limit_words(get_the_excerpt(),41); printf(".."); ?></p>
  </div><br>
  <a href="<?php the_permalink(); ?>" class="truestory-list-posts_footer">

  <?php the_author(); ?>&nbsp;&nbsp;&nbsp;<?php comments_number(esc_html__('No Comments','truestory'), __('One Comment','truestory'), '% ' . esc_html__('Comments','truestory') ); ?>&nbsp;&nbsp;
  
    

  </a>
  </div>
<?php endif; ?>

<?php if(has_post_format('video')): ?>
  <div class='truestory-list-posts_video_thumbnail'>
    <?php echo truestory_get_embedded_media( array('video','iframe') ); ?>
  </div>
<?php endif; ?>
<?php if(has_post_format('audio')): ?>
  <div class='truestory-list-posts_audio_thumbnail'>
    <?php echo truestory_get_embedded_media( array('audio','iframe') ); ?>
  </div>
<?php endif; ?>
<?php if(has_post_format('audio') or has_post_format('video')): ?>


   <div class="truestory-list-posts_video_info">
         <span  class="truestory-list-posts_category" ><?php truestory_category('  &nbsp;|&nbsp; '); ?></span><br><br>
         <h4 class="truestory-list-posts_title" ><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <div class="truestory-list-posts_content">
  <p><?php  echo truestory_string_limit_words(get_the_excerpt(),50); printf(".."); ?></p>
  </div><br>
  <a class="truestory-list-posts_readmore" href=""> Read More </a>
<?php elseif(has_post_format('aside')): ?>
   <div class="post-aside"><?php echo truestory_string_limit_words(get_the_excerpt(),100); printf("..");?></div>
<?php elseif(has_post_format('link')): ?>
 <div class="post-link"><a target="_blank" href="<?php echo get_the_content(); ?>"><?php the_title(); ?></a></div>
<?php endif;?>
<?php 
if(has_post_format('quote')): ?>
     
     <div class="truestory-full-posts_quote" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'truestory_onquote_thumbnail', true); echo balanceTags($thumb_url[0]); ?>);" <?php endif; ?>>

        <div class="truestory-full-posts-quote_soft-bg">
        <a href="<?php the_permalink();?>"> <?php the_content(); ?></a>
      </div>
      </div><br>
  <?php endif; ?>
 

</article><br><br>