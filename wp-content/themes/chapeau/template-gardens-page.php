<?php  
/*
Template Name: Gardens page
*/
?>
<?php 
	get_header(); 
	the_post();
	$gardens_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">

<?php 
setup_postdata($gardens_post);
the_content();
 ?>

</div>


<?php get_footer(); ?>

