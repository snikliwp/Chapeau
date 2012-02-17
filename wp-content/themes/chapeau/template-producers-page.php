<?php  
/*
Template Name: producers page
*/
?>
<?php 
	get_header(); 
	the_post();
	$producers_post = $post;
?>

<p>This is the producers page</p>

<?php 
setup_postdata($producers_post);
the_content();
 ?>



<?php get_footer(); ?>

