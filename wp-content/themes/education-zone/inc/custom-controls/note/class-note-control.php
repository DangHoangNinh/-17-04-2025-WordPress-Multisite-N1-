<?php
/**
 * Education Zone Customizer Note Control.
 * 
 * @package Education_Zone
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( ! class_exists( 'Education_Zone_Note_Control' ) ){

	class Education_Zone_Note_Control extends WP_Customize_Control {
		
		public function render_content(){ ?>
    	    <span class="customize-control-title">
    			<?php echo wp_kses_post( $this->label ); ?>
    		</span>
    
    		<?php if( $this->description ){ ?>
    			<span class="description customize-control-description">
    			<?php echo wp_kses_post( $this->description ); ?>
    			</span>
    		<?php }
        }
	}
}