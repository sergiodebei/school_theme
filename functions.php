<?php
/**
 * De Evenaar functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package De Evenaar
 */

if ( ! function_exists( 'deevenaar_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function deevenaar_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on L\'Oréal Brands, use a find and replace
	 * to change 'deevenaar' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'deevenaar', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'deevenaar' ),
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
	add_theme_support( 'custom-background', apply_filters( 'deevenaar_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'deevenaar_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deevenaar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deevenaar' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deevenaar' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deevenaar_widgets_init' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'deevenaar' )
) );

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="hidden" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  

// function add_menuclass($ulclass) {
//   return preg_replace('/<a /', '<a class="dropdown"', $ulclass, 2);
// }
// add_filter('wp_nav_menu','add_menuclass');

/**
 * Enqueue scripts and styles.
 */
function deevenaar_scripts() {
	wp_enqueue_style( 'deevenaar-style', get_stylesheet_uri() );

	// name-of-the-script, url-of-the-script, array-of-script-the-script-depends-on, script-version-number, if-the-script-needs-to-be-placed-before-the-end-of-the-body

	wp_enqueue_script( 'deevenaar-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js', array(), '', true );
	wp_enqueue_script( 'deevenaar-main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'deevenaar_scripts' );


function get_breadcrumb() {
    echo '<li><a href="'.home_url().'" class="breadcrumb-link">Home</a></li>';
    if(wp_get_post_parent_id($post_ID )){
		echo '<li><a href="'.get_permalink(wp_get_post_parent_id( $post_ID )).'" class="breadcrumb-link">'.get_the_title(wp_get_post_parent_id( $post_ID )).'</a></li>';
    }
	echo '<li><a href="'.get_permalink().'" class="breadcrumb-active inactive">'.get_the_title().'</a></li>';
}

function get_breadcrumb_nonactivepage() {
    echo '<li><a href="'.home_url().'" class="breadcrumb-link">Home</a></li>';
    if(wp_get_post_parent_id($post_ID )){
		echo '<li><a href="'.get_permalink(wp_get_post_parent_id( $post_ID )).'" class="breadcrumb-link inactive">'.get_the_title(wp_get_post_parent_id( $post_ID )).'</a></li>';
    }
	echo '<li><a href="'.get_permalink().'" class="breadcrumb-active inactive">'.get_the_title().'</a></li>';
}

function get_breadcrumb_for_custom_post_type() {

    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);

    // echo parse_url($url, PHP_URL_PATH) .'<br>';
	$explode = explode('/', $path);

	$website = $explode[1];
	$parent = $explode[2];
	$article = $explode[3];

	// echo $explode[2];

    $creatingthelink = 'http://' . $_SERVER['SERVER_NAME'] . '/' . $website . '/' . $parent;

    echo '<li><a href="'.home_url().'" class="breadcrumb-link">Home</a></li>';
    echo '<li><a href="'. $creatingthelink .'" class="breadcrumb-link">'. $parent .'</a></li>';
    if(wp_get_post_parent_id($post_ID )){
		echo '<li><a href="'.get_permalink(wp_get_post_parent_id( $post_ID )).'" class="breadcrumb-link">'.get_the_title(wp_get_post_parent_id( $post_ID )).'</a></li>';
    }
	echo '<li><a href="'.get_permalink().'" class="breadcrumb-active inactive">'.get_the_title().'</a></li>';
}

// in a single groep page to retrieve the parent title

function get_father_title() {
	// retrieve parent id of the page
    if(wp_get_post_parent_id($post_ID )){
    	echo get_the_title(wp_get_post_parent_id($post_ID ));
    }
}

// in a single groep page to retrieve the parent and all the children title with link

function get_father_children() {

	// retrieve parent id of the page
    if(wp_get_post_parent_id($post_ID )){

	// Set up the objects needed
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

	// Filter through all pages and find children
	$all_children = get_page_children( wp_get_post_parent_id($post_ID ), $all_wp_pages );

    	if(!empty($all_children)){
		    echo '<ul class="submenu">';
		    foreach($all_children as $child){
		        echo '<li><a href="'.get_permalink($child->ID).'">'. ucfirst($child->post_title).'</a></li>';
		    }
		    echo '</ul>';
		}   
    }
}

function get_father_children2() {
// determine parent of current page
    if(wp_get_post_parent_id($post_ID )){

		// $children = wp_list_pages("title_li=&child_of=" . wp_get_post_parent_id($post_ID ) . "&echo=0&sort_column=menu_order");

		$children = wp_list_pages(
	    	array(
	    		'title_li' => '',
	    		'child_of' =>  wp_get_post_parent_id($post_ID ),
	    		'echo' => 0,
	    		'sort_column' => 'menu_order',
	    	)
	    );

		if ($children) {
		    echo '<ul class="submenu">';
		        // current child will have class 'current_page_item'
		        echo $children; 
		    echo '</ul>';
		} 
    }
}

// in a parent page to retrieve all the children title with link

function get_children_father() {

	// retrieve parent id of the page
    if(get_the_ID()){

	// Set up the objects needed
	$my_wp_query = new WP_Query();
	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

	// Filter through all pages and find children
	$all_children = get_page_children( get_the_ID(), $all_wp_pages );

    	if(!empty($all_children)){
		    echo '<ul class="submenu">';
		    foreach($all_children as $child){
		        echo '<li><a href="'.get_permalink($child->ID).'">'.ucfirst($child->post_title).'</a></li>';
		    }
		    echo '</ul>';
		}   
    }
}

function get_children_father2() {

		$children = wp_list_pages(
	    	array(
	    		'title_li' => '',
	    		'child_of' =>  get_the_ID(),
	    		'echo' => 0,
	    		'sort_column' => 'menu_order',
	    	)
	    );

		if ($children) {
		    echo '<ul class="submenu">';
		        // current child will have class 'current_page_item'
		        echo $children; 
		    echo '</ul>';
		} 

  
}

/* SHOW ONLY PAGES IN SEARCH RESULTS */

function excludePages($query) {
	if ($query->is_search) {
		$query->set('post_type', 'page');
	}
	return $query; 
}
 
add_filter('pre_get_posts','excludePages');

function shorter_excerpt( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'shorter_excerpt', 999 );

/* TO GET THE FEATURED IMAGE */

add_theme_support('post-thumbnails'); 

// function add_last_nav_item($items) {
//   return $items .= '<li class="bars"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></li>';
// }
// add_filter('wp_nav_menu_items','add_last_nav_item');

// function add_first_nav_item($items) {
//   return '<li class="bars"><div class="bar1"></div><div class="bar2"></div><div class="bar3"></div></li>' . $items ;
// }
// add_filter('wp_nav_menu_items','add_first_nav_item');

// Changing excerpt more

   function new_excerpt_more($more) {
   global $post;

   return '… <a href="'. get_permalink($post->ID) . '">' . 'LEES MEER' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');


// Extend WordPress search to include custom fields
 
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }

    return $join;
}
add_filter('posts_join', 'cf_search_join' );

// Modify the search query with posts_where

function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

// Prevent duplicates

function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

