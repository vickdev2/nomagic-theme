<?php

 
	require get_template_directory() . '/inc/template-tags.php';
	require get_template_directory() . '/inc/wp_proaject_thm_options.php';
	require get_template_directory() . '/inc/wp_proaject_thm_widgets.php';
	require get_template_directory() . '/inc/wp_proaject_thm_custom_post.php';


/* Theme Support*/
add_action( 'after_setup_theme', 'wp_proaject_thm_support' ); 
function wp_proaject_thm_support(){
	add_theme_support( 'post-thumbnails' ); 
	register_nav_menus( array(
		'wp_proaject_thm_primary_menu' => 'Primary Menu'
	) );
	register_nav_menus( array(
		'wp_proaject_thm_footer_menu' => 'Footer Menu'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'product1'
	) );
	 

}
add_action( 'admin_enqueue_scripts', 'wp_proaject_thm_admin_scripts' );
function wp_proaject_thm_admin_scripts(){
	//wp_enqueue_style( 'main-css', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_media();
	wp_enqueue_script( 'widget_images', get_template_directory_uri().'/js/wppt_widgets_images.js' ,array('jquery'),false,true );

}

add_action( 'wp_enqueue_scripts', 'wp_proaject_thm_style' );
function wp_proaject_thm_style(){
	
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	//wp_enqueue_style( 'font-awesome-min-css', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'default-theme-css', get_template_directory_uri().'/css/themes/default-theme.css' );
	
	wp_enqueue_style( 'slick-css', get_template_directory_uri().'/css/slick.css' );
	
	wp_enqueue_style( 'photowipe-css', get_template_directory_uri().'/css/photoswipe.css' );
	
	wp_enqueue_style( 'default-skin-css', get_template_directory_uri().'/css/default-skin.css' );
	
	wp_enqueue_style( 'wp_proaject_thm-style', get_stylesheet_uri() );
	
	
	
}

add_action( 'wp_enqueue_scripts', 'wp_proaject_thm_scripts' );
function wp_proaject_thm_scripts(){
	wp_deregister_script( 'jquery' ); 
	wp_register_script( 'jquery',get_stylesheet_directory_uri() .'/js/jquery.js',false,false, true );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap-min-js', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() .'/js/slick.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'modernizr-custom-js', get_stylesheet_directory_uri() .'/js/modernizr.custom.79639.js' , array('jquery'),false,true );
	wp_enqueue_script( 'waypoints-min-js', get_stylesheet_directory_uri() .'/js/waypoints.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'counter-min-js', get_stylesheet_directory_uri() .'/js/jquery.counterup.min.js', array('jquery'),false,true );
	wp_enqueue_script( 'snap-min-js', get_stylesheet_directory_uri() .'/js/snap.svg-min.js' , array('jquery'),false,true );
	wp_enqueue_script( 'hovers-js', get_stylesheet_directory_uri() .'/js/hovers.js' , array('jquery'),false,true );
	wp_enqueue_script( 'photoswipe-min-js', get_stylesheet_directory_uri() .'/js/photoswipe.min.js' , array('jquery'),false,true );
	wp_enqueue_script( 'photoswipe-ui-default-js', get_stylesheet_directory_uri() .'/js/photoswipe-ui-default.min.js' , array('jquery'),false,true );
	wp_enqueue_script( 'photoswipe-gallery-js', get_stylesheet_directory_uri() .'/js/photoswipe-gallery.js' , array('jquery'),false,true );
	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'),false,true );
	
}
/* 
menu li active class filter
*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
add_action( 'widgets_init', 'wp_proaject_thm_widgets_init' );
function wp_proaject_thm_widgets_init(){
	
	register_sidebar( array(
		'name'          => 'Wppt Banner Section',
		'id'            => 'wppt_banner_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Services Section',
		'id'            => 'wppt_services_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );			
	register_sidebar( array(
		'name'          => 'Wppt Team Member',
		'id'            => 'wppt_team_member',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Wppt Testimonial Section',
		'id'            => 'wppt_testi_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Image Slider Section',
		'id'            => 'wppt_img-sld_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Wppt Image Gallery Page Section',
		'id'            => 'wppt_img-gallery_sec',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
function custom_excerpt_length( $length ) {
	return 15;
}
add_action('widgets_init', 'unregister_default_widgets', 11);
function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages'); 
	 unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives'); 
	 unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta'); 
	 
     unregister_widget('WP_Widget_Text'); 
	 unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments'); 
	 unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     unregister_widget('WP_Nav_Menu_Widget'); 
	 
}
add_filter( 'excerpt_more', 'modify_read_more_link' );
function modify_read_more_link() {
return '<div class="readmore_area">
<a href="' . get_permalink() . '" data-hover="Read More"><span>Read More</span></a></div>';              
}
/* customizing comments list*/
function custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
            <li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
            <div class="back-link"><?php comment_author_link(); ?></div>
        <?php break;
        default : ?>
			<ul class="commentlist">
                                    <li>
                                      <div class="media">
                                        <div class="media-left"> 
										<img alt="img" src="<?php echo get_avatar_url( $comment ); ?>" class="media-object news-img">
                                            
                                        </div>
                                        <div class="media-body">
                                         <h4 class="author-name"><?php comment_author(); ?></h4>
										 <?php if ( $comment->comment_approved == '0' ) : ?>
										<h5><em>Your comment is awaiting moderation.</em></h5>
										<?php endif; ?>
                                         <span class="comments-date"> <?php comment_date(); ?>/ <?php comment_time( ); ?></span>
                                         <p><?php comment_text(); ?></p>
										 <?php 
										comment_reply_link( array_merge( $args, array( 
										'reply_text' => 'Reply',
										'after' => '', 
										'depth' => $depth,
										'max_depth' => $args['max_depth'] 
										) ) ); 
										?>
                                        
                                        </div>
                                      </div>
            </li>
			</ul>
            
        <?php // End the default styling of comment
        break;
    endswitch;
}

