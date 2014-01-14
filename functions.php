<?php
/*
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */





/* Register Nav Menu */
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
  register_nav_menu('main-navigation',__( 'Main Navigation' ));
}



/************ CUSTOM POST TYPES **************/
add_action( 'init', 'create_post_type' );

function create_post_type() {
	register_post_type( 'ljf_seasonal_images',
		array(
			'labels' => array(
				'name' => __( 'Seasonal Images' ),
				'singular_name' => __( 'Seasonal Image' )
			),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'taxonomies' => array('category'),
		'hierarchical' => false,
		'rewrite' => array('slug' => 'seasonal-images'),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			'custom-fields',
			'revisions',
			'thumbnail',
			'page-attributes',)
			)
	);
}


/************ BLOG CUSTOMIZATION **************/
add_theme_support( 'automatic-feed-links' );

/* Customizing WP Excerpt */
function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');
 
    //Delete all shortcode tags from the content. 
    $text = strip_shortcodes( $text );
 
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
     
    $allowed_tags = '<p>,<a>,<em>,<strong>,<img>,<iframe>'; /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
    $text = strip_tags($text, $allowed_tags);
     
    $excerpt_word_count = 55; /*** MODIFY THIS. change the excerpt word count to any integer you like.***/
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
     
    $excerpt_end = '...'; /*** MODIFY THIS. change the excerpt endind to something else.***/
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
     
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

add_theme_support( 'post-thumbnails' ); 

/* Register Sidebars */
if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => __( 'Tags' ),
	'id' => 'sidebar-tags',
	'description' => __( 'Widgets in this area will be shown on the left-hand column of the blog.' ),
	'before_title' => '<h5>',
	'after_title' => '</h5>',
	'before_widget' => '<div class="aside-content">',
	'after_widget' => '</div>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => __( 'Archive' ),
	'id' => 'sidebar-archive',
	'description' => __( 'Widgets in this area will be shown on the left-hand column of the blog.' ),
	'before_title' => '<h5>',
	'after_title' => '</h5>',
	'before_widget' => '<div class="aside-content">',
	'after_widget' => '</div>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(
	'name' => __( 'RSS' ),
	'id' => 'rss',
	'description' => __( 'Widgets in this area will be shown on the left-hand column of the blog.' ),
	'before_title' => '',
	'after_title' => '',
	'before_widget' => '',
	'after_widget' => '',

));


// Add Custom image sizes
/** Add new image sizes */
// ( 'name', width, height, crop) 
add_image_size( 'blog_1-2_horizontal', 354, 265, true );
add_image_size( 'blog_1-2_vertical', 354, 532, true );
add_image_size( 'blog_1-3_horizontal', 231, 171, true );
add_image_size( 'blog_1-3_vertical', 231, 347, true );

//** Add image sizes to Media Selection */
add_filter('image_size_names_choose', 'me_display_image_size_names_muploader', 11, 1);
function me_display_image_size_names_muploader( $sizes ) {
  
	$new_sizes = array();
	
	$added_sizes = get_intermediate_image_sizes();
	
	// $added_sizes is an indexed array, therefore need to convert it
	// to associative array, using $value for $key and $value
	foreach( $added_sizes as $key => $value) {
		$new_sizes[$value] = $value;
	}
	
	// This preserves the labels in $sizes, and merges the two arrays
	$new_sizes = array_merge( $new_sizes, $sizes );
	
	return $new_sizes;
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'your-custom-size' => __('Your Custom Size Name'),
    ) );
}
