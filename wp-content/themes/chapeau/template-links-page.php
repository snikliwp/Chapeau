<?php  
/*
Template Name: links page
*/
?>
<?php 
	get_header(); 
	the_post();
	$links_post = $post;
?>
<article>
	<div class="middle-top">
    </div>

	<div class="middle">

<!--<p>This is the links page</p>-->
<?php 
setup_postdata($links_post);
the_content();
 ?>
</div>
	<div class="middle-bottom">
    </div>

<?php get_footer(); ?>

