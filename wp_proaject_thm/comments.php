<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

			<div class="comments">

	<?php if ( have_comments() ) : ?>
		

		
		<?php $comment_nav =paginate_comments_links(
				array('type'=>'array','prev_text'=>'<span class="fa fa-angle-left"></span>',
										'next_text'=>'<span class="fa fa-angle-right"></span>',
										'echo' => false
										
					)
				); 
				$comment_nav_count=count($comment_nav);
				?>
				<div class="comments-area">
					<h3 class="comments-title">  <?php comments_number( 'no responses', 'one response', '% responses' ); ?></h3>
					<div class="comments">
					  <?php
						wp_list_comments( array(
							'callback' => 'custom_comments'
						 ));
						?>
					</div>
                </div>
			</div>
				<!-- start Comments navigation -->
                <nav>
                <ul class="comments-pagination">
				<?php
				for($i=0;$i<$comment_nav_count;$i++)
							{
								?>
								<li><?php echo $comment_nav[$i];?></li>
								<?php
								
							}
				?>
				</ul>
                </nav>
			
	<?php endif; // Check for have_comments(). ?>
	
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wp_proaject_thm' ); ?></p>
	<?php endif; ?>
	<!-- Comments Responds -->
	<?php
	$fields = apply_filters( 'comment_form_default_fields', array(

			  'author' =>
				'<p class="comment-form-author">
					<label for="author">Name <span class="required">*</span></label>
					<input type="text" name="author" value="" size="30" required="required">
				</p>',

			  'email' =>
				'<p class="comment-form-email">
					<label for="email">Email <span class="required">*</span></label>
					<input type="email" name="email" value="" aria-required="true" required="required">
				</p>',

			  'url' =>
				'<p class="comment-form-url">
					<label for="url">Website</label>
					<input type="url" name="url" value="">
				</p>',
			)
			);
		$comment_args = array( 'title_reply'=>'Leave us a Reply',

			'fields' => $fields,
			'comment_field' =>  '<p class="comment-form-comment">
				<label for="comment">Comment</label>
				<textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
				</p>',
			);

			comment_form($comment_args); 
	?>

