<?php
/*
Template Name: Contact Template

*/
get_header();
?>
 <!--=========== BEGIN Google Map SECTION ================-->
    <section id="googleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="500" frameborder="0" style="border:0"></iframe>
    </section>
    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-6">
            <div class="contact-form">
              <div class="section-heading">
                <h2>Contact Us</h2>
                <div class="line"></div>
              </div>
              <?php echo do_shortcode ('[contact-form-7 id="105" title="Contact form"]'); ?>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="contact-address">
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
              <h3>Social Media</h3>
              <div class="social-share">               
               <ul>
                 <li><a href="<?php echo esc_url(get_theme_mod('wppt_footl2_fblnk_opt_stng')); ?>"><span class="fa fa-facebook"></span></a></li>
                 <li><a href="<?php echo esc_url(get_theme_mod('wppt_footl2_twlnk_opt_stng')); ?>"><span class="fa fa-twitter"></span></a></li>
                 
                 <li><a href="<?php echo esc_url(get_theme_mod('wppt_footl2_gplnk_opt_stng')); ?>"><span class="fa fa-google-plus"></span></a>
                 
               </ul>
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
get_footer();
?>