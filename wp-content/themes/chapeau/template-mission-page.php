<?php  
/*
Template Name: Mission Statement page
*/
?>
<?php 
	get_header(); 
	the_post();
	$mission_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($mission_post);
the_content();
 ?>
</div>

	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>

