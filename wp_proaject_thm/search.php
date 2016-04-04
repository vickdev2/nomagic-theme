<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>

<section id="blogArchive">      
    <div class="row">
		<?php if ( have_posts() ) : ?>

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


						

						// The Loop
						while ( have_posts($args) ) : the_post();
						
						/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						// End the loop.
						?>
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
                      </div>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</div>
    </section>


<?php get_footer(); ?>
