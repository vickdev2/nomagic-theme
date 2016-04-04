<?php
/*
Template Name: Blog Template

*/
get_header();
?>
    <section id="blogArchive">      
      
      <div class="row">
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
						
						<?php
						// The Query
						
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
						'posts_per_page' => 3,
						'paged'          => $paged
						);


						query_posts($args);
						if ( have_posts() ) :
						// The Loop
						while ( have_posts() ) : the_post();
						
						?>
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
							  </ul>
							</div>
                            <div class="blog-content">
                              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                              <p><?php the_excerpt();?></p>
                              <!-- Read more btn -->
                             </div>
                          </div>
                        </div>
						<?php
						
						endwhile;

						// Reset Query
						global $wp_query;

						$big = 999999999; // need an unlikely integer

						$pag_nav=paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages,
							'type'=>'array',
							'prev_text'=>'<span class="fa fa-angle-left"></span>',
							'next_text'=>'<span class="fa fa-angle-right"></span>'
							
						) );
						$pag_nav_count=count($pag_nav);
						wp_reset_query();
						
						
						?>
						
                        <!-- Start blog pagination  -->
                        <div class="blog-pagination">
						<?php ?>
                          <nav>
                            <ul class="pagination">
							<?php 
							for($i=0;$i<$pag_nav_count;$i++)
							{
								if($paged==$pag_nav[$i]){?>
								<li class="current_pag_nav"><?php echo $pag_nav[$i];?></li>
								<?php }
								else{
								?>
								<li><?php echo $pag_nav[$i];?></li>
								<?php
								}
							}
							?>
                              
                            </ul>
                          </nav>
                        </div>
						<?php // If no content, include the "No posts found" template.
						else :
							get_template_part( 'template-parts/content', 'none' );

						endif;
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
    </section>
<?php
get_footer();
?>