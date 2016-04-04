<?php
/**
 * The template part for displaying results in search pages
 */
?>

<div class="single-Blog">
                          <div class="single-blog-left">
							<ul class="blog-comments-box">
							 <?php 
								$archive_year  = get_the_time('Y'); 
								$archive_month = get_the_time('m'); 
								$archive_day   = get_the_time('d'); 
								?>
							  <li><a href="<?php echo get_day_link('',$archive_month,''); ?>"><?php echo get_the_date('F'); ?></a><h2><a href="<?php echo get_day_link('','',$archive_day); ?>"><?php echo get_the_date('j'); ?></a></h2><a href="<?php echo get_day_link( $archive_year,'',''); ?>"><?php echo get_the_date('Y'); ?></a></li>
							  <li><span class="fa fa-eye"></span>1523</li>
							  <li><a href=" <?php comments_link(); ?> "><span class="fa fa-comments"></span><?php comments_number( '0', '1', '% ' ); ?></a></li>
							</ul>
						  </div>
						  <div class="single-blog-right">
						  <?php if(has_post_thumbnail()){?>
							<div class="blog-img">
							  <figure class="blog-figure">
							   <a href="<?php echo get_permalink(); ?>"><img src=" <?php the_post_thumbnail_url(); ?> " alt="img" style="width:100%; height:100%"></a>
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
                              <p><?php the_excerpt();?></p>
                              <!-- Read more btn -->
                             </div>
                          </div>
                        </div>