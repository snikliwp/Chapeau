<?php 
/* Helper functions to reduce typing */

function sd () {
	bloginfo('stylesheet_directory');
}

function url () {
	bloginfo('url');
	
}

/*Register a navigation menu into wp admin */
/**************************************************************************************/
 register_nav_menus(
	array(
		// ID => Wp Admin String
		'primary' => 'Primary Navigation',
//		'secondary' => 'Secondary Navigation',
//		'tertiary' => 'Tertiary Navigation'
	)
);


/**************************************************************************************/
//register_sidebar(1, array(
//	'id' => 'promo', // ID - id for us
//	'name' => 'Promotions Sidebar', // name for users which is displayed in wp-admin
//	'before_widget' => '',
//	'after_widget'  => ''));

/**************************************************************************************/
register_sidebars(1, array(
	'id' => 'eventsbar', // ID - id for us
	'name' => 'Events Sidebar', // name for users which is displayed in wp-admin
	'before_widget' => '',
	'after_widget'  => ''));
//	include 'widgets/sample-widget.php'; // get our new widget from the widgets folder


// Allows us to create a new type in wordpress that will show in the 
//   left menu where pages and posts etc. are listed 
//   
//    we only want this function to be called when Wordpress is ready 
//    the add_action function allows us to call our own function at a specific time
/**************************************************************************************/
//add_action("init", "create_events_post_type");
//
//function create_events_post_type() {
//	
//	$labels = array(
//		"name" => "Events", // plural version of the post name
//		"singular_name" => "Event",
//  		"add_new_item" => "Add New Event" // Changes title from add new post to add new contact
//		);
//				
//	register_post_type("event", array(
//		"labels" => $labels,
//		"public" => true,
//		"supports" => array("title", "editor", "custom-fields"), // default is array("title", "editor")
//		"taxonomies" => array('category', 'post_tag')
//		));
//		
//}
/**************************************************************************************/
add_action("init", "create_post_type");

function create_post_type() {
	
	$labels = array(
		"name" => "Advertisments", // plural version of the post name
		"singular_name" => "Advertisment",
  		"add_new_item" => "Add New Advertisment" // Changes title from add new post to add new contact
		);
				
	register_post_type("advertisment", array(
		"labels" => $labels,
		"public" => true,
		"has_archive" => true,
		"rewrite" => array('slug' => 'adverts'),
		"supports" => array("title", "editor"), // default is array("title", "editor")
		"taxonomies" => array('category', 'post_tag')
		));
}
/**************************************************************************************/
add_action("init", "create_recipes_post_type");
function create_recipes_post_type() {
	
	$labels = array(
		"name" => "Recipes", // plural version of the post name
		"singular_name" => "Recipe",
  		"add_new_item" => "Add New Recipe" // Changes title from add new post to add new contact
		);
				
	register_post_type("recipe", array(
		"labels" => $labels,
		"public" => true,
		"supports" => array("title") // default is array("title", "editor")
		));
}
/**************************************************************************************/
add_action("init", "create_producer_post_type");
function create_producer_post_type() {
	
	$labels = array(
		"name" => "Producers", // plural version of the post name
		"singular_name" => "Producer",
  		"add_new_item" => "Add a new Producer" // Changes title from add new post to add new contact
		);
				
	register_post_type("producer", array(
		"labels" => $labels,
		"public" => true,
		"supports" => array("title"), // default is array("title", "editor")
		"taxonomies" => array("category", "post_tag")
		));
}
