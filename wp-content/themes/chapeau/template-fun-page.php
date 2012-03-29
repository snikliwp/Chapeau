<?php  
/*
Template Name: fun page
*/
?>
<?php 
	get_header(); 
	the_post();
	$fun_post = $post;
?>
<article>

	<div class="middle-top">
    </div>

	<div class="middle">


<?php 
setup_postdata($fun_post);
the_content();
 ?>

</div>


	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

