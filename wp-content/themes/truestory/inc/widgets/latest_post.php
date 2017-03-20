<?php
/**
 * Plugin Name: Latest Posts Widget
 */

add_action( 'widgets_init', 'truestory_latest_post_fire' );

function truestory_latest_post_fire() {
  register_widget( 'truestory_latest_post' );
}

   class truestory_latest_post extends WP_Widget {
          

          public function __construct(){
              parent::__construct('truestory_latest_post',$name=esc_html__('ThemeRoyal Latest Posts','truestory'));
          }



          public function widget($args,$instance){
            extract( $args );
            $title = apply_filters('widget_title', $instance['title'] );
            $categories = $instance['categories'];
            $number = $instance['number']+1;
            $query = array('showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'cat' => $categories);
    
             $loop = new WP_Query($query);
            if ($loop->have_posts()) :
    
    /* Before widget (defined by themes). */
            echo $before_widget;
               ?>

              <?php if ( $title ) : ?>
        
           <div class="truestory-widget-title">
         <?php echo balanceTags($before_title . $title . $after_title); ?>
         </div>
       <?php endif; ?>

        <section class="truestory-recent-articles">
         
          <?php  while ($loop->have_posts()) : $loop->the_post(); ?>
    <ul>
      
       <li>
      <?php  if(!has_post_format('audio') ): ?>
      <?php /* If The Post has a format of quote , do a custom style */ ?>
      <?php if(has_post_format('quote')): ?>
      <div class="latest-posts_quote" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'truestory_onquote_thumbnail', true); echo esc_url($thumb_url[0]); ?>);" <?php endif; ?>>

        <div class="truestory-full-posts-quote_soft-bg">
        <?php the_content(); ?>
      </div>
      </div><br>

  <?php elseif(has_post_format('aside')): ?>
<div class="post-aside"><?php echo truestory_string_limit_words(get_the_excerpt(),100); printf("..");?></div>
<?php elseif(has_post_format('link')): ?>
<div class="post-link"><a target="_blank" href="<?php echo get_the_content(); ?>"><?php the_title(); ?></a></div>
<?php /* if not a quote and not an audio , do this  */ ?>
<?php else: ?>
    
       <?php if(has_post_thumbnail()): ?>
       <?php if(!has_post_format('video') ): ?>
       <?php the_post_thumbnail(); ?>
       <?php endif; ?>
       <?php endif; ?>
       <?php if(has_post_format('video')): ?>
       <?php if(function_exists('video_thumbnail')): ?><img alt="video_thumbnail" src="<?php video_thumbnail(); ?>" /><?php endif; ?>
       <?php endif; ?>
        <?php if(!has_post_format('link') AND !has_post_format('link')): ?><div class="truestory-recent-articles_info">
        <div class="truestory-onem">
        <a class="truestory-recent-articles-info_title" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a><br>
        <span class="truestory-recent-articles-info_time"><?php the_time( get_option('date_format') ); ?></span>
      </div>
        
      </div><?php endif; ?>
      </li>
<?php /* endif of has post format quote */ ?>
<?php endif;?>
<?php /* endif of has post format audio */ ?>
<?php endif; ?>

     
      
    </ul>
    <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
      <?php endif; ?> 
  </section>
  <?php

    /* After widget (defined by themes). */
    echo $after_widget;
  
   
               
          }


          public function form ($instance){
            /* Set up some default widget settings. */
    $defaults = array( 'title' => esc_html__('Latest Posts', 'truestory'), 'number' => 5, 'categories' => '');
    $instance = wp_parse_args( (array) $instance, $defaults ); 

            ?>

            <p>
      <label for="<?php echo balanceTags($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Title:', 'truestory'); ?></label>
      <input  type="text" class="widefat" id="<?php echo balanceTags($this->get_field_id( 'title' )); ?>" name="<?php echo balanceTags($this->get_field_name( 'title' )); ?>" value="<?php echo balanceTags($instance['title']); ?>"  />
           </p>

           <!-- Category -->
    <p>
    <label for="<?php echo $this->get_field_id('categories'); ?>">Filter by Category:</label> 
    <select id="<?php echo $this->get_field_id('categories'); ?>" name="<?php echo $this->get_field_name('categories'); ?>" class="widefat categories" style="width:100%;">
      <option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>>All categories</option>
      <?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
      <?php foreach($categories as $category) { ?>
      <option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
      <?php } ?>
    </select>
    </p>
    
    <!-- Number of posts -->
    <p>
      <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html_e('Number of posts to show:', 'truestory'); ?></label>
      <input  type="text" class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $instance['number']; ?>" size="3" />
    </p>
            <?php
          }

          public function update($new_instance,$old_instance){
            $instance = $old_instance;

    /* Strip tags for title and name to remove HTML (important for text inputs). */
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['categories'] = $new_instance['categories'];
    $instance['number'] = strip_tags( $new_instance['number'] );

      return $instance;

          }


   }


?>