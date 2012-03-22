<?php  
/*
Template Name: Education page
*/
?>
<?php 
	get_header(); 
	the_post();
	$education_post = $post;
?>
<article>

	<div class="middle-top">
    </div>

	<div class="middle">

<?php 
setup_postdata($education_post);
the_content();
 ?>

</div>

<?php get_footer(); ?>

