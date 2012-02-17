<?php  
/*
Template Name: market page
*/
?>
<?php 
	get_header(); 
	the_post();
	$market_post = $post;
?>
<p>This is the market page</p>


<?php 
setup_postdata($market_post);
the_content();
 ?>



<?php get_footer(); ?>

