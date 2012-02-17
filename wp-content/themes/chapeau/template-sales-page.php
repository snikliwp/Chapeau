<?php  
/*
Template Name: sales page
*/
?>
<?php 
	get_header(); 
	the_post();
	$sales_post = $post;
?>

<p>This is the sales page</p>

<?php 
setup_postdata($sales_post);
the_content();
 ?>



<?php get_footer(); ?>

