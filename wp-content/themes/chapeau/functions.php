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
//register_sidebars(1, array(
//	'id' => 'footerbar1', // ID - id for us
//	'name' => 'Footer Sidebar', // name for users which is displayed in wp-admin
//	'before_widget' => '',
//	'after_widget'  => ''));
//	include 'widgets/sample-widget.php'; // get our new widget from the widgets folder


/* Allows us to create a new type in wordpress that will show in the 
   left menu where pages and posts etc. are listed */
   
   /* we only want this function to be called when Wordpress is ready */
   // the add_action function allows us to call our own function at a specific time
/**************************************************************************************/
//add_action("init", "create_contacts_post_type");
//
//function create_contacts_post_type() {
//	
//	$labels = array(
//		"name" => "Contacts", // plural version of the post name
//		"singular_name" => "Contact",
//  		"add_new_item" => "Add New Contact" // Changes title from add new post to add new contact
//		);
//				
//	register_post_type("contact", array(
//		"labels" => $labels,
//		"public" => true,
//		"supports" => array("title") // default is array("title", "editor")
//		));
//		
//}
/**************************************************************************************/
//add_action("init", "create_promotions_post_type");
//
//function create_promotions_post_type() {
//	
//	$labels = array(
//		"name" => "Promotions", // plural version of the post name
//		"singular_name" => "Promotion",
//  		"add_new_item" => "Add New Promotion" // Changes title from add new post to add new contact
//		);
//				
//	register_post_type("promotion", array(
//		"labels" => $labels,
//		"public" => true,
//		"supports" => array("title") // default is array("title", "editor")
//		));
//}
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
add_action("init", "create_advert_post_type");
function create_advert_post_type() {
	
	$labels = array(
		"name" => "Advertisments", // plural version of the post name
		"singular_name" => "Advertisment",
  		"add_new_item" => "Add a new advertisment" // Changes title from add new post to add new contact
		);
				
	register_post_type("advert", array(
		"labels" => $labels,
		"public" => true,
		"supports" => array("advert") // default is array("title", "editor")
		));
}
