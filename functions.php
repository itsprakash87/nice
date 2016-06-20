<?php
/**
 * The function file
 *
 *
 * @package WordPress
 * @subpackage Nice
 */
?>

<?php

include get_template_directory()."/inc/customizer.php";
if (!function_exists('nice_setup')) {
	function nice_setup() {

		global $content_width;
		if (!isset($content_width)) {
			$content_width = 750;
		}

		// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
		add_theme_support('title-tag');

		// Loads texdomain. https://codex.wordpress.org/Function_Reference/load_theme_textdomain
		load_theme_textdomain('nice', get_template_directory() . '/languages');

		// Add automatic feed links support. https://codex.wordpress.org/Automatic_Feed_Links
		add_theme_support('automatic-feed-links');

		// Add post thumbnails support. https://codex.wordpress.org/Post_Thumbnails
		add_theme_support('post-thumbnails');

		// Add custom background support. https://codex.wordpress.org/Custom_Backgrounds
		add_theme_support('custom-background', array(
			// Default color
			'default-color' => 'FFF',
		));

		add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );


		add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
		) );

		// Add custom header support. https://codex.wordpress.org/Custom_Headers
		add_theme_support('custom-header', array(
			// Flex height
			'flex-height' => true,
			// Header image
			'default-image' => get_template_directory_uri() . '/img/bg-1.jpg',
			// Header text
			'header-text' => false,
		));

		// This theme uses wp_nav_menu(). https://codex.wordpress.org/Function_Reference/register_nav_menu
		register_nav_menus( array(
			'primary' => 'Primary Menu',
		));
	}

	add_action( 'after_setup_theme', 'nice_setup' );
}


function nice_widgets_init() {
		register_sidebar (array(
			'name' => 'Sidebar',
			'id' => "sidebar-widget-area",
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>' )
		);
		
	}
add_action('widgets_init', 'nice_widgets_init');


function nice_scripts()
{
    
    //Register the script and styles:
    wp_enqueue_script( 'jqry', get_template_directory_uri().'/js/jquery.js');
    wp_enqueue_script( 'scrollup', get_template_directory_uri().'/js/jquery.scrollUp.min.js');
    wp_enqueue_script( 'nav', get_template_directory_uri().'/js/jquery.singlePageNav.min.js');
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js');

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 
 	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
 	wp_enqueue_style( 'genericons', get_template_directory_uri().'/css/genericons/genericons.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
 
    
}
add_action( 'wp_enqueue_scripts', 'nice_scripts' );


?>