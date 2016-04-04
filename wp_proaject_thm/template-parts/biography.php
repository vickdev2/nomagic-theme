<?php
/**
 * The template part for displaying an Author biography
 *	Called from content-single.php 
 */
?>
<div class="post-author">
<h3>About Author</h3>
<div class="media">
<div class="media-left">
<a class="news-img" href="<?php echo get_author_posts_url(get_the_author_meta('id'));?>">
<?php echo get_avatar(get_the_author_meta('id')); ?>
</a>
</div>
<div class="media-body">
<?php the_author_posts_link(); ?>
<p><?php  echo get_the_author_meta('description'); ?></p>
<a href="<?php echo get_author_posts_url(get_the_author_meta('id'));?>" class="author-morepost">View more post</a>
</div>
</div>
</div>

