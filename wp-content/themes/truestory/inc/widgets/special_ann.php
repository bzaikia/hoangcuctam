<?php
/*
Plugin Name: Special Announcement
*/

add_action( 'widgets_init', 'truestory_special_ann_widget_fire' );

function truestory_special_ann_widget_fire() {
  register_widget( 'truestory_special_ann' );
}

   class truestory_special_ann extends WP_Widget {
          
          public function __construct(){
              parent::__construct('truestory_special_ann',$name=esc_html__('ThemeRoyal Special Announcement','truestory'));
          }

          public function widget($args,$instance){

                extract( $args );

    /* Our variables from the widget settings. */
    $title = apply_filters('widget_title', $instance['title'] );
    $image = $instance['image'];
    $description = $instance['description'];
    
    
    /* Before widget (defined by themes). */
    echo $before_widget; ?>
               <div class="truestory-special_ann-widget">
                <?php   if ( $title ) : ?>
               <?php  echo $before_title . $title . $after_title;  ?>
               <?php endif; ?>
               <?php if($image): ?>
               <div class="truestory-that-pic">
               <img src="<?php echo esc_url($image); ?>" /><br>
               </div>
             <?php endif; ?>
               <?php if($description): ?>
              <div class="truestory-special_ann-desc"> <p><?php echo wp_kses_post($description); ?></p></div>
             <?php endif; ?>
              
               </div>
               <br>
               <?php
          }
 public function update($new_instance,$old_instance){

            $instance = $old_instance;

    /* Strip tags for title and name to remove HTML (important for text inputs). */
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['image'] = strip_tags( $new_instance['image'] );
    $instance['description'] = $new_instance['description'];

    return $instance;


          }

          public function form ($instance){
            $defaults = array( 'title' => 'Special Announcement', 'title' => '', 'image' => '', 'description' => '', );
    $instance = wp_parse_args( (array) $instance, $defaults ); 
            ?>
            <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Whats Special ?</label>
      <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_html($instance['title']); ?>" style="width:96%;" />
    </p>
    
    <!-- image url -->
    <p>
      <small>Add Image To The Special Announcement</small><br>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>">Image Url</label> 
      <input id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>" style="width:96%;" /><br />
    </p>

 
    <!-- description -->
    <p>
      <label for="<?php echo $this->get_field_id( 'description' ); ?>">Special Announcement Text</label><br><br>
      <textarea id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" style="width:95%;" rows="6"><?php echo esc_textarea($instance['description']); ?></textarea>
    </p>
            <?php
          }

         


   }


?>