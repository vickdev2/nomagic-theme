<?php
/**
 * The template for displaying all single posts and attachments
 
 */

get_header(); ?>
<section id="blogArchive">      
    <div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="">Published in</span><span class="">%title</span>', 'Parent post link', 'wp_proaject_thm' ),
				) );
			}

			// End of the loop.
		
		endwhile;
		?>

	</div>
    </section>

<?php get_footer(); ?>
