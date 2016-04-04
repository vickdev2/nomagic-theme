<?php
/*
Template Name: About Template

*/
get_header();
?>
 <!--=========== BEGAIN Doctors SECTION ================-->
    <section id="meetDoctors">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="meetDoctors-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_your_team_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
              <div class="doctors-area">
                <ul class="doctors-nav">
                    <?php if ( is_active_sidebar( 'wppt_team_member' ) ) : 
					dynamic_sidebar( 'wppt_team_member' );
					endif; ?>
				</ul>
                </div>  
              </div>
            </div>
          </div>
        </div>
      
    </section>
    <!--=========== End Doctors SECTION ================-->

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