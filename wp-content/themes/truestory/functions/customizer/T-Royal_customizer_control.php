<?php 

add_action('customize_register','truestory_customizer_register' );

function truestory_customizer_register($wp_customize){
		class Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea style="width:100%; height:150px;" <?php $this->link(); ?>><?php echo esc_html($this->value()); ?></textarea>
			</label>
			<?php
		}
	}

    class Customize_Number_Control extends WP_Customize_Control {
        public $type = 'number';
     
        public function render_content() {
            ?>
            <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <input type="number" name="quantity" step="any" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>" style="width:70px;">
            </label>
            <?php
        }
    }
}
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control {
        /**
         * Render the control's content.
         *
         * @since 3.4.0
         */
        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => esc_html__( '&mdash; Select &mdash;', 'truestory' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );
 
            // Hackily add in the data link parameter.
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
 
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }

  
}

if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom layout control
 */
class Layout_Picker_Custom_Control extends WP_Customize_Control
{
      /**
       * Render the content on the theme customizer page
       */
      public function render_content()
       {
            $imageDirectory = '/functions/customizer/img/';
            $imageDirectoryInc = '/functions/customizer/img/';

            $finalImageDirectory = '';

            if(is_dir(get_stylesheet_directory().$imageDirectory))
            {
                $finalImageDirectory = get_stylesheet_directory_uri().$imageDirectory;
            }

            if(is_dir(get_stylesheet_directory().$imageDirectoryInc))
            {
                $finalImageDirectory = get_stylesheet_directory_uri().$imageDirectoryInc;
            }
            ?>
                <label>
                  <span class="customize-layout-control"><?php echo esc_html( $this->label ); ?></span><br><br>
                  <ul>
                    <li><input type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>[full_width]" value="1" />&nbsp;&nbsp;<img src="<?php echo $finalImageDirectory; ?>1col.png" alt="Full Width" /></li>
                    <li><input type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>[left_sidebar]" value="1" />&nbsp;&nbsp;<img src="<?php echo $finalImageDirectory; ?>2cl.png" alt="Left Sidebar" /></li>
                    <li><input type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>[right_sidebar]" value="1" />&nbsp;&nbsp;<img src="<?php echo $finalImageDirectory; ?>2cr.png" alt="Right Sidebar" /></li>
                  </ul>
                </label>
            <?php
       }
}


?>