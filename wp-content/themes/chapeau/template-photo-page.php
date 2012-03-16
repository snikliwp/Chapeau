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
<div class="photo">

<p>This is the photo page</p>

<?php 
setup_postdata($photo_post);
the_content();
 ?>
</div>
</div>



<?php get_footer(); ?>

