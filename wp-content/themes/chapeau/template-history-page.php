<?php  
/*
Template Name: History page
*/
?>
<?php 
	get_header(); 
	the_post();
	$history_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($history_post);
the_content();
 ?>
</div>



<?php get_footer(); ?>

