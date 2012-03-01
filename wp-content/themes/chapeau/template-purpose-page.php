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

<p>This is the Purpose page</p>
<p>To support local producers by encouraging the consumption of local produce, baking and crafts while showcasing Pontiac entertainers.</p>
</div>
<?php 
setup_postdata($purpose_post);
the_content();
 ?>



<?php get_footer(); ?>

