<?php  
/*
Template Name: Goals and Objectives page
*/
?>
<?php 
	get_header(); 
	the_post();
	$goals_post = $post;
?>
<article>
	<div class="middle">

<?php 
setup_postdata($goals_post);
the_content();
 ?>
 
</div>



<?php get_footer(); ?>

