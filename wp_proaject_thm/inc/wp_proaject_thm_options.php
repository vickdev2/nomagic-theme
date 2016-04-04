<?php

add_action( 'customize_register' , 'wp_proaject_thm_options' );

function wp_proaject_thm_options( $wp_customize ) {
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('menus');
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_control('blogdescription');
	$wp_customize->remove_section( 'blogdescription');
	
	//Footer layer-2 Starts
	$wp_customize->add_section( 'wppt_footl2_cnt_opt_sec' , array(
	  'title' => 'Footer Layer-2 Options',
	 
	) );
	$wp_customize->add_setting( 'wppt_footl2_cnt_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl2_cnt_opt_ctrl',
    array(
        'label' => 'Copy right Content',
		'section'  => 'wppt_footl2_cnt_opt_sec',
		'settings' => 'wppt_footl2_cnt_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_footl2_fblnk_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl2_fblnk_opt_ctrl',
    array(
        'label' => 'Facebook Link',
		'section'  => 'wppt_footl2_cnt_opt_sec',
		'settings' => 'wppt_footl2_fblnk_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_footl2_twlnk_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl2_twlnk_opt_ctrl',
    array(
        'label' => 'Twitter Link',
		'section'  => 'wppt_footl2_cnt_opt_sec',
		'settings' => 'wppt_footl2_twlnk_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_footl2_gplnk_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl2_gplnk_opt_ctrl',
    array(
        'label' => 'Google+ Link',
		'section'  => 'wppt_footl2_cnt_opt_sec',
		'settings' => 'wppt_footl2_gplnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//Footer layer-2 Ends
	
	//Footer layer-3 Starts
	$wp_customize->add_section( 'wppt_footl3_cnt_opt_sec' , array(
	  'title' => 'Footer Layer-3 Options',
	 
	) );
	$wp_customize->add_setting( 'wppt_footl3_cnt_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl3_cnt_opt_ctrl',
    array(
        'label' => 'Title',
		'section'  => 'wppt_footl3_cnt_opt_sec',
		'settings' => 'wppt_footl3_cnt_opt_stng',
        'type' => 'text',
		
    )
	);
	//Footer layer-3 Ends
	
	//Footer layer-1 Starts
	$wp_customize->add_panel( 'wppt_footl1_opt_panel', array(
	  'title' => __( 'Footer Layer-1 Options' ),
	  'description' => ' Footer Layer-1 Options', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_footl1_abt_opt_sec' , array(
	  'title' => 'About Content',
	  'panel' => 'wppt_footl1_opt_panel',
	) );
	$wp_customize->add_setting( 'wppt_footl1_about_mttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_about_mttl_opt_ctrl',
    array(
        'label' => 'About Title',
		'section'  => 'wppt_footl1_abt_opt_sec',
		'settings' => 'wppt_footl1_about_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footl1_about_sttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_about_sttl_opt_ctrl',
    array(
        'label' => 'About Text',
		'section'  => 'wppt_footl1_abt_opt_sec',
		'settings' => 'wppt_footl1_about_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	
	$wp_customize->add_section( 'wppt_footl1_service_opt_sec' , array(
	  'title' => 'Services Content',
	  'panel' => 'wppt_footl1_opt_panel',
	) );
	$wp_customize->add_setting( 'wppt_footl1_svc_mttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_svc_mttl_opt_ctrl',
    array(
        'label' => 'Services Title',
		'section'  => 'wppt_footl1_service_opt_sec',
		'settings' => 'wppt_footl1_svc_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_section( 'wppt_footl1_tag_opt_sec' , array(
	  'title' => 'Tag Content',
	  'panel' => 'wppt_footl1_opt_panel',
	) );
	$wp_customize->add_setting( 'wppt_footl1_tag_mttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_tag_mttl_opt_ctrl',
    array(
        'label' => 'Tag Title',
		'section'  => 'wppt_footl1_tag_opt_sec',
		'settings' => 'wppt_footl1_tag_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_section( 'wppt_footl1_cnt_opt_sec' , array(
	  'title' => 'Contact Content',
	  'panel' => 'wppt_footl1_opt_panel',
	) );
	$wp_customize->add_setting( 'wppt_footl1_cnt_mttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_cnt_mttl_opt_ctrl',
    array(
        'label' => 'Contact Title',
		'section'  => 'wppt_footl1_cnt_opt_sec',
		'settings' => 'wppt_footl1_cnt_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footl1_cnt_sttl_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_cnt_sttl_opt_ctrl',
    array(
        'label' => 'Contact Text',
		'section'  => 'wppt_footl1_cnt_opt_sec',
		'settings' => 'wppt_footl1_cnt_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footl1_cnt_add_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_cnt_add_opt_ctrl',
    array(
        'label' => 'Address',
		'section'  => 'wppt_footl1_cnt_opt_sec',
		'settings' => 'wppt_footl1_cnt_add_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footl1_cnt_phn_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_phn_add_opt_ctrl',
    array(
        'label' => 'Phone',
		'section'  => 'wppt_footl1_cnt_opt_sec',
		'settings' => 'wppt_footl1_cnt_phn_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_footl1_cnt_mail_opt_stng',
	array(
		'default' =>'',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_footl1_mail_add_opt_ctrl',
    array(
        'label' => 'Mail',
		'section'  => 'wppt_footl1_cnt_opt_sec',
		'settings' => 'wppt_footl1_cnt_mail_opt_stng',
        'type' => 'text',
		
    )
	);
	//Footer layer-1 Ends
	
	//Banner Panel Starts
	$wp_customize->add_panel( 'wppt_banner_opt_panel', array(
	  'title' => __( 'Banner Options' ),
	  'description' => ' Theme Bannerl Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	//Banner Panel Ends
	
	// Latest News Starts
	$wp_customize->add_section( 'wppt_latest_post_opt_sec' , array(
	  'title' => 'Latest News Option',
	  
	) );
	$wp_customize->add_setting( 'wppt_latest_post_ttl_opt_stng',
	array(
		'default'=>'Latest News',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	
	$wp_customize->add_control(
    'wppt_latest_post_ttl_opt_ctrl',
    array(
        'label' => 'Latest News Title ',
		'section'  => 'wppt_latest_post_opt_sec',
		'settings' => 'wppt_latest_post_ttl_opt_stng',
        'type' => 'text',
		
    )
	);
	// Latest News Ends
	
	// Team panel starts
	$wp_customize->add_panel( 'wppt_your_team_opt_panel', array(
	  'title' => __( 'Your team Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_your_team_content_opt_sec' , array(
	  'title' => 'Your Team Content Option',
	  'panel' => 'wppt_your_team_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_your_team_mttl_opt_stng',
	array(
		'default' => 'Your Team Title',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_your_team_mttl_opt_ctrl',
    array(
        'label' => 'Your Team Title ',
		'section'  => 'wppt_your_team_content_opt_sec',
		'settings' => 'wppt_your_team_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	// Team panel Ends
	
	
	// Testimonial Panel Starts
	$wp_customize->add_panel( 'wppt_testimonial_opt_panel', array(
	  'title' => __( 'Testimonial Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'wppt_testimonial_content_opt_sec' , array(
	  'title' => 'Testimonial Content Option',
	  'panel' => 'wppt_testimonial_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_testimonial_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_testimonial_mttl_opt_ctrl',
    array(
        'label' => 'Testimonial Title ',
		'section'  => 'wppt_testimonial_content_opt_sec',
		'settings' => 'wppt_testimonial_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	// Testimonial Panel Ends
	
	
	//Services Panel Starts
	$wp_customize->add_panel( 'wppt_services_opt_panel', array(
	  'title' => __( 'Your Services Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_services_content_opt_sec' , array(
	  'title' => 'Your Services Content Option',
	  'panel' => 'wppt_services_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_services_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_services_mttl_opt_ctrl',
    array(
        'label' => 'Services Title ',
		'section'  => 'wppt_services_content_opt_sec',
		'settings' => 'wppt_services_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	
	//Counter Panel Starts 
	$wp_customize->add_panel( 'wppt_counter_opt_panel', array(
	  'title' => __( 'Counter Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'wppt_counter_bimage_opt_sec' , array(
	  'title' => 'Background Image',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$path= get_template_directory_uri();
	$path .='/images/counter-bg2.jpg';
	$wp_customize->add_setting( 'wppt_counter_bimage_opt_stng',
	array(
		'default' => "".$path."",
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'wppt_counter_bimage_opt_ctrl',
        array(
            'label' => 'backgroud image',
            'section' => 'wppt_counter_bimage_opt_sec',
            'settings' => 'wppt_counter_bimage_opt_stng'
        )
    )
	);
	$wp_customize->add_section( 'wppt_counter_cont1_opt_sec' , array(
	  'title' => 'Counter-1 Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_cont1_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count1_mttl_opt_ctrl',
    array(
        'label' => 'Count-1 Title ',
		'section'  => 'wppt_counter_cont1_opt_sec',
		'settings' => 'wppt_cont1_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_cont1_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_cont1_sttl_opt_ctrl',
    array(
        'label' => 'cont-1 Sub Title ',
		'section'  => 'wppt_counter_cont1_opt_sec',
		'settings' => 'wppt_cont1_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_count2_opt_sec' , array(
	  'title' => 'Counter-2 Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_count2_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count2_mttl_opt_ctrl',
    array(
        'label' => 'Count-1 Title ',
		'section'  => 'wppt_counter_count2_opt_sec',
		'settings' => 'wppt_count2_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_count2_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count2_sttl_opt_ctrl',
    array(
        'label' => 'Count-2 Sub Title ',
		'section'  => 'wppt_counter_count2_opt_sec',
		'settings' => 'wppt_count2_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_count3_opt_sec' , array(
	  'title' => 'Counter-3 Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_count3_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count3_mttl_opt_ctrl',
    array(
        'label' => 'Count-3 Title ',
		'section'  => 'wppt_counter_count3_opt_sec',
		'settings' => 'wppt_count3_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_count3_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count3_sttl_opt_ctrl',
    array(
        'label' => 'Count-3 Sub Title ',
		'section'  => 'wppt_counter_count3_opt_sec',
		'settings' => 'wppt_count3_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_section( 'wppt_counter_count4_opt_sec' , array(
	  'title' => 'Counter-4 Content',
	  'panel' => 'wppt_counter_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_count4_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count4_mttl_opt_ctrl',
    array(
        'label' => 'Count-4 Title ',
		'section'  => 'wppt_counter_count4_opt_sec',
		'settings' => 'wppt_count4_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_count4_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_count4_sttl_opt_ctrl',
    array(
        'label' => 'Count-4 Sub Title ',
		'section'  => 'wppt_counter_count4_opt_sec',
		'settings' => 'wppt_count4_sttl_opt_stng',
        'type' => 'text',
		
    )
	);
	//Counter Ends
	
	//About Panel Starts
	$wp_customize->add_panel( 'wppt_about_opt_panel', array(
	  'title' => __( 'About Us Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	$wp_customize->add_section( 'wppt_about_content_opt_sec' , array(
	  'title' => 'About Us Title',
	  'panel' => 'wppt_about_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_abiout_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_mttl_opt_ctrl',
    array(
        'label' => 'About Title ',
		'section'  => 'wppt_about_content_opt_sec',
		'settings' => 'wppt_abiout_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_section( 'wppt_about_rcnt_opt_sec' , array(
	  'title' => 'About Right Section',
	  'panel' => 'wppt_about_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_abiout_rcnt1mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcntmttl_opt_ctrl',
    array(
        'label' => 'Sec 1 Title ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt1mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt1txt_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt1txt_opt_ctrl',
    array(
        'label' => 'Sec 1 Text ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt1txt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt1lnk_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt1lnk_opt_ctrl',
    array(
        'label' => 'Sec 1 Link ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt1lnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_setting( 'wppt_abiout_rcnt2mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt2mttl_opt_ctrl',
    array(
        'label' => 'Sec 2 Title ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt2mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt2txt_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt2txt_opt_ctrl',
    array(
        'label' => 'Sec 2 Text ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt2txt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt2lnk_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt2lnk_opt_ctrl',
    array(
        'label' => 'Sec 2 Link ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt2lnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_setting( 'wppt_abiout_rcnt3mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt3mttl_opt_ctrl',
    array(
        'label' => 'Sec 3 Title ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt3mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt3txt_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt3txt_opt_ctrl',
    array(
        'label' => 'Sec 3 Text ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt3txt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_abiout_rcnt3lnk_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_about_rcnt3lnk_opt_ctrl',
    array(
        'label' => 'Sec 3 Link ',
		'section'  => 'wppt_about_rcnt_opt_sec',
		'settings' => 'wppt_abiout_rcnt3lnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//About Panel Ends
	
	//Features Panel Starts
	$wp_customize->add_panel( 'wppt_features_opt_panel', array(
	  'title' => __( 'Features Options' ),
	  'description' => ' Theme General Option', // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	$wp_customize->add_section( 'wppt_features_emr_care_opt_sec' , array(
	  'title' => 'Emergency Care Content',
	  'panel' => 'wppt_features_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_features_emr_care_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_emr_care_mttl_opt_ctrl',
    array(
        'label' => 'Title ',
		'section'  => 'wppt_features_emr_care_opt_sec',
		'settings' => 'wppt_features_emr_care_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_emr_care_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_emr_care_sttl_opt_ctrl',
    array(
        'label' => 'Text',
		'section'  => 'wppt_features_emr_care_opt_sec',
		'settings' => 'wppt_features_emr_care_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_emr_care_btxt_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_emr_care_btxt_opt_ctrl',
    array(
        'label' => 'Button Text',
		'section'  => 'wppt_features_emr_care_opt_sec',
		'settings' => 'wppt_features_emr_care_btxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_emr_care_blnk_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_emr_care_blnk_opt_ctrl',
    array(
        'label' => 'Button Link',
		'section'  => 'wppt_features_emr_care_opt_sec',
		'settings' => 'wppt_features_emr_care_blnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_section( 'wppt_features_shift_opt_sec' , array(
	  'title' => 'Opening Shift Content',
	  'panel' => 'wppt_features_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_features_shift_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift_mttl_opt_ctrl',
    array(
        'label' => 'Title ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_shift_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift_sttl_opt_ctrl',
    array(
        'label' => 'Text',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_features_shift1_days_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift1_days_opt_ctrl',
    array(
        'label' => 'Days ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift1_days_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_shift1_time_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift1_time_opt_ctrl',
    array(
        'label' => 'Time ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift1_time_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_features_shift2_days_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift2_days_opt_ctrl',
    array(
        'label' => 'Days ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift2_days_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_shift2_time_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift2_time_opt_ctrl',
    array(
        'label' => 'Time ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift2_time_opt_stng',
        'type' => 'text',
		
    )
	);
	
	$wp_customize->add_setting( 'wppt_features_shift3_days_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift3_days_opt_ctrl',
    array(
        'label' => 'Days ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift3_days_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_shift3_time_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_shift3_time_opt_ctrl',
    array(
        'label' => 'Time ',
		'section'  => 'wppt_features_shift_opt_sec',
		'settings' => 'wppt_features_shift3_time_opt_stng',
        'type' => 'text',
		
    )
	);
	//
	$wp_customize->add_section( 'wppt_features_appnmnt_opt_sec' , array(
	  'title' => 'Appointment Content',
	  'panel' => 'wppt_features_opt_panel',
	) );
	
	$wp_customize->add_setting( 'wppt_features_appnmnt_mttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_appnmnt_mttl_opt_ctrl',
    array(
        'label' => 'Title ',
		'section'  => 'wppt_features_appnmnt_opt_sec',
		'settings' => 'wppt_features_appnmnt_mttl_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_appnmnt_sttl_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_appnmnt_sttl_opt_ctrl',
    array(
        'label' => 'Text',
		'section'  => 'wppt_features_appnmnt_opt_sec',
		'settings' => 'wppt_features_appnmnt_sttl_opt_stng',
        'type' => 'textarea',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_appnmnt_btxt_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_appnmnt_btxt_opt_ctrl',
    array(
        'label' => 'Button Text',
		'section'  => 'wppt_features_appnmnt_opt_sec',
		'settings' => 'wppt_features_appnmnt_btxt_opt_stng',
        'type' => 'text',
		
    )
	);
	$wp_customize->add_setting( 'wppt_features_appnmnt_blnk_opt_stng',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => 'postMessage'
	)
	);
	$wp_customize->add_control(
    'wppt_features_appnmnt_blnk_opt_ctrl',
    array(
        'label' => 'Button Link',
		'section'  => 'wppt_features_appnmnt_opt_sec',
		'settings' => 'wppt_features_appnmnt_blnk_opt_stng',
        'type' => 'text',
		
    )
	);
	//Features Panel Ends
	
}
add_action( 'customize_preview_init', 'tmx_customizer_live_preview' );
function wppt_sidebar_registration() {

	wp_enqueue_script( 'sidebar_customizer_script', get_template_directory_uri() . '/js/wppt-sidebar.js');
	
	
}
add_action( 'customize_controls_enqueue_scripts', 'wppt_sidebar_registration' );