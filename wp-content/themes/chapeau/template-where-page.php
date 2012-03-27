<?php  
/*
Template Name: where page
*/
?>
<?php 
	get_header(); 
	the_post();
	$where_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">
<?php 
setup_postdata($where_post);
the_content();
 ?>

</div>
	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

