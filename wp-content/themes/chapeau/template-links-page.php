<?php  
/*
Template Name: links page
*/
?>
<?php 
	get_header(); 
	the_post();
	$links_post = $post;
?>

<p>This is the links page</p>

<?php 
setup_postdata($links_post);
the_content();
 ?>



<?php get_footer(); ?>

