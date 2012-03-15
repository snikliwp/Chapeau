<?php  
/*
Template Name: Purpose page
*/
?>
<?php 
	get_header(); 
	the_post();
	$purpose_post = $post;
?>
<article>
	<div class="middle">


<?php 
setup_postdata($purpose_post);
the_content();
 ?>

</div>

<?php get_footer(); ?>

