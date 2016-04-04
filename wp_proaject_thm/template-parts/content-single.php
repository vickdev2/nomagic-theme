<?php
/**
 * The template part for displaying single posts
 *
 */
?>


    
        <div class="col-lg-12 col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <!-- Start Blog Archive Area -->
                <div class="blogArchive-area">
                  <div class="row">
                    <!-- Start Blog Content -->
                    <div class="col-md-12 col-sm-12">  
                      <div class="blog-content">
                        <!-- Start Single Blog -->
                        <div class="single-Blog">
                          <div class="single-blog-left">
							<ul class="blog-comments-box">
							 <?php 
								$archive_year  = get_the_time('Y'); 
								$archive_month = get_the_time('m'); 
								$archive_day   = get_the_time('d'); 
								?>
							  <li><a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo get_the_date('F'); ?><h2 class="custom_date"><?php echo get_the_date('j'); ?></h2><?php echo get_the_date('Y'); ?></a></li>
							  <li><span class="fa fa-eye"></span><?php setPostViews(get_the_ID()); 
							  echo getPostViews(get_the_ID());
							  ?></li>
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
                            <div class="blog-content blog-details">
                                <h2><?php the_title();?></h2>                           
                              <p><?php the_content(); ?></p> 
                              
                              <!-- Start Social Share-->
                              <div class="social-share">
                               <h3>Share is Awesome</h3>
                               <ul>
                                 <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                 <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                 <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                               </ul>
                             </div>
							 <?php 
							 
							
							
							 ?>
                             <!-- Start Post Navigation -->
							 
                             <div class="post-navigation">
                               <div class="postnav-left">
                                 <?php previous_post_link( '%link ', '<span class="fa fa-angle-left"></span> %title'); ?>
                                 <div><h4 class="navg-title"><?php //echo get_previous_post(); ?></h4></div>
                               </div>
                               <div class="postnav-right">
                                  <?php next_post_link('%link', '<span class="fa fa-angle-right"></span> %title'); ?>
                                 
                               </div>
                             </div>
							  <!-- Start Post Author -->
							  <?php 
								// If author bio not empty load author biography file
								if ( '' !== get_the_author_meta( 'description' ) ) {
									get_template_part( 'template-parts/biography' );
								} ?>
                              
                              <!-- Start Similar News -->
                              <div class="similar-post">
                                
                                 <div class="row">
								 <?php
									$orig_post = $post;
									global $post;
									$tags = wp_get_post_tags($post->ID);

									if ($tags) { ?>
									<h2>Similar News  </h2>
									<?php $tag_ids = array();
									foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
										$args=array(
											'tag__in' => $tag_ids,
											'post__not_in' => array($post->ID),
											'posts_per_page'=>4, // Number of related posts to display.
											'caller_get_posts'=>1
										);

									$my_query = new wp_query( $args );

									while( $my_query->have_posts() ) {
										$my_query->the_post();
									?>
                                    <div class="col-md-6 col-sm-6">
                                      <div class="media">
										<?php if(has_post_thumbnail()){?>
                                          <div class="media-left">
                                            <a class="news-img" href="<?php echo get_permalink(); ?>">
                                              <img class="media-object" src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                            </a>
                                          </div>
										<?php }?>
                                          <div class="media-body">
                                           <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
										   
                                           <span class="feed-date"><?php echo get_the_date();?></span>
                                          </div>
                                      </div>
                                    </div>
									
									<?php }
									}
									$post = $orig_post;
									wp_reset_query();
									?>
                                  </div>
                                </div>
                              </div>
                              <!-- Start Comments  -->
                              <div class="comments-area">
                                
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
								
								edit_post_link( ); 
								?>
                                                            
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        