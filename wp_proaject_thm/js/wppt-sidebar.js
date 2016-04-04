jQuery(document).ready(function() {

wp.customize.bind('ready', function() {

//banner widget panel
wp.customize.section( 'sidebar-widgets-wppt_banner_sec' ).panel( 'wppt_banner_opt_panel' );
wp.customize.section( 'sidebar-widgets-wppt_banner_sec' ).priority( '7' );
//Team widget panel
wp.customize.section( 'sidebar-widgets-wppt_team_member' ).panel( 'wppt_your_team_opt_panel' );
wp.customize.section( 'sidebar-widgets-wppt_team_member' ).priority( '7' );

//Testimonial widget panel
wp.customize.section( 'sidebar-widgets-wppt_testi_sec' ).panel( 'wppt_testimonial_opt_panel' );
wp.customize.section( 'sidebar-widgets-wppt_testi_sec' ).priority( '7' );

//Service widget panel
wp.customize.section( 'sidebar-widgets-wppt_services_sec' ).panel( 'wppt_services_opt_panel' );
wp.customize.section( 'sidebar-widgets-wppt_services_sec' ).priority( '7' );

//About widget panel
wp.customize.section( 'sidebar-widgets-wppt_img-sld_sec' ).panel( 'wppt_about_opt_panel' );
wp.customize.section( 'sidebar-widgets-wppt_img-sld_sec' ).priority( '7' );



});
})

