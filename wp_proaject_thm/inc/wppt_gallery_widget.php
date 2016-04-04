<?php
class WP_wppt_gallery_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_gallery_widget',
			'description' => 'Wppt-Image Gallery Section Widget',
		);
		parent::__construct( 'wppt_gallery_widget', 'Wppt-Image Gallery Section Widget', $widget_ops );
	}
		public function widget( $args, $instance ) {
		/*if($instance['wppt_team_member_img_open_new_window']){
			echo $instance['wppt_team_member_img_open_new_window'];
			
		}
		else{
		echo $instance['wppt_team_member_img_open_new_window'];
		}*/
		//echo $args['before_widget'];
		if(!empty($instance['wppt_gsllery_image_uri'])){
			$wppt_gsllery_image_uri=$instance['wppt_gsllery_image_uri'];
		
		}
		$wppt_gallery_img_name = apply_filters( 'widget_title', empty( $instance['wppt_gallery_img_name'] ) ? '' : $instance['wppt_gallery_img_name'], $instance, $this->id_base );
		?>
		<figure itemprop="associatedMedia" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a class="gallery-iteam" href="<?php echo $wppt_gsllery_image_uri;?>" itemprop="contentUrl" data-size="1024x1024">
                      <img src="<?php echo $wppt_gsllery_image_uri;?>" itemprop="thumbnail" alt="Image description" />
                       <span class="image-effect"></span>
                    </a>                    
                    <figcaption itemprop="caption description"><?php echo $wppt_gallery_img_name; ?></figcaption>         
        </figure>
		<?php
        //echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['wppt_gallery_img_name'] = strip_tags($new_instance['wppt_gallery_img_name']);
        $instance['wppt_gsllery_image_uri'] = strip_tags($new_instance['wppt_gsllery_image_uri']);
		

        
		return $instance;
	}

	
	public function form( $instance ) {
	?>
		<p><label for="<?php echo $this->get_field_id('wppt_gallery_img_name'); ?>"><?php _e('Image Caption'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('wppt_gallery_img_name'); ?>" name="<?php echo $this->get_field_name('wppt_gallery_img_name'); ?>" type="text" value="<?php if(!empty($instance['wppt_gallery_img_name'])){ echo $instance['wppt_gallery_img_name'];} ?>" /></p>
		<p>
            <label for="<?php echo $this->get_field_id('wppt_gsllery_image_uri'); ?>"><?php _e('Image'); ?></label><br/>

            <?php

            if ( !empty($instance['wppt_gsllery_image_uri']) ) :

                echo '<img class="wppt_gallery_img" src="' . $instance['wppt_gsllery_image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="'.__( 'Uploaded image').'" /><br />';

            endif;

            ?>

            <input type="text" class="widefat wppt_gallery_custom_media_url" name="<?php echo $this->get_field_name('wppt_gsllery_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_gsllery_image_uri'); ?>" value="<?php if( !empty($instance['wppt_gsllery_image_uri']) ): echo $instance['wppt_gsllery_image_uri']; endif; ?>" style="margin-top:5px;">
            <input type="button" class="button button-primary wppt_gallery_img_button" id="wppt_gallery_custom_media_button" name="<?php echo $this->get_field_name('wppt_gsllery_image_uri'); ?>" value="<?php _e('Upload Image'); ?>" style="margin-top:5px;">
        </p>
		
		<div style="display:none;" >
		<p><textarea style="display:none;" placeholder="Put Services like this ex- <ul><li>Service 1</li><li> Service 2</li><li> Service 3</li></ul>" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_ptbl_services1'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_services1'); ?>"><?php if(!empty($instance['wppt_ptbl_services1'])){ echo $instance['wppt_ptbl_services1'];}?></textarea></p>
		</div>
		<?php
	}
}
?>
