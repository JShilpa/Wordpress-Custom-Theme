<?php

/**
 * wp_enqueue_style(string $handle, mixed $src, array $deps, mixed $ver, string $media)
 * to enque file, wordpress by default include .css at the bottom
 * src: source of the file.Wordpress needs absolute path to the file. Use function
 * any array dependency out stylesheet has.
 * version number of theme
 * media. support on which platform
 */

 /**
  * The only difference between wp-enque_style and wp_enque-script is last parameter, where in wp_enque_script it takes a boolean parameter
  * true to print footer at the bottom and by default its false;
 */


function awesome_script_enque()
{
  wp_enqueue_style('customstyle', get_template_directory_uri().'/css/awesome.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customscript', get_template_directory_uri.'/js/awesome.js', array(), '1.0.0', true);
}

/*
 * add_action( $hook, $function_to_add, $priority, $accepted_args );
 * wp_enque_scripts identify both wp_enque-style and wp_enque_scripts
*/
add_action('wp_enqueue_scripts',awesome_script_enque);


/**
 * Here we are adding menu support to theme in appearance section. To activate menu feature, we add add_theme_support('menus');
 * We can add action at init or after_setup_theme.
 * In awesome menu function, we are calling register_nav_menu for a reason.
 * Say, we want to have custom menus on each pages.
 * In register_nav_menu we specify theme location and second parameter is menu name which is visible in dashboard.
*/
function awesome_menu()
{
  register_nav_menu('primary','Header Menu');
  register_nav_menu('footer_secondary_menu', 'Footer Menu');
  add_theme_support('menus');
}
add_action('init', awesome_menu);

//Adding custom editing in dashboard
add_theme_support( 'custom-background');

//Adding unique images to respective blog.
add_theme_support('post-thumbnails');

//each post has different post format type like one one post can have video, one can have image.
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video') );

//here to add sidebar, we need to include widgets in apperance.
function awesome_widget_setup()
{
  register_sidebar( array (
  'name'          => 'Sidebar',
	'id'            => 'unique-sidebar-1',
	'description'   => 'Widget Sidebar',
  'class'         => 'custom',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' )
);
}
//this will initialize our sidebar in widgets section in appereance.
add_action('widgets_init', 'awesome_widget_setup');

//givomh html5 support to traditional get_search_form of wordpress.
add_theme_support('html5', array(search-form));

function awesome_custom_post_type (){

	$labels = array(
		'name' => 'Reports',
		'singular_name' => 'Reports',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');
