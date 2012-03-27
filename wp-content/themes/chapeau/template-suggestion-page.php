<?php  
/*
Template Name: suggestion page
*/
?>
<?php 
	get_header(); 
	the_post();
	$suggestion_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">


<?php 
setup_postdata($suggestion_post);
the_content();
 ?>


</div>
	<div class="middle-bottom">
    </div>
<?php get_footer(); ?>

