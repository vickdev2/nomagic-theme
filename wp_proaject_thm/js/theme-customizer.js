

(function( $ ) {
		/**
         * Connects to the Theme Customizer's color picker, and changes the anchor
         * color whenever the user changes colors in the Theme Customizer.
         */ 
		 
	wp.customize( 'tmx_link_color', function( value ) {
		value.bind( function( to ) {
			alert(to);
			$( '.text-center' ).css( 'color', to );
		});
	});
	
	wp.customize( 'wppt_gmaplat_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			alert(newval);
			$('#google-map').data('data-latitude',newval);
			//$( '.footer-bottom .container .row .col-sm-6 > p' ).html( newval );
		} );
	} );
	wp.customize( 'wppt_gmaplong_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			alert(newval);
			$('#google-map').data('data-longitude',newval);
			//$( '.footer-bottom .container .row .col-sm-6 > p' ).html( newval );
		} );
	} );
	/* Latest News Options*/
	wp.customize( 'wppt_latest_post_ttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '.blog .container .row .heading > h2' ).html( newval );
		} );
	} );
	wp.customize( 'wppt_latest_post_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '.blog .container .row .heading > p' ).html( newval );
		} );
	} );
	/* About Us Options*/
	wp.customize( 'wppt_abiout_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '#about-us .about-info h2' ).html( newval );
		} );
	} );
	wp.customize( 'wppt_about_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '#about-us .about-info p' ).html( newval );
		} );
	} );
	/* About Us skill Options*/
	wp.customize( 'wppt_abiout_sk1mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '#about-us .about-info h2' ).html( newval );
		} );
	} );
	wp.customize( 'wppt_about_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			
			$( '#about-us .about-info p' ).html( newval );
		} );
	} );
	/* About Us Background image Options*/
	wp.customize( 'wppt_about_bimage_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$('#about-us').css('background-image', 'url(' + newval + ')');
		} );
	} );
	/* Counter Background image Options*/
	wp.customize( 'wppt_counter_bimage_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$('#features').css('background-image', 'url(' + newval + ')');
		} );
	} );
	/* Counter Content Options*/
	wp.customize( 'wppt_client_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.clnthd' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_client_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.clntpr' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_web_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.webhd' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_web_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.webpr' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_adawd_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.awrdhd' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_award_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.awrdpr' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_support_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.sprthd' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_support_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.sprtpr' ).html( newval );
			
		} );
	} );
	
	/* Our Services Content Options*/
	wp.customize( 'wppt_services_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#services .container .heading .row .text-center > h2' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_services_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#services .container .heading .row .text-center > p' ).html( newval );
			
		} );
	} );
	/* Portfolio Content Options*/
	wp.customize( 'wppt_portfolio_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#portfolio .container  .row .heading > h2' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_portfolio_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#portfolio .container  .row .heading > p' ).html( newval );
			
		} );
	} );
	/* Testimonial Content Options*/
	wp.customize( 'wppt_testimonial_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#twitter .tstmn .container .row .tstmnl .twitter-icon > h1' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_testimonial_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#twitter .tstmn .container .row .tstmnl .twitter-icon > p' ).html( newval );
			
		} );
	} );
	/* Testimonial Background image Options*/
	wp.customize( 'wppt_testimonial_bimage_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$('#twitter').css('background-image', 'url(' + newval + ')');
		} );
	} );
	/* Pricing table Content Options*/
	wp.customize( 'wppt_price_table_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#pricing .container .row .heading > h2' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_price_table_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#pricing .container .row .heading > p' ).html( newval );
			
		} );
	} );
	/* Our Team Content Options*/
	wp.customize( 'wppt_your_team_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#team .container .row .heading > h2' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_your_team_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#team .container .row .heading > p' ).html( newval );
			
		} );
	} );
	/* Contact Background image Options*/
	wp.customize( 'wppt_contact_us_bimage_opt_stng', function( value ) {
		value.bind( function( newval ) {
		
			$('#contact-us').css('background-image', 'url(' + newval + ')');
		} );
	} );
	/* Contact Content Options*/
	wp.customize( 'wppt_contact_us_mttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#contact-us .container .row .heading > h2' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_contact_us_sttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '#contact-us .container .row .heading > p' ).html( newval );
			
		} );
	} );
	
	wp.customize( 'wppt_contact_us_rtxt_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.contact-info > p' ).html( newval );
			
		} );
	} );
	/* Contact info Content Options*/
	wp.customize( 'wppt_contact_us_addttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-add .cnt-add-tl' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_contact_us_addtxt_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-add .cnt-add-cn' ).html( newval );
			
		} );
	} );
	
	wp.customize( 'wppt_contact_us_phonettl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-phn .cnt-phn-tl' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_contact_us_phonetxt_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-phn .cnt-phn-cn' ).html( newval );
			
		} );
	} );
	
	wp.customize( 'wppt_contact_us_emailttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-ml .cnt-ml-tl' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_contact_us_emailtxt_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-ml .cnt-ml-cn' ).html( newval );
			
		} );
	} );
	
	wp.customize( 'wppt_contact_us_webttl_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-wb .cnt-wb-tl' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_contact_us_webtxt_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.cnt-wb .cnt-wb-cn' ).html( newval );
			
		} );
	} );
	/* Contact Form Content Options*/
	
	wp.customize( 'wppt_contact_us_emailbtn_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$( '.fmbtn' ).html( newval );
			
		} );
	} );
	/* Site Logo image Options*/
	wp.customize( 'wppt_site_logo_img_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$('.stlgimg').attr('src', newval);
			
		} );
	} );
	/* General Options*/
	wp.customize( 'wppt_footer_copy_rt_content_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
		
			$( '.ftltcn' ).html( newval );
			
		} );
	} );
	wp.customize( 'wppt_footer_copylt_content_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
		
			$( '.ftrtcn' ).html( newval );
			
		} );
	} );
	/* Site Footer Logo image Options*/
	wp.customize( 'wppt_footer_logo_img_opt_stng', function( value ) {
		
		value.bind( function( newval ) {
			$('.ftlgimg').attr('src', newval);
			
		} );
	} );
	
}( jQuery ));


/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	// Update the site title in real time...
	wp.customize( 'wppt_footer_copy_rt_content_opt_stng', function( value ) {
		value.bind( function( newval ) {
			$( '.footer-bottom .container .row .col-sm-6 > p' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//Update site link color in real time...
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );
	
	
} )( jQuery );