function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


	
// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
	
	?>
		
    <?php 
        // Build the breadcrums
        
        $pag_title;
		$li='<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        // Home page
        //echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        
        
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
			
			if(is_day()){
			
			//echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            $li.='<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			// Month link
            //echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
			$li.='<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            // Day display
            //echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
            $li.='<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
			
			$pag_title='<strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong>';
			}
			if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            //echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
			$li.='<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            // Month display
            //echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
            $li.='<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';   
			$pag_title='<strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong>';
			}
			if ( is_year() ) {
               
            // Display year archive
            //echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
            $li.='<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';   
			$pag_title='<strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong>';
			}
			if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
           // echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
			$li.='<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
			$pag_title='<strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong>';
			
			}
			//echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
			$li.='<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
            $pag_title= '<strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong>';
			
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
				
                //echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
				$li.='<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                
				//echo $pag_title;
            }
              
            $custom_tax_name = get_queried_object()->name;
			
            //echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
            $li.='<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';  
			$pag_title='<strong class="bread-current bread-archive">' . $custom_tax_name . '</strong>';
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                //echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                $li.='<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
				$li.=$cat_display;
                //echo $cat_display;
                //echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$li.='<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$pag_title='<strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong>';   
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                //echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
				$li.='<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
				//echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$li.='<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$pag_title='<strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong>';
              
            } else {
                  
                //echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$li.='<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
				$pag_title='<strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong>';
				
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            //echo '<li class="item-current item-cat active"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
			$li.='<li class="item-current item-cat active"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
			$pag_title='<strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
				// Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    
                }
                   
                // Display parent pages
                //echo $parents;
                $li.=  $parents; 
                // Current page
                //echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                $li.='<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
				$pag_title='<strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
				
            } else {
                   
                // Just display current page if not parents
                //echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
				$li.='<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                $pag_title='<strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong>';
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
			$li.='<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
			$pag_title='<strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong>';
            //echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
			//$pag_title;
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
			$li.='<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
			$pag_title='<strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong>';
            //echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            //echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
			$li.='<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
			$pag_title='<strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong>';
        } elseif ( is_404() ) {
               
            // 404 page
            //echo '<li>' . 'Error 404' . '</li>';
			$li.='<li>' . 'Error 404' . '</li>';
			$pag_title='Error 404';
        }
		
       
        
		?>
		<div class="blog-breadcrumbs-area">
		<div class="container">
		<div class="blog-breadcrumbs-left">
		<h2><?php //echo $pag_title; ?></h2>
		</div>
		<div class="blog-breadcrumbs-right">
		<ol class="breadcrumb">
		<li>You are here</li>
		<?php echo $li;?>
		</ol>
		</div>
		</div>
		</div>
           
    <?php }
       
}


function custom_taxonomy_flush_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
//add_action('init', 'custom_taxonomy_flush_rewrite');

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(!is_admin() && $query->is_main_query() && is_archive()) {
    $post_type = get_query_var('wppt_portfolio');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('wppt_portfolio','post');
    $query->set('post_type',$post_type);
	return $query;
    }
}
//post views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.'';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
 
// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}
