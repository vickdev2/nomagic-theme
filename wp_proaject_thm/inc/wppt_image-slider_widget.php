<?php
class WP_wppt_img_slider_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_img_slider_widget',
			'description' => 'Wppt-Image slider Widget',
		);
		parent::__construct( 'wppt_img_slider_widget', 'Wppt-Image Slider Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		
		//echo $args['before_widget'];
		if(!empty($instance['wppt_sld_image_uri'])){
			$wppt_sld_image_uri=$instance['wppt_sld_image_uri'];
		}
		?>
		<div class="whychoose-singleslide">
		  <img src="<?php echo $wppt_sld_image_uri;?>" alt="img">
		</div>
		<?php
		//echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        //$instance['wppt_sld_class'] = strip_tags($new_instance['wppt_sld_class']);
		
        $instance['wppt_sld_image_uri'] = strip_tags($new_instance['wppt_sld_image_uri']);
		return $instance;
	}

	
	public function form( $instance ) {
		?>
		
		    <label for="<?php echo $this->get_field_id('wppt_sld_image_uri'); ?>"><?php _e('Slider Image'); ?></label><br/>

            <?php

            if ( !empty($instance['wppt_sld_image_uri']) ) :

                echo '<img class="wppt_imgsld_img" src="' . $instance['wppt_sld_image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image').'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat wppt_imgsld_custom_media_url" name="<?php echo $this->get_field_name('wppt_sld_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_sld_image_uri'); ?>" value="<?php if( !empty($instance['wppt_sld_image_uri']) ): echo $instance['wppt_sld_image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary wppt_imgsld_img_button" id="wppt_imgsld_custom_media_button" name="<?php echo $this->get_field_name('wppt_sld_image_uri'); ?>" value="<?php _e('Upload Image'); ?>" style="margin-top:5px;">
        </p>
		<div style="display:none;" >
		<p><textarea style="display:none;" placeholder="Put Services like this ex- <ul><li>Service 1</li><li> Service 2</li><li> Service 3</li></ul>" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_ptbl_services1'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_services1'); ?>"><?php if(!empty($instance['wppt_ptbl_services1'])){ echo $instance['wppt_ptbl_services1'];}?></textarea></p>
		</div>
		<?php
	}
}
