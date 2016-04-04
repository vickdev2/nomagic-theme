<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
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
                        <!-- Start Single Blog -->

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="">', '</h1>' );
					the_archive_description( '<div class="">', '</div>' );
				?>
			</header>

			<?php
			// Start the Loop.
			
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
						'posts_per_page' => 3,
						'paged'          => $paged,
						);


						
			while ( have_posts($args) ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
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
<?php get_footer(); ?>
