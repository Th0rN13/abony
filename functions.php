<?php
/**
 * Abony functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abony
 */

if ( ! function_exists( 'abony_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function abony_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Abony, use a find and replace
		 * to change 'abony' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'abony', get_template_directory() . '/languages' );

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
			'main' => esc_html__( 'Main menu', 'abony' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'abony_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'abony_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abony_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'abony_content_width', 640 );
}
add_action( 'after_setup_theme', 'abony_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abony_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'abony' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'abony' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'abony_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function abony_scripts() {
	//wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '', true);
	wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '', true);
	wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array('tweenmax'), '', true);
	wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/animation.gsap.min.js', array('tweenmax', 'scrollmagic'), '', true);

	wp_enqueue_script( 'abony', get_template_directory_uri() . '/js/script.js', array('tweenmax', 'scrollmagic', 'animation'), '', true);	
}
add_action( 'wp_enqueue_scripts', 'abony_scripts' );

function abony_styles() {
	wp_enqueue_style( 'abony-style', get_stylesheet_uri() );

	wp_enqueue_style( 'abony-main-style', get_template_directory_uri() . '/css/style.css');
	//wp_enqueue_style( 'abony-temp-style', get_template_directory_uri() . '/css/temp.css');
}
add_action( 'wp_enqueue_scripts', 'abony_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once ('theme-options.php');

remove_filter('the_excerpt', 'wpautop');

/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'testimonial-photo', 65, 65, false ); 
	add_image_size( 'works-thumb', 320, 170, false );
	add_image_size( 'cert-thumb', 200, 280, false ); 	
}

//fix to allow upload xlsx
function cancel_real_mime_check( $data, $file, $filename, $mimes ) {	
	$wp_filetype = wp_check_filetype( $filename, $mimes ); 
	$ext = $wp_filetype['ext'];
	$type = $wp_filetype['type'];
	$proper_filename = $data['proper_filename']; 
	return compact( 'ext', 'type', 'proper_filename' );
}
add_filter('wp_check_filetype_and_ext', 'cancel_real_mime_check',10,4);

//mime icons
//icons from https://www.iconfinder.com/Sergt
//https://www.iconfinder.com/iconsets/file-extension-3
function change_mime_icon($icon, $mime, $post_id){
	if ( $mime === 'application/pdf' ) {		
		return get_template_directory_uri().'/img/icons/pdf.png';
	} else if ( $mime === 'application/msword' )  {
		return get_template_directory_uri().'/img/icons/doc.png';
	} else if ( $mime === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' )  {
		return get_template_directory_uri().'/img/icons/docx.png';
	} else if ( $mime === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' )  {
		return get_template_directory_uri().'/img/icons/xlsx.png';
	} else if ($mime === 'application/vnd.ms-excel' ) {
		return get_template_directory_uri().'/img/icons/xls.png';
	} else {
		return $icon;
	}
}
add_filter('wp_mime_type_icon', 'change_mime_icon', 10, 3);