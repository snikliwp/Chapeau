<?php  
/*
Template Name: Vendor List page
*/
?>
<?php 
	get_header(); 
	the_post();
	$vendorlist_post = $post;
?>

<p>This is the Vendor List page</p>

<p>TBA</p>


<?php 
setup_postdata($vendorlist_post);
the_content();
 ?>



<?php get_footer(); ?>

