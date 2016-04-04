
    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_footl1_about_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>           
              <p><?php echo get_theme_mod('wppt_footl1_about_sttl_opt_stng'); ?></p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_footl1_svc_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
              <?php if ( has_nav_menu( 'wp_proaject_thm_primary_menu' ) ) : 
					wp_nav_menu( array(
							'theme_location' => 'wp_proaject_thm_footer_menu',
							'menu_class'     => 'footer-service',
							'menu_id'     => 'footer-menu',
							'container'=>'',
						 ) );
				endif; 
				?>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_footl1_tag_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
			  
				<?php   
					$the_query = get_posts( 'fields=ids' );
					$wppt_post_count=count($the_query);
					$wppt_tag_ids=array();
				
					for($i=0;$i<$wppt_post_count;$i++){
						
						$tags=get_the_tags($the_query[$i]);
						for($j=0;$j<count($tags);$j++){
							if(!in_array($tags[$j]->term_id,$wppt_tag_ids))
							array_push($wppt_tag_ids,$tags[$j]->term_id);
						}
						
					}
					$all_tags=count($wppt_tag_ids);
					?>

                <ul class="tag-nav"><?php
					for($i=0;$i<$all_tags;$i++){
					$tag_data=get_tag($wppt_tag_ids[$i]);
						if(!empty($tag_data->name)){
						?>
						<li><a href="<?php echo get_tag_link($wppt_tag_ids[$i]); ?>"><?php echo $tag_data->name; ?></a></li>
						<?php
						}
					}
				?>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2><?php echo get_theme_mod('wppt_footl1_cnt_mttl_opt_stng'); ?></h2>
                <div class="line"></div>
              </div>
              <p><?php echo get_theme_mod('wppt_footl1_cnt_sttl_opt_stng'); ?></p>
              <address class="contact-info">
                <p><span class="fa fa-home"></span><?php echo get_theme_mod('wppt_footl1_cnt_add_opt_stng'); ?></p>
                <p><span class="fa fa-phone"></span><?php echo get_theme_mod('wppt_footl1_cnt_phn_opt_stng'); ?></p>
                <p><span class="fa fa-envelope"></span><?php echo get_theme_mod('wppt_footl1_cnt_mail_opt_stng'); ?></p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Middle -->
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p><?php echo get_theme_mod('wppt_footl2_cnt_opt_stng'); ?></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="<?php echo esc_url(get_theme_mod('wppt_footl2_fblnk_opt_stng')); ?>"><span class="fa fa-facebook"></span></a>
                <a href="<?php echo esc_url(get_theme_mod('wppt_footl2_twlnk_opt_stng')); ?>"><span class="fa fa-twitter"></span></a>
                <a href="<?php echo esc_url(get_theme_mod('wppt_footl2_gplnk_opt_stng')); ?>"><span class="fa fa-google-plus"></span></a>
                
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p><?php echo get_theme_mod('wppt_footl3_cnt_opt_stng'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
<?php wp_footer(); ?>     
  </body>
</html>