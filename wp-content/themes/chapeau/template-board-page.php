<?php  
/*
Template Name: Board page
*/
?>
<?php 
	get_header(); 
	the_post();
	$board_post = $post;
?>
<article>

	<div class="middle-top">
    </div>

	<div class="middle">

<?php 
setup_postdata($board_post);
the_content();
 ?>
 
</div>



<?php get_footer(); ?>

