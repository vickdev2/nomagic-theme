<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>
			<section id="errorPage">
				  <div class="container">
					<div class="row">
					  <div class="col-lg-12 col-md-12">
						<div class="error-page-area">
						  <h1>404</h1>
						  <h3>Error</h3>
						  <h5>Ahhhhhhhhhhh! This page doesn't exist</h5>
						  <p>Not to worry. You can either go back to our homepage</p>
						  <div class="readmore_area">
							<a data-hover="Back To Home" href="<?php echo site_url();?>"><span>Back To Home</span></a>                
						  </div>
						  <?php get_search_form(); ?>
						</div>
					  </div>
					</div>
				  </div>
			</section>
	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
