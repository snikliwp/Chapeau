<?php  
/*
Template Name: fun page
*/
?>
<?php 
	get_header(); 
	the_post();
	$fun_post = $post;
?>

<p>This is the fun page</p>

<?php 
setup_postdata($fun_post);
the_content();
 ?>



<?php get_footer(); ?>

