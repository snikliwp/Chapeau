<?php  
/*
Template Name: Home page
*/
?>
<?php 
	get_header(); 
	the_post();
	$home_post = $post;
?>
<h2>Home Page Template</h2>



<?php 
setup_postdata($home_post);
the_content();
 ?>



<?php get_footer(); ?>

