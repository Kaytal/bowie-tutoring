<?php
/**
 * Bowie Tutoring functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bowie_Tutoring
 */

if ( ! function_exists( 'bowie_tutoring_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bowie_tutoring_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bowie Tutoring, use a find and replace
	 * to change 'bowie_tutoring' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bowie_tutoring', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bowie_tutoring' ),
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

}
endif; // bowie_tutoring_setup
add_action( 'after_setup_theme', 'bowie_tutoring_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bowie_tutoring_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bowie_tutoring_content_width', 640 );
}
add_action( 'after_setup_theme', 'bowie_tutoring_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function bowie_tutoring_scripts() {
	wp_enqueue_style( 'bowie_tutoring-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bowie_tutoring-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-1.11.3.min.js', array(), '1.11.3', true );

	wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/js/instafeed.min.js', array(), '1.4.1', true );

	wp_enqueue_script( 'bootstrap js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '3.3.5', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bowie_tutoring_scripts' );

/**
 * Utilizing Navwalker class
 */
// Register Custom Navigation Walker
require_once( get_template_directory() . '/inc/wp-bootstrap-navwalker.php');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function remove_menus(){
  
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_submenu_page( 'themes.php', 'customizer.php' );
  remove_submenu_page( 'themes.php', 'widgets.php' );
  remove_submenu_page( 'themes.php', 'background.php' );
  
}
add_action( 'admin_menu', 'remove_menus', 999 );

function getTestimonials()
{
	$args = array(
		'numberposts'			=> -1,
		'post_per_page'		=> -1,
		'post_type'				=> 'testimonial',
		'post_status'			=> 'publish',
		);

	return get_posts($args);
}

function getTutors()
{

	$args = array(
		'numberposts'			=> -1,
		'post_per_page'		=> -1,
		'post_type'				=> 'tutor',
		'post_status'			=> 'publish'
		);

	return get_posts($args);
}

function tutorImage( $post_id )
{
	$args = array( 'post_id' => $post_id, 'output' => 'html', 'width' => '300', 'height' => '300', 'resize' => 'crop', 'class' => 'img-responsive img-center');
	return types_render_field( 'tutor-image', $args );
}
function tutorSchool( $post_id )
{
	$args = array( 'post_id' => $post_id, 'output' => 'raw' );
	return types_render_field( 'school', $args );
}
function tutorInfo( $post_id )
{
	$args = array( 'post_id' => $post_id, 'output' => 'raw' );
	return types_render_field( 'tutor-information', $args );
}
