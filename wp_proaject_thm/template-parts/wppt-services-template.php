<?php
/*
Template Name: Services Template

*/
get_header();
?>

    <!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_services_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <?php 
						if ( is_active_sidebar( 'wppt_services_sec' ) ) : 
						dynamic_sidebar( 'wppt_services_sec' );
						endif;
					?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->

    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_abiout_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
					<?php 
						if ( is_active_sidebar( 'wppt_img-sld_sec' ) ) : 
						dynamic_sidebar( 'wppt_img-sld_sec' );
						endif;
					?>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="<?php echo esc_url(get_theme_mod('wppt_abiout_rcnt1lnk_opt_stng')); ?>" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo get_theme_mod('wppt_abiout_rcnt1mttl_opt_stng'); ?></h4>
                      <p><?php echo get_theme_mod('wppt_abiout_rcnt1txt_opt_stng'); ?></p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="<?php echo esc_url(get_theme_mod('wppt_abiout_rcnt2lnk_opt_stng')); ?>" class="media-icon">
                        <span class="fa fa-user-md"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo get_theme_mod('wppt_abiout_rcnt2mttl_opt_stng'); ?></h4>
                      <p><?php echo get_theme_mod('wppt_abiout_rcnt2txt_opt_stng'); ?></p>  
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="<?php echo esc_url(get_theme_mod('wppt_abiout_rcnt3lnk_opt_stng')); ?>" class="media-icon">
                        <span class="fa fa-ambulance"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo get_theme_mod('wppt_abiout_rcnt3mttl_opt_stng'); ?></h4>
                      <p><?php echo get_theme_mod('wppt_abiout_rcnt3txt_opt_stng'); ?></p>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <section id="counterSection" style="background-image:url(<?php echo get_theme_mod('wppt_counter_bimage_opt_stng'); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo get_theme_mod('wppt_cont1_mttl_opt_stng'); ?>
                  </div>
                  <div class="counter-label"><?php echo get_theme_mod('wppt_cont1_sttl_opt_stng'); ?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo get_theme_mod('wppt_count2_mttl_opt_stng'); ?>
                  </div>
                  <div class="counter-label"><?php echo get_theme_mod('wppt_count2_sttl_opt_stng'); ?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo get_theme_mod('wppt_count3_mttl_opt_stng'); ?>
                  </div>
                  <div class="counter-label"><?php echo get_theme_mod('wppt_count3_sttl_opt_stng'); ?></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    <?php echo get_theme_mod('wppt_count4_mttl_opt_stng'); ?>
                  </div>
                  <div class="counter-label"><?php echo get_theme_mod('wppt_count4_sttl_opt_stng'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Counter SECTION ================-->
<?php 
get_footer();
?>