<?php  
/*
Template Name: producers page
*/
?>
<?php 
	get_header(); 
	the_post();
	$producers_post = $post;
?>

<p>This is the producers page</p>
<article>
	<div class="middle">

<?php 
setup_postdata($producers_post);
the_content();
 ?>
</div>



<?php get_footer(); ?>

