<?php
/**
 * Ocean Reef functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oceanreef 
 */ 

if ( ! function_exists( 'oceanreef_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oceanreef_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Skinny Minnie, use a find and replace
	 * to change 'oceanreef' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'oceanreef', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails (Featured Images) on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'oceanreef-hero', 1080, 376, true);
	add_image_size( 'oceanreef-index-img', 800, 400, true);

	// This theme uses two wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header-nav' => esc_html__( 'Main Navigation', 'oceanreef' ),
		'utility-nav' => esc_html__( 'Utility Navigation', 'oceanreef' ),
	) );
//Add phone number to end of utility nav	
	add_filter( 'wp_nav_menu_items', 'add_phone_to_nav', 10, 2 );
	function add_phone_to_nav( $items, $args ) {
		if( $args->theme_location == 'utility-nav' )
	    $items .= '<span><a href="tel:+61893073444">(08) 9307 3444</a></span>';
	    return $items;
	}
	
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
	add_theme_support( 'custom-background', apply_filters( 'oceanreef_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Add theme support for custom logo
	add_theme_support('custom-logo', array(
		'width' => 90,
		'height' => 90,
		'flex-width' => true,
	));

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'oceanreef_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oceanreef_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oceanreef_content_width', 640 );
}
add_action( 'after_setup_theme', 'oceanreef_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oceanreef_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'oceanreef' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'oceanreef' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'oceanreef' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add widgets here.', 'oceanreef' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'oceanreef_widgets_init' );

/**
 * Enqueue scripts and styles.
 */  
function oceanreef_scripts() {
	
	//Add Google Fonts
	wp_enqueue_style( 'oceanreef-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Schoolbell');
	
	wp_enqueue_style( 'oceanreef-style', get_stylesheet_uri() );

	wp_enqueue_script( 'oceanreef-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	
	wp_localize_script( 'oceanreef-navigation', 'oceanreefScreenReaderText', array(
		'expand' => __( 'Expand child menu', 'oceanreef' ),
		'collapse' => __( 'Collapse child menu', 'oceanreef' ),	
	)); 
	
		
	/** Register and load font awesome CSS files using a CDN. */
	wp_enqueue_style( 'oceanreef-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );

	wp_enqueue_script( 'oceanreef-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    
    // load jquery
    wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'oceanreef-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20161201', true );   
	
	wp_enqueue_script( 'quicksand',  get_template_directory_uri() . '/js/quicksand.js', array('jquery'), '20161201', true );
	
	wp_enqueue_script( 'filter-gallery',  get_template_directory_uri() . '/js/filter-gallery.js', array('jquery'), '20161201', true );
		
	
}
add_action( 'wp_enqueue_scripts', 'oceanreef_scripts' );


	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_script( 'custom-accordion', get_template_directory_uri() . '/js/accordion.js', array('jquery') );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/* Add CPT for Filterable Gallery */

add_action('init', 'create_filterable_gallery');
function create_filterable_gallery() 
{
  $labels = array(
    'name' => __('Photo Gallery', 'oceanreef'),
    'singular_name' => __('Photo', 'oceanreef'),
    'add_new' => __('Add New', 'oceanreef'),
    'add_new_item' => __('Add New Photo Gallery Item', 'oceanreef'),
    'edit_item' => __('Edit Item','oceanreef'),
    'new_item' => __('New Item','oceanreef'),
    'view_item' => __('View Item','oceanreef'),
    'search_items' => __('Search Items','oceanreef'),
    'not_found' =>  __('No items found','oceanreef'),
    'not_found_in_trash' => __('No items found in Trash','oceanreef'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('photo-gallery',$args);
} 


/* Add catagories (taxonomy) for filter */

register_taxonomy( 'photo-gallery-categories', 
	array( 	'photo-gallery' ), 
	array( 	'hierarchical' => true,
			'labels' => array('name'=>'Years','add_new_item'=>"Add New Year"), 
			'singular_label' => __( 'Year', 'oceanreef' ), 
			'rewrite' => array( 'slug' => 'years', // This controls the base slug that will display before each term 
			 'with_front' => false)
		 ) 
);

