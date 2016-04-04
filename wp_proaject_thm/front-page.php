<?php 
get_header();
?>

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
		<?php 
	  
		if ( is_active_sidebar( 'wppt_banner_sec' ) ) : 
		dynamic_sidebar( 'wppt_banner_sec' );
		endif;
		
		?>
        
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-flask"></span>
              <h3><?php echo get_theme_mod('wppt_features_emr_care_mttl_opt_stng'); ?></h3>
              <p><?php echo get_theme_mod('wppt_features_emr_care_sttl_opt_stng'); ?></p>
              <div class="readmore_area">
                <a href="<?php echo esc_url(get_theme_mod('wppt_features_emr_care_blnk_opt_stng')); ?>" data-hover="<?php echo get_theme_mod('wppt_features_emr_care_btxt_opt_stng'); ?>"><span><?php echo get_theme_mod('wppt_features_emr_care_btxt_opt_stng'); ?></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3><?php echo get_theme_mod('wppt_features_shift_mttl_opt_stng'); ?></h3>
              <p><?php echo get_theme_mod('wppt_features_shift_sttl_opt_stng'); ?></p>
              <ul class="opening-table">
                <li>
                  <span><?php echo get_theme_mod('wppt_features_shift1_days_opt_stng'); ?></span>
                  <div class="value"><?php echo get_theme_mod('wppt_features_shift1_time_opt_stng'); ?></div>
                </li>
                <li>
                  <span><?php echo get_theme_mod('wppt_features_shift2_days_opt_stng'); ?></span>
                  <div class="value"><?php echo get_theme_mod('wppt_features_shift3_time_opt_stng'); ?></div>
                </li>
                <li>
                  <span><?php echo get_theme_mod('wppt_features_shift3_days_opt_stng'); ?></span>
                  <div class="value"><?php echo get_theme_mod('wppt_features_shift3_time_opt_stng'); ?></div>
                </li>
              </ul>              
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-hospital-o"></span>
              <h3><?php echo get_theme_mod('wppt_features_appnmnt_mttl_opt_stng'); ?></h3>
              <p><?php echo get_theme_mod('wppt_features_appnmnt_sttl_opt_stng'); ?></p>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="<?php echo get_theme_mod('wppt_features_appnmnt_btxt_opt_stng'); ?>"><span><?php echo get_theme_mod('wppt_features_appnmnt_btxt_opt_stng'); ?></span></a>    
              </div>
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                        <form class="appointment-form">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Email <span class="required">*</span>
                              </label>
                              <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Birth <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Your Phone <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Phone No">  
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Appointment Date <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy">
                            </div>
                            <div class="col-md-6 col-sm-6">
                              <label class="control-label">Select Department <span class="required">*</span>
                              </label>
                              <select class="wp-form-control wpcf7-select">
                                <option val="1">Dental</option>
                                <option val="2">cardiology</option>
                                <option val="3">neurology</option>
                                <option val="4">Drugstore</option>
                                <option val="5">x-ray</option>
                                <option val="6">birth</option>
                                <option val="7">general</option>
                                <option val="8">testing</option>
                                <option val="9">first-aid</option>
                                <option val="10">immunizations</option><option val="11">pulmonary</option>
                              </select> 
                            </div>
                          </div>         
                          <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
                          <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>  
                        </form>
                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->

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
      </div>
    </section>
    <!--=========== End Doctors SECTION ================-->

    <!--=========== BEGAIN Testimonial SECTION ================-->
    <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="testimonial-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_testimonial_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
              <div class="testimonial-area">
                <ul class="testimonial-nav">
					<?php if ( is_active_sidebar( 'wppt_testi_sec' ) ) : 
					dynamic_sidebar( 'wppt_testi_sec' );
					endif;
					?> 
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Testimonial SECTION ================-->

    <!--=========== BEGAIN Home Blog SECTION ================-->
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_latest_post_ttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
				  <?php
					// The Query
					query_posts( array( 'posts_per_page' => 3));

					// The Loop
					while ( have_posts() ) : the_post();
					
					?>
				<div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
						 <?php 
							$archive_year  = get_the_time('Y'); 
							$archive_month = get_the_time('m'); 
							$archive_day   = get_the_time('d'); 
							?>
                          <li><a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo get_the_date('F'); ?><h2 class="custom_date"><?php echo get_the_date('j'); ?></h2><?php echo get_the_date('Y'); ?></a></li>
						  <li><span class="fa fa-eye"></span><?php echo getPostViews(get_the_ID()); ?></li>
                          <li><a href=" <?php comments_link(); ?> "><span class="fa fa-comments"></span><?php comments_number( '0', '1', '% ' ); ?></a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
					  <?php if(has_post_thumbnail()){?>
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="<?php echo get_permalink(); ?>"><img src=" <?php the_post_thumbnail_url(); ?> " alt="img" style="width:250px; height:250px"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
						<?php }?>
                        <div class="blog-author">
                          <ul>
                            <li>By <?php the_author_posts_link();?></li>
                            <li><?php wp_proaject_thm_entry_taxonomies(); ?></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                          <p><?php the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
						
					<?php
					endwhile;

					// Reset Query
					wp_reset_query();
					?>
                   
                </div>
              </div>             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Home Blog SECTION ================-->

<?php get_footer(); ?>