<?php
/**
 * Plugin Name: truestory Facebook Widget
 */

add_action( 'widgets_init', 'truestory_facebook_load_widget' );

function truestory_facebook_load_widget() {
	register_widget( 'truestory_facebook_widget' );
}

class truestory_facebook_widget extends WP_Widget {


	  public function __construct(){
              parent::__construct('truestory_facebook_widget',$name=esc_html__('ThemeRoyal Facebook Box','truestory'));
          }

	function widget( $args, $instance ) {
		extract( $args );

		$title = apply_filters('widget_title', $instance['title'] );
		$page_url = $instance['page_url'];
		$faces = $instance['faces'];
		$stream = $instance['stream'];
		$header = $instance['header'];
		
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		?>
		
		
			<div class="fb-page"
			data-href="<?php echo esc_url($page_url); ?>" 
			data-show-posts="<?php if($stream) { echo 'true'; } else { echo 'false'; } ?>"
		    data-small-header="false"
		    data-adapt-container-width="true"
		    data-hide-cover="false"
		     data-show-facepile="<?php if($faces) { echo 'true'; } else { echo 'false'; } ?>">
		    <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="<?php echo esc_url($page_url); ?>">Facebook</a></blockquote></div></div>
			
			
			
		<?php


		echo $after_widget;
	}


	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['page_url'] = strip_tags( $new_instance['page_url'] );
		$instance['faces'] = strip_tags( $new_instance['faces'] );
		$instance['stream'] = strip_tags( $new_instance['stream'] );
		$instance['header'] = strip_tags( $new_instance['header'] );

		return $instance;
	}


	function form( $instance ) {

	

		$defaults = array( 'title' => 'Find us on Facebook', 'width' => 260, 'height' => 290, 'header' => 'on', 'faces' => 'on', 'page_url' => '', 'stream' => false);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_html($instance['title']); ?>" style="width:95%;" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'page_url' ); ?>">Facebook Page URL:</label>
			<input id="<?php echo $this->get_field_id( 'page_url' ); ?>" name="<?php echo $this->get_field_name( 'page_url' ); ?>" value="<?php echo esc_url($instance['page_url']); ?>" style="width:95%;" /><br>
			<small>For Example : http://www.facebook.com/Envato</small>
		</p>

        <p>
			<label for="<?php echo $this->get_field_id( 'header' ); ?>">Show Header:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'header' ); ?>" name="<?php echo $this->get_field_name( 'header' ); ?>" <?php checked( (bool) $instance['header'], true ); ?> />
		</p>

		
		<p>
			<label for="<?php echo $this->get_field_id( 'faces' ); ?>">Show Faces:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'faces' ); ?>" name="<?php echo $this->get_field_name( 'faces' ); ?>" <?php checked( (bool) $instance['faces'], true ); ?> />
		</p>
		
	
		<p>
			<label for="<?php echo $this->get_field_id( 'stream' ); ?>">Show Stream:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'stream' ); ?>" name="<?php echo $this->get_field_name( 'stream' ); ?>" <?php checked( (bool) $instance['stream'], true ); ?> />
		</p>
		
		
		
	


	<?php
	}
}

?>