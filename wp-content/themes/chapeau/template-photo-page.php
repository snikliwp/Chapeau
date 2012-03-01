<?php  
/*
Template Name: photo page
*/
?>
<?php 
	get_header(); 
	the_post();
	$photo_post = $post;
?>
<article>
	<div class="middle">

<p>This is the photo page</p>
</div>
<?php 
setup_postdata($photo_post);
the_content();
 ?>



<?php get_footer(); ?>

