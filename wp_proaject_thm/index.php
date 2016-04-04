<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header(); ?>

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

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class=""><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
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
					<?php

		// If no content, include the "No posts found" template.
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