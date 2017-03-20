<?php
/*
Plugin Name: Latest Posts Widget
*/
add_action( 'widgets_init', 'truestory_about_widget_fire' );

function truestory_about_widget_fire() {
  register_widget( 'truestory_about_author' );
}

   class truestory_about_author extends WP_Widget {
          
          public function __construct(){
              parent::__construct('truestory_about_author',$name=esc_html__('ThemeRoyal About Author','truestory'));
          }

          public function widget($args,$instance){

                extract( $args );

    /* Our variables from the widget settings. */
    $title = apply_filters('widget_title', $instance['title'] );
    $image = $instance['image'];
    $round = $instance['round'];
    $description = $instance['description'];
    $readmore = $instance['readmore'];
    $readmorelink = $instance['readmorelink'];

    
    /* Before widget (defined by themes). */
    echo $before_widget; ?>
               <div class="truestory-about-author-widget">
                <?php   if ( $title ) : ?>
               <?php  echo $before_title . $title . $after_title;  ?>
               <?php endif; ?>
               <?php if($image): ?>
               <div class="truestory-that-pic">
               <img alt="author's picture" src="<?php echo esc_url($image); ?>" <?php if($round == true) : ?>class="truestory-about-round"<?php endif; ?> /><br>
               </div>
             <?php endif; ?>
               <?php if($description): ?>
              <div class="about_author_desc"> <p><?php echo wp_kses_post($description); ?></p></div>
             <?php endif; ?>

             <?php if($readmore): ?><div class="about_author_desc"> <p ><a style="text-decoration:none; color:#cea525;" href="<?php echo esc_url($readmorelink); ?>"><?php echo esc_attr($readmore); ?></a></p></div><?php endif; ?>
              
               </div>
             </div>
              
               <?php
          }

          public function update($new_instance,$old_instance){

            $instance = $old_instance;

    /* Strip tags for title and name to remove HTML (important for text inputs). */
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['image'] = strip_tags( $new_instance['image'] );
    $instance['round'] = $new_instance['round'];
    $instance['description'] = $new_instance['description'];
    $instance['readmore'] = strip_tags( $new_instance['readmore'] );
    $instance['readmorelink'] = strip_tags( $new_instance['readmorelink'] );

    return $instance;


          }


          public function form ($instance){

    $defaults = array( 'title' => 'About Me', 'image' => '', 'description' => '');
    $instance = wp_parse_args( (array) $instance, $defaults );
            ?>
            <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php if(isset($instance['title'])){ echo esc_attr($instance['title']); } ?>" style="width:96%;" />
    </p>
    
    <!-- image url -->
    <p>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>">Image URL:</label>
      <input id="<?php echo $this->get_field_id( 'image' ); ?>" alt="Author's Image" name="<?php echo $this->get_field_name( 'image' ); ?>" 
       value="<?php if(isset($instance['image'])){  echo esc_url($instance['image']); } ?>" style="width:96%;" /><br />
    </p>
    
    
    <!-- description -->
    <p>
      <label for="<?php echo $this->get_field_id( 'description' ); ?>">About me text:</label>
      <textarea id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" style="width:95%;" rows="6">
      <?php if(isset($instance['description'])): echo $instance['description']; endif; ?>
      </textarea>
    </p>

       <p>
      <label for="<?php echo $this->get_field_id( 'readmore' ); ?>">Read More : </label>
      <input id="<?php echo $this->get_field_id( 'readmore' ); ?>" name="<?php echo $this->get_field_name( 'readmore' ); ?>" value="<?php if(isset($instance['readmore'])){ echo esc_attr($instance['readmore']); } ?>" style="width:96%;" />
    </p>

     <p>
      <label for="<?php echo $this->get_field_id( 'readmorelink' ); ?>">About Me Page Link</label>
      <input id="<?php echo $this->get_field_id( 'readmorelink' ); ?>" alt="Author's Image" name="<?php echo $this->get_field_name( 'readmorelink' ); ?>" 
       value="<?php if(isset($instance['readmorelink'])){  echo esc_url($instance['readmorelink']); } ?>" style="width:96%;" /><br />
    </p>


            <?php
          }



   }


?>