<?php
/**
 * The template part for displaying content
 */
?>


	<header class="">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class=""><?php _e( 'Featured', 'wp_proaject_thm' ); ?></span>
		<?php endif; ?>

	
	</header>

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
							   <a href="<?php echo get_permalink(); ?>"><img src=" <?php the_post_thumbnail_url(); ?> " alt="img" style="width:100%; height:100%"></a>
								<span class="image-effect"></span>
							  </figure>
							</div>
							<?php }?>
							<div class="blog-author">
							  <ul>
								<li>By <?php the_author_posts_link();?></li>
								<li><?php wp_proaject_thm_entry_taxonomies(); ?></li>
								<?php
								if('wppt_portfolio'===get_post_type ( get_the_ID ())){
								?><li>Categories<?php
									$term_list = wp_get_post_terms($post->ID, 'wppt_portfolio-category', array("fields" => "all"));
									$cats=get_the_category (get_the_ID ());
									$port_cat_ids=array();
									foreach($term_list as $term){
										
										if(!empty($term->term_id))
										{
											
											array_push($port_cat_ids,$term->term_id);
										}
									}
									
									$port_cat_ids_len=count($port_cat_ids);
									for($i=0;$i<$port_cat_ids_len;$i++){
									
										$cat_data=get_category($port_cat_ids[$i]);
										
										?><a href="<?php echo get_category_link($port_cat_ids[$i] );?>"> <?php echo $cat_data->name; ?></a><?php
										
									
									}
									?>
									</li>
								<?php 
								}
								?>
							  </ul>
							</div>
                            <div class="blog-content">
                              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                              <p><?php the_excerpt();?></p>
                              <!-- Read more btn -->
                             </div>
                          </div>
                        </div>