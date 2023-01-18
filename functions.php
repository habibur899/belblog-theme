<?php
/**
 * belblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package belblog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function belblog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on belblog, use a find and replace
		* to change 'belblog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'belblog', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'main-menu'   => esc_html__( 'Primary Menu', 'belblog' ),
			'mobile-menu' => esc_html__( 'Mobile Menu', 'belblog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'belblog_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	// Remove block widget
	remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'belblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function belblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'belblog_content_width', 640 );
}

add_action( 'after_setup_theme', 'belblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function belblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main Sidebar', 'belblog' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'belblog' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title sidebar-title">',
			'after_title'   => '</div>',
		)
	);
}

add_action( 'widgets_init', 'belblog_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function belblog_scripts() {
	wp_enqueue_style( 'belblog-roboto-font', '//fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,400i,500,500i,700,700i,900,900i' );
	wp_enqueue_style( 'belblog-lora-font', '//fonts.googleapis.com/css?family=Lora:400,400i,700,700i' );
	wp_enqueue_style( 'belblog-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'belblog-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'belblog-owl-css', get_template_directory_uri() . '/css/owl.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'belblog-core-style-css', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'belblog-responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'belblog-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'belblog-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'belblog-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'belblog-wow-js', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'belblog-script-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'belblog_scripts' );


require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/tgm/tgm-active.php';

