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


/* Enable Featured Image */
add_theme_support( 'post-thumbnails' );

/* Register Nav Menu */
function register_my_menu() {
  register_nav_menu('main-navigation',__( 'Main Navigation' ));
}
add_action( 'init', 'register_my_menu' );


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
