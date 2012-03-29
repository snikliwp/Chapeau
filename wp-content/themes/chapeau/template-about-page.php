<?php  
/*
Template Name: About Us page
*/
?>
<?php 
	get_header(); 
	the_post();
	$about_post = $post;
?>

<article>

	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($about_post);
the_content();
 ?>
</div>

	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>

