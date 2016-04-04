<?php
class WP_wppt_services_widget extends WP_Widget {
		
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'wp_wppt_services_widget',
			'description' => 'Wppt-Services Section Widget',
		);
		parent::__construct( 'wppt_services_widget', 'Wppt-Services Section Widget', $widget_ops );
	}
	public function widget( $args, $instance ) {
		
		//echo $args['before_widget'];
		if(!empty($instance['wppt_services_image_uri'])){
			$wppt_services_image_uri=$instance['wppt_services_image_uri'];
		}
		
		$wppt_services_title = apply_filters( 'widget_title', empty( $instance['wppt_services_title'] ) ? '' : $instance['wppt_services_title'], $instance, $this->id_base );
		$wppt_services_link = apply_filters( 'widget_title', empty( $instance['wppt_services_link'] ) ? '' : $instance['wppt_services_link'], $instance, $this->id_base );
		
		$wppt_services_text = ! empty( $instance['wppt_services_text'] ) ? $instance['wppt_services_text'] : '';
		$wppt_services_text = apply_filters( 'widget_text', $wppt_services_text, $instance, $this );
		?>
		
		<div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="<?php echo $wppt_services_image_uri;?> service-icon-effect"></span>  
                      </div>                      
                      <h3><a href="<?php echo esc_url($wppt_services_link); ?>"><?php echo $wppt_services_title;?></a></h3>
                      <p><?php echo $wppt_services_text;?></p>
                    </div>
        </div>
		<?php
		//echo $before_widget;
		//echo $args['after_widget'];	
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

        $instance['wppt_services_title'] = strip_tags($new_instance['wppt_services_title']);
		$instance['wppt_services_link'] = strip_tags($new_instance['wppt_services_link']);
		
		$instance['wppt_services_text'] = stripslashes(wp_filter_post_kses($new_instance['wppt_services_text']));
        $instance['wppt_services_image_uri'] = strip_tags($new_instance['wppt_services_image_uri']);
		return $instance;
	}

	
	public function form( $instance ) {
		
		?>
		<p><label for="<?php echo $this->get_field_id('wppt_services_title'); ?>"><?php _e('Title'); ?></label>
		<input placeholder="" class="widefat" id="<?php echo $this->get_field_id('wppt_services_title'); ?>" name="<?php echo $this->get_field_name('wppt_services_title'); ?>" type="text" value="<?php if(!empty($instance['wppt_services_title'])){ echo $instance['wppt_services_title'];} ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_services_text'); ?>"><?php _e('Services Text'); ?></label>
		<textarea placeholder="" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_services_text'); ?>" name="<?php echo $this->get_field_name('wppt_services_text'); ?>"><?php if(!empty($instance['wppt_services_text'])){ echo $instance['wppt_services_text'];} ?></textarea></p>
		
		<p><label for="<?php echo $this->get_field_id('wppt_services_link'); ?>"><?php _e('Link'); ?></label>
		<input placeholder="" class="widefat" id="<?php echo $this->get_field_id('wppt_services_link'); ?>" name="<?php echo $this->get_field_name('wppt_services_link'); ?>" type="text" value="<?php if(!empty($instance['wppt_services_link'])){ echo $instance['wppt_services_link'];} ?>" /></p>
		<span style='cursor: pointer;'><i class="fa fa-flask flaskcls"></i></span>&nbsp;&nbsp;
		<span style='cursor: pointer;'><i class="fa fa-umbrella umbrellacls"></i></i></span>&nbsp;&nbsp;
		<span style='cursor: pointer;'><i class="fa fa-cloud cloudcls"></i></span>&nbsp;&nbsp;
		<span style='cursor: pointer;'><i class="fa fa-coffee coffeecls"></i></span>&nbsp;&nbsp;
		<span style='cursor: pointer;'><i class="fa fa-bitbucket bitbucketcls"></i></span>&nbsp;&nbsp;
		<span style='cursor: pointer;'><i class="fa fa-gift giftcls"></i></span>&nbsp;&nbsp;
		<p>
            <label for="<?php echo $this->get_field_id('wppt_services_image_uri'); ?>"><?php _e('Select Icon Image'); ?></label><br/>

            <input placeholder="click icon" type="text" class="widefat wppt_services_icon_img" name="<?php echo $this->get_field_name('wppt_services_image_uri'); ?>" id="<?php echo $this->get_field_id('wppt_services_image_uri'); ?>" value="<?php if( !empty($instance['wppt_services_image_uri']) ): echo $instance['wppt_services_image_uri']; endif; ?>" style="margin-top:5px;">
            
        </p>
		<div style="display:none;" >
		<p><textarea style="display:none;" placeholder="Put Services like this ex- <ul><li>Service 1</li><li> Service 2</li><li> Service 3</li></ul>" class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('wppt_ptbl_services1'); ?>" name="<?php echo $this->get_field_name('wppt_ptbl_services1'); ?>"><?php if(!empty($instance['wppt_ptbl_services1'])){ echo $instance['wppt_ptbl_services1'];}?></textarea></p>
		</div>
		<?php
	}
}
