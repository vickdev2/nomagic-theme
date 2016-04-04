<?php
/**
 * The template for displaying the header
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php wp_title(''); ?></title>
	
	<!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo get_template_directory_uri ();?>/images/favicon.ico"/>

    
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
	
	<div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h1><img class="img-responsive" src="<?php echo get_theme_mod('wppt_site_logo_img_opt_stng'); ?>" alt="logo" width="90px"></h1>
          </a>                    
        </div>
		
      </div>
    </div><!--/#main-nav-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    
    <!-- BEGAIN PRELOADER -->
    
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><i class="fa fa-heartbeat"></i>WpF <span>Medinova</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
			<?php if ( has_nav_menu( 'wp_proaject_thm_primary_menu' ) ) : 
					wp_nav_menu( array(
							'theme_location' => 'wp_proaject_thm_primary_menu',
							'menu_class'     => 'nav navbar-nav navbar-right main-nav',
							'menu_id'     => 'top-menu',
							'container'=>'',
						 ) );
				endif; 
			?>
              
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================-->   
	
	<?php custom_breadcrumbs(); ?>
	