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
	// wp_enqueue_script( 'abony-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'abony-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array());
	wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array('jquery'));
	wp_enqueue_script( 'scrollmagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array('jquery', 'tweenmax'));
	wp_enqueue_script( 'animation', get_template_directory_uri() . '/js/animation.gsap.min.js', array('jquery', 'tweenmax', 'scrollmagic'));

	wp_enqueue_script( 'abony', get_template_directory_uri() . '/js/script.js', array('jquery', 'tweenmax', 'scrollmagic', 'animation'));	
}
add_action( 'wp_enqueue_scripts', 'abony_scripts' );

function abony_styles() {
	wp_enqueue_style( 'abony-style', get_stylesheet_uri() );

	wp_enqueue_style( 'abony-main-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'abony-temp-style', get_template_directory_uri() . '/css/temp.css');
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


/* Custom Settings Page Settings Page */
class wph_custom_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
	}
	public function wph_create_settings() {
		$page_title = 'Настройки сайта';
		$menu_title = 'Настройки сайта';
		$capability = 'manage_options';
		$slug = 'wph_custom';
		$callback = array($this, 'wph_settings_content');
		$icon = 'dashicons-admin-settings';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
	}
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Настройки сайта</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'wph_custom' );
					do_settings_sections( 'wph_custom' );
					submit_button();
				?>
			</form>
		</div> <?php
	}
	public function wph_setup_sections() {
		add_settings_section( 'wph_custom_section', '', array(), 'wph_custom' );
	}
	public function wph_setup_fields() {
		$fields = array(
			array(
				'label' => 'Город 1',
				'id' => 'city1',
				'type' => 'text',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Телефон 1',
				'id' => 'phone1',
				'type' => 'tel',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Город 2',
				'id' => 'city2',
				'type' => 'text',
				'section' => 'wph_custom_section',
			),
			array(
				'label' => 'Телефон 2',
				'id' => 'phone2',
				'type' => 'tel',
				'section' => 'wph_custom_section',
			),
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'wph_custom', $field['section'], $field );
			register_setting( 'wph_custom', $field['id'] );
		}
	}
	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		switch ( $field['type'] ) {
			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$field['placeholder'],
					$value
				);
		}
		if( $desc = $field['desc'] ) {
			printf( '<p class="description">%s </p>', $desc );
		}
	}
}
new wph_custom_Settings_Page();
